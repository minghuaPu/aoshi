<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
class NewsController extends Controller{
	 
    public function index(){
      $news=M('news');
      $info=$news->field("id,cata_id,news_title,news_picture")->select();
     /* print_r($info);*/
      $this->assign('info',$info);//模板赋值
      $this->display();
    }
    public function news_detail(){
        $id=I('id');
        $info=D('news')->where("id =$id")->select();

        //print_r($info);
        $this->assign('info',$info);
        $this->display(); 
    }

}

?>