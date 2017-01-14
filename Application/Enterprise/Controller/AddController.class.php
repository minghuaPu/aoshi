<?php
namespace Enterprise\Controller;
use Enterprise\Controller\BaseController;


class AddController extends BaseController{
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



    public function save(){

        $data['job_type']=I('job_type');//获取传输过来的参数 I:(input)
        $data['job_require']=I('job_require');
        $data['job_describe']=I('job_describe');
        $data['company_name']=I('company_name');
        $data['job_name']=I('job_name');
        $data['education']=I('education');
        $data['address']=I('address');
        $data['add_time']=date('Y-m-d');
        $data['work_time']=I('work_time');
        $data['enterprise_id'] = session('eid');
        $data['email']=I('email');
        $data['province']=I('province');
        $data['city']=I('city');
        $data['area']=I('area');
        $data['salary_low']=I('salary_lowLimit');
        $data['salary_hig']=I('salary_higLimit');
        $data['status']=0;

        $job=D('job');//怎么实例化模型   D:(Database)
        $data=$job->create($data);

        if(! $data){//校验数据
            echo $job->getError();
        }else{
            $job->add($data);
            $this->success('发布成功！',U('list/job_list'));
        }
    }

    public function revise(){
        // 通过session的id来搜索enterprise_info表，获取用户信息
        $enterprise_info=M('enterprise_info');
        $enterprise_info=$enterprise_info->where(array("id" => session('eid')))->find();
        $this->assign("enterprise_info",$enterprise_info);

        $id=I('id');
        $job=M('job');
        $job=$job->where(array("id" => $id))->find();
        $this->assign("job_info",$job);
        $this->display();
    }

    public function save_revise(){
        $data['id']=I('id');
        $data['job_type']=I('job_type');//获取传输过来的参数 I:(input)
        $data['job_require']=I('job_require');
        $data['job_describe']=I('job_describe');
        $data['company_name']=I('company_name');
        $data['job_name']=I('job_name');
        $data['education']=I('education');
        $data['address']=I('address');
        $data['add_time']=date('Y-m-d');
        $data['work_time']=I('work_time');
        $data['enterprise_id'] = session('eid');
        $data['email']=I('email');
        $data['province']=I('province');
        $data['city']=I('city');
        $data['area']=I('area');
        $data['salary_low']=I('salary_lowLimit');
        $data['salary_hig']=I('salary_higLimit');
        $data['status']=0;

        $job=M('job');//怎么实例化模型   D:(Database)
        $data=$job->create($data);

        if(! $data){//校验数据
            echo $job->getError();
        }else{
            $job->save($data);
            $this->success('修改成功！',U('list/job_list'));
        }
    }

}