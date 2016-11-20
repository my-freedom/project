<?php 
  function downloads($name){
  	$file_dir="./model/";
  	if(!file_exists($file_dir.$name)){
  		header("Content-type:text/html;charset=utf-8");//设置页面格式
  		echo "文件不存在";
  		exit();
  	}else{
  		$file=fopen($file_dir.$name,"r");//以只读方式打开
  		header("Content-type:application/octet-stream");//指定下载文件类型
  		header("Accept-Ranges:bytes");//指定文件大小格式
  		header("Accept-Length:".filesize($file_dir.$name));//指定文件大小
  		header("Content-Disposition:attachment; filename=".$name);//指定文件下载名称
  		echo fread($file,filesize($file_dir.$name));//读取文件
  		fclose($file);//关闭文件连接

  	}
  }
   downloads("problem.xlsx");
?>