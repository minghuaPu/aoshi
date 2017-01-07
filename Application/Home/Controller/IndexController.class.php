<?php

namespace Home\Controller;
use Think\Controller;



class IndexController extends Controller {

 
    public function index(){
        // 第一步：实例化模型
        $job= M('job');

        // 第二步：查询职位列表信息

        if ($_REQUEST['key']) {//如果有搜索，就再添加一个条件
            $keys=$_REQUEST['key'];
            $where['job_name|company_name']=array('like',"%$keys%",);

            // $where['_string']='job_name like "%$keys%" OR company_name like "%$keys%"';
            //模糊查询条件，匹配输入框内的相关字段
            $job_info=$job
                ->field("job.id,job_name,money,company_name")//查询指定的字段
                ->join("company on job.enterprise_id=company.enterprise_id")//join是关联查询
                ->where($where)
                ->select();
        }

        else{
            $job_info=$job
                ->field("job.id,job_name,money,company_name")//查询指定的字段
                ->join("company on job.enterprise_id=company.enterprise_id")//join是关联查询
                ->select();
        }

        // echo $job->getLastSql();//获取上一次执行的sql语句

        // 作关联查询

        // 第三步：赋值到模版变量
        $this->assign("job_info",$job_info);

        $this->display();
    }

    public function findjob()
    {
      
        // 第一步：实例化模型
       $job= M('job');

        // 第二步：查询职位列表信息
       
        if ($_REQUEST['key']) {//如果有搜索，就再添加一个条件
                $keys=$_REQUEST['key'];
                $where['job_name|company_name']=array('like',"%$keys%",);
            
                // $where['_string']='job_name like "%$keys%" OR company_name like "%$keys%"';
                //模糊查询条件，匹配输入框内的相关字段
                $job_info=$job
                ->field("job.id,job_name,money,company_name")//查询指定的字段
                ->join("company on job.enterprise_id=company.enterprise_id")//join是关联查询
                ->where($where)
                ->select();
              }
       
        else{
          $job_info=$job
                ->field("job.id,job_name,money,company_name")//查询指定的字段
                ->join("company on job.enterprise_id=company.enterprise_id")//join是关联查询
                ->select();
        }
       
       // echo $job->getLastSql();//获取上一次执行的sql语句
      
       // 作关联查询

        // 第三步：赋值到模版变量
        $this->assign("job_info",$job_info);

        $this->display();
    }

    public function jobdetail()
    {
          // 第一步：实例化模型
       $job= M('job');

       // 第二步：查询职位列表信息

       if ($_REQUEST['key']) {

          $keys=$_REQUEST['key'];
                $where['job_name|company_name']=array('like',"%$keys%",);
            
                // $where['_string']='job_name like "%$keys%" OR company_name like "%$keys%"';
                //模糊查询条件，匹配输入框内的相关字段
                $job_info=$job
                ->field("job.id,job_name,money,company_name")//查询指定的字段
                ->join("company on job.enterprise_id=company.enterprise_id")//join是关联查询
                ->where($where)
                ->select();
       }
       else{
        //echo $url = location.search;
       
        $where['job_name']= $_REQUEST["value"];
        $job_detail=$job
                ->field("job.id,job_name,money,job_require,job_describe,job.add_time,place,company_name")//查询指定的字段
                ->join("company on job.enterprise_id=company.enterprise_id")//join是关联查询
                // ->where($where)
                ->where('job.id=14')
                ->select();
       }
       
       //print_r($where['job_name']);
       // echo $job->getLastSql();//获取上一次执行的sql语句
      
       // 作关联查询

        // 第三步：赋值到模版变量
        $this->assign("job_detail",$job_detail);

          $this->display();
    }

}