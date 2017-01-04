<?php
	
namespace Admin\Controller;
use Think\Controller;

class RsumController extends Controller {
	//简历管理
    public function index() {
    	
        
        //输出
        $this->display(); 
    }

    public function ajaxGet()
    {
    	
    	$uid = 1;

		//简历基本信息
    	$resumes_basic = M('resumes_basic')->where("uid =$uid")->select();
    
		 //简历工作经历
    	$resumes_jobexp = M('resumes_jobexp')->where("uid =$uid")->select();
	
		  //简历教育经历
    	$resumes_eduexp = M('resumes_eduexp')->where("uid =$uid")->select();
        
        //简历求职意向
        $resumes_career = M('resumes_career')->where("uid =$uid")->select();
    	
       
    	echo json_encode(
		    			array(
		    					'basic'=>$resumes_basic,
		    					'jobexp'=>$resumes_jobexp,
		    					'eduexp'=>$resumes_eduexp,
		    					'career'=>$resumes_career,
		    				)
		    			);

      

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

			if ($jid>0) {
				$rtn_data=$resumes_jobexp->where("jid=$jid")->save($data);
			}else{
				$rtn_data=$resumes_jobexp->data($data)->add();
			}

			echo json_encode(array('msg'=>$rtn_data));
   		} elseif(I('index') == "eduexp") {
   			$eid = I('eid');
   			$resumes_eduexp = M('resumes_eduexp');
			$data['uid'] = $uid;
			$data['name'] = I('name');
			$data['xl'] = I('xl');
			$data['major'] = I('major');
			$data['grad'] = I('grad');
			if ($eid>0) {
				$rtn_data=$resumes_eduexp->where("eid=$eid")->save($data);
			}else{
				$rtn_data=$resumes_eduexp->data($data)->add();
			}
			echo json_encode(array('msg'=>$rtn_data));
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