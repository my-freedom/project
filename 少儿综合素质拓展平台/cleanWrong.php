<?php
  header("content-type:text/html;charset=utf-8");
  require_once 'StudentService.php';
  session_start();
  $user=$_POST['user'];
  $res=searchWrong($user);//根据用户名查询错题信息
  $problem="[";
  $id1=0;
  $numaa=searchWrongSum($user);//这个是正常的

  if($numaa!=0){
  while($row1=mysql_fetch_assoc($res)){
  	  $id=$row1['id'];
  	  $book=$row1['book'];
  	  $grade=$row1['grade'];
  	  $subject=$row1['subject'];
  	  $unit=$row1['unit'];
  	  $res1=searchDetail($id,$book,$grade,$subject,$unit);//这是有数据的
      file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$id.$book.$grade.$subject.$unit."\r\n",FILE_APPEND);
  	  while($row=mysql_fetch_assoc($res1)){
        file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt","hello\r\n",FILE_APPEND);
  	  	if($id1<$numaa-1){
           $problem.='{"id1"'.':'.'"'.$row['id'].'"'.',"file1"'.':'.'"'.$row['file1'].'",'.'"problem"'.':'.'"'.$row['problem'].'","option1"'.':'.'"'.$row['option1'].'","file2"'.':"'.$row['file2'].'","option2"'.':'.'"'.$row['option2'].'","file3"'.':"'.$row['file3'].'","option3"'.':'.'"'.$row['option3'].'","file4"'.':"'.$row['file4'].'","option4"'.':'.'"'.$row['option4'].'","file5"'.':"'.$row['file5'].'","rightanswers"'.':"'.$row['rightanswers'].'","book"'.':"'.$book.'","grade"'.':"'.$grade.'","subject"'.':"'.$subject.'","unit"'.':"'.$unit.'"}'.',';//使用json文件传递数据
           }else if($id1==$numaa-1){//最后一次拼接
             $problem.='{"id1"'.':'.'"'.$row['id'].'"'.',"file1"'.':'.'"'.$row['file1'].'",'.'"problem"'.':'.'"'.$row['problem'].'","option1"'.':'.'"'.$row['option1'].'","file2"'.':"'.$row['file2'].'","option2"'.':'.'"'.$row['option2'].'","file3"'.':"'.$row['file3'].'","option3"'.':'.'"'.$row['option3'].'","file4"'.':"'.$row['file4'].'","option4"'.':'.'"'.$row['option4'].'","file5"'.':"'.$row['file5'].'","rightanswers"'.':"'.$row['rightanswers'].'","book"'.':"'.$book.'","grade"'.':"'.$grade.'","subject"'.':"'.$subject.'","unit"'.':"'.$unit.'"}';//使用json文件传递数据
          }

         
          $id1++;

  	  }
        
    }
     $problem.="]";//拼接完成了
     file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$problem."\r\n",FILE_APPEND);
     //问题是空的
     echo $problem;
}else{
	echo "好棒啊,错题已经全部清理完成了";
}


?>