<?php
   session_start();
   header("Content-Type: text/html; charset=utf-8");
   $user=$_SESSION['user'];
   $saying=$_POST['speak'];
   $date=date("Y-m-d");
   require_once 'StudentService.php';
   if(!empty($_GET['visiteduser'])){
      $visiteduser=$_GET['visiteduser'];//获取被留言的人的信息

   }else{
      $visiteduser=$user;
   }

  
   
   $num=SaveAndList($visiteduser,$user,$saying,$date);//当前页面是我所处的主人公要想访问的人留言
   if($num==1&&empty($visiteduser)){
   	 echo"<script>alert('留言成功！');window.location.href='liuyan.php';</script>";
   }else if($num==1&&(!empty($visiteduser))){
        echo"<script>alert('留言成功！');window.location.href='hisliuyan.php?visiteduser=$visiteduser';</script>";
   }
   else{
   	 echo"<script>alert('留言失败，请重试！');window.location.href='hisliuyan.php?visiteduser=$visiteduser';</script>";
   }



  
?>