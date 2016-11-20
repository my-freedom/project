<?php
/**
 * Created by PhpStorm.
 * User: lijiashuai
 * Date: 2015/8/10
 * Time: 11:11
 */
   require_once 'SqlHelper.php';
   function AddItemToMysql($book,$grade,$subject,$unit,$problem,$filename,$option1,$filename1,$option2,$filename2,$option3,$filename3,$option4,$filename4,$rightanswers,$answers,$filename5,$username){
       $sqlhelper=new SqlHelper();
       mysql_query("set names utf8");
       $sql1="select * from p where book='".$book."' and grade='".$grade."' and subject='".$subject."'";//从数据库中查询一下，这个年级的这本书的这个单元已经有几道题了
       $res=$sqlhelper->execute_dql($sql1);
       $id=1;
       while($row=mysql_fetch_assoc($res)){//现在这个题目就是这样了
          $id=$row['id']+1;
       }
       if($filename=="null"){
         $filename="";
       }
       if($filename1=="null"){
         $filename1="";
       }
       if($filename2=="null"){
        $filename2="";
       }
       if($filename3=="null"){
        $filename3="";
       }
       if($filename4=="null"){
        $filename4="";
       }
       
      
           $insert ="INSERT INTO p(id,book,grade,subject,unit,problem,file1,option1,file2,option2,file3,option3,file4,option4,file5,rightanswers,answers,file6,username) VALUES
		('".$id."','".$book."','".$grade."','".$subject."','".$unit."','".$problem."','".$filename."','".$option1."','".$filename1."','".$option2."','".$filename2."','".$option3."','".$filename3."','".$option4."','".$filename4."','".$rightanswers."','".$answers."','".$filename5."','".$username."')";

         $num=$sqlhelper->execute_dml($insert);
           if($num==1){
               echo"<script>alert('数据记录插入成功！');window.location.href='teacher.php';</script>";
           }else{
               echo"<script>alert('数据记录插入失败！');window.location.href='teacher.php';</script>";
           }
       


   }

  function DeleteItemFromMysql($ID,$book,$grade,$unit,$subject){
      $sqlhelper=new SqlHelper();
      mysql_query("set names utf8");
      $sql="delete from p  where ID ='".$ID."' and book='".$book."' and grade='".$grade."' and unit='".$unit."' and subject='".$subject."' ";
     $num= $sqlhelper->execute_dml($sql);
      if($num==1){
          echo"<script>alert('数据记录删除成功！');window.location.href='teacher.php';</script>";
      }else{
          echo"<script>alert('抱歉，您没有足够的权限对改题目进行删除操作！');window.location.href='teacher.php';</script>";
      }

  }


 function SearchItemFromMysql($searchType,$searchTerm){
     $sqlhelper=new SqlHelper();
     mysql_query("set names utf8");
     $sql = "select * from p where ".$searchType." = '".$searchTerm."'";
     $res=$sqlhelper->execute_dql($sql);

     if(mysql_affected_rows()<=0){
         echo"<script>alert('该题目不存在或您没有对该题目操作的权限！');window.location.href='select.html';</script>";
     }else{

         return $res;
     }

 }
 function searchAll(){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="select distinct book,grade,subject,unit from p ";//找出所有的
    $res=$sqlhelper->execute_dql($sql);
    return $res;

 }
 function searchAll1($book,$grade,$unit,$subject){
   $sqlhelper=new SqlHelper();
   mysql_query("set names utf8");
   $sql="select id,problem,option1,option2,option3,option4 from  p where book='".$book."' and grade='".$grade."' and subject='".$subject."' and unit='".$unit."'";
   $res=$sqlhelper->execute_dql($sql);
  return $res;
 }
function UpdateItemFromMysql($book,$grade,$subject,$unit,$problem,$filename,$option1,$filename1,$option2,$filename2,$option3,$filename3,$option4,$filename4,$rightanswers,$answers,$filename5,$ID){
   $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="update p set book='".$book."',grade='".$grade."',subject='".$subject."',unit='".$unit."',problem='".$problem."',file1='".$filename."',option1='".$option1."',file2='".$filename1."',option2='".$option2."',file3='".$filename2."',option3='".$option3."',file4='".$filename3."',option4='".$option4."',file5='".$filename4."',rightanswers='".$rightanswers."',answers='".$answers."',file6='".$filename5."'where  ID =".$ID;

    $num=$sqlhelper->execute_dml($sql);
    if($num==1){
        echo"<script>alert('数据记录修改成功！');window.location.href='data.html';</script>";
    }else{
        echo"<script>alert('抱歉，该题目不存在或您没有足够的权限对改题目进行修改操作！');window.location.href='revise.html';</script>";
    }

}
?>