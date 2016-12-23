<?php

namespace Enterprise\Controller;
use Think\Controller;



class IndexController extends Controller {

    public function index(){

        $userInfo=session('auth');

        if ($userInfo) {
            // 怎么查询列表数据
            // 第一步：查询列表信息
            $article=M('article');

            $info=$article->order('id desc')->select();

            // 第二步：模版赋值
            $this->assign('info',$info);

            $this->display();
        }else{
            $this->error('请先登录！',U('Login/login'));
        }
    }

    public function add_job()
    {
        $this->display();
//        $this->success('发布成功！',U('Index/job_list'));
    }

    public function job_list()
    {
        $job=M('job');
        $job_info=$job->where(array("enterprise_id" => session('tid')))->select();
        $this->assign("job_info",$job_info);
        $this->display();
    }

    public function save(){
        $tid=session('tid');
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