<?php
namespace Jobseekers\Controller;
use Think\Controller;
use Think\Verify;
use Common\Controller\JobseekersController;

/**
 * jobseekers登录用的控制器print_r($_SERVER);exit();
 */
class LoginController extends Controller {
	public function index() {
		if(IS_POST) {
			//验证码校验
			$Verify = new\ Think\ Verify();
			if(!$Verify -> check(I('verify_val'))) {
				$this -> error('验证码错误！', U('Login/login'));
			}
			$pwd = md5($_POST['password']);
			$posi = session('position');
			$log_data['username'] = $_POST[username];
			$log_data['password'] = $pwd;
			$log_sql = D('jobseekers') -> where($log_data) -> select();
			if($log_sql) {
				$log_id = "SELECT uid FROM jobseekers WHERE username='".$_POST[username]."'";
				$log_info = D("jobseekers") -> query($log_id);
				session('uid', $log_info[0][uid]);
				session('user_login_status', '1');
				//验证用户是否从职位详情页面跳转过来
				if($posi) {
					$this -> success('登录成功！', U('Home/Index/jobdetail', array('id' => $posi)));
				} else {
					$this -> success('登录成功！', '../Index/index');
				}
			} else {
				$json_str = array('status' => 0, 'msg' => '用户名或密码不正确！');
				$this -> error('用户名或密码不正确！', U('Login/login'));
			}
		} else {
			$this -> display("login");
		}
	}
    /*-----------------退出登录------------------------*/
    public function log_out() {
		// session退出
		header("Content-type: text/html; charset=utf-8");
		session('user_login_status', null);
		session('uid', null);
		$this -> success('退出成功！', U('Home/Index/index'));
	}
	/*-----------------注册--------------------------*/
	public function register() {
		if(IS_POST) {
			//验证码校验
			$Verify = new\Think\Verify();
			if(!$Verify -> check(I('verify_val'))) {
				$this -> error('验证码错误！', U('Login/register'));
			}
			$username = I('username');
			$password = md5(I('password'));
			$job_id = I('befor');
			$select_sql = D('jobseekers') -> where("username='$username'") -> select();
			// 结果集转换数组??
			//$info= mysql_fetch_row($query_s);
			if(!empty($select_sql)) {
				$this -> error('该用户已经存在！', U('Login/register'));
			} else {
				/*$insert_sql="insert into jobseekers (username,password)  values('$username','$password')";
				 mysql_query($insert_sql);*/
				$reg_data['username'] = $username;
				$reg_data['password'] = $password;
				$reg_data['create_time'] = date('Y-m-d  H:i:s');
				M('jobseekers') -> add($reg_data);
				$this -> success('注册成功！', 'login'); //跳转的方法	
			}
		} else {
			$this -> display();
		}
	}
	/*-------------------验证码-----------------------------*/
	public function get_verify() {
		ob_clean(); //因为缓存所以验证码不显示
		$Verify = new\Think\Verify();
		$Verify -> useCurve = false;
		$Verify -> useNoise = false;
		$Verify -> entry();
	}
	/*-----------------邮箱验证---------------------------*/
}