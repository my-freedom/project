<?php 
$checkcode="";
for($i=0;$i<4;$i++){
	$checkcode.=dechex(rand(1,15));//该函数是将十进制转换为十六进制
}
session_start();
$_SESSION['checkcode']=$checkcode;

$img=imagecreatetruecolor(100,30);//创建一个画布资源
$white=imagecolorallocate($img,171,238,105);//第一次为画布设置背景颜色

for($i=0;$i<200;$i++){
	$color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
	imageSetPixel($img,rand(0,100),rand(0,30),$color);//在屏幕上画一条实线
}
imagestring($img,rand(1,5),rand(0,80),rand(0,10),$checkcode,$white);//将字符串用$white颜色画到$img上
header("content-type:image/png");
imagepng($img);
imagedestroy($img);

?>
