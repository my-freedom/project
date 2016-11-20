<?php
  header("content-type:text/html;charset=utf-8");
  require_once 'StudentService.php';
  $id=$_POST['id'];
  $book=$_POST['book'];
  $grade=$_POST['grade'];
  $subject=$_POST['subject'];
  $unit=$_POST['unit'];
  dealRecord($id,$book,$grade,$subject,$unit);
?>