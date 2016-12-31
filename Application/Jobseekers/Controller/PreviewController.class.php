<?php
	
namespace Jobseekers\Controller;
use Think\Controller;

class PreviewController extends Controller {
	//预览简历
    public function index(){

       	$uid = 1;
    	
    	//简历基本信息
    	$resumes_basic = M('resumes_basic')->where("uid =$uid")->select();
        $this->assign('resumes_basic', $resumes_basic);
        
        //简历工作经历
    	$resumes_jobexp = M('resumes_jobexp')->where("uid =$uid")->select();
        $this->assign('resumes_jobexp', $resumes_jobexp);
        
        //简历教育经历
    	$resumes_eduexp = M('resumes_eduexp')->where("uid =$uid")->select();
        $this->assign('resumes_eduexp', $resumes_eduexp);
        
        //简历求职意向
        $resumes_career = M('resumes_career')->where("uid =$uid")->select();
        $this->assign('resumes_career', $resumes_career);
        
        //输出
        $this->display(); 
      
    }
    
}