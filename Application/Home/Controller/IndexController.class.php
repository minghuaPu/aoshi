<?php

namespace Home\Controller;
use Think\Controller;



class IndexController extends Controller {

 
    public function index(){
        

        $this->display();
    }

    public function findjob()
    {
        // 第一步：实例化模型
       $job= M('job');

       // 第二步：查询职位列表信息
       
       $job_info=$job
                ->field("job.id,job_name,money,company_name")//查询指定的字段
                ->join("company on job.enterprise_id=company.enterprise_id")//join是关联查询
                ->select();
       
       // echo $job->getLastSql();//获取上一次执行的sql语句
      
       // 作关联查询

        // 第三步：赋值到模版变量
        $this->assign("job_info",$job_info);

        $this->display();
    }

    public function jobdetail()
    {
          $this->display();
    }

}