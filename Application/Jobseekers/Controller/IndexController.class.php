<?php
namespace Jobseekers\Controller;
use Think\Controller;
use Common\Controller\ResumeController;
use Common\Controller\JobseekersController;

class IndexController extends ResumeController {
    public function index() {
		//当前登录用户id
		$uid=session('uid');
		//简历基本信息	
		$jobseekers_info=M('jobseekers')->field("photo")->where("uid =$uid")->select();

        $this->assign('jobseekers_info',$jobseekers_info);
	
        $this->display();
    }  
    //负责简历信息的查询功能
	public function select() {
		//当前用户主键
		$uid=session('uid');	
		//用户基本信息	
		$jobseekers_info=M('jobseekers')->field("photo")->where("uid =$uid")->select();
		//简历基本信息
		$basic_info=M('resume_basic')->where("uid =$uid")->select();
		//简历工作经历
		$experience_info=M('resume_experience')->where("uid =$uid")->select();
		//简历教育经历
		$education_info=M('resume_education')->where("uid =$uid")->select(); 
		//简历自我描述
		$describe_info=M('jobseekers_describe')->where("uid =$uid")->select(); 
		//简历求职意向
		$prefered_info=M('resume_prefered')->where("uid =$uid")->select(); 
		//输出简历信息
		echo json_encode(
   			array(
		    	'user'=>$jobseekers_info,
				'basic'=>$basic_info,
		    	'experience'=>$experience_info,
		    	'education'=>$education_info,
				'describe'=>$describe_info,
		    	'prefered'=>$prefered_info
		 	)
   		);
	}
	//负责简历信息的更新和添加功能
    public function save() {
    	//当前用户主键
		$uid = session('uid');						
   		//简历添加
   		if(I('index') == "basic") {
			$resumes_basic = M('resume_basic');
			$data['uid'] = $uid;
			$data['nickname'] = I('nickname');
			$data['peculiarity'] = I('peculiarity');
			$data['sex'] = I('sex');
			$data['birth'] = I('birth');
			$data['top_edu'] = I('top_edu');
			$data['work_years'] = I('work_years');
			$data['current_city'] = I('current_city');
			$data['phone'] = I('phone');
			$data['e_mail'] = I('e_mail');
			if(I('basic_id')) {
				$resumes_basic->where("uid=$uid")->save($data);
			} else {
				echo $resumes_basic->data($data)->add();
			}
   		} elseif(I('index') == "experience") {
   			$resumes_jobexp = M('resume_experience');
			$data['uid'] = $uid;
			$data['re_company_name'] = I('re_company_name');
			$data['job_title'] = I('job_title');
			$data['working_time'] = I('working_time');
			$data['job_description'] = I('job_description');
			if(I('experience_id')) {
				$experience_id = I('experience_id');
				$resumes_jobexp->where("experience_id=$experience_id")->save($data);
			} else {
				echo $resumes_jobexp->data($data)->add();
			}
   		} elseif(I('index') == "education") {
			$resumes_eduexp = M('resume_education');
			$data['uid'] = $uid;
			$data['school_name'] = I('school_name');
			$data['major'] = I('major');
			$data['degree'] = I('degree');
			$data['graduated'] = I('graduated');
			if(I('education_id')) {
				$education_id=I('education_id');
				$resumes_eduexp->where("education_id=$education_id")->save($data);
			} else {
				echo $resumes_eduexp->data($data)->add();
			}
   		} elseif(I('index') == "describe") {
			$resumes_describe = M('jobseekers_describe');
			$data['uid']=$uid;
			$data['describe'] = I('describe');
			if(I('describe_id')) {
				$resumes_describe->where("uid=$uid")->save($data);
			} else {
				echo $resumes_describe->data($data)->add();
			}
  	 	} elseif(I('index') == "prefered") {
   			$resumes_career = M('resume_prefered');
			$data['uid'] = $uid;
			$data['expected_position'] = I('expected_position');
			$data['curjob_typerent_city'] =I('curjob_typerent_city');
			$data['expected_location'] =I('expected_location');
			$data['expected_monthly_income'] =I('expected_monthly_income');
			if(I('prefered_id')){
				$resumes_career->where("uid=$uid")->save($data);
			} else {
				echo $resumes_career->data($data)->add();
			}
   	    } elseif(I('index') == "status") {
   			$resumes_basic = M('resume_basic');
			$data['current_status'] = I('current_status');
			$resumes_basic->where("uid=$uid")->save($data);
			echo I('current_status');
		}
    }
    //负责简历工作经历和教育经历删除功能
	public function delete() {
		if(I('index') == "experience") {
			$resume_id = I('experience_id');
			$resumes_eduexp = M('resume_experience');
			$resumes_eduexp->where("experience_id=$resume_id")->delete();
		} else if(I('index') == "education") {
			$resume_id = I('education_id');
			$resumes_eduexp = M('resume_education');
			$resumes_eduexp->where("education_id=$resume_id")->delete();
		}
	}
	//负责简历预览功能
	public function preview() {
		//当前用户主键
		$uid=session('uid');	
		//用户头像信息	
		$jobseekers_info=M('jobseekers')->field("jobseekers.photo")->where("uid=$uid")->select();
		$this->assign('photo', $jobseekers_info);
		//简历基本信息
		$basic_info=M('resume_basic')->where("uid =$uid")->select();
		$this->assign('basic', $basic_info);
		//简历工作经历
		$experience_info=M('resume_experience')->where("uid =$uid")->select();
		$this->assign('experience', $experience_info);
		//简历教育经历
		$education_info=M('resume_education')->where("uid =$uid")->select(); 
		$this->assign('education', $education_info);
		//简历求职意向
		$prefered_info=M('resume_prefered')->where("uid =$uid")->select(); 
		$this->assign('prefered', $prefered_info);
        //页面渲染输出
       	$this->display("preview"); 
	}
	
	public function delivery() //编辑
	{
/*原生：SELECT resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.money,job.place,company.id,company.company_name FROM resume_delivery left join job on resume_delivery.job_id=job.id left join company on job.enterprise_id=company.enterprise_id where jobseeker_id=5		
*/	
		//显示用户名
		$uid=session('uid');
		$seekers_info = M('resume_basic')->field("resume_basic.nickname")->where("uid =$uid")->select();
		$jobseekers_info= M('jobseekers')->field("photo")->where("uid =$uid")->select();//简历基本信息

        $this->assign('jobseekers_info',$jobseekers_info);		
	    $this->assign('seekers_info', $seekers_info);
		//筛选id、状态、投递时间输出数据
		$timess_info = M('resume_delivery')->field("resume_delivery.delivery_time")->where("jobseeker_id =$uid")->select();
		$times = I('times');
		if($times=='7') {
			$m='-7';
		} else {
			$m='-60';
		}
			
		$where_all=M('resume_delivery')
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid  and  (DATEDIFF(delivery_time,NOW()) >= $m )")	//	DATEDIFF(time1,time2) = time2 - time1
                ->order('delivery_time DESC')
				->select();

		$where_see=M('resume_delivery')
		
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid and delivery_status >0 and  DATEDIFF(delivery_time,NOW()) >= $m")
                ->order('delivery_time DESC')
			    ->select();	
				
		$where_invite=M('resume_delivery')
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid and delivery_status=2 and  DATEDIFF(delivery_time,NOW()) >= $m")
                ->order('delivery_time DESC')
				->select();					

		$where_failure=M('resume_delivery')
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid and delivery_status = 3 and  DATEDIFF(delivery_time,NOW()) >= $m")
                ->order('delivery_time DESC')
				->select();	

		$where_success=M('resume_delivery')
		 		->field("resume_delivery.delivery_time,resume_delivery.delivery_status,job.id,job.job_name,job.enterprise_id,job.company_name,job.city,job.area,job.salary_low,job.salary_hig")
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
                ->where("jobseeker_id = $uid and delivery_status = 4 and  DATEDIFF(delivery_time,NOW()) >= $m")
                ->order('delivery_time DESC')
				->select();				
		$this->assign('times', $times);				
		$this->assign('where_all', $where_all);	
		$this->assign('where_see', $where_see);
		$this->assign('where_invite', $where_invite);		
		$this->assign('where_failure', $where_failure);			

		$this->assign('where_success', $where_success);	
		$this->display();
	
	}
}