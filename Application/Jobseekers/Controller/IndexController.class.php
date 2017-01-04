<?php
<<<<<<< HEAD

namespace Jobseekers\Controller;
use Think\Controller;



class IndexController extends Controller {


    public function index(){
		// 个人主页


		// 第一步：使用session会话必须要有
		// session_start();//开启session
			 include_once("../Conf/init.php"); 
		// 登录的时候
		// 选项框，记住我，7天免登录 
		
		//如果用户已经登录，我们就显示用户中心页面
		//$_COOKIE['user_login_status']==1
		if (cookie('user_login_status')) {
		
		}else{
			 $this->error('请先登录!',U('Login/login'));
			 
		}
		//如果没有登录，就提示请登录
		
		
		
		
		
		
		
		//获取模版数据
		
 			//原生查询法
			//$id=I('id');//当前id
			$id=1;
			$sql1 ="select * from  jobseekers where  id =". $id .$pageObj -> limit;
			$jobseekers_info=D("jobseekers")->query($sql1);	
			
			
			$sql2 ="select * from  resume_experience where id=". $id .$pageObj -> limit;
			$experience_info=D("resume_experience")->query($sql2);
			
			$sql3 ="select * from  resume_education where id=". $id .$pageObj -> limit;
			$education_info=D("resume_education")->query($sql3);
			
			$sql4 ="select * from  jobseekers_describe where id=". $id .$pageObj -> limit;
			$describe_info=D("jobseekers_describe")->query($sql4);
			
			$sql5 ="select * from  resume_prefered where id=". $id .$pageObj -> limit;
			$prefered_info=D("resume_prefered")->query($sql5);
			
	
      
			
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
		$this->assign('describe_info',$describe_info);
		$this->assign('prefered_info',$prefered_info);
        $this->display();
    }

    public function add()
    {
    	$this->display();
    }

    public function save() //添加
    {

    	//怎么实例化模型   D:(Database)    M方法实例化模型无需用户为每个数据表定义模型类，如果D方法没有找到定义的模型类，则会自动调用M方法
    	//获取传输过来的参数 I:(input)
    	$server=I('what');		
		
		
		if($server=='experience'||$aa=='experience'){
			$serversss=D('resume_experience');
			$save_data['id']=1;
			$save_data['re_company_name']=I('re_company_name');
			$save_data['job_title']=I('job_title');
			$save_data['working_time']=I('working_time');
			$save_data['job_description']=I('job_description');
		}
		
		else if($server=='education'||$aa=='education'){
			$serversss=D("resume_education");
			$save_data['id']=1;
			$save_data['school_name']=I('school_name');
			$save_data['major']=I('major');
			$save_data['degree']=I('degree');
			$save_data['graduated']=I('graduated');
		}
		
		else if($server=='describe'||$aa=='describe'){
			$serversss=M("jobseekers_describe");
			$save_data['id']=1;
			$save_data['describe']=I('describe');
		}
		
		else if($server=='prefered'||$aa=='prefered'){
			echo 'prefered';
			$serversss=M("resume_prefered");
			$save_data['id']=1;
			$save_data['expected_position']=I('expected_position');
			$save_data['job_type']=I('job_type');
			$save_data['expected_location']=I('expected_location');
			$save_data['expected_monthly_income']=I('expected_monthly_income');
		}
		
		//$data['create_time']=time();
	
/*		echo 1;
 		if(! $serversss->create()){
			echo 2 ;
            echo $serversss->getError();
        }else{
			echo 3;
        */
			$serversss->add($save_data);
	
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
			$id=1;
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
			
				
				 $where="id=$id";
				 
				 
				 }
		   $data=$serverssss->create();//加了自动完成，create返回的值重新赋到保存数组里面
	
		   if(! $data){//校验数据
				echo $serverssss->getError();
			}else{
				 
			   $serverssss->where($where)->save($up_data);
	
			   $this->success('更新成功！',U('Index/index'));//跳转的方法			
			}
    }
	
	 public function delete()
    {
        $resume_id=I('resume_id');
		
	
		$rt_info=D('?')->where("resume_id=$resume_id")->delete().'?'.time();
			
		
       
        if ($rt_info) {
            $this->success('删除成功！',U('Index/index'));
        }else{
            $this->error('删除错误，原因：'.$article->getError(),U('Index/index'));
        }
    }

=======
	
namespace Jobseekers\Controller;
use Think\Controller;

class IndexController extends Controller {
	//简历管理
    public function index() {
    	
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

    public function add() {
    	
    	$uid = 1;
    
   		//简历添加
   		if(I('index') == "basic"){
			$resumes_basic = M('resumes_basic');
			$data['uid'] = $uid;
			$data['name'] = I('name');
			$data['intro'] = I('intro');
			$data['sex'] = I('sex');
			$data['birth'] = I('birth');
			$data['xl'] = I('xl');
			$data['email'] = I('email');
			$data['gzjy'] = I('gzjy');
			$data['city'] = I('city');
			$data['phone'] = I('phone');
			$data['email'] = I('email');
			$resumes_basic->data($data)->add();
			echo true;
   		} elseif(I('index') == "jobexp") {
   			$resumes_jobexp = M('resumes_jobexp');
			$data['uid'] = $uid;
			$data['name'] = I('name');
			$data['job'] = I('job');
			$data['time'] = I('time');
			$data['cont'] = I('cont');
			$resumes_jobexp->data($data)->add();
			echo true;
   		} elseif(I('index') == "eduexp") {
			$resumes_eduexp = M('resumes_eduexp');
			$data['uid'] = $uid;
			$data['name'] = I('name');
			$data['major'] = I('major');
			$data['xl'] = I('xl');
			$data['grad'] = I('grad');
			$resumes_eduexp->data($data)->add();
			echo true;
   		} elseif(I('index') == "career") {
   			$resumes_career = M('resumes_career');
			$data['uid'] = $uid;
			$data['name'] = I('name');
			$data['type'] = I('type');
			$data['city'] = I('city');
			$data['wages'] = I('wages');
			$resumes_career->data($data)->add();
			echo true;
   		}
    }

	public function update() {
		
    	$uid = 1;
    	
    	//简历更新
   		if(I('index') == "basic"){
			$resumes_basic = M('resumes_basic');
			$data['uid'] = $uid;
			$data['name'] = I('name');
			$data['intro'] = I('intro');
			$data['sex'] = I('sex');
			$data['birth'] = I('birth');
			$data['xl'] = I('xl');
			$data['email'] = I('email');
			$data['gzjy'] = I('gzjy');
			$data['city'] = I('city');
			$data['phone'] = I('phone');
			$data['email'] = I('email');
			$resumes_basic->where("uid=$uid")->save($data);
			echo true;
		} elseif(I('index') == "jobexp") {
			$jid = I('jid');
   			$resumes_jobexp = M('resumes_jobexp');
			$data['uid'] = $uid;
			$data['name'] = I('name');
			$data['job'] = I('job');
			$data['time'] = I('time');
			$data['cont'] = I('cont');
			$resumes_jobexp->where("jid=$jid")->save($data);
			echo true;
   		} elseif(I('index') == "eduexp") {
   			$eid = I('eid');
   			$resumes_eduexp = M('resumes_eduexp');
			$data['uid'] = $uid;
			$data['name'] = I('name');
			$data['xl'] = I('xl');
			$data['major'] = I('major');
			$data['grad'] = I('grad');
			$resumes_eduexp->where("eid=$eid")->save($data);
			echo true;
   		} elseif(I('index') == "career") {
   			$resumes_career = M('resumes_career');
			$data['uid'] = $uid;
			$data['name'] = I('name');
			$data['type'] = I('type');
			$data['city'] = I('city');
			$data['wages'] = I('wages');
			$resumes_career->where("uid=$uid")->save($data);
			echo true;
   		} elseif(I('index') == "state") {
   			$resumes_basic = M('resumes_basic');
			$data['state'] = I('state');
			$resumes_basic->where("uid=$uid")->save($data);
			echo true;
   		} else {
   			$resumes_basic = M('resumes_basic');
			$data['des'] = I('des');
			$resumes_basic->where("uid=$uid")->save($data);
			echo true;
   		}
   }
   
	public function delete() {
		if(I('index') == "jobexp"){
			$id = I('jid');
			$resumes_jobexp = M('resumes_jobexp');
			$resumes_jobexp->where("jid=$id")->delete();
		} else {
			$id = I('eid');
			$resumes_eduexp = M('resumes_eduexp');
			$resumes_eduexp->where("eid=$id")->delete();
		}
	}
>>>>>>> 52745953a4e8f54f493eca97c12ccde434932b74
}