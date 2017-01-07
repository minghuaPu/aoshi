<?php
namespace Common\Controller;
use Think\Controller;
use Think\Auth;

class ResumeController extends Controller{

	protected function _initialize() {

		 $userinfo=session('id');
       
         if (!$userinfo) {
         	$this->error('请先登录！',U('Login/login'));
         }
	}

}