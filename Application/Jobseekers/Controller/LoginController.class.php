<?php
namespace Jobseekers\Controller;
use Think\Controller;
use Think\Verify;


/**
 * jobseekers登录用的控制器
 */
class LoginController extends Controller {

    public function index()
    {
		// session版登录
		//include("../Conf/init.php");                
		if (IS_POST) { 
			//验证码校验
			   $Verify = new \Think\Verify();
			   if (!$Verify->check(I('verify_val'))) {
				  $this->error('验证码错误！',U('Login/login'));
			   }
		
			 //查询用户表，加上用户名和密码两个条件，如果两个条件和数据库一样就登录成功
			 $pwd=md5($_POST['password']);
		
			 // 如果info有值条件一样，没有的话就是
			 $log_data['username']=$_POST[username];
			 $log_data['password']=$pwd;
		
			$log_sql=D('jobseekers')->where($log_data)->select();
			if ($log_sql) {
				$json_str=array('status'=>1,'msg'=>'登录成功');
				// 记住我，7天免登录 
				$log_id="SELECT id FROM jobseekers WHERE username='". $_POST[username]."'";
				$log_info=D("jobseekers")->query($log_id);
				
				session('user_login_status','1',time()+(3600*24*7));
				session('id',$log_info[0][id],time()+(3600*24*7));
				
			
				
				$this->success('登录成功！','../Index/index');//跳转的方法
			}else{ 
				$json_str=array('status'=>0,'msg'=>'用户名或密码不正确！');
				
				$this->error('用户名或密码不正确！',U('Login/login'));
			}
		
			
			 echo json_encode($json_str);
		}
		else{
			$this->display();
			}
	}
		 /*-----------------退出登录---------------------------*/
	
	 public function log_out(){
		 // session退出

		header("Content-type: text/html; charset=utf-8");                 
	
		// session登录怎么退出
		
		session('user_login_status',null);
		session('id',null);
		
		$this->success('退出成功！','login');//跳转的方法

		 }
		 
		 
		 /*-----------------注册---------------------------*/
	public function register(){
			include_once "../Conf/init.php";

			if (IS_POST) {
				//验证码校验
			   $Verify = new \Think\Verify();
			   if (!$Verify->check(I('verify_val'))) {
				  $this->error('验证码错误！',U('Login/register'));
			   }
			   
				$username=I('username');
				$password=md5(I('password'));
				$e_mail=I('e_mail');
	
				 $select_sql=D('jobseekers')->where("username='$username'")->select();
	
				 // 结果集转换数组??
				 //$info= mysql_fetch_row($query_s);
				
				if (!empty($select_sql)) {		
					$this->error('该用户已经存在！',U('Login/register'));
				}
				else{
					
					 /*$insert_sql="insert into jobseekers (username,password)  values('$username','$password')";
					 mysql_query($insert_sql);*/
					 $reg_data['username']=$username;
					 $reg_data['password']=$password;
					 $reg_data['e_mail']=$e_mail;
					 $reg_data['create_time']=date('Y-m-d  h:n:s'); 
					 
					 M('jobseekers')->add($reg_data);			
						 
					 $this->success('注册成功！','login');//跳转的方法				
					}
				} 
		else{
			$this->display();
			}
	}
		
		/*-------------------验证码-----------------------------*/
	 public function get_verify()
		{
			ob_clean();//因为缓存所以验证码不显示
			  $Verify = new \Think\Verify();
			  $Verify->useCurve=false;
			  $Verify->useNoise=false;
			  $Verify->entry();
		} 	
		 /*-----------------邮箱验证---------------------------*/
		
    
}