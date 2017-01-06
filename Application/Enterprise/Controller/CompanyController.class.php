<?php

namespace Enterprise\Controller;
use Think\Controller;
use Think\Page;

class CompanyController extends Controller {

    public function index(){
        $enterprise_info=M('enterprise_info');
        $enterprise_info=$enterprise_info->where(array("id" => session('eid')))->find();
        $com_id = $enterprise_info['company_id'];
        $this->assign("enterprise_info",$enterprise_info);

        $company=M('company');
        $company_info=$company->where(array("id" => $com_id))->find();
        $this->assign("company_info",$company_info);

        $this->display();
    }

    public function save(){
        $com_data['company_name']=I('company_name');
        $com_data['address']=I('address');
        $company_name=I('company_name');
        $com_data['introduction']=I('introduction');

        $com=D('company');

        $c_com=$com->create($com_data);
        if (!$c_com) {
            echo $com->getError();
        }else{
            $com->add($com_data);

            $company=M('company');
            $tid=$company->where("company_name= '$company_name'")->find();
            $com_id = $tid['id'];


            $enter_id = session('eid');

            $enter_data["id"]=$enter_id;
            $enter_data["company_id"]=$com_id;
            $enter_data['job']=I('job');
            $enter_data['name']=I('name');
            $enter_data['email']=I('email');
            $enter_data['phone']=I('phone');
            $enter_data['auditing']=2;

            $ent=M('enterprise_info');

            $c_ent=$ent->create($enter_data);
            if (!$c_ent) {
                echo $com->getError();
            }else{
                $ent->add($enter_data);
                $this->success('提交成功！请等待审核结果！',U('company/index'));
            }
        }
    }

    public function ajax_add(){

        $enterprise=M('enterprise_info');
        $uid=$enterprise->where("id =".session('eid'))->find();
        $enter_id = $uid['id'];
        $com_id = $uid['company_id'];

        $enter_data["id"]=$enter_id;
        $enter_data['job']=I('job');
        $enter_data['name']=I('name');
        $enter_data['email']=I('email');
        $enter_data['phone']=I('phone');

        // 修改
        $enter=D('enterprise_info');

        $c_ent=$enter->create($enter_data);
        if (!$c_ent) {
            $this->ajaxReturn($enter->getError(),"json");
        }else{
            $enter->save($enter_data);
        }

        $com_data["id"]=$com_id;
        $com_data['company_name']=I('company_name');
        $com_data['address']=I('address');
        $com_data['introduction']=I('introduction');

        // 修改
        $com=D('company');

        $c_com=$com->create($com_data);
        if (!$c_com) {
            $this->ajaxReturn($com->getError(),"json");
        }else{
            $com->save($com_data);
            $this->ajaxReturn(array('status'=>1),'json');
        }

    }
}
