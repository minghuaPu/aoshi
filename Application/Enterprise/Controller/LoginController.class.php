<?php

namespace Enterprise\Controller;
use Think\Controller;
use Think\Verify;
/**
 * Created by PhpStorm.
 * User: iphone
 * 企业端的登录注册
 * Date: 2016/12/22
 * Time: 14:30
 */
class LoginController extends Controller {
    public function login(){
        if (IS_POST) {
            //第一步：验证码校验
        $Verify = new \Think\Verify();
        if (!$Verify->check(I('verify_val'))) {
            $this->error('验证码错误！',U('Login/login'));
        }

        //第二步：匹配是否有用户名和对应的密码
        $user_name=I('user_name');
        $user_pwd=MD5(I('user_pwd'));

        $user=M('enterprise');
        $u_info=$user->where("user_name='$user_name' and  user_pwd='$user_pwd' ")->find();//find 只查询一条  LIMIT 1//

        $tid=$user->field("id")->where("user_name='$user_name' and  user_pwd='$user_pwd' ")->find();
        $enter_id = $tid['id'];

        if (empty($u_info)) {
            $this->error('用户名或密码错误！',U('Login/login'));
        }

        //第三步：登录成功，session记录

        session('auth',$u_info);
        session('eid',$enter_id);
        $this->success('登录成功！',U('Seeker/resume'));
        }else{
            $this->display();
        }
    }
    public function register(){
        if (IS_POST){

            $user=D('Enterprise');

            $data['user_name']=I('user_name');
            $data['user_pwd']=I('user_pwd_confirm');

            $data=$user->create();

            if (!$data){
                echo $user->getError();
            }else{
                $uid=$user->add($data);

                session('auth',array('user_name'=>$data['user_name'],'uid'=>$uid));

                $this->success('注册成功！',U('login/login'));
            }

        }else{
            $this->display();
        }
    }
    public function logout(){
        session('auth',null);
        session('eid',null);

        $this->success('退出成功！',U('Login/login'));
    }
    public function get_verify()
    {
        $Verify = new \Think\Verify();
        $Verify->useCurve=true;
        $Verify->useNoise=true;

        $Verify->entry();
    }
}