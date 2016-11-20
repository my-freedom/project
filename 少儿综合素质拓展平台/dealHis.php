<?php
  header("Content-Type: text/html;charset=utf-8");
  //告诉浏览器不要缓存数据
  header("Cache-Control: no-cache");
  require_once 'StudentService.php';
  if(!empty($_POST['num'])){
  	$num=$_POST['num'];
  }
  if($num==1){
  	$user=$_POST['user'];
  	$date=$_POST['date'];
  	$num=selectHistoryNum($user,$date)//查询符合该条件的数量
    $res=SearchHistory($user,$date);
    $id=1;
    $str="[";
    while($row=mysql_fetch_assoc($res)){
    	if($id<$num){
          $str.='{"grade"'.':'.'"'.$row['grade'].'","book"'.':'.'"'.$row['book'].'","subject"'.':'.'"'.$row['subject'].'","unit"'.':'.'"'.$row['unit'].'"},';
      }else if($id==$num){
      	$str.='{"grade"'.':'.'"'.$row['grade'].'","book"'.':'.'"'.$row['book'].'","subject"'.':'.'"'.$row['subject'].'","unit"'.':'.'"'.$row['unit'].'"}';
      }
      $id++;
    }
    $str="]";
    echo $str;//返回该结果


  }

?>