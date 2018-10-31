<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //网站基本信息查询
    	$sys=M('ms_tools_system')->where("id=1")->find();
    	$this->assign('sys',$sys);
        //上方菜单
    	$menu=M('ms_tools_menu')->select();
    	$this->assign('menu',$menu);
        //友情链接
    	$link=M('ms_tools_links')->select();
        $this->assign('link',$link);
        //一言
    	$yy=M('ms_tools_yiyan')->order("rand()")->find();
    	$this->assign('yy',$yy);
        //有趣站点
        $web=M('ms_tools_web')->order("yd")->select();
        $this->assign('web',$web);
        //实用工具
        $tool=M('ms_tools_tool')->order("yd")->select();
        $this->assign('tool',$tool);
        //网页特效
        $wep=M('ms_tools_webpage')->order("yd")->select();
        $this->assign('wep',$wep);
        //api
        $api=M('ms_tools_api')->order("yd")->select();
        $this->assign('api',$api);
        //游戏
        $game=M('ms_tools_game')->order("yd")->select();
        $this->assign('game',$game);
        //游戏
        $wxapp=M('ms_tools_wxapp')->order("yd")->select();
        $this->assign('wxapp',$wxapp);
        $this->display();
    }
    public function wether(){
        $ip = $_SERVER["REMOTE_ADDR"];
        $url='http://ip.taobao.com/service/getIpInfo.php?ip='.$ip;
        $result = file_get_contents($url);
        $result = json_decode($result,true);
        if($result['code']!==0 || !is_array($result['data'])) return false;
        $city= $result['data']['city'];
        $curl = curl_init();
        $url="http://wthrcdn.etouch.cn/WeatherApi?city=".$city;
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url);
 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_ENCODING, "");

        $data = curl_exec($curl);

        curl_close($curl);

        libxml_disable_entity_loader(true);
        $values = json_decode(json_encode(simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        $this->ajaxReturn($values);
    }
    public function serch(){
        $key=$_GET['keyword'];
        $all=M('ms_tools_all');
        
        //dump($_GET);
        $all=$all->where("title like '%$key%'")->select();
        
        $this->ajaxReturn(array(
            'data' => $all, 
            // 'webpage' => $webpage, 
            // 'tool' => $tool, 
            // 'api' => $api, 
            // 'wxapp' => $wxapp, 
            // 'game' => $game
            ));
        
    }
    public function one(){
        $yy=M('ms_tools_yiyan')->order("rand()")->find();
        $y=$yy['value'];
        
        echo "function siyueapi(){document.write(".$y.");}";
    }

}