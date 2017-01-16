<?php
namespace Common\Controller;
use Think\Controller;
use Think\Auth;

class ResumeController extends Controller{

	protected function _initialize() {

		 $usersession=session('uid');
		 $userinfo=session('user_login_status');
		 
		 
         if (!$userinfo && !$usersession) {
			 $this->error('非法操作！',U('Login/login'));
			
         }
	}

}