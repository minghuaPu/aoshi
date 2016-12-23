<?php

namespace Jobseekers\Controller;
use Think\Controller;



class IndexController extends Controller {


    public function index(){
		//获取模版数据
		
 			//原生查询法
			$id=1;//当前id
			$sql1 ="select * from  jobseekers where  id =". $id .$pageObj -> limit;
			$jobseekers_info=D("jobseekers")->query($sql1);	
			
			
			$sql2 ="select * from  resume_experience where id=". $id .$pageObj -> limit;
			$experience_info=D("resume_experience")->query($sql2);
			
			$sql3 ="select * from  resume_education where id=". $id .$pageObj -> limit;
			$education_info=D("resume_education")->query($sql3);
			
			$sql4 ="select * from  resume_prefered where id=". $id .$pageObj -> limit;
			$prefered_info=D("resume_prefered")->query($sql4);
			
		
			
			//thinphp查询法  必须表中没没主键才能同id提取多条
			
		/*	$res_experience=M("resume_experience");
			$res_education=M("resume_education");
			$res_prefered=M("resume_prefered");
			
			$experience_info=$res_experience->select($id);
			$education_info=$res_education->select($id);
			$prefered_info=$res_prefered->select($id);*/
			
			
			
        // 第二步：模版赋值
        $this->assign('jobseekers_info',$jobseekers_info);
		$this->assign('experience_info',$experience_info);
		$this->assign('education_info',$education_info);
		$this->assign('prefered_info',$prefered_info);
        $this->display();
    }

    public function add()
    {
    	$this->display();
    }

    public function save()
    {

    	/*$article=D('jobseekers');//怎么实例化模型   D:(Database)    M方法实例化模型无需用户为每个数据表定义模型类，如果D方法没有找到定义的模型类，则会自动调用M方法
    	$data['username']=I('username');//获取传输过来的参数 I:(input)
    	$data['sex']=I('sex');
		$data['phone']=I('phone');
*/		$experience=D('resume_experience');
		$ex_data['id']=1;
		$ex_data['re_company_name']=I('re_company_name');
		$ex_data['job_title']=I('job_title');
		$ex_data['working_time']=I('working_time');
		$ex_data['job_description']=I('job_description');
		
		$education=M("resume_education");
		$ed_data['id']=1;
		$ed_data['school_name']=I('school_name');
		$ed_data['major']=I('major');
		$ed_data['degree']=I('degree');
		$ed_data['graduated']=I('graduated');
		
		/*$prefered=M("resume_prefered");*/
		
		
		
		//$data['create_time']=time();
	
		echo 1;
 	/*	if(! $article->create()){
			echo 2 ;
            echo $article->getError();
        }else{*/
			echo 3;
         //   $article->add($data);
			$experience->add($ex_data);
			$education->add($ed_data);
            $this->success('修改成功！','Index/index');//跳转的方法
      // }
    }
	 


}