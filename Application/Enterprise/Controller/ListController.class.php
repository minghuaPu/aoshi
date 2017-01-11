<?php
/**
 * Created by PhpStorm.
 * User: iphone
 * Date: 2017/1/7
 * Time: 10:25
 */
namespace Enterprise\Controller;
use Think\Controller;
use Think\Page;

class ListController extends Controller{
    public function job_list()
    {
        // 通过session的id来搜索enterprise_info表，获取用户信息
        $enterprise_info=M('enterprise_info');
        $enterprise_info=$enterprise_info->where(array("id" => session('eid')))->find();
        $this->assign("enterprise_info",$enterprise_info);

        $job=M('job');
        $enterprise_info=M('enterprise_info');
        $enterprise_info=$enterprise_info->where(array("id" => session('eid')))->find();
        $com_id=$enterprise_info['company_id'];

        $count=$job->where(array("company_id" => $com_id))->count();

        $Page = new Page($count,8);
        $show   = $Page->show();
        $this->assign('page',$show);
        $info=$job->where(array("company_id" => $com_id))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $area=json_decode($info['place'],true);
        $this->assign("area",$area);
        $this->assign('job_info',$info);
        $this->display();
    }


    public function ajax_add(){
        $data['id']=I("id");

        $data['money']=I('money');
        $data['place']=I('place');
        $data['job_name']=I('job_name');
        $data['job_require']=I('job_require');


        // 修改
        $job=D('job');

        $c_rtn=$job->create($data);
        if (!$c_rtn) {
            $this->ajaxReturn($job->getError(),"json");
        }else{
            $job->save($data);
            $this->ajaxReturn(array('status'=>1),'json');
        }
    }

    public function close_job(){
        $data['id']=I("id");
        $data['status']=0;

        $job=D('job');

        $c_rtn=$job->create($data);
        if (!$c_rtn) {
            $this->ajaxReturn($job->getError(),"json");
        }else{
            $job->save($data);
            $this->ajaxReturn(array('status'=>1),'json');
        }
    }

    public function delete(){
        $id=I("id");
        $data['status']=3;

        $rt_info=D('job')->where("id=$id")->delete();
        if (!$rt_info) {
            $this->ajaxReturn($rt_info->getError(),"json");
        }else{
            $job->save($data);
            $this->ajaxReturn(array('status'=>1),'json');
        }
//        $rt_info=$job->where("id=$id")->delete();
//        if ($rt_info) {
//
//            $this->ajaxReturn(array('msg'=>'删除成功！','status'=>1),'json');
//        }else{
//            $this->ajaxReturn(array('msg'=>'删除失败','status'=>0),'json');
//        }
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