<?php
namespace Enterprise\Controller;
use Think\Controller;

class SeekerController extends Controller{
    public function resume(){
		$id=session('tid');
           
		$user_info= M('enterprise')->where("id =$id")->select();
      
		$this->assign('user_info',$user_info);
	
        $this->display();
    }
}