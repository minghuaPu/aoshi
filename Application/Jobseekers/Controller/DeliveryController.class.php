<?php 
namespace Jobseekers\Controller;
use Think\Controller;
 
class DeliveryController extends Controller {


    public function index(){
		
		$job_id = 24;
		$jobseekers_id=session('uid');
    	$de_info = M('job')->where("uid =$job_id")->select();
        $this->assign('de_info',$de_info);
		$this->display(); 
		}
	 public function send(){
		
		 
		/* $jobseeker_id=1;
		 $have = M('resume_delivery')->where("jobseeker_id =$jobseeker_id")->select();
		 if( $have.length<5)
		 {
		 $de_data['job_id']= I('uid'); 
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

		 public function delivery(){
		
		$job_id=I('id');
		$jobseeker_id=4
		$datas['job_id']=$job_id;
		$datas['jobseeker_id']=$jobseeker_id;		
		$datas['delivery_time']=date('Y-m-d  h:n:s');;

		if($job_id){
			
			
                                  $jobseekers_info= M('resume_delivery')->field("resume_delivery.delivery_time")->where("job_id =$job_id and jobseeker_id = $jobseeker_id")->select();//简历基本信

			if($jobseekers_info){
				//当用户投过这职位时
				echo '用户投过这职位';
				}
			else{
				echo '用户no投过这职位';
				}	
		else{
			
			echo '请登录！'			}	
		
		}
	
}
?>