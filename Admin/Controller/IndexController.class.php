<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

	//判断是否登录
	public function _initialize(){
	    if ($_SESSION['admin']['id']=="") {
           $this->redirect('Login/index');
        }
	}
    //退出登录
    public function LoginOut(){
        session_destroy();
        $this->success('退出成功',U('Login/index'));
    }
    //首页框架
    public function Index(){
        $id=(int)$_SESSION['admin']['id'];
        $re=M('ms_tools_admin')->where("id=$id")->find();
        $this->assign('re',$re);
        $this->display();
    }
    //首页详情
    public function Index_1(){
    	//有趣网站统计
        $fweb=M('ms_tools_web')->count();
        $this->assign('fweb',$fweb);
        //实用工具统计
        $tool=M('ms_tools_tool')->count();
        $this->assign('tool',$tool);
        //网页特效统计
        $webp=M('ms_tools_webpage')->count();
        $this->assign('webp',$webp);
        //微信应用统计
        $wx=M('ms_tools_wxapp')->count();
        $this->assign('wx',$wx);
        //API应用统计
        $api=M('ms_tools_api')->count();
        $this->assign('api',$api);
        //网页游戏统计
        $game=M('ms_tools_game')->count();
        $this->assign('game',$game);
        $bb=M('ms_tools_bb')->select();
        $this->assign('bb',$bb);
        $this->display();
    }
    public function adminedit(){
        $id=(int)$_SESSION['admin']['id'];
        $re=M('ms_tools_admin')->where("id=$id")->find();
        $this->assign('re',$re);
        $this->display();
    }
    public function adminup(){
       
       $data['password']=md5($_POST['xps']);
       $data['email']=$_POST['email'];

       $re=M('ms_tools_admin')->where("id=1")->save($data);
       if (!empty($re)) {
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }
}
    