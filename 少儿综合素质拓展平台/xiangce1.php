<?php
 require_once 'StudentService.php';
  session_start();
  $user=$_SESSION['user'];//获取当前用户名
  header("Content-Type:text/html;charset=utf-8");
  if(!empty($_GET['button'])){
    $button=$_GET['button'];
  }
  function name($filename){
   	return substr(strrchr($filename,'.'),1);//用来获取一个文件的扩展名
   }
   function rname(){
      return floor(microtime(true)*1000);
   }

   if($button==1){//要新建相册时的操作
   $name=$_POST['use'];//相册的名字
   $des=$_POST['us'];
   $style=$_POST['u'];
   $date=date("Y-m-d");//获取相册创建的时间
   $num=SaveAlbum($user,$name,$des,$style,$date);
   if($button==1){
   	echo "<script>window.location.href='xiangce.php';</script>";
   }else{
   	echo "<script>alert('对不起，系统繁忙，请稍后再试');</script>";
   }
  }else if($button==2){//要上传照片时的操作

  	$album=$_POST['album'];
    $uplodedir="./file/";//规定其要上传的文件夹位置
   $type=array("jpg","gif","png","jpeg","bmp");//可以接受的文件类型
   if(!in_array(name($_FILES['file']['name']),$type)){
   	   $text=implode(",",$type);
   	   echo "您只能上传一下类型文件",$text,"<br>";
   }else{
       $filename=$_FILES['file']['name'];//图片上传时的名称
       $name1=rname();
       $filename=$name1.$filename;//经过处理之后的图片名称
   }
   $num=SelectAlbum($user,$album,$filename);//执行把图片上传到数据库的操作
   if(is_uploaded_file($_FILES['file']['tmp_name'])){//执行把图片上传到文件夹的操作
         if(move_uploaded_file($_FILES['file']['tmp_name'],$uplodedir.$filename)){
            echo "<center>图片已经上传完毕，</center><br/>";

         }else{
             echo "上传失败";
         }
       }

   }


?>