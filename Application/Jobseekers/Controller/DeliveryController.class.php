<?php 
namespace Jobseekers\Controller;
use Think\Controller;
 
class DeliveryController extends Controller {


    public function index(){
		
		$job_id = 24;
		$jobseekers_id=session('id');
    	$de_info = M('job')->where("id =$job_id")->select();
        $this->assign('de_info',$de_info);
		$this->display(); 
		}
	 public function send(){
		
		 
		/* $jobseeker_id=1;
		 $have = M('resume_delivery')->where("jobseeker_id =$jobseeker_id")->select();
		 if( $have.length<5)
		 {
		 $de_data['job_id']= I('id'); 
		 $de_data['jobseeker_id']= $jobseeker_id; 
		 $de_data['delivery_time']=date('Y-m-d  h:n:s'); 
		 $de_data['delivery_job']= I('delivery_job'); 
		 $de_data['jobseeker_degree']= '硕士'; 
		 
		 M('resume_delivery')->add($de_data);
		 echo true;
		 }
		 else{
			 echo false;	
			 }*/
		 }	
}
?>