<?php
namespace Enterprise\Controller;
use Think\Controller;

class AddController extends Controller{
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
        $area_info=$enterprise_info['area'];
        $area = explode('#',$area_info);
        $this->assign("company_info",$company_info);
        $this->assign("area",$area);

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


        $data['job_type']=I('job_type');//获取传输过来的参数 I:(input)
        $data['job_require']=I('job_require');
        $data['company_name']=I('company_name');
        $data['job_name']=I('job_name');
        $data['education']=I('education');
        $data['salary_low']=I('salary_lowLimit');
        $data['salary_hig']=I('salary_higLimit');
        $data['address']=I('address');
        $data['add_time']=date('Y-m-d');
        $data['work_time']=I('work_time');
        $data['company_id'] = I('company_id');
        $data['email']=I('email');
        $data['status']=0;


        $job=D('job');//怎么实例化模型   D:(Database)
        $data=$job->create();

        if(! $data){//校验数据
            echo $job->getError();
        }else{
            $job->add($data);
            $this->success('发布成功！',U('list/job_list'));
        }
    }

}