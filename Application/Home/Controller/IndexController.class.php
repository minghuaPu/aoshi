<?php

namespace Home\Controller;
use Think\Controller;
use Think\Page;


class IndexController extends Controller {

 
    public function index(){

      $youke=session('user_login_status');
        $jobseekers_id=session('uid');
        if($youke){
            if($jobseekers_id){
                $name=M('jobseekers')->field("username")->where('uid='.$jobseekers_id) ->select();
                }
            }
        $this->assign("name",$name);
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

        $youke=session('user_login_status');
        $jobseekers_id=session('uid');
        if($youke){
            if($jobseekers_id){
                $name=M('jobseekers')->field("username")->where('uid='.$jobseekers_id) ->select();
                }
            }
        $this->assign("name",$name);



        // 第一步：实例化模型
       $job= M('job');



        // 第二步：查询职位列表信息
       
        $keys=$_REQUEST['key'];
        $where['job_name|job.company_name']=array('like',"%$keys%");
        //模糊查询条件，匹配输入框内的相关字段
        $where['status']=0;
    

        if(!empty($_POST['p'])){  //点击加载更多 
          $p = $_POST['p'];//增加的条目
          $b= 8; //显示条数
          $job_info=$job
          ->field("job.id,job_name,job.company_name,salary_low,salary_hig,job.city,work_time,education,photo,name,job")//查询指定的字段
          ->join("enterprise_info on enterprise_id=enterprise_info.id")
          ->where($where)
          ->limit($p,$b)
          ->select();
          $this->ajaxReturn($job_info,'JSON');
        }

        $count = $job->count();
        $Page  = new Page($count, 8);
        $show  = $Page->show();
        //显示三条
        
        $job_info=$job
        ->field("job.id,job_name,job.company_name,salary_low,salary_hig,job.city,work_time,education,photo,name,job")//查询指定的字段
        ->limit($Page->firstRow.','.$Page->listRows)
        ->join("enterprise_info on enterprise_id=enterprise_info.id")
        ->where($where)
        ->select();
       
       //echo $job->getLastSql();//获取上一次执行的sql语句
      


        // 第三步：赋值到模版变量
        $this->assign("job_info",$job_info);

        $this->display();
    }

    public function jobdetail()
    {

        $youke=session('user_login_status');
        $jobseekers_id=session('uid');
        if($youke){
            if($jobseekers_id){
                $name=M('jobseekers')->field("username")->where('uid='.$jobseekers_id) ->select();
                }
            }
        $this->assign("name",$name);

        $time=Date('H:i');
        $this->assign("time",$time);

          // 第一步：实例化模型
       $job= M('job');

       // 第二步：查询职位列表信息

       if ($_REQUEST['key']) {

          $this->success(U('Index/findjob'));
       }
       else{
        $id=$_REQUEST['id'];
        // $value=I('id');    //获取职位列表传来的id
        // $where['job.id']= $value;
        $where['job.id']=$_REQUEST['id'];
        $job_detail=$job
                ->field("job.id,job_name,job_require,job_describe,job.add_time,job.address,job.company_name,salary_low,salary_hig,job.city,work_time,education,introduction,company.address,scale,enterprise_info.phone,enterprise_info.photo,enterprise_info.name,enterprise_info.job")
                //查询指定的字段
                ->join("enterprise_info on enterprise_info.id=job.enterprise_id")
                ->join("company on company.company_name=job.company_name")
                ->where($where)
                ->select();
       }
       
       //echo $job->getLastSql();//获取上一次执行的sql语句
      
       // 作关联查询

        // 第三步：赋值到模版变量
        $this->assign("job_detail",$job_detail);

        $this->display();

        session_start();
   
    }


     public function delivery(){
            
            $job_id=I('id');
            $jobseeker_id=session('uid');
            $datas['job_id']=$job_id;
            $datas['jobseeker_id']=$jobseeker_id;       
            $datas['delivery_time']=date('Y-m-d  H:i:s');
            $posi=session('position');
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
                           echo json_encode(array('msg'=>'成功投递！','status'=>'2'));
                            }
                        }
                else{
                            
                       echo json_encode(array('msg'=>'请完善信息！---（立即转跳前往用户简历管理）','status'=>'0','url'=> U('Jobseekers/Index/index')));
                    }
                    

                }
            else{
            	if($posi != $job_id){
                    session('position',$job_id);
                }
                echo json_encode(array('msg'=>'请先登录！---（立即转跳前往求职者登录界面！）','url'=> U('Jobseekers/Login/index'),'status'=>'-1'));
            }  
       }       
}