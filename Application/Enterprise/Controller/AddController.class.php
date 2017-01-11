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
        $area=json_decode($company_info['area'],true);
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


        $job=D('job');//怎么实例化模型   D:(Database)
        $data['job_type']=I('job_type');//获取传输过来的参数 I:(input)
        $data['job_require']=I('job_require');
        $data['place']=I('place');
        $data['company_name']=I('company_name');
        $data['job_name']=I('job_name');
        $data['education']=I('education');
        $data['salary_low_limit']=I('salary_lowLimit');
        $data['salary_hig_limit']=I('salary_higLimit');
        $data['email']=I('email');
        $data['address']=I('address');
        $data['add_time']=time();
        $data['work_time']=I('work_time');
        $data['company_id'] = I('company_id');
        $data['area']=I('province')."#".I('city').'#'.I('area');

        $data=$job->create();

        if(! $data){//校验数据
            echo $job->getError();
        }else{
            $job->add($data);
            $this->success('发布成功！',U('list/job_list'));
        }
    }

}