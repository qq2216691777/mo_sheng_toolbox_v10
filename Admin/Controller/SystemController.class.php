<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends Controller {
    //判断是否登录
    public function _initialize(){
        if ($_SESSION['admin']['id']=="") {
           $this->redirect('Login/index');
        }
    }
    public function index(){
        $re=M('ms_tools_system')->where("id=1")->find();
        $author=M('ms_tools_all')->where("id=1")->find();
        $this->assign('author',$author);
        $this->display();
    }
    public function kfup(){
        $data['qq']=$_POST['qq'];
        $data['weibo']=$_POST['weibo'];

        $re=M('ms_tools_system')->where("id=1")->save($data);
        if (!empty($re)) {
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }
    public function logoup(){
        $t=$_POST['tt'];
        $array = explode(",",$t); 
        $data['t1']=$array[0];
        $data['t2']=$array[1];
        $data['t3']=$array[2];
        $data['t4']=$array[3];
        $data['t5']=$array[4];
        $data['t6']=$array[5];
        $data['logo']=$_POST['logo'];
        $re=M('ms_tools_system')->where("id=1")->save($data);
        if (!empty($re)) {
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }
    public function jbup(){
        $data['url']=$_POST['url'];
        $data['title']=$_POST['title'];
        $data['ftitle']=$_POST['ft'];
        $data['beian']=$_POST['beian'];
        $data['footer']=$_POST['footer'];
        $data['keyword']=$_POST['kw'];
        $data['descc']=$_POST['descc'];
        $re=M('ms_tools_system')->where("id=1")->save($data);
        if (!empty($re)) {
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }
    public function ajaxzzxg(){
       
        $yau=$_POST['yau'];
        $au=$_POST['au'];
        $sql="UPDATE ms_tools_web SET author = replace(author, '$yau', '$au')";
        $car=D('web');
        $data=$car->query($sql);
        $sql="UPDATE ms_tools_all SET author = replace(author, '$yau', '$au')";
        $car=D('all');
        $data=$car->query($sql);
        $sql="UPDATE ms_tools_webpage SET author = replace(author, '$yau', '$au')";
        $car=D('webpage');
        $data=$car->query($sql);
        $sql="UPDATE ms_tools_game SET author = replace(author, '$yau', '$au')";
        $car=D('game');
        $data=$car->query($sql);
        $sql="UPDATE ms_tools_tool SET author = replace(author, '$yau', '$au')";
        $car=D('tool');
        $data=$car->query($sql);
        $sql="UPDATE ms_tools_wxapp SET author = replace(author, '$yau', '$au')";
        $car=D('wxapp');
        $data=$car->query($sql);
        $sql="UPDATE ms_tools_api SET author = replace(author, '$yau', '$au')";
        $car=D('api');
        $data=$car->query($sql);
        $this->success('修改成功',U('system/index'));
    }
}