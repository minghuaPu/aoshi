<?php
namespace Common\Controller;
use Think\Controller;
use Think\Auth;

class AuthController extends Controller{

	protected function _initialize() {

		 $userinfo=session('auth');
         
         if (!$userinfo) {
         	$this->error('非法操作！',U('Login/index'));
         }
	}

}