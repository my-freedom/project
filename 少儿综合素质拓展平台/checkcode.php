<?php
   session_start();
   require_once 'loginservice.php';
   $check=$_POST['check4'];
   $email=$_POST['email1'];
   file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$emial,FILE_APPEND);
   file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$check,FILE_APPEND);
   if($check==$_SESSION['check']){//这个为验证成功
   	  $res=checkLogin($email);
   	  while($row=mysql_fetch_assoc($res)){
   	  	$_SESSION['user']=$row['user'];
   	  }
   	  $a=1;
   	  echo $a;
   }else{
   	 $a=0;
   	 echo $a;
   }
?>