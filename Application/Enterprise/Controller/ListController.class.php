<?php
/**
 * Created by PhpStorm.
 * User: iphone
 * Date: 2017/1/7
 * Time: 10:25
 */
namespace Enterprise\Controller;
use Enterprise\Controller\BaseController;
use Think\Page;

class ListController extends BaseController{
    public function job_list()
    {
        $job=M('job');

        $key="";
        $work_time="选择时间";
        $education="选择学历";

        if (I('key')){
            $key=I('key');
            $where['job_name']=array('like',"%$key%");
        }
        if (I('work_time')){
            if (trim(I('work_time'))!="选择时间"){
                $work_time=I('work_time');
                $where['work_time']=array('like',"%$work_time%",);
            }
        }
        if (I('education')){
            if (trim(I('education'))!="选择学历"){
                $education=I('education');
                $where['education']=array('like',"%$education%",);
            }
        }
        $where['enterprise_id']=session('eid');
        $job_info=$job->where($where)->order('id desc')->select();

        $search_info['key']=$key;
        $search_info['work_time']=$work_time;
        $search_info['education']=$education;


        $this->assign('job_info',$job_info);
        $this->assign('search_info',$search_info);

        $this->display();
    }



    public function close_job(){
        $data['id']=I("id");
        $data['status']=1;

        $job=D('job');

        $c_rtn=$job->create($data);
        if (!$c_rtn) {
            $this->ajaxReturn(array('msg'=>'关闭失败','status'=>0),'json');
        }else{
            $job->save($data);
            $this->ajaxReturn(array('msg'=>'关闭成功！','status'=>1),'json');
        }
    }

    public function delete_all()
    {
        $ids=I('ids');
        $job=D('job');
        $rt_info=$job->where("id in($ids) ")->delete();
        if ($rt_info) {
            $this->ajaxReturn(array('msg'=>'删除成功！','status'=>1),'json');
        }else{
            $this->ajaxReturn(array('msg'=>'删除失败','status'=>0),'json');
        }
    }

    public function delete(){

        $id=I("id");

        $job=D('job');
        $rt_info=$job->where("id=$id")->delete();
        if ($rt_info) {
            $this->ajaxReturn(array('msg'=>'删除成功！','status'=>1),'json');
        }else{
            $this->ajaxReturn(array('msg'=>'删除失败','status'=>0),'json');
        }
    }

    public function all_delete()
    {
        $ids=I('ids');

        $job=D('job');
        $rt_info=$job->where("id in($ids) ")->delete();
        if ($rt_info) {
            $this->ajaxReturn(array('msg'=>'删除成功！','status'=>1),'json');
        }else{
            $this->ajaxReturn(array('msg'=>'删除失败','status'=>0),'json');
        }
    }
}