<?php
namespace Enterprise\Controller;
use Enterprise\Controller\BaseController;

class SeekerController extends BaseController {
    public function resume(){

        $key="";
        $work_time="选择时间";
        $education="选择学历";
        $status="选择状态";

        if (I('key')){
            $key=I('key');
            $where['job_name']=array('like',"%$key%",);
        }
        if (I('work_time')){
            if (trim(I('work_time'))!="选择时间"){
                $work_time=I('work_time');
                $where['work_years']=array('like',"%$work_time%",);
            }
        }
        if (I('education')){
            if (trim(I('education'))!="选择学历"){
                $education=I('education');
                $where['top_edu']=array('like',"%$education%",);
            }
        }
        if (I('status')){
            if (trim(I('status'))!="选择状态"){
                $status=I('status');
                if(trim(I('status'))=="尚未查看") {
                    $where['n.delivery_status'] = 0;
                }else if(trim(I('status'))=="已经查看") {
                    $where['n.delivery_status'] = 1;
                }else if(trim(I('status'))=="正在沟通") {
                    $where['n.delivery_status'] = 2;
                }else if(trim(I('status'))=="成功招聘") {
                    $where['n.delivery_status'] = 3;
                }else if(trim(I('status'))=="关系破裂") {
                    $where['n.delivery_status'] = 4;
                }
            }
        }
        $where['job.enterprise_id']=session('eid');

        $delivery=M('resume_delivery');
        $resume_list = $delivery
            -> alias('n')
            -> join('job ON job_id=job.id')
            -> join('resume_basic ON jobseeker_id=resume_basic.uid')
            -> field("n.id as did,job_id,uid,enterprise_id,job_name,top_edu,phone,nickname,sex,work_years,n.delivery_time as deli_time,n.delivery_status as deli_status")
            -> order('deli_status,did desc')
            -> where($where)
            -> select();

        $search_info['key']=$key;
        $search_info['work_time']=$work_time;
        $search_info['education']=$education;
        $search_info['status']=$status;

        $this->assign('search_info',$search_info);
        $this->assign("resume_info",$resume_list);
        $this->display();

    }

    public function resume_detail(){

        $data['id']=I("did");

        $delivery=M('resume_delivery');
        $delivery_check=$delivery->where(array("id" => $data['id']))->find();
        $data['delivery_status']=$delivery_check['delivery_status'];
        if ($delivery_check['delivery_status']==0){
            $data['delivery_status']=1;
            $data = $delivery->create($data);
            $delivery->save($data);
        }
        $this->assign('delivery',$data);

        $uid=I('uid');

        $jobseekers_info = M('jobseekers')->field("jobseekers.photo")->where("uid =$uid")->select();
        $this->assign('jobseekers_info', $jobseekers_info);

        //简历基本信息
        $basic_info = M('resume_basic')->where("uid =$uid")->select();
        $this->assign('basic_info', $basic_info);

        //简历工作经历
        $experience_info = M('resume_experience')->where("uid =$uid")->select();
        $this->assign('experience_info', $experience_info);

        //简历教育经历
        $education_info = M('resume_education')->where("uid =$uid")->select();
        $this->assign('education_info', $education_info);


        //简历求职意向
        $describe_info = M('jobseekers_describe')->where("uid =$uid")->select();
        $this->assign('describe_info', $describe_info);

        //简历教育经历
        $prefered_info = M('resume_prefered')->where("uid =$uid")->select();
        $this->assign('prefered_info', $prefered_info);
        $this->display();
    }

    public function suit(){
        $data['id']=I("id");

        $delivery=M('resume_delivery');
        $delivery_check=$delivery->where(array("id" => $data['id']))->find();
        $data['delivery_status']=$delivery_check['delivery_status'];
        if ($delivery_check['delivery_status']==1){
            $data['delivery_status']=2;
            $data = $delivery->create($data);
            $delivery->save($data);
        }

        $delivery->save($data);
        $this->success('已成功联系对方，请尽快通知对方面试时间', U('Seeker/resume'));
    }

    public function unmatch(){
        $data['id']=I("id");

        $delivery=M('resume_delivery');
        $delivery_check=$delivery->where(array("id" => $data['id']))->find();
        $data['delivery_status']=$delivery_check['delivery_status'];
        if ($delivery_check['delivery_status']==2){
            $data['delivery_status']=3;
            $data = $delivery->create($data);
            $delivery->save($data);
        }

        $delivery->save($data);
        $this->success('那真是太可惜了，赶快来继续寻找下一位应聘者吧！', U('Seeker/resume'));
    }

    public function match(){
        $data['id']=I("id");

        $delivery=M('resume_delivery');
        $delivery_check=$delivery->where(array("id" => $data['id']))->find();
        $data['delivery_status']=$delivery_check['delivery_status'];
        if ($delivery_check['delivery_status']==2){
            $data['delivery_status']=4;
            $data = $delivery->create($data);
            $delivery->save($data);
        }

        $delivery->save($data);
        $this->success('恭喜您为您的公司招收了一员猛将！', U('Seeker/resume'));
    }
}
