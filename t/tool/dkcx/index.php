<?php include "inc/conn.php";?><?php include "inc/excel.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title;?></title>
<meta name="keywords" content="2017上征信的贷款口子,2017年不上征信的网贷,2017年不上征信的网贷有哪些" />
<meta name="description" content="2017上征信的贷款_2017上征信的贷款口子在线查询系统" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
<script type="text/javascript" src="inc/js/ajax_wap.js"></script>
<link href="inc/css/wap.css" rel="stylesheet" type="text/css" />
<link href="inc/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body onLoad="inst();">
<div class="sub_bod"></div>
<div class="sub_top">
	<!---<div class="title"><?php echo $title;?></div>---> 
	<!---<div class="back" id="pageback"><a href="?b=back" class="d">返回</a></div> ---> 
	<!---<div class="menu" id="topmenus"><a href="http://www.xiaodaishe.cn" class="d">推荐信息</a></div>--->
	<img src="./inc/img/banner.png";>
</div>




<div class="main">
<?php 
$stime=microtime(true); 
$codes = trim($_POST['code']);
$shujus = trim($_POST['time']);
$shuru1 = trim($_POST['name']);
if(!$shujus){
?>
<form name="queryForm" method="post" class="" action="?t=<?php echo time();?>" onsubmit="return startRequest(0);">
<div class="select" id="10">
<select name="time" id="time" onBlur="startRequest(1)" />
<?php traverse($UpDir."/");?></select>
</div>
<div class="so_box" id="11" border-color="#1fa4ff">
<input name="name" type="text" class="txts" id="name" value="" placeholder="请输入<?php echo $tiaojian1;?>" onfocus="st('name',1)" onBlur="startRequest(2)" />
</div>
<?php 
if($ismas=="1"){
?>
<div class="so_box" id="33">
<input name="code" type="text" class="txts" id="code" placeholder="请输入验证码" onfocus="this.value=''" onBlur="startRequest(3)" />
<div class="more" id="clearkey">
<img src="inc/code.php?t=<?php echo date("Y-m-d-H-i-s",time());?>" id="Codes" onClick="this.src='inc/code.php?t='+new Date();"/>
</div></div>
<?php }?><div class="so_boxes">
<input type="submit" name="button" class="buts" id="sub" value="立即查询" />
</div>
<div class="so_boxex" id="tishi">说明:【<?php echo $tiaojian1;?><?php 
if($ismas=="1"){
?>+验证码<?php }?>】输入正确才显示相应结果。
</br>
</br></br></br></br></br>
<!---你的其他说明在这里添加：开始--->


<!---你的其他说明在这里添加：结束--->
</div>
<div id="tishi1" style="display:none;">请认真输入<?php echo $tiaojian1;?></div>
<div id="tishi4" style="display:none;">认真输入4数字验证码</div>
</form>

<?php 
}else{
if($ismas=="1"){
session_start();
if($codes!=$_SESSION['PHP_M2T']){
 webalert("请正确输入验证码！");
}
}
if(!$shuru1){
 webalert("请输入$tiaojian1!");
}

$files = $UpDir."/".$shujus.".xls";

if(!file_exists($files)){
 webalert('请检查数据库文件');
}else{
/* echo '<p align="center"> ';
 echo $shujus; 
echo '</p>';
*/
}
echo '<!--startprint-->';
$data = new Spreadsheet_Excel_Reader(); 
$data->setOutputEncoding('UTF-8'); 
$data->read($files); 

for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) { 
 if($i=="1"){
 $iaa=0;
 $iab=0;
 //echo '<tr class="tt">';
for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) { 
$taba = ''.$data->sheets[0]['cells'][$i][$j].'';
$taba = iconv('UTF-8', 'GB2312', $taba); 
 //echo '<td class="r">'.$taba.'</td>';
      $io++; 
    if($taba==$tiaojian1){
      $iaa=$io; 
    }
} 
 //echo '</tr>';
    if(strlen($iaa)<1){   //if($iaa){
 webalert('请检查Excel数据第1行是否存在【'.$tiaojian1.'】字段!');
    }else{
echo "<!--'.$tiaojian1.'='.$iaa.'-->\r\n";
    }
echo "\r\n";
 }else{
 $Excelx=$data->sheets[0]['cells'][$i][$iaa];
 $Excelx=iconv('UTF-8', 'GB2312', $Excelx); 
if("_".$shuru1=="_".$Excelx){
echo "<!-- $shuru1 == $Excelx -->\r\n";
 $iae++; 
echo '<table cellspacing="0">';
echo "<caption align='center' class='chaxunjieguo'>查询结果</caption>";
for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) { 
 $tabe = ''.$data->sheets[0]['cells']['1'][$j].'';
 $tabe = iconv('UTF-8', 'GB2312', $tabe); 
$tabu = ''.$data->sheets[0]['cells'][$i][$j].'';
 $tabu = iconv('UTF-8', 'GB2312', $tabu); 
 echo '<tr>';
 echo '<td class="r">'.$tabe.'</td>';
 echo '<td class="span">'.$tabu.'</td>';
 echo "</tr>\r\n";
 } 
echo '</table>'; 
} 
}
}

if($iae<1){
echo '<table cellspacing="0">';
echo "<caption align='center'>查询结果 不存在</caption>";
    /*echo '<tr>';
        echo "<td colspan='2'>没有查询到$tiaojian1=$shuru1 相关信息哦</td>";
    echo "</tr>\r\n";
	*/
echo '</table>'; 
 echo "<div  class='faq'><a href='#'>没有查询到？点击这里告诉我们>></a></div>";
}

echo '<!--endprint-->';
fclose($filer);
?><div class="so_boxesd">
<!--<input type="button" name="print" value="预览并打印" onclick="preview()" class="buts">-->
<input type="button" value="继续查询" class="buts" onclick="location.href='?t=back';" id="reset" style="width:100%;">
</div>
<h3>热门贷款推荐</h3>
<!--贷款产品推荐-->
		<iframe src="https://www.xiaodaishe.cn/zt/dkcs" width="100%"  id="external-frame" onload="setIframeHeight(this)" scrolling="no" onload="changeFrameHeight()" frameborder="0"></iframe>
		<script>
		function setIframeHeight(iframe) {
if (iframe) {
var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
if (iframeWin.document.body) {
iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
}
}
};

window.onload = function () {
setIframeHeight(document.getElementById('external-frame'));
};

		</script>
		
<div class="clear"></div>


<?php 
}
$etime=microtime(true);//获取程序执行结束的时间
$total=$etime-$stime;   //计算差值
echo "<!----页面执行时间：{$total} ]秒--->";
?></div>
<div class="clear"></div>
<div class="foot">
  <div class="title"> 
  <div class="notice">免责声明：以上内容仅供参考，如数据有误，请联系我们更正。</div>
    <span>&copy;2017&nbsp; <a href="http://www.xiaodaishe.cn/portal.php?from=tool" target="_blank">小贷社</a></span>
  </div> 
</div>
</body>
</html>
