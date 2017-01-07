<?php

namespace Jobseekers\Controller;
use Think\Controller;
use Common\Controller\ResumeController;



class IndexController extends ResumeController {


    public function index(){
		// 个人主页
		/*if (session('user_login_status')) {
		
		}else{
			 $this->error('请先登录!',U('Login/login'));
			 
		}*/
		//如果没有登录，就提示请登录
		//获取模版数据
 		//原生查询法
		//当前id
		//$id=session('id');
		/*$sql1 ="select * from  jobseekers where  id =". $id .$pageObj -> limit;
		$jobseekers_info=D("jobseekers")->query($sql1);	*/
			
		/*$jobseekers_info= M('jobseekers')->where("id =$id")->select();//简历基本信息
		
		$experience_info= M('resume_experience')->where("id =$id")->select();//简历工作经历
		
		$education_info= M('resume_education')->where("id =$id")->select(); //简历教育经历
		$describe_info= M('jobseekers_describe')->where("id =$id")->select(); //简历自我描述
		$prefered_info= M('resume_prefered')->where("id =$id")->select(); //简历求职意向
			
		echo json_encode(
   			array(
   				
		    	'jobseekers'=>$jobseekers_info,
		    	'experience'=>$experience_info,
		    	'education'=>$education_info,
				'describe'=>$describe_info,
		    	'prefered'=>$prefered_info,
		 	)
   		);

        // 第二步：模版赋值
        $this->assign('jobseekers_info',$jobseekers_info);
		$this->assign('experience_info',$experience_info);
		$this->assign('education_info',$education_info);
		$this->assign('describe_info',$describe_info);
		$this->assign('prefered_info',$prefered_info);*/
        $this->display();
		
		
   		
    }
	public function select(){
		$id=session('id');
			
		$jobseekers_info= M('jobseekers')->where("id =$id")->select();//简历基本信息
		$basic_info= M('resume_basic')->where("id =$id")->select();//简历基本信息
		$experience_info= M('resume_experience')->where("id =$id")->select();//简历工作经历
		$education_info= M('resume_education')->where("id =$id")->select(); //简历教育经历
		$describe_info= M('jobseekers_describe')->where("id =$id")->select(); //简历自我描述
		$prefered_info= M('resume_prefered')->where("id =$id")->select(); //简历求职意向
			
		echo json_encode(
   			array(
   				
		    	'jobseekers'=>$jobseekers_info,
				'basic'=>$basic_info,
		    	'experience'=>$experience_info,
		    	'education'=>$education_info,
				'describe'=>$describe_info,
		    	'prefered'=>$prefered_info,
		 	)
   		);
		
		}
	
	public function ajaxGet()
    {
    	
    	$id = session('id');
    	$getType=I('type');
    	if ($getType==1) {
	    		//简历基本信息
	    	$resumes_basic = M('jobseekers')->where("id =$id")->select();
	        $this->assign('jobseekers_info', $jobseekers_info);
        
    	}elseif ($getType=='jobexp') {
    		 //简历工作经历
	    	$experience_info = M('resume_experience')->where("id =$id")->select();
	    	echo json_encode($experience_info);
    	}else{
    		  //简历教育经历
	    	$education_info = M('resume_education')->where("id =$id")->select();
	        $this->assign('education_info', $education_info);
			
			$describe_info = M('jobseekers_describe')->where("id =$id")->select();
	        $this->assign('describe_info', $describe_info);
	        
	        //简历求职意向
	        $prefered_info = M('resume_prefered')->where("id =$id")->select();
	        $this->assign('prefered_info', $prefered_info);
    	}
    	
       
        
      
    }
    public function save() {
    	
    	$id=session('id');
    
   		//简历添加
   		if(I('index') == "basic"){
			$resumes_basic = M('jobseekers');
			$data['id'] = $id;
			$data['nickname'] = I('nickname');
			$data['peculiarity'] = I('peculiarity');
			$data['sex'] = I('sex');
			$data['birth'] = I('birth');
			$data['top_edu'] = I('top_edu');
			$data['work_years'] = I('work_years');
			$data['current_city'] = I('current_city');
			$data['e_mail'] = I('email');
			if(I('basic_id')){
				$resumes_basic->where("id=$id")->save($data);
				echo true;
			} 
			else {
				$basic_id = $resumes_basic->data($data)->add();
				echo $basic_id;
			}
   		} 
		elseif(I('index') == "experience") {
   			$resumes_jobexp = M('resume_experience');
			$data['id'] = $id;
			$data['re_company_name'] = I('re_company_name');
			$data['job_title'] = I('job_title');
			$data['working_time'] = I('working_time');
			$data['job_description'] = I('job_description');
			if(I('experience_id')){
				$resumes_jobexp->where("experience_id=$experience_id")->save($data);
				echo true;
			} 
			else {
				$experience_id = $resumes_jobexp->data($data)->add();
				echo $experience_id;
			}
   		} 
		elseif(I('index') == "education") {
			$resumes_eduexp = M('resume_education');
			$data['id'] = $id;
			$data['school_name'] = I('name');
			$data['major'] = I('major');
			$data['degree'] = I('degree');
			$data['graduated'] = I('grad');
			if(I('education_id')){
				$resumes_eduexp->where("education_id=$education_id")->save($data);
				echo true;
			} 
			else {
				$education_id = $resumes_eduexp->data($data)->add();
				echo $education_id;
			}
   		} 
		elseif(I('index') == "prefered") {
   			$resumes_career = M('resume_prefered');
			$data['id'] = $id;
			$data['expected_position'] = I('name');
			$data['job_type'] = I('type');
			$data['expected_location'] = I('city');
			$data['expected_monthly_income'] = I('wages');
			if(I('prefered_id')){
				$resumes_career->where("id=$id")->save($data);
				echo true;
			} 
			else {
				$prefered_id = $resumes_career->data($data)->add();
				echo $prefered_id;
			}
   		} 
		elseif(I('index') == "describe") {
			$resumes_describe = M('jobseekers_describe');
			$data['id']=$id;
			$data['describe'] = I('des');
			if(I('describe')){
				$resumes_describe->where("id=$id")->save($data);
				echo true;
			} 
			else {
				$describe_id = $resumes_describe->data($data)->add();
				echo $describe_id;
			}
   		}
		
		
    }


	

		 
	public function update() //编辑
	{
		$id=session('id');
		$resume_id=I('resume_id');
    if(I('index') == "basic"){
			$resumes_basic = M('jobseekers');
			$data['id'] = $id;
			$data['nickname'] = I('name');
			$data['peculiarity'] = I('intro');
			$data['sex'] = I('sex');
			$data['birth'] = I('birth');
			$data['top_edu'] = I('xl');
			$data['work_years'] = I('gzjy');
			$data['current_city'] = I('city');
			$data['phone'] = I('phone');
			$data['e_mail'] = I('email');
			$resumes_basic->where("id=$id")->save($data);
			echo true;
		}
   		elseif(I('index') == "jobexp") {
   			$resumes_jobexp = M('resume_experience');
			$data['id'] = $id;
			$data['re_company_name'] = I('re_company_name');
			$data['job_title'] = I('job_title');
			$data['working_time'] = I('working_time');
			$data['job_description'] = I('job_description');
			$resumes_jobexp->where("resume_id=$resume_id")->save($data);
			echo true;
   		} elseif(I('index') == "eduexp") {
			$resumes_eduexp = M('resume_education');
			$data['id'] = $id;
			$data['school_name'] = I('name');
			$data['major'] = I('major');
			$data['degree'] = I('degree');
			$data['graduated'] = I('grad');
			$resumes_eduexp->where("resume_id=$resume_id")->save($data);
			echo true;
   		}elseif(I('index') == "career") {
   			$resumes_career = M('resume_prefered');
			$data['id'] = $id;
			$data['expected_position'] = I('name');
			$data['job_type'] = I('type');
			$data['expected_location'] = I('city');
			$data['expected_monthly_income'] = I('wages');
			$resumes_career->where("resume_id=$resume_id")->save($data);
			echo true;
   		}elseif(I('index') == "state") {
			
   			$jobseekers = M('jobseekers');
			$data['current_status'] = I('state');
			$jobseekers->where("id=$id")->save($data);
			echo true;
   		} else {
   			$resumes_describe = M('jobseekers_describe');
			$data['id']=$id;
			$data['describe'] = I('des');
			$resumes_describe->where("resume_id=$resume_id")->save($data);
			echo true;
   		}
			/*
			$resume_id=I('resume_id');
			$id=session('id');
			$server=I('what');
			
			
			echo $resume_id;

			if($server !='jobseekers'){
				if( $server === 'experience'){
				$serverssss=D('resume_experience');
				$up_data['re_company_name']=I('re_company_name');
				$up_data['job_title']=I('job_title');
				$up_data['working_time']=I('working_time');
				$up_data['job_description']=I('job_description');
	 
				}
				else if( $server === 'education'){
				$serverssss=D('resume_education');
				$up_data['school_name']=I('school_name');
				$up_data['major']=I('major');
				$up_data['degree']=I('degree');
				$up_data['graduated']=I('graduated');
	 
				}
				else if( $server === 'describe'){
				$serverssss=D('jobseekers_describe');
				$up_data['describe']=I('describe');
				
	 
				}
				else if( $server === 'prefered'){
				$serverssss=D('resume_prefered');
				$up_data['expected_position']=I('expected_position');
				$up_data['job_type']=I('job_type');
				$up_data['expected_location']=I('expected_location');
				$up_data['expected_monthly_income']=I('expected_monthly_income');
	 
				}
				 $where="resume_id=$resume_id";
				
			 }
			 else{
				 
				$serverssss=D('jobseekers');
				$up_data['username']=I('username');
				$up_data['peculiarity']=I('peculiarity');
				$up_data['sex']=I('sex');
				$up_data['birth']=I('birth');
				$up_data['current_city']=I('current_city');
				$up_data['phone']=I('phone');
				$up_data['e_mail']=I('e_mail');
			
				
				 //$where="id=$id";
				  $where="resume_id=$resume_id";
				 
				 }
			echo	 $where; 
		/*   $data=$serverssss->create();//加了自动完成，create返回的值重新赋到保存数组里面
	
		   if(! $data){//校验数据
				echo $serverssss->getError();
			}else{
				 */
			//  $serverssss->where($where)->save($up_data);
	
			//   $this->success('更新成功！',U('Index/index'));//跳转的方法			
			//}
    }
	
	 public function delete()
    {
		$resume_id = I('resume_id');
		if(I('index') == "jobexp"){
			$resumes_eduexp = M('resume_experience');
		} 
		
		else {
			$resumes_eduexp = M('resume_education');
		}
		$resumes_eduexp->where("resume_id=$resume_id")->delete();
		
        /*$resume_id=I('resume_id');
		$servers_date=I('server_date');
		
		switch($servers_date){
		case experience:	
			$del_server="resume_experience";
			break;
		case education:	
			$del_server="resume_education";
			break;
		case describe:	
			$del_server="jobseekers_describe";
			break;
			case prefered:	
			$del_server="resume_prefered";
			break;		
	
			}
		$rt_info=D($del_server)->where("resume_id=$resume_id")->delete().'?'.time();
			
		
       
        if ($rt_info) {
            $this->success('删除成功！',U('Index/index'));
        }else{
            $this->error('删除错误，原因：'.$article->getError(),U('Index/index'));
        }*/
    }
	public function delivery() //编辑
	{
/*SELECT * FROM resume_delivery left join job on resume_delivery.job_id=job.id left join company on job.enterprise_id=company.enterprise_id where jobseeker_id=5*/		
		
		
		$id=session('id');
		$seekers_info = M('jobseekers')->where("id =$id")->select();
	    $this->assign('seekers_info', $seekers_info);
		
/*		$delivery_info = M('resume_delivery')->where("jobseeker_id =$id")->select();
*/		
		 $delivery_info=M('resume_delivery')
                ->join("left join job on resume_delivery.job_id=job.id")//join是关联查询
				->join("left join company on job.enterprise_id=company.enterprise_id")//join是关联查询
                ->where("jobseeker_id =$id")
                ->select();
	
		print_r($delivery_info);
		$this->assign('delivery_info', $delivery_info);
		$this->display();
	}

}