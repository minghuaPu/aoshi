<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
class NewsController extends Controller{
    public function index(){
      $news=M('news');

      $type['data']=$news->where('status=1 and cata_id="数据报告"')->order('add_time desc')->find();
      $type['article']=$news->where('status=1 and cata_id="干货文章"')->order('add_time desc')->find();
      $type['company']=$news->where('status=1 and cata_id="公司动态"')->order('add_time desc')->find();
      $this->assign('type',$type);
      $info=$news->where('status=1')->order('add_time desc')->limit(10)->select();
     /*print_r($info);*/
      $this->assign('info',$info);//模板赋值
      $this->display();
    }
    public function news_detail(){
        $id=I('id');
        $info=D('news')->where("id =$id")->find();

        //print_r($info);
        $this->assign('info',$info);
        $this->display(); 
    }

}


?>