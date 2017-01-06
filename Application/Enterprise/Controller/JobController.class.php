<?php
namespace Enterprise\Controller;
use Think\Controller;
use Think\Page;

class JobController extends Controller{
    public function add_job()
    {
//----------数据库enterprise读取头像用户名----------
        $id=session('tid');

        $user_info= M('enterprise')->where("id =$id")->select();

        $this->assign('user_info',$user_info);
//--------------------------------------------------
        $company=M('enterprise');
        $enterprise_info=$company->where(array("id" => session('tid')))->select();
        $this->assign("enterprise_info",$enterprise_info);
        $this->display();
    }

    public function job_list()
    {
        //----------数据库enterprise读取头像用户名----------
        $id=session('tid');

        $user_info= M('enterprise')->where("id =$id")->select();

        $this->assign('user_info',$user_info);
//--------------------------------------------------
        $job=M('job');
        $count=$job->where(array("enterprise_id" => session('tid')))->count();

        $Page = new Page($count,8);
        $show   = $Page->show();
        $this->assign('page',$show);
        $info=$job->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('job_info',$info);
        $this->display();
    }

//    public function search()
//    {
//        $job=M('job');
//        $data=I('key');
//
//        $job['job_name']=array('like',$data.'%');
//
//        $info=$job->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
//
//        $this->assign('job_info',$info);
//        $this->display();
//    }

    public function save(){
        $job=D('job');//怎么实例化模型   D:(Database)
        $data['job_type']=I('job_type');//获取传输过来的参数 I:(input)
        $data['job_require']=I('job_require');
        $data['place']=I('place');
        $data['company_name']=I('company_name');
        $data['job_name']=I('job_name');
        $data['education']=I('education');
        $data['money']=I('money');
        $data['email']=I('email');
        $data['work_time']=I('work_time');
        $data['enterprise_id']= session('tid');

        $data=$job->create();

        if(! $data){//校验数据
            echo $job->getError();
        }else{
            $job->add($data);
            $this->success('发布成功！',U('job/job_list'));
        }
    }
    public function ajax_add(){
        $data['id']=I("id");

        $data['money']=I('money');
        $data['place']=I('place');
        $data['job_name']=I('job_name');
        $data['job_require']=I('job_require');


        // 修改
        $job=D('job');

        $c_rtn=$job->create($data);
        if (!$c_rtn) {
            $this->ajaxReturn($job->getError(),"json");
        }else{
            $job->save($data);
            $this->ajaxReturn(array('status'=>1),'json');
        }
    }
}