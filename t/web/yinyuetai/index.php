<?php
//代码为小笙所写版权归bootstrap 以及php语言创始人所有
$url=isset($_GET['url'])?trim($_GET['url']):'';
//http://v.yinyuetai.com/video/2185713
$time=$_SERVER['REQUEST_TIME'];
$content = file_get_contents($url);
//获取标题
preg_match('/property="og:title"[\s]+content="([^"]*)".*?>/i',$content,$title);
//获取封面
preg_match('/property="og:image" content="([^"]*)".*?>/',$content,$images);
//获取MV的ID
preg_match('/[\d]+/',$url,$song_id);

$song_id=$song_id[0];
$title=$title[1];
$images=$images[1];
//解析json
$songurl = "http://www.yinyuetai.com/api/info/get-video-urls?callback=callback&videoId=".$song_id."&_=".$time;
$data = file_get_contents($songurl);
if (strpos($data, "callback") !== false){
    $lpos = strpos($data, "(");
    $rpos = strrpos($data, ")");
    $data  = substr($data, $lpos + 1, $rpos - $lpos -1);
}
$json= json_decode($data,true);

// 演示:http://www.yeser.cc/ajax.php
  
?><!---<?php ECHO $dedeyun['title']?>--->
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="GBK">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>音悦台视频外链解析</title>

    <!-- Bootstrap -->
 <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  </head>
  <body>
 <nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
<div class="container-fluid">
 
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="">Yeser</a>
</div>
 
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="http://www.yeser.cc/">首页</a></li>
<li class="active"><a href="../v">vip免费看</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">更多乐趣<span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="../jq.php">点击加群</a></li>
<li class="divider">
</li><li><a href="tencent://AddContact/?fromId=50&amp;fromSubId=1&amp;subcmd=all&amp;uin=1246548142">商业合作</a></li>
</ul>
</li>
</ul>
</div> 
</div> 
</nav>
<br><br><br><br>
<center>

<div class="panel panel-default" style="width:60%;">
  <div class="panel-body">
<video controls autoplay=true src="<?php ECHO $json['hcVideoUrl']?>" style="width:100%;height:400px"></video>
<p><p>
<form id="contact" action="" method="get" style="width:70%;">

<fieldset>
<div class="form-group">
    <div class="input-group">
      <div class="input-group-addon"><span class="glyphicon glyphicon-link"></span></div>
      <input placeholder="音乐台地址" class="form-control" name="url" type="text" tabindex="1"  required>

      </div>
    </div>
</fieldset>
<fieldset>

<button name="submit" class="btn btn-default" type="submit" id="contact-submit" data-submit="...Sending">提交</button>
 
</fieldset>
</form>
<div class="form-group has-success has-feedback">
  <label class="control-label" for="inputSuccess2">超清外链</label>
  <input type="text" class="form-control" id="inputSuccess2" value="<?php ECHO $json['heVideoUrl']?>">
  <span class="glyphicon glyphicon-ok form-control-feedback"></span>
</div>
<div class="form-group has-warning has-feedback">
  <label class="control-label" for="inputWarning2">高清外链</label>
  <input type="text" class="form-control" id="inputWarning2" value="<?php ECHO $json['hdVideoUrl']?>">
  <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
</div>
<div class="form-group has-error has-feedback">
  <label class="control-label" for="inputError2">流畅外链</label>
  <input type="text" class="form-control" id="inputError2" value="<?php ECHO $json['hcVideoUrl']?>">
  <span class="glyphicon glyphicon-remove form-control-feedback"></span>
</div>
</div>
</div>
<footer class="container-fluid foot-wrap">
    <!--采用container，使得页尾内容居中 -->
  
        <p align="center" style="margin-top: 20px;color:#878B91;">
            Copyright &copy;2015 小笙工作室
        </p>

</footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  </body>
</html>