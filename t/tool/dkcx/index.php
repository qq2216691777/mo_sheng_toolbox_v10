<?php include "inc/conn.php";?><?php include "inc/excel.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title;?></title>
<meta name="keywords" content="2017�����ŵĴ������,2017�겻�����ŵ�����,2017�겻�����ŵ���������Щ" />
<meta name="description" content="2017�����ŵĴ���_2017�����ŵĴ���������߲�ѯϵͳ" />
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
	<!---<div class="back" id="pageback"><a href="?b=back" class="d">����</a></div> ---> 
	<!---<div class="menu" id="topmenus"><a href="http://www.xiaodaishe.cn" class="d">�Ƽ���Ϣ</a></div>--->
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
<input name="name" type="text" class="txts" id="name" value="" placeholder="������<?php echo $tiaojian1;?>" onfocus="st('name',1)" onBlur="startRequest(2)" />
</div>
<?php 
if($ismas=="1"){
?>
<div class="so_box" id="33">
<input name="code" type="text" class="txts" id="code" placeholder="��������֤��" onfocus="this.value=''" onBlur="startRequest(3)" />
<div class="more" id="clearkey">
<img src="inc/code.php?t=<?php echo date("Y-m-d-H-i-s",time());?>" id="Codes" onClick="this.src='inc/code.php?t='+new Date();"/>
</div></div>
<?php }?><div class="so_boxes">
<input type="submit" name="button" class="buts" id="sub" value="������ѯ" />
</div>
<div class="so_boxex" id="tishi">˵��:��<?php echo $tiaojian1;?><?php 
if($ismas=="1"){
?>+��֤��<?php }?>��������ȷ����ʾ��Ӧ�����
</br>
</br></br></br></br></br>
<!---�������˵����������ӣ���ʼ--->


<!---�������˵����������ӣ�����--->
</div>
<div id="tishi1" style="display:none;">����������<?php echo $tiaojian1;?></div>
<div id="tishi4" style="display:none;">��������4������֤��</div>
</form>

<?php 
}else{
if($ismas=="1"){
session_start();
if($codes!=$_SESSION['PHP_M2T']){
 webalert("����ȷ������֤�룡");
}
}
if(!$shuru1){
 webalert("������$tiaojian1!");
}

$files = $UpDir."/".$shujus.".xls";

if(!file_exists($files)){
 webalert('�������ݿ��ļ�');
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
 webalert('����Excel���ݵ�1���Ƿ���ڡ�'.$tiaojian1.'���ֶ�!');
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
echo "<caption align='center' class='chaxunjieguo'>��ѯ���</caption>";
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
echo "<caption align='center'>��ѯ��� ������</caption>";
    /*echo '<tr>';
        echo "<td colspan='2'>û�в�ѯ��$tiaojian1=$shuru1 �����ϢŶ</td>";
    echo "</tr>\r\n";
	*/
echo '</table>'; 
 echo "<div  class='faq'><a href='#'>û�в�ѯ������������������>></a></div>";
}

echo '<!--endprint-->';
fclose($filer);
?><div class="so_boxesd">
<!--<input type="button" name="print" value="Ԥ������ӡ" onclick="preview()" class="buts">-->
<input type="button" value="������ѯ" class="buts" onclick="location.href='?t=back';" id="reset" style="width:100%;">
</div>
<h3>���Ŵ����Ƽ�</h3>
<!--�����Ʒ�Ƽ�-->
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
$etime=microtime(true);//��ȡ����ִ�н�����ʱ��
$total=$etime-$stime;   //�����ֵ
echo "<!----ҳ��ִ��ʱ�䣺{$total} ]��--->";
?></div>
<div class="clear"></div>
<div class="foot">
  <div class="title"> 
  <div class="notice">�����������������ݽ����ο�����������������ϵ���Ǹ�����</div>
    <span>&copy;2017&nbsp; <a href="http://www.xiaodaishe.cn/portal.php?from=tool" target="_blank">С����</a></span>
  </div> 
</div>
</body>
</html>
