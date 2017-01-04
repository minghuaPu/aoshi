<?php
	
namespace Jobseekers\Controller;
use Think\Controller;
use Think\Verify;

class CodeController extends Controller {
	//预览简历
    public function index(){
    	$Verify = new \Think\Verify();
		$Verify->entry();
		
    }
}
?>