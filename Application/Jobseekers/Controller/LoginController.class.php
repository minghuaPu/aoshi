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
		// cookie版登录
		include("../Conf/init.php");                
		if (IS_POST) { 
			//验证码校验
			   $Verify = new \Think\Verify();
			   if (!$Verify->check(I('verify_val'))) {
				  $this->error('验证码错误！',U('Login/login'));
			   }
		
			 //查询用户表，加上用户名和密码两个条件，如果两个条件和数据库一样就登录成功
			 $pwd=md5($_POST['password']);
		
			 /*$sel_sql="select id from jobseekers where username='$_POST[username]' and password='$pwd' " ;
			 $res_query=mysql_query($sel_sql);
			 $info=mysql_fetch_assoc($res_query);*/
			 // 如果info有值条件一样，没有的话就是
			 $log_data['username']=$_POST[username];
			 $log_data['password']=$pwd;
		
			$log_sql=D('jobseekers')->where($log_data)->select();
			if ($log_sql) {
				$json_str=array('status'=>1,'msg'=>'登录成功');
				// 记住我，7天免登录 
				//setcookie("user_login_status",1,time()+(3600*24*7) );//给cookie设置对应的键值，没有第三个参数：时间，默认：是关闭会话离开过期
				cookie('user_login_status','1',time()+(3600*24*7));
				cookie('id','1',time()+(3600*24*7));
				
				$this->success('登录成功！','../Index/index');//跳转的方法
			}else{
				$json_str=array('status'=>0,'msg'=>'用户名或密码不正确！');
				//cookie('user_login_status','0');
				//setcookie("user_login_status",0);//给cookie设置对应的键值
				
				$this->error('用户名或密码不正确！',U('Login/login'));
			}
		
			
			 echo json_encode($json_str);
		}
		else{
			$this->display();
			}
	}
	 public function log_out(){
		 // cookie退出

		header("Content-type: text/html; charset=utf-8");                 
	
		// cookie登录怎么退出
		// unset($_COOKIE['user_login_status']);
		cookie('user_login_status',null);
		//setcookie('user_login_status');
		
		$this->success('退出成功！','login');//跳转的方法

		 }
	public function register(){
			include_once "../Conf/init.php";

			if (IS_POST) {
	
				$username=I('username');
				$password=md5(I('password'));
				 
				// 添加数据的语法
				// insert into 表名 (列名1,列名2) values (列名1的值，列名2的值);
				
			// 怎么防止用户名重复?
				// 如果有记录则不能注册
				//$select_sql="select id from jobseekers where username='$username'";
				//$query_s= mysql_query($select_sql);
				 $select_sql=D('jobseekers')->where("username='$username'")->select();
				 
				 
				
				 // 结果集转换数组??
				 //$info= mysql_fetch_row($query_s);
				
				if (!empty($select_sql)) {		
					$this->error('该用户已经存在！',U('Login/register'));
				}else{
			
					 /*$insert_sql="insert into jobseekers (username,password)  values('$username','$password')";
					 mysql_query($insert_sql);*/
					 $reg_data['username']=$username;
					 $reg_data['password']=$password;
					 M('jobseekers')->add($reg_data);	
					 $this->success('注册成功！','login');//跳转的方法
				}
			}
			else{
	
				$this->display();
			}
		
	 
		} 
	 public function get_verify()
    {
		ob_clean();//因为缓存所以验证码不显示
      $Verify = new \Think\Verify();
      $Verify->useCurve=false;
      $Verify->useNoise=false;
	$Verify->entry();
    } 	
		
	
	
}