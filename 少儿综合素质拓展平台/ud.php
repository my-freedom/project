<?php
   require_once 'teacherService.php';
   $num=$_GET['num'];
   $book=$_GET['book'];
   $subject=$_GET['subject'];
   $unit=$_GET['unit'];
   $grade=$_GET['grade'];
   if($num==1){//说明这是更新操作

   }else {
   	DeleteItemFromMysql($ID,$book,$grade,$unit,$subject);

   }
?>