<?php
header('Content-Type: image/png');//输出协议头
$dst_path = './4.jpg';//背景图
$dst = imagecreatefromstring(file_get_contents($dst_path));//读取背景图片数据流
$col = imagecolorallocatealpha($dst,0,0,0,0);
imagettftext($dst,16,0,0,345,$col,"/zitiwenjian/simhei.ttf", $_GET["a"]);
imagettftext($dst,16,0,0,365,$col,"/zitiwenjian/simhei.ttf", $_GET["b"]);
imagettftext($dst,16,0,0,385,$col,"/zitiwenjian/simhei.ttf", $_GET["c"]);
imagettftext($dst,16,0,0,405,$col,"/zitiwenjian/simhei.ttf", $_GET["d"]);
imagettftext($dst,16,0,0,425,$col,"/zitiwenjian/simhei.ttf", $_GET["e"]);
list($dst_w, $dst_h, $dst_type) = getimagesize($dst_path);
imagepng($dst);
imagedestroy($dst);
?>
