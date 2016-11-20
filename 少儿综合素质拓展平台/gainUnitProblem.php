<?php
  header("Content-Type: text/html;charset=utf-8");
  //告诉浏览器不要缓存数据
  header("Cache-Control: no-cache");
  require_once 'StudentService.php';
 
  $num=$_POST['num'];
  if($num==1){//本页面的第一个动作查询单元
 
  $book=$_POST['book'];
  $sub=$_POST['subject'];
  if($sub=='yw'){
  	$subject="语文";
  }else if($sub=='sx'){
  	$subject="数学";
  }else if($sub=='yy'){
  	$subject="英语";
  }
  $aaa=SelectUnit($book,$subject);//查询单元数
 
  $num1=count($aaa,0);//统计多维数组的长度
 
  $unit="["; //js与php弄混了
  //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$unit."\r\n",FILE_APPEND);
  for($i=0;$i<$num1;$i++){
  	if($i<$num1-1){
  	$unit.='{"unit0"'.":".'"'.$aaa[$i]['unit'].'"'.','.'"sub"'.':'.'"'.$sub.'"'.','.'"book"'.':'.'"'.$book.'"'.'}'.',';
  }else{
  	$unit.='{"unit0"'.":".'"'.$aaa[$i]['unit'].'"'.','.'"sub"'.':'.'"'.$sub.'"'.','.'"book"'.':'.'"'.$book.'"'.'}';
  }
}
 $unit.="]";
 echo $unit;//返回的是json数据类型*/
}else if($num==2){//搜索问题

  $book=$_POST['book'];
  $sub=$_POST['subject'];
  if($sub=='yw'){
    $subject="语文";
  }else if($sub=='sx'){
    $subject="数学";
  }else if($sub=='yy'){
    $subject="英语";
  }
  $grade=$_POST['grade'];
  $user=$_POST['user'];
  $unit=$_POST['unit'];//现在都拿到了，得先去查询一下，是否已经做过这套题了。
  $aaa=ControlProblem($user,$grade,$book,$subject,$unit);//这里还少一个参数,如果为1说明没有被做过
  if($aaa!=1){
    $a="您已经做过该套题目了，继续操作的话将会覆盖原来的题目/".$grade."/".$book."/".$subject."/".$unit;
    echo $a;
  }else{//如果没做过的话现在需要进行这个操作了
    $numaa=SearchNumSum($book,$grade,$subject,$unit);

    $res=SearchPro($book,$grade,$subject,$unit,$FenYePage);//查询题目
    
    $problem="[";
    $id=0;
     
    while($row=mysql_fetch_assoc($res)){
      if($id<$numaa-1){
      $problem.='{"id"'.':'.'"'.$row['id'].'"'.',"file1"'.':'.'"'.$row['file1'].'",'.'"problem"'.':'.'"'.$row['problem'].'","option1"'.':'.'"'.$row['option1'].'","file2"'.':"'.$row['file2'].'","option2"'.':'.'"'.$row['option2'].'","file3"'.':"'.$row['file3'].'","option3"'.':'.'"'.$row['option3'].'","file4"'.':"'.$row['file4'].'","option4"'.':'.'"'.$row['option4'].'","file5"'.':"'.$row['file5'].'","rightanswers"'.':"'.$row['rightanswers'].'","book"'.':"'.$book.'","grade"'.':"'.$grade.'","subject"'.':"'.$subject.'","unit"'.':"'.$unit.'"}'.',';//使用json文件传递数据
      }else if($id==$numaa-1){//最后一次拼接
          $problem.='{"id"'.':'.'"'.$row['id'].'"'.',"file1"'.':'.'"'.$row['file1'].'",'.'"problem"'.':'.'"'.$row['problem'].'","option1"'.':'.'"'.$row['option1'].'","file2"'.':"'.$row['file2'].'","option2"'.':'.'"'.$row['option2'].'","file3"'.':"'.$row['file3'].'","option3"'.':'.'"'.$row['option3'].'","file4"'.':"'.$row['file4'].'","option4"'.':'.'"'.$row['option4'].'","file5"'.':"'.$row['file5'].'","rightanswers"'.':"'.$row['rightanswers'].'","book"'.':"'.$book.'","grade"'.':"'.$grade.'","subject"'.':"'.$subject.'","unit"'.':"'.$unit.'"}';//使用json文件传递数据
      }
      $id++;
    }
    $problem.="]";//拼接完成了
    
    echo $problem;

  }
}else if($num==3){//进行覆盖操作
   $book=$_POST['book'];
   $subject=$_POST['subject'];
   $grade=$_POST['grade'];
   $user=$_POST['user'];
   $unit=$_POST['unit'];
    file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$book,FILE_APPEND);
   DeleteHistory($user,$grade,$book,$subject,$unit);//删除成功,这个仅是第一步的操作
   $numaa=SearchNumSum($book,$grade,$subject,$unit);
   $res=SearchPro($book,$grade,$subject,$unit,$FenYePage);
   $problem="[";
    $id=0;
     
    while($row=mysql_fetch_assoc($res)){
      if($id<$numaa-1){
      $problem.='{"id"'.':'.'"'.$row['id'].'"'.',"file1"'.':'.'"'.$row['file1'].'",'.'"problem"'.':'.'"'.$row['problem'].'","option1"'.':'.'"'.$row['option1'].'","file2"'.':"'.$row['file2'].'","option2"'.':'.'"'.$row['option2'].'","file3"'.':"'.$row['file3'].'","option3"'.':'.'"'.$row['option3'].'","file4"'.':"'.$row['file4'].'","option4"'.':'.'"'.$row['option4'].'","file5"'.':"'.$row['file5'].'","rightanswers"'.':"'.$row['rightanswers'].'","book"'.':"'.$book.'","grade"'.':"'.$grade.'","subject"'.':"'.$subject.'","unit"'.':"'.$unit.'"}'.',';//使用json文件传递数据
      }else if($id==$numaa-1){//最后一次拼接
          $problem.='{"id"'.':'.'"'.$row['id'].'"'.',"file1"'.':'.'"'.$row['file1'].'",'.'"problem"'.':'.'"'.$row['problem'].'","option1"'.':'.'"'.$row['option1'].'","file2"'.':"'.$row['file2'].'","option2"'.':'.'"'.$row['option2'].'","file3"'.':"'.$row['file3'].'","option3"'.':'.'"'.$row['option3'].'","file4"'.':"'.$row['file4'].'","option4"'.':'.'"'.$row['option4'].'","file5"'.':"'.$row['file5'].'","rightanswers"'.':"'.$row['rightanswers'].'","book"'.':"'.$book.'","grade"'.':"'.$grade.'","subject"'.':"'.$subject.'","unit"'.':"'.$unit.'"}';//使用json文件传递数据
      }
      $id++;
    }
    $problem.="]";//拼接完成了
    
    echo $problem;

}else if($num==4){
  $book=$_POST['book'];
  $sub=$_POST['subject'];
  if($sub=='yw'){
    $subject="语文";
  }else if($sub=='sx'){
    $subject="数学";
  }else if($sub=='yy'){
    $subject="英语";
  }
  $grade=$_POST['grade'];
  $user=$_POST['user'];
  $unit=$_POST['unit'];//现在都拿到了，得先去查询一下，是否已经做过这套题了。
  $res=ControlProblem1($user,$grade,$book,$subject,$unit);

  $numaa=countcontrol($user,$grade,$book,$subject,$unit);
  $problem="[";
  $id=0;
  while($row=mysql_fetch_assoc($res)){
  if($id<$numaa-1){
  $problem.='{"user"'.':'.'"'.$row['user'].'"'.',"grade"'.':'.'"'.$row['grade'].'",'.'"book"'.':'.'"'.$row['book'].'","subject"'.':'.'"'.$row['subject'].'","unit"'.':"'.$row['unit'].'","history"'.':'.'"'.$row['history'].'"}'.',';//使用json文件传递数据
  }else if($id==$numaa-1){//最后一次拼接
         $problem.='{"user"'.':'.'"'.$row['user'].'"'.',"grade"'.':'.'"'.$row['grade'].'",'.'"book"'.':'.'"'.$row['book'].'","subject"'.':'.'"'.$row['subject'].'","unit"'.':"'.$row['unit'].'","history"'.':'.'"'.$row['history'].'"}';//使用json文件传递数据
    }
      $id++;


  }
  $problem.="]";//拼接完成了
    //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$problem,FILE_APPEND);
    echo $problem;


}else if($num==5){
   $book=$_POST['book'];
   $user=$_POST['user'];
   $grade=$_POST['grade'];
   $count1=$_POST['count1'];
   $subject=$_POST['subject'];
   addStar($user,$book,$subject,$count1);

}
?>