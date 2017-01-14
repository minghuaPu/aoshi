<?php
namespace Enterprise\Controller;
use Think\Controller;
use Think\Page;

class JobController extends Controller{
    public function add_job()
    {
        // 通过session的id来搜索enterprise_info表，获取用户信息
        $enterprise_info=M('enterprise_info');
        $enterprise_info=$enterprise_info->where(array("id" => session('eid')))->find();
        $this->assign("enterprise_info",$enterprise_info);

        // 通过查询info表得到company_id来搜索company表
        $com_id=$enterprise_info['company_id'];
        $company=M('company');
        $company_info=$company->where(array("id" => $com_id))->find();
        $this->assign("company_info",$company_info);

        $this->display();
    }

    public function job_list()
    {
        // 通过session的id来搜索enterprise_info表，获取用户信息
        $enterprise_info=M('enterprise_info');
        $enterprise_info=$enterprise_info->where(array("id" => session('eid')))->find();
        $this->assign("enterprise_info",$enterprise_info);

        $job=M('job');
        $enterprise_info=M('enterprise_info');
        $enterprise_info=$enterprise_info->where(array("id" => session('eid')))->find();
        $com_id=$enterprise_info['company_id'];

        $count=$job->where(array("company_id" => $com_id))->count();

        $Page = new Page($count,8);
        $show   = $Page->show();
        $this->assign('page',$show);
        $info=$job->where(array("company_id" => $com_id))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

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

        $enterprise_info=M('enterprise_info');
        $enterprise_info=$enterprise_info->where(array("id" => session('eid')))->find();
        $com_id = $enterprise_info['company_id'];

        $job=D('job');//怎么实例化模型   D:(Database)
        $data['job_type']=I('job_type');//获取传输过来的参数 I:(input)
        $data['job_require']=I('job_require');
        $data['place']=I('place');
        $data['company_name']=I('company_name');
        $data['job_name']=I('job_name');
        $data['education']=I('education');
        $data['salary_low']=I('salary_lowLimit');
        $data['salary_hig']=I('salary_higLimit');
        $data['email']=I('email');
        $data['work_time']=I('work_time');
        $data['company_id'] = "25";

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