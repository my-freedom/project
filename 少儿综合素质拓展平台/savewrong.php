
<?php
  header("Content-Type: text/html;charset=utf-8");
  //告诉浏览器不要缓存数据
  header("Cache-Control: no-cache");
  require_once 'StudentService.php';
  //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt","hello",FILE_APPEND);
  $user=$_POST['user'];
  if(empty($user)){//如果用户名为空，则说明这里保存的全是错题
  $userr=$_POST['userr'];
  $id=$_POST['id'];
  //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$id,FILE_APPEND);
  $book=$_POST['book'];
  $grade=$_POST['grade'];
  $subject=$_POST['subject'];
  $unit=$_POST['unit'];
  //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$id.$book.$grade.$subject.$unit,FILE_APPEND);
  saveWrong($id,$userr,$book,$grade,$subject,$unit);

  }else{//如果不为空，则说明保存的是做题记录
     $book=$_POST['book'];
     $grade=$_POST['grade'];
     $subject=$_POST['subject'];
     $unit=$_POST['unit'];
     $s=$_POST['s'];
     $time=date("Y-m-d");
     file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$user.$book.$grade.$subject.$unit.$s,FILE_APPEND);
     likeHistoryPro($user,$book,$grade,$subject,$unit,$s,$time);
 
  }

  
 
 
?>