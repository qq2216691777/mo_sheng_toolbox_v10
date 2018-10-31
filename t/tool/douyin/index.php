<?php 
//程序作者：筱洛洛，Q1031601644 接各种定制
//主页这么写是为了之后的其他视频解析做准备
if($_SERVER['HTTP_HOST'] == 'www.tools.la'){
	include('douyin.html');
}else{
	echo '404';
}