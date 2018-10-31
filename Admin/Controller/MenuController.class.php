<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller {
	//判断是否登录
    public function _initialize(){
        if ($_SESSION['admin']['id']=="") {
           $this->redirect('Login/index');
        }
    }
    public function index(){
        $menu=M('ms_tools_menu')->select();
        $this->assign('menu',$menu);
        $link=M('ms_tools_links')->select();
        $this->assign('link',$link);
        $yiyan=M('ms_tools_yiyan')->select();
        $this->assign('yiyan',$yiyan);
        $this->display();
    }

    public function menuadd(){
        $data['menu']=$_POST['menu'];
        $data['link']=$_POST['menulink'];
        $data['descc']=$_POST['menudescc'];
        $re=M('ms_tools_menu')->add($data);
        if (!empty($re)) {
            $this->success('添加成功',U('Menu/index'));
        }else{
            $this->error('添加失败');
        }
    }
    public function menudel(){
        $id=(int)$_POST['id'];
        $res=M('ms_tools_menu')->where("id=$id")->delete();
        if (!empty($res)) {
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function linkadd(){
        $data['title']=$_POST['link'];
        $data['link']=$_POST['linkurl'];
        $data['descc']=$_POST['linkdescc'];
        $re=M('ms_tools_links')->add($data);
        if (!empty($re)) {
            $this->success('添加成功',U('Menu/index'));
        }else{
            $this->error('添加失败');
        }
    }
    public function linkdel(){
        $id=(int)$_POST['id'];
        $res=M('ms_tools_links')->where("id=$id")->delete();
        if (!empty($res)) {
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function yydel(){
        $id=(int)$_POST['id'];
        $res=M('ms_tools_yiyan')->where("id=$id")->delete();
        if (!empty($res)) {
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function yyadd(){
        $data['value']=$_POST['yy'];
       
        $re=M('ms_tools_yiyan')->add($data);
        if (!empty($re)) {
            $this->success('添加成功',U('Menu/index'));
        }else{
            $this->error('添加失败');
        }
    }
    
}