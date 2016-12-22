<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 总后台登录用的控制器
 */
class LoginController extends Controller {

    public function login()
    {
        $this->display();
    }
     

    public function register()
    {

        if (IS_POST) {//如果是表单POST提交， IS_GET
           
           $admin=D('Admin');

           $data['user_name']=I('user_name');
           $data['user_pwd']=I('user_pwd');
           $data['user_pwd_two']=I('user_pwd_two');

           $data=$admin->create();//用来在添加之前对表单参数进行校验和自动完成
           if (! $data) {
               echo $admin->getError();
           }else{


                $uid=$admin->add($data);


                session('auth',array('user_name'=>$data['user_name'],'uid'=>$uid));
                
                $this->success('注册成功！',U('Index/index'));
           }

        }else{

            $this->display();
        }
    }


    public function logout()
    {
        
    }

}