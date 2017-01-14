<?php

namespace Home\Controller;
use Think\Controller;



class IndexController extends Controller {

 
    public function index(){
        // 第一步：实例化模型
        $job= M('job');

        // 第二步：查询职位列表信息

         if ($_REQUEST['key']) {//如果有搜索，就跳转到职位列表页面
                $this->success(U('Index/findjob'));
              }

        // 第三步：赋值到模版变量
        $this->assign("job_info",$job_info);

        $this->display();
    }

    public function findjob()
    {

        // $youke=session('user_login_status');
        // $jobseekers_id=session('uid');
        // if($youke){
        //     if($jobseekers_id){
        //         $name=M('resume_basic')->field("resume_basic.nickname")->where('uid='.$jobseekers_id) ->select();
        //         }
        //     }
        // $this->assign("name",$name);

      
        // 第一步：实例化模型
       $job= M('job');

        // 第二步：查询职位列表信息
       
        if ($_REQUEST['key']) {//如果有搜索，就再添加一个条件
                $keys=$_REQUEST['key'];
                $where['job_name|job.company_name']=array('like',"%$keys%");
            
                //模糊查询条件，匹配输入框内的相关字段
                $job_info=$job
                ->field("job.id,job_name,job.company_name,salary_low,salary_hig,job.city,work_time,education")//查询指定的字段
                ->join("company on job.enterprise_id=company.id")//join是关联查询
                ->where($where)
                ->select();
              }
       
        else{
          $job_info=$job
                ->field("job.id,job_name,job.company_name,salary_low,salary_hig,job.city,work_time,education")//查询指定的字段
                ->join("company on job.enterprise_id=company.id")//join是关联查询
                ->select();
        }
       
       //echo $job->getLastSql();//获取上一次执行的sql语句
      
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

          $this->success(U('Index/findjob'));
       }
       else{
        
        $value=I('id');    //获取职位列表传来的id
        $where['job.id']= $value;
        $job_detail=$job
                ->field("job.id,job_name,job_require,job_describe,job.add_time,job.address,job.company_name,salary_low,salary_hig,job.city,work_time,education")//查询指定的字段
                ->join("company on job.enterprise_id=company.id")//join是关联查询
                ->where($where)
                ->select();
       }
       
       //echo $job->getLastSql();//获取上一次执行的sql语句
      
       // 作关联查询

        // 第三步：赋值到模版变量
        $this->assign("job_detail",$job_detail);

        $this->display();

          // session_start();  
   
    }


     public function delivery(){
            
            $job_id=I('id');
            $jobseeker_id=session('uid');
            $datas['job_id']=$job_id;
            $datas['jobseeker_id']=$jobseeker_id;       
            $datas['delivery_time']=date('Y-m-d  h:n:s');;

            if(session('user_login_status')){
                
                $jobseekers_info= M('resume_delivery')->field("resume_delivery.delivery_time")->where("job_id =$job_id and jobseeker_id = $jobseeker_id")->select();//简历基本信
                $seekers_info= M('resume_delivery')->field("resume_delivery.delivery_time")->where(" jobseeker_id = $jobseeker_id")->select();//简历基本信
                $basic_info= M('resume_basic')->field("resume_basic.basic_id")->where(" uid = $jobseeker_id")->select();//简历基本信
                
                if($basic_info){
                        if($jobseekers_info){
                            //当用户投过这职位时
                         echo   json_encode(array('msg'=>'该职位已经投递过了！','status'=>'1'));
                            }
                        else{
                            M('resume_delivery')->add($datas);
                           echo json_encode(array('msg'=>'已成功投递简历','status'=>'2'));
                            }
                        }
                else{
                            
                       echo json_encode(array('msg'=>'请完善','status'=>'0'));
                    }
                    

                }
            else{
                  echo  json_encode(array('url'=> U('Jobseekers/Login/index',array('job_id'=>$job_id)),'status'=>'-1'));
                 
                //$this->error('请登录！',U('Jobseekers/Login/index',array('job_id'=>$job_id)));
                }   
            
            }

           
}