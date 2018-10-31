<?php
namespace Admin\Controller;
use Think\Controller;
class ToolController extends Controller {
    //判断是否登录
    public function _initialize(){
        if ($_SESSION['admin']['id']=="") {
           $this->redirect('Login/index');
        }
    }
    //有趣网站
    public function web(){
        $web=M('ms_tools_web')->select();
        $this->assign('web',$web);
        $this->display();
    }
    public function webedit(){
        $id=(int)$_GET['id'];
        $res=M('ms_tools_web')->where("id=$id")->find();
        $this->assign('res',$res);
        $this->display();
    }
    public function webdel(){
        //echo "<meta http-equiv='Content-Type' content='text/Html; charset=utf-8'>";
        $id=(int)$_POST['id'];
        $res=M('ms_tools_web')->where("id=$id")->delete();
        if (!empty($res)) {
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function ajaxwebedit(){
        //echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
        $web=M('ms_tools_web');
        $id=(int)$_POST['id'];
        $data['id'] = $id;
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->save($data); // 根据条件保存修改的数据
       
        if (!empty($web)) {
            $this->success('修改成功',U('Tool/web'));
        }else{
            $this->error('修改失败');
        }
    }
    public function webadd(){
        $this->display();
    }
    public function ajaxwebadd(){
        $web=M('ms_tools_web');
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->add($data); // 根据条件保存修改的数据
        $res=M('ms_tools_all')->add($data);
        if (!empty($web)) {
            $this->success('添加成功',U('Tool/web'));
        }else{
            $this->error('添加失败');
        }
    }
    //实用工具
    public function tool(){
        $tool=M('ms_tools_tool')->select();
        $this->assign('tool',$tool);
        $this->display();
    }
    public function tooledit(){
        $id=(int)$_GET['id'];
        $res=M('ms_tools_tool')->where("id=$id")->find();
        $this->assign('res',$res);
        $this->display();
    }
    public function tooldel(){
        //echo "<meta http-equiv='Content-Type' content='text/Html; charset=utf-8'>";
        $id=(int)$_POST['id'];
        $res=M('ms_tools_tool')->where("id=$id")->delete();
        if (!empty($res)) {
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function ajaxtooledit(){
        $web=M('ms_tools_tool');
        $id=(int)$_POST['id'];
        $data['id'] = $id;
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->save($data); // 根据条件保存修改的数据
       
        if (!empty($web)) {
            $this->success('修改成功',U('Tool/tool'));
        }else{
            $this->error('修改失败');
        }
    }
    public function tooladd(){
        $this->display();
    }
    public function ajaxtooladd(){
        $web=M('ms_tools_tool');
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->add($data); // 根据条件保存修改的数据
        $res=M('ms_tools_all')->add($data);
        if (!empty($web)) {
            $this->success('添加成功',U('Tool/tool'));
        }else{
            $this->error('添加失败');
        }
    }
    //网页特效
    public function webpage(){
        $webpage=M('ms_tools_webpage')->select();
        $this->assign('webpage',$webpage);
        $this->display();
    }
    public function webpageedit(){
        $id=(int)$_GET['id'];
        $res=M('ms_tools_webpage')->where("id=$id")->find();
        $this->assign('res',$res);
        $this->display();
    }
    public function webpagedel(){
        //echo "<meta http-equiv='Content-Type' content='text/Html; charset=utf-8'>";
        $id=(int)$_POST['id'];
        $res=M('ms_tools_webpage')->where("id=$id")->delete();
        if (!empty($res)) {
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function ajaxwebpageedit(){
        $web=M('ms_tools_webpage');
        $id=(int)$_POST['id'];
        $data['id'] = $id;
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->save($data); // 根据条件保存修改的数据
       
        if (!empty($web)) {
            $this->success('修改成功',U('Tool/webpage'));
        }else{
            $this->error('修改失败');
        }
    }
    public function webpageadd(){
        $this->display();
    }
    public function ajaxwebpageadd(){
        $web=M('ms_tools_webpage');
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->add($data); // 根据条件保存修改的数据
        $res=M('ms_tools_all')->add($data);
        if (!empty($web)) {
            $this->success('添加成功',U('Tool/webpage'));
        }else{
            $this->error('添加失败');
        }
    }
    //微信应用
    public function wxapp(){
        $wxapp=M('ms_tools_wxapp')->select();
        $this->assign('wxapp',$wxapp);
        $this->display();
    }
    public function wxappedit(){
        $id=(int)$_GET['id'];
        $res=M('ms_tools_wxapp')->where("id=$id")->find();
        $this->assign('res',$res);
        $this->display();
    }
    public function wxappdel(){
        //echo "<meta http-equiv='Content-Type' content='text/Html; charset=utf-8'>";
        $id=(int)$_POST['id'];
        $res=M('ms_tools_wxapp')->where("id=$id")->delete();
        if (!empty($res)) {
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function ajaxwxappedit(){
        $web=M('ms_tools_wxapp');
        $id=(int)$_POST['id'];
        $data['id'] = $id;
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->save($data); // 根据条件保存修改的数据
       
        if (!empty($web)) {
            $this->success('修改成功',U('Tool/wxapp'));
        }else{
            $this->error('修改失败');
        }
    }
    public function wxappadd(){
        $this->display();
    }
    public function ajaxwxappadd(){
        $web=M('ms_tools_wxapp');
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->add($data); // 根据条件保存修改的数据
        $res=M('ms_tools_all')->add($data);
        if (!empty($web)) {
            $this->success('添加成功',U('Tool/wxapp'));
        }else{
            $this->error('添加失败');
        }
    }
    //api接口
    public function api(){
        $api=M('ms_tools_api')->select();
        $this->assign('api',$api);
        $this->display();
    }
    public function apiedit(){
        $id=(int)$_GET['id'];
        $res=M('ms_tools_api')->where("id=$id")->find();
        $this->assign('res',$res);
        $this->display();
    }
    public function apidel(){
        //echo "<meta http-equiv='Content-Type' content='text/Html; charset=utf-8'>";
        $id=(int)$_POST['id'];
        $res=M('ms_tools_api')->where("id=$id")->delete();
        if (!empty($res)) {
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function ajaxapiedit(){
        $web=M('ms_tools_api');
        $id=(int)$_POST['id'];
        $data['id'] = $id;
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->save($data); // 根据条件保存修改的数据
       
        if (!empty($web)) {
            $this->success('修改成功',U('Tool/api'));
        }else{
            $this->error('修改失败');
        }
    }
    public function apiadd(){
        $this->display();
    }
    public function ajaxapiadd(){
        $web=M('ms_tools_api');
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->add($data); // 根据条件保存修改的数据
        $res=M('ms_tools_all')->add($data);
        if (!empty($web)) {
            $this->success('添加成功',U('Tool/api'));
        }else{
            $this->error('添加失败');
        }
    }
    //在线游戏
    public function game(){
        $game=M('ms_tools_game')->select();
        $this->assign('game',$game);
        $this->display();
    }
    public function gameedit(){
        $id=(int)$_GET['id'];
        $res=M('ms_tools_api')->where("id=$id")->find();
        $this->assign('res',$res);
        $this->display();
    }
    public function gamedel(){
        //echo "<meta http-equiv='Content-Type' content='text/Html; charset=utf-8'>";
        $id=(int)$_POST['id'];
        $res=M('ms_tools_game')->where("id=$id")->delete();
        if (!empty($res)) {
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function ajaxgameedit(){
        $web=M('ms_tools_game');
        $id=(int)$_POST['id'];
        $data['id'] = $id;
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->save($data); // 根据条件保存修改的数据
        
        if (!empty($web)) {
            $this->success('修改成功',U('Tool/game'));
        }else{
            $this->error('修改失败');
        }
    }
    public function gameadd(){
        $this->display();
    }
    public function ajaxgameadd(){
        $web=M('ms_tools_game');
        $data['title'] = $_POST['title'];
        $data['logo'] = $_POST['logo'];
        $data['url'] = $_POST['url'];
        $data['yd'] = $_POST['yd'];
        $data['author'] = $_POST['author'];
        $web->add($data); // 根据条件保存修改的数据
        $res=M('ms_tools_all')->add($data);
        if (!empty($web)) {
            $this->success('添加成功',U('Tool/game'));
        }else{
            $this->error('添加失败');
        }
    }
}