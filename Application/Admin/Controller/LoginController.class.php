<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;


/**
 * 总后台登录用的控制器
 */
class LoginController extends Controller {

    public function index()
    {
      
       if (IS_POST) {
          //第一步：验证码校验
           $Verify = new \Think\Verify();
           if (!$Verify->check(I('verify_val'))) {
              $this->error('验证码错误！',U('Login/index'));
           }

          //第二步：匹配是否有用户名和对应的密码
          $user_name=I('user_name');
          $user_pwd=MD5(I('user_pwd'));
         
          $admin=D('admin');
          $u_info=$admin->where("user_name='$user_name' and  user_pwd='$user_pwd' ")->find();//find 只查询一条  LIMIT 1 
          
          if (empty($u_info)) {
             $this->error('用户名或密码错误！',U('Login/index'));
          }

          //第三步：登录成功，session记录
          
          session('auth',$u_info);
          $this->success('登录成功！',U('Index/index'));
       }else{
         $this->display();

       }
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

  // 单独出来验证码
    public function get_verify()
    {
      $Verify = new \Think\Verify();
      $Verify->useCurve=false;
      $Verify->useNoise=false;

       $Verify->entry();
    } 


    public function logout()
    {
        session('auth',null);

        $this->success('退出成功！',U('Login/index'));
    }

}