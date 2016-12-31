<?php
	
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
}