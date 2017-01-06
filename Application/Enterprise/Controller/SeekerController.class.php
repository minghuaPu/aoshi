<?php
namespace Enterprise\Controller;
use Think\Controller;

class SeekerController extends Controller{
    public function resume(){
        $userInfo=session('auth');
        if ($userInfo) {

            $this->display();
        }else{
            $this->error('请先登录！',U('Login/login'));
        }


    }
}