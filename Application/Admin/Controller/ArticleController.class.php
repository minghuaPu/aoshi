<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\AuthController;//权限控制
use Think\Upload;
use Think\Page;

class ArticleController extends AuthController {


    public function index(){
         // 怎么查询列表数据
        // 第一步：查询列表信息
        $article=M('article');

        $count=$article->count();//内容总数量
            
        $Page       = new Page($count,4);// 第一个参数：总数量，第二个参数：每一页显示的数量；
        $show       = $Page->show();// 分页显示输出 //for <a> 
        $this->assign('page',$show);// 赋值分页输出
        
        $info=$article->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        // 第二步：模版赋值
        $this->assign('info',$info);

        $this->display();
      
    }

    //添加一条记录
    public function add()
    {
    	$this->display();
    }

    public function save()
    {

    	$article=D('article');//怎么实例化模型   D:(Database)
    	$data['article_title']=I('article_title');//获取传输过来的参数 I:(input)
    	$data['article_content']=I('article_content');
       if($_FILES['thumb']['size']>0){
             // 保存图片类
           $upload=new Upload();
           //配置相关参数
           $upload->maxSize="10240000";//10M
           $upload->exts=array('jpg','gif','jpeg','png');
           $upload -> autoSub = FALSE;
           $upload->rootPath="./Public/upload/news/";
           //上传图片
           $up_info=$upload->upload();

           if (!$up_info) {
               $this -> error($upload->getError());
           }else{
                $data['thumb']= str_replace('./', "/", $upload->rootPath).$up_info['thumb']['savename'];
           }
      }

      
       $data=$article->create($data);//加了自动完成，create返回的值重新赋到保存数组里面

       if(! $data){//校验数据
            echo $article->getError();
        }else{
            $article->add($data);
            $this->success('添加成功！',U('Article/index'));//跳转的方法
        }
        


    }

    //删除信息
    public function delete()
    {
        $id=I('id');

        $rt_info=D('article')->where("id=$id")->delete();
        if ($rt_info) {
            $this->success('删除成功！',U('Article/index'));
        }else{
            $this->error('删除错误，原因：'.$article->getError(),U('Article/index'));
        }
    }

    //批量删除
    public function all_delete()
    {
        $ids=I('ids');

        $rt_info=D('article')->where("id in($ids) ")->delete();
        if ($rt_info) {
            $this->ajaxReturn(array('msg'=>'删除成功！','status'=>1),'json');
        }else{
            $this->ajaxReturn(array('msg'=>'删除失败','status'=>0),'json');
        }
    }


    public function edit()
    {
        $id=I('id');
        $article_info=D('article')->where("id=$id ")->find();

        $this->assign('article_info',$article_info);
        $this->display();
    }

    public function update()
    {
         $article=D('article');//怎么实例化模型   D:(Database)
         $data['article_title']=I('article_title');//获取传输过来的参数 I:(input)
         $data['article_content']=I('article_content');
         $id=I('id');


         if($_FILES['thumb']['size']>0){
             // 保存图片类
           $upload=new Upload();
           //配置相关参数
           $upload->maxSize="10240000";//10M
           $upload->exts=array('jpg','gif','jpeg','png');
           $upload -> autoSub = FALSE;
           $upload->rootPath="./Public/upload/news/";
           //上传图片
           $up_info=$upload->upload();

           if (!$up_info) {
               $this -> error($upload->getError());
           }else{
                $data['thumb']= str_replace('./', "/", $upload->rootPath).$up_info['thumb']['savename'];
           }
          
         }
      

       

       $data=$article->create($data);//加了自动完成，create返回的值重新赋到保存数组里面


       if(! $data){//校验数据
            echo $article->getError();
        }else{
            $article->where("id=$id")->save($data);
            
            $this->success('更新成功！',U('Article/index'));//跳转的方法
        }
    }

    public function view()
    {
       $article_d=D('Article');

       $id=I('id');

       $info=$article_d->where("id= $id")->find();

       $this->assign('info',$info);
        $this->display();
    }

    public function ajax_edit()
    {
       $data['id']=I("id");
       if (!$data['id']) {
         $this->error("操作有误");
       }
       $data['article_title']=I("title");

       // 修改
       $article=D('Article');

       $c_rtn=$article->create($data);
       if (!$c_rtn) {
            $this->ajaxReturn($article->getError(),"json");
       }else{
          $article->save($data);
          $this->ajaxReturn(array('status'=>1),'json');
       }
    }

}