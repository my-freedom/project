<?php
  header("Content-Type: text/html;charset=utf-8");
  //告诉浏览器不要缓存数据
  header("Cache-Control: no-cache");
  require_once 'StudentService.php';
  if($_POST['num']==1){//这是1
  	$res=searchTopYuwen();
  	$problem="[";
    $id=0;
     
    while($row=mysql_fetch_assoc($res)){//因为一共有十条数据
      if($id<9){
      $count=$id+1;
      $problem.='{"id"'.':'.'"'.$count.'"'.',"user"'.':'.'"'.$row['user'].'",'.'"record"'.':'.'"'.$row['record'].'"}'.',';//使用json文件传递数据
      //$problem.='{"id"'.':'.'"'.$count.'"'.',"user"'.':'.'"'.$row['user'].'",'.'"record"'.':'.'"'.$row['record'].'"}'.',';//使用json文件传递数据
      }else if($id==9){//最后一次拼接
          $problem.='{"id"'.':'.'"'.$count.'"'.',"user"'.':'.'"'.$row['user'].'",'.'"record"'.':'.'"'.$row['record'].'"}';//使用json文件传递数据
      }
      $id++;
    }
    $problem.="]";//拼接完成了
    //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$problem,FILE_APPEND);
    
    echo $problem;


  }else if($_POST['num']==2){
  	$res=searchTopSX();
  	$problem="[";
    $id=0;
     while($row=mysql_fetch_assoc($res)){//因为一共有十条数据
      if($id<9){
      $count=$id+1;
      $problem.='{"id"'.':'.'"'.$count.'"'.',"user"'.':'.'"'.$row['user'].'",'.'"record"'.':'.'"'.$row['record'].'"}'.',';//使用json文件传递数据
      //$problem.='{"id"'.':'.'"'.$count.'"'.',"user"'.':'.'"'.$row['user'].'",'.'"record"'.':'.'"'.$row['record'].'"}'.',';//使用json文件传递数据
      }else if($id==9){//最后一次拼接
          $problem.='{"id"'.':'.'"'.$count.'"'.',"user"'.':'.'"'.$row['user'].'",'.'"record"'.':'.'"'.$row['record'].'"}';//使用json文件传递数据
      }
      $id++;
    }
    $problem.="]";//拼接完成了
    //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$problem,FILE_APPEND);
    
    echo $problem;
     
    

  }else if($_POST['num']==3){
  	$res=searchTopYY();
  	$problem="[";
    $id=0;
     while($row=mysql_fetch_assoc($res)){//因为一共有十条数据
      if($id<9){
      $count=$id+1;
      $problem.='{"id"'.':'.'"'.$count.'"'.',"user"'.':'.'"'.$row['user'].'",'.'"record"'.':'.'"'.$row['record'].'"}'.',';//使用json文件传递数据
      //$problem.='{"id"'.':'.'"'.$count.'"'.',"user"'.':'.'"'.$row['user'].'",'.'"record"'.':'.'"'.$row['record'].'"}'.',';//使用json文件传递数据
      }else if($id==9){//最后一次拼接
          $problem.='{"id"'.':'.'"'.$count.'"'.',"user"'.':'.'"'.$row['user'].'",'.'"record"'.':'.'"'.$row['record'].'"}';//使用json文件传递数据
      }
      $id++;
    }
    $problem.="]";//拼接完成了
    //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$problem,FILE_APPEND);
    
    echo $problem;
     
   

  }else if($_POST['num']==4){

  }

?>