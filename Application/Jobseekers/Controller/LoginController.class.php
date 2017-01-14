<?php
namespace Jobseekers\Controller;
use Think\Controller;
use Think\Verify;


/**
 * jobseekers登录用的控制器print_r($_SERVER);exit();
 */
class LoginController extends Controller {

    public function index()
    {           
			
		if (IS_POST) { 
				//验证码校验
			   $Verify = new \Think\Verify();
			   if (!$Verify->check(I('verify_val'))) {
				  $this->error('验证码错误！',U('Login/login'));
			   }			
		
			 //查询用户表，加上用户名和密码两个条件，如果两个条件和数据库一样就登录成功
			 $pwd=md5($_POST['password']);
			$job_id=I('befor');
			 // 如果info有值条件一样，没有的话就是
			 $log_data['username']=$_POST[username];
			 $log_data['password']=$pwd;
			 $log_sql=D('jobseekers')->where($log_data)->select();
			if ($log_sql) {
				$json_str=array('status'=>1,'msg'=>'登录成功');
				// 记住我，7天免登录 
				$log_id="SELECT uid FROM jobseekers WHERE username='". $_POST[username]."'";
				$log_info=D("jobseekers")->query($log_id);
				
				session('uid',$log_info[0][uid]);
				session('user_login_status','1');
				
				if($job_id){
					$this->success('登录成功！',$job_id);//跳转的方法
					}
				else{	
					$this->success('登录成功！','../Index/index');//跳转的方法
				}
			}else{ 
				$json_str=array('status'=>0,'msg'=>'用户名或密码不正确！');
				
				$this->error('用户名或密码不正确！',U('Login/login'));
			}
		
			
			// echo json_encode($json_str);
		}
		else{
			if(I('job_id')){
			 $this->assign('info',$_SERVER[HTTP_REFERER]);
			}
			$this->display("login");
			}
	}
		 /*-----------------退出登录---------------------------*/
	
	 public function log_out(){
		 // session退出

		header("Content-type: text/html; charset=utf-8");                 
	
		// session登录怎么退出
		
		session('user_login_status',null);
		$this->success('退出成功！',U('Home/Index/index'));
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