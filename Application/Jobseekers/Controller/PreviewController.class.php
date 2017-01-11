<?php
	
namespace Jobseekers\Controller;
use Common\Controller\ResumeController;
use Think\Controller;

class PreviewController extends ResumeController {
	//预览简历
    public function index(){

       	$uid = session('uid');
    	$jobseekers_info = M('jobseekers')->field("jobseekers.photo")->where("uid =$uid")->select();
        $this->assign('jobseekers_info', $jobseekers_info);
		
    	//简历基本信息
    	$basic_info = M('resume_basic')->where("uid =$uid")->select();
        $this->assign('basic_info', $basic_info);
       
        //简历工作经历
    	$experience_info = M('resume_experience')->where("uid =$uid")->select();
        $this->assign('experience_info', $experience_info);
        
        //简历教育经历
    	$education_info = M('resume_education')->where("uid =$uid")->select();
        $this->assign('education_info', $education_info);
		
        
        //简历求职意向
        $describe_info = M('jobseekers_describe')->where("uid =$uid")->select();
        $this->assign('describe_info', $describe_info);
		
		//简历教育经历
    	$prefered_info = M('resume_prefered')->where("uid =$uid")->select();
        $this->assign('prefered_info', $prefered_info);
        
        //输出
        $this->display("index"); 
      
    }
    
}