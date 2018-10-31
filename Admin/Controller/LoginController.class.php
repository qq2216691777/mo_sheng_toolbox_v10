<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }
    //验证登录
    public function ajaxLogin(){
        if(!IS_AJAX){
            $this->error('提交方式错误!');
        }else{
        	// echo "<meta http-equiv='Content-Type' content='text/Html; charset=utf-8'>";
        	$name=trim($_POST['name']);
            $pwd=trim(MD5($_POST['pass']));
            
            $user=M('ms_tools_admin')->where(array('email'=>$name,'password'=>$pwd))->find();
            
            if(!empty($user)){
                $_SESSION['admin']['id']=$user['id'];
                $this->success('正在登陆',U('Index/index'),true,'2');
            }else{
                $this->error('账号密码错误!');
            }
        }
    }
}