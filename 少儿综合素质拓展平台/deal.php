<?php
  require_once 'StudentService.php';
  header("Content-type:text/html; charset=utf-8");
  $newid=$_GET['newid'];//接收要删除题目的id
  $button=$_GET['button'];
  if($button=="agree"){
        Agreefriends($newid);
  }else if($button=="reject"){
        Rejectfriends($newid);
  }else if($button=="delete"){
   Deletefriends($newid);

  }
?>