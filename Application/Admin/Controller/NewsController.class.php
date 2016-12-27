<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
use Common\Controller\AuthController;
class NewsController extends AuthController{
     public function index(){
        $news=M('news');//模型实例化
        $info=$news->select();
        $this->assign('info',$info);//模板赋值
        $this->display();
    }
    //添加新闻
    public function add(){
        $this->display();
    }
    //修改新闻
    public function change(){
        $id=I('id');
        $info=D('news')->where("id=$id ")->select();
        $this->assign('info',$info);
        $this->display(); 
    }
    public function view(){
        $id=I('id');
        $info=D('news')->where("id =$id")->select();

        //print_r($info);
        $this->assign('info',$info);
        $this->display(); 
    }
    
    //删除单个新闻
    public function delete(){
        $id=I('id');
        $info=D('news')->where("id=$id ")->delete();
        if ($info) {
            $this->success('删除成功！',U('News/index'));
        }else{
            $this->error('删除错误，原因：'.$info->getError(),U('News/index'));
        }
    }

     //批量删除
    public function all_delete()
    {
        $ids=I('ids');

        $rt_info=D('news')->where("id in($ids) ")->delete();
        if ($rt_info) {
            $this->ajaxReturn(array('msg'=>'删除成功！','status'=>1),'json');
        }else{
            $this->ajaxReturn(array('msg'=>'删除失败','status'=>0),'json');
        }
    }

    public function save(){
        /* import('ORG.Net.UploadFile');*/
        $upload = new Upload();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload -> autoSub = false;
       /* $info   =   $upload->uploadOne($_FILES['Filedata']);*/
        $upload->exts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath="./Public/upphoto/news/";
        $up=$upload->upload();
      /*  print_r($up['upphoto']);*/
         $photo_url=str_replace('./Public/', "", $upload->rootPath).$up['upphoto']['savename'];

        if(!$up) {
        // 上传错误提示错误信息
            $this->error($up->getError());
        }

        $news=D('news');//实例化模型    database
        $data['news_title']=I('news_title');//获取传输过来的数据
        $data['news_content']=I('news_content');
        $data['cata_id']=I('cata_id');
        $data['author']=I('author');
        $data['add_time']=time();
         $data['status']=I('status');
        $data['news_picture']=$photo_url;
        //print_r($news->create());
        if(!$news->create()){
             echo $news->getError(); 
        }else{
            $news->add($data);//添加入数据库
            $this->success('添加成功！',U('News/index'));//跳转的方法
        }

        
    }
     public function update(){
          $news=D('news');//实例化模型    database
        /* import('ORG.Net.UploadFile');*/
            $upload = new Upload();// 实例化上传类
            $upload->maxSize  = 3145728 ;// 设置附件上传大小
            $upload -> autoSub = false;
           /* $info   =   $upload->uploadOne($_FILES['Filedata']);*/
            $upload->exts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath="./Public/upphoto/news/";
            $up=$upload->upload();
          /*  print_r($up['upphoto']);*/
             $photo_url=str_replace('./Public/', "", $upload->rootPath).$up['upphoto']['savename'];
            if ($up) {
               $data['news_picture']=$photo_url;
             } 
            else if(!$up) {
                
                if ($upload->getError()=='没有文件被上传！') {
                    
                }else{
                    $this->error($upload->getError()); 
                }  
            }
        
        $id=I('id');
        $data['news_title']=I('article_title');//获取传输过来的数据
        $data['news_content']=I('article_content');
        $data['cata_id']=I('cata_id');
        $data['add_time']=time();
        $data['status']=I('status');
        //print_r($news->create());
        if(!$news->create()){
             echo $news->getError(); 
        }else{
           $news->where("id=$id")->save($data);
            $this->success('更新成功！',U('News/index'));//跳转的方法
        }

        
    }
}


?>