<?php

namespace Enterprise\Controller;
use Think\Controller;



class IndexController extends Controller {

    public function index(){

        $userInfo=session('auth');
<<<<<<< HEAD
=======

>>>>>>> 530c8c5de4819f04bacd4bf682399d8147ec76fb
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


}