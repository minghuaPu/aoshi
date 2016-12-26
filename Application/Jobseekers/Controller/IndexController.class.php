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

    public function save() //添加
    {

    	/*$article=D('jobseekers');//怎么实例化模型   D:(Database)    M方法实例化模型无需用户为每个数据表定义模型类，如果D方法没有找到定义的模型类，则会自动调用M方法
    	$data['username']=I('username');//获取传输过来的参数 I:(input)
    	$data['sex']=I('sex');
		$data['phone']=I('phone');
		


*/		

		$experience=D('resume_experience');
		$ex_data['id']=1;
		$ex_data['re_company_name']=I('re_company_name');
		$ex_data['job_title']=I('job_title');
		$ex_data['working_time']=I('working_time');
		$ex_data['job_description']=I('job_description');
		
		$education=D("resume_education");
		$ed_data['id']=1;
		$ed_data['school_name']=I('school_name');
		$ed_data['major']=I('major');
		$ed_data['degree']=I('degree');
		$ed_data['graduated']=I('graduated');
		
		$prefered=M("resume_prefered");
		$pr_data['id']=1;
		$pr_data['expected_position']=I('expected_position');
		$pr_data['job_type']=I('job_type');
		$pr_data['expected_location']=I('expected_location');
		$pr_data['expected_monthly_income']=I('expected_monthly_income');
		
		
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
			$prefered->add($pr_data);
            $this->success('修改成功！','Index/index');//跳转的方法
      // }
    }
	 public function do_add(){
		 $aa=D("jobseekers");
		 $datas['username']=I('username');
		 $datas['sex']=I('sex');
		 $datas['status'] = 1;
	
		 
		 if(!IS_AJAX){
			 halt("ye mian no in ");
			$this->ajaxReturn($datas,'JSON');
			 }
		 else{
			 
			 $this->ajaxReturn(0,'JSON');
			 }


		 
		 }
		public function update() //编辑
		{
			
			$resume_id=I('resume_id');
			$server=I('what');
			//$article_info=D('resume_experience')->where("resume_id=$resume_id ")->find();
			echo $server;
		
    		if( $server = 'experience'){
			$experience=D('resume_experience');
			$ex_data['re_company_name']=I('re_company_name');
			$ex_data['job_title']=I('job_title');
			$ex_data['working_time']=I('working_time');
			$ex_data['job_description']=I('job_description');
 
			}
			else if( $server = 'education'){
			$experience=D('resume_education');
			$ex_data['school_name']=I('school_name');
			$ex_data['major']=I('major');
			$ex_data['degree']=I('degree');
			$ex_data['graduated']=I('graduated');
 
			}
			else if( $server = 'jobseekers'){
			$experience=D('jobseekers');
			$ex_data['label']=I('label');
			
 
			}
			else if( $server = 'prefered'){
			$experience=D('resume_prefered');
			$ex_data['expected_position']=I('expected_position');
			$ex_data['job_type']=I('job_type');
			$ex_data['expected_location']=I('expected_location');
			$ex_data['expected_monthly_income']=I('expected_monthly_income');
 
			}
     
       /*$data=$article->create();//加了自动完成，create返回的值重新赋到保存数组里面

       if(! $data){//校验数据
            echo $article->getError();
        }else{*/
			 
            $server->where("resume_id=$resume_id")->save($ex_data);

           $this->success('更新成功！',U('Index/index'));//跳转的方法			
       // }
    }


}