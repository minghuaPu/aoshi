<?php
namespace Common\Controller;
use Think\Controller;
use Think\Auth;

class JobseekersController extends Controller{

	protected function _initialize() {
//阻止企业端进入求职端
		 if (session('eid')){
			 $this->error('非法操作！',U('Home/Index/index'));
			 }
		 else{}		 
	}

}