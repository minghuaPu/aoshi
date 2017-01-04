<?php

namespace Enterprise\Controller;
use Think\Controller;

class CompanyController extends Controller{
    public function index(){
        $company=M('enterprise');
        $enterprise_info=$company->where(array("id" => session('tid')))->select();
        $this->assign("enterprise_info",$enterprise_info);
        $this->display();
    }
    public function save(){
        $job=D('enterprise');//怎么实例化模型   D:(Database)
        $data['company_name']=I('company_name');//获取传输过来的参数 I:(input)
        $data['name']=I('name');
        $data['job']=I('job');
        $data['email']=I('email');
        $data['touxiang']=I('touxiang');

        $data=$job->create();

        if(! $data){//校验数据
            echo $job->getError();
        }else{
            $job->add($data);
            $this->success('发布成功！',U('job/job_list'));
        }
    }
}
