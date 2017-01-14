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
            // 新建enterprise存储账号密码
            $user=D('Enterprise');
            $data['user_name']=I('user_name');
            $data['user_pwd']=I('user_pwd_confirm');
            $user_name=I('user_name');
            $data['add_time']= date('Y-m-d');

            $data=$user->create();

            if (!$data){
                echo $user->getError();
            }else{
                // 添加账号密码到数据库
                $uid=$user->add($data);
                session('auth',array('user_name'=>$data['user_name'],'uid'=>$uid));

                // 通过用户名获取刚注册账号的id
                $tid=$user->where("user_name='$user_name'")->find();
                $enter_id = $tid['id'];

                // 以id为主键，添加到enterprise_info表
                $enter_data["id"]=$enter_id;
                $enter_data['auditing']= 0;
                $ent=D('enterprise_info');
                $c_ent=$ent->create($enter_data);
                if (!$c_ent) {
                    echo $ent->getError();
                }else{
                    $ent->add($enter_data);
                }

                $this->success('注册成功！',U('Login/login'));
            }

        }else{
            $this->display();
        }
    }
    public function check(){
        $name=I("name");

        $enterprise=D('enterprise');

        $name_info=$enterprise->where("user_name='$name'")->find();

        if (empty($name_info)) {
            $this->ajaxReturn(array('msg'=>'没有这个用户','status'=>1),'json');
        }else{
            $this->ajaxReturn(array('msg'=>'该用户名已存在！','status'=>0),'json');
        }
    }

    public function logout(){
        session('auth',null);
        session('eid',null);

        $this->success('退出成功！',U('Login/login'));
    }

    // 获取验证码
    public function get_verify()
    {
        $Verify = new \Think\Verify();
        $Verify->useCurve=false;
//        $Verify->useNoise=false;
        $Verify->entry();
    }
}