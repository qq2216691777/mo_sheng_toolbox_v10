<?php
	header("Content-type:text/html;charset=utf-8;");
	$dwz=$_SERVER['SERVER_NAME'].str_replace('index.php','',$_SERVER['REQUEST_URI']);//短网址主域名
	$data=file_get_contents('link.txt');
	if($data) $data=json_decode($data,true);
	$submit=isset($_POST['submit'])?$_POST['submit']:0;
	$link=isset($_POST['link'])?$_POST['link']:0;
	$url=isset($_POST['url'])?$_POST['url']:0;
	if($submit) {
	if(!$link or !$url) {
	$msg='没有填写主链接或者短网址！';
	}elseif(isset($data[$link])){
	$msg='该短网址已存在，请选择其他短网址！';
	}else{
	$data[$link]=str_replace('http://','',$url);
	$data=json_encode($data);
	$data=file_put_contents('link.txt',$data);
	$msg='成功生成短网址：http://'.$dwz.$link;
	}
	}
	$msg=isset($msg)?$msg:'';
	if(isset($_GET['link'])){
	if(isset($data[$_GET['link']])) {
	exit("<script>window.location.href='http://".$data[$_GET['link']]."';</script>");
	}else {
	echo '<meta http-equiv="Refresh" content="5; url=http://dwz.lvdp.net"/>';
	exit("系统未找到该短网址，请检查您输入是否正常，5秒后返回短网址主站！");
	}
	};
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>云言短网址服务 - 网址缩短 - 缩短网址 - 短网址 - 短域名 - 还原短网址</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="Description" CONTENT="鱼柒为您提供:网址缩短服务,短网址之间的互相转换,以及短网址还原,生成和压缩,缩短目前互联网所有的网址,更快速,更高效!">
<META NAME="Keywords" CONTENT="网址缩短,缩短网址,短网址,短域名,域名缩短,短网址转换">
<link rel="stylesheet" type="text/css" href="css/default.css" />
</head>
<body>
<div id="container">
<div id="header">
<a href="http://<?=$dwz?>" ><h1 style="color:black;">云言短网址</h1></a>
</div>
<div id="content">
<div id="msg"><p><?=$msg?></p></div>
<div id="create_form">
<form method="post">
<p><label for="url">请输入您要缩短的网址(禁止任何违法违规网址,否则您将自己承担法律后果责任)：</label></p>
<p><input id="url" type="text" name="url" value="" /></p>
<p class="ali"><label for="alias">自定义（可选）</label>http://<?=$dwz?>
<input id="alias" maxlength="40" type="text" name="link"> <span>可输入字母、数字、破折号。</span></p>
<p class="but"><input type="submit" value="生 成" class="submit2" name="submit"/></p>
</form>
</div>
</div>
<div id="nav">
<ul>
<li class="current"><a href="index.php">生成短网址</a></li>
</ul>
</div>
<div id="footer">
<p><b>友情链接：
<a href="http://www.lxzan.com" target="_blank">云言秒赞</a>
<a href="http://www.lvdp.net" target="_blank">域名分发</a>
</b></p>
<p><b>&copy; 2016 云言 - Powered by <a href="http://dwz.lvdp.net/">云言网址缩短服务</a> - <a href="http://dwz.lvdp.net/">域名缩短</a></b></p>
</p>
</div>
</div>
</body>
</html>