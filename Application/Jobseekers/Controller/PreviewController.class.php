<?php
	
namespace Jobseekers\Controller;
use Think\Controller;

class PreviewController extends Controller {
	//预览简历
    public function index(){

       	$id = session('id');
    	
    	//简历基本信息
    	$jobseekers_info = M('jobseekers')->where("id =$id")->select();
        $this->assign('jobseekers_info', $jobseekers_info);
        
        //简历工作经历
    	$experience_info = M('resume_experience')->where("id =$id")->select();
        $this->assign('experience_info', $experience_info);
        
        //简历教育经历
    	$education_info = M('resume_education')->where("id =$id")->select();
        $this->assign('education_info', $education_info);
		
        
        //简历求职意向
        $describe_info = M('jobseekers_describe')->where("id =$id")->select();
        $this->assign('describe_info', $describe_info);
		
		//简历教育经历
    	$prefered_info = M('resume_prefered')->where("id =$id")->select();
        $this->assign('prefered_info', $prefered_info);
        
        //输出
        $this->display("index"); 
      
    }
    
}