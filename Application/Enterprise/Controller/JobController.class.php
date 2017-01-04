<?php
namespace Enterprise\Controller;
use Think\Controller;

class JobController extends Controller{
    public function add_job()
    {
        $this->display();
    }

    public function job_list()
    {
        $job=M('job');
        $job_info=$job->where(array("enterprise_id" => session('tid')))->select();
        $this->assign("job_info",$job_info);
        $this->display();
    }

    public function save(){
        $job=D('job');//怎么实例化模型   D:(Database)
        $data['job_name']=I('job_name');//获取传输过来的参数 I:(input)
        $data['job_require']=I('job_require');
        $data['place']=I('place');
        $data['money']=I('money');
        $data['enterprise_id']= session('tid');

        $data=$job->create();

        if(! $data){//校验数据
            echo $job->getError();
        }else{
            $job->add($data);
            $this->success('发布成功！',U('index/job_list'));
        }
    }
}