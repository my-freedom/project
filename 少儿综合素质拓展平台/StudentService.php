<?php
/**
 * Created by PhpStorm.
 * User: lijiashuai
 * Date: 2015/8/10
 * Time: 20:26
 */
require_once 'SqlHelper.php';
function SearchPro($book,$grade,$subject,$unit,$FenYePage){//查询题目的函数
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");

    $sql1 ="select * from p where book='".$book."' and grade='".$grade."' and subject='".$subject."' and
    unit='".$unit."' order by id";
   //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$sql1."\r\n",FILE_APPEND);

    $res=$sqlhelper->execute_dql($sql1);
    
    return $res;
    
    

}
function addStar($user,$book,$subject,$count1){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="insert into record(user,book,subject,count1) values('".$user."','".$book."','".$subject."','".$count1."')";
    $num=$sqlhelper->execute_dml($sql);
    return $num;

}
function searchWrong($user){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="select * from wrong where user='".$user."' order by subject desc";
    $res=$sqlhelper->execute_dql($sql);//这里是获取的结果集
    return $res;


}
function searchWrongSum($user){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="select count(*) from wrong where user='".$user."'";
    $res=$sqlhelper->execute_dql($sql);//这里是获取的结果集
    while($row=mysql_fetch_row($res)){
        $res1=$row[0];
    }
    return $res1;

}

function searchTopYuwen(){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="select user,subject,sum(count1) as record from record where subject='语文' group by user order by record desc limit 0,10";
     $res=$sqlhelper->execute_dql($sql);
     return $res;
}
function searchTopSX(){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="select user,subject,sum(count1) as record from record where subject='数学' group by user order by record desc limit 0,10";
     $res=$sqlhelper->execute_dql($sql);
     return $res;
}
function searchTopYY(){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="select user,subject,sum(count1) as record from record where subject='英语' group by user order by record desc limit 0,10";
     $res=$sqlhelper->execute_dql($sql);
     return $res;
}
function searchDetail($id,$book,$grade,$subject,$unit){
     $sqlhelper=new SqlHelper();
     mysql_query("set names utf8");
     $sql="select * from p where id='".$id."' and book='".$book."' and grade='".$grade."' and subject='".$subject."' and unit='".$unit."'";
     //echo $sql;
     //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$sql."\r\n",FILE_APPEND);
     $res=$sqlhelper->execute_dql($sql);
     return $res;
}
function SearchNumSum($book,$grade,$subject,$unit){
   $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
     $sql2="select count(*) from p where book='".$book."' and grade='".$grade."' and subject='".$subject."' and unit='".$unit."'";//查询出这个数
    $res1=$sqlhelper->execute_dql($sql2);
    while($row=mysql_fetch_row($res1)){
        $res1=$row[0];
    }

    return $res1;
}

function SearchPro1($book,$grade,$subject,$unit,$FenYePage){//查询题目的函数
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");

    $sql1 ="select * from p where book='".$book."' and grade='".$grade."' and subject='".$subject."' and
    unit='".$unit."' limit ".($FenYePage->pagenow-1)*$FenYePage->pagesize.",".$FenYePage->pagesize;


    $sql2="select count(id) from p";
    $sqlhelper->execute_dql_fenye($sql1, $sql2, $FenYePage);
    $sqlhelper->close_connect();

}

function saveHistoryPro($username,$subject,$unit,$s,$time){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="select grade,book from b where user='".$username."'";
    $res=$sqlhelper->execute_dql($sql);
    while($row=mysql_fetch_assoc($res)){
        $grade=$row['grade'];
        $book=$row['book'];
    }
    $sql1="insert into showhistory(user,grade,book,subject,unit,history,date) values('".$username."','".$grade."','".$book."','".$subject."','".$unit."','".$s."','".$time."')";
   
    $num=$sqlhelper->execute_dml($sql1);
    return $num;

}
function likeHistoryPro($user,$book,$grade,$subject,$unit,$s,$time){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql1="insert into showhistory(user,grade,book,subject,unit,history,date) values('".$user."','".$grade."','".$book."','".$subject."','".$unit."','".$s."','".$time."')";
    file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$sql1,FILE_APPEND);
    $num=$sqlhelper->execute_dml($sql1);
    return $num;
}
function saveWrong($id,$userr,$book,$grade,$subject,$unit){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="insert into wrong(id,user,book,grade,subject,unit) values('".$id."','".$userr."','".$book."','".$grade."','".$subject."','".$unit."')";
    //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$sql,FILE_APPEND);
    $num=$sqlhelper->execute_dml($sql);
    return $num;


}

function getProblem($a,$b,$book,$grade,$subject,$unit){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="select * from p where id='".$a."' and rightanswers='".$b."' and book='".$book."' and grade='".$grade."' and subject='".$subject."' and unit='".$unit."'";

    $res= $sqlhelper->execute_dql($sql);
   return mysql_num_rows($res);//返回其数量

}

function getResult($a,$book,$grade,$subject,$unit){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
     $sql = "select * from p where id='".$a."' and book='".$book."' and grade='".$grade."' and subject='".$subject."' and unit='".$unit."'" ;
  //开始查询结果了
    $res=$sqlhelper->execute_dql($sql);
    return $res;


}
function getCountID(){
    $sqlhelper=new Sqlhelper();
    mysql_query("set names utf8");
    $sql="select count(*) from p ";
    $res=$sqlhelper->execute_dql($sql);

    return $res;
}
function GetHistory($username){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="select * from showhistory where user='".$username."'";
    $res=$sqlhelper->execute_dql($sql);
    return $res;


}
function SelectUnit($book,$subject){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="select distinct unit from p where book='".$book."' and subject='".$subject."'";
    
    $aaa=$sqlhelper->execute_dql2($sql);//确实获取到了值
    return $aaa;

}
function GetLoginNum($username){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql="select num from b where user='".$username."'";
    $res=$sqlhelper->execute_dql($sql);
    $aaa=mysql_fetch_row($res);
    return $aaa[0];
}
function ControlNum($username){
    $sqlhelper=new SqlHelper();
    mysql_query("set names utf8");
    $sql1="update b set num=num+1 where user='".$username."'";

    $sqlhelper->execute_dml($sql1);

}
function ChooseClass($grade,$book,$user){
    $sqlhelper=new SqlHelper();
    $sql="update b set grade='".$grade."',book='".$book."' where user='".$user."'";
    $res1=$sqlhelper->execute_dml($sql);
    



    if($res1==1){
        echo"<script>alert('您的班级信息已记录！');window.location.href='student1.php';</script>";
    }else{
        echo"<script>alert('班级信息记录失败，请重试！');window.location.href='student.php';</script>";
    }



}
function SelectBook($username){
    $sqlhelper=new SqlHelper();
    $sql="select grade,book from b where user='".$username."'";

    mysql_query("set names utf8");

    $aaa=$sqlhelper->execute_dql2($sql);
    return $aaa;//这里返回的是个数组


}

function ControlProblem($user,$grade,$book,$subject,$unit){//这个事困扰我很久的问题
    $sqlhelper=new SqlHelper();
    $sql="select * from showhistory where user='".$user."' and grade='".$grade."' and book='".$book."' and subject='".$subject."' and unit='".$unit."'";

    
    mysql_query("set names utf8");

    $res=$sqlhelper->execute_dql($sql);
    $id=0;
    while($row = mysql_fetch_assoc($res)){
        
    
        $id++;
    
   }
   if($id==0){
    $aaa=1;//为1的时候说明该题目没有被做过。
   }

    return $aaa;
}
function ControlProblem1($user,$grade,$book,$subject,$unit){
     $sqlhelper=new SqlHelper();
    $sql="select * from showhistory where user='".$user."' and grade='".$grade."' and book='".$book."' and subject='".$subject."' and unit='".$unit."'";

    
    mysql_query("set names utf8");

    $res=$sqlhelper->execute_dql($sql);
    return $res;

}
function countcontrol($user,$grade,$book,$subject,$unit){
    $sqlhelper=new SqlHelper();
    $sql="select count(*) from showhistory where user='".$user."' and grade='".$grade."' and book='".$book."' and subject='".$subject."' and unit='".$unit."'";

    
    mysql_query("set names utf8");
    $res1=$sqlhelper->execute_dql($sql);
    while($row=mysql_fetch_row($res1)){
        $res1=$row[0];
    }

    return $res1;

}


function DeleteHistory($username,$grade,$book,$subject,$unit){
    $sqlhelper=new Sqlhelper();
    $sql="delete from showhistory where user='".$username."' and  grade='".$grade."' and book='".$book."' and subject='".$subject."' and unit='".$unit."'";
    mysql_query("set names utf8");
    $res=$sqlhelper->execute_dml($sql);
}
function  dealRecord($id,$book,$grade,$subject,$unit){
     $sqlhelper=new Sqlhelper();
     $sql="delete from wrong where id='".$id."' and book='".$book."' and grade='".$grade."' and subject='".$subject."' and unit='".$unit."'";
     mysql_query("set names utf8");
     $res=$sqlhelper->execute_dml($sql);

}
function SearchHistory($user,$date){
    $sqlhelper=new Sqlhelper();
    $sql="select * from showhistory where user='".$user."' and date='".$date."'";
  
    mysql_query("set names utf8");
    $res=$sqlhelper->execute_dql($sql);
    return $res;
}

function UpdateInfro($user,$name,$sex,$grade,$book,$birthday,$phone,$email){
    $sqlhelper=new Sqlhelper();
    $sql="update b set name='".$name."',sex='".$sex."',grade='".$grade."',book='".$book."',birthday='".$birthday."',phone='".$phone."',email='".$email."',num=1 where user='".$user."'";
    mysql_query("set names utf8");
    $num=$sqlhelper->execute_dml($sql);
    return $num;

}
function ShowAfterUpdate($username){
     $sqlhelper=new Sqlhelper();
     $sql="select * from b where user='".$username."'";
     mysql_query("set names utf8");
     $res=$sqlhelper->execute_dql($sql);
     return $res;

}

function SaveAndList($visiteduser,$user,$saying,$date){//这里是留言用的函数
    $sqlhelper=new Sqlhelper();
    $sql1="select count(*) from textbord";//这里为下面的id做出了规定，id数是当前用户留言的条数
    $res=$sqlhelper->execute_dql($sql1);//查询子ID的个数，为下次插入做准备
    while($row=mysql_fetch_row($res)){
        $id=$row[0]+1;
    }
    if(empty($visiteduser)){
        $visiteduser=$user;//如果是自己给自己留言的情况，则留言人和用户名一样
    }
    $sql="insert into textbord(username,leftname,area,id,date,adds,new) values ('".$visiteduser."','".$user."','".$saying."','".$id."','".$date."','1','1')";//说明一下，此处的adds是让用户选择是否现在再消息里，而new则是为了在首页上累加新消息的数目
    
    mysql_query("set names utf8");
    $num=$sqlhelper->execute_dml($sql);
    return $num;

}
function SelectList($user){//该函数是从留言表里把属于该用户的留言给找出来
     $sqlhelper=new Sqlhelper();
     $sql="select * from textbord where username='".$user."' order by id desc";
     mysql_query("set names utf8");
     $res=$sqlhelper->execute_dql($sql);
     return $res;
 }

 function SelectReback($id){//该函数的作用是从回复表里把留言的回复给找出来
    $sqlhelper=new Sqlhelper();
    $sql="select * from leavemessage where id='".$id."'";//把指定位置的id给找出来
    mysql_query("set names utf8");
    $res=$sqlhelper->execute_dql($sql);
    return $res;


 }

 function DeleteText($user,$area,$id){
     $sqlhelper=new Sqlhelper();
     $sql="delete from textbord where username='".$user."' and area='".$area."'";
     mysql_query("set names utf8");
     $num=$sqlhelper->execute_dml($sql);//执行删除操作以后，还要把两个表某个id后面的值全减小一个
     $sql4="delete from leavemessage where id=$id";
     $sqlhelper->execute_dml($sql4);
     $sql2="update textbord set id=id-1 where id>$id";
     $sqlhelper->execute_dml($sql2);//执行把两个表的id都要减小的操作
     $sql3="update leavemessage set id=id-1 where id>$id";
     $sqlhelper->execute_dml($sql3);
     return $num;
}

function RackbackText($user,$visiteduser,$area,$area1,$id){//这里是回复时用的函数(可以拿id来做文章,但是这里的id并不唯一)
      $sqlhelper=new Sqlhelper();
      $sql1="select count(*) from leavemessage where id='".$id."' and leavename='".$user."' and backname='".$visiteduser."'";
      $res=$sqlhelper->execute_dql($sql1);//查询子ID的个数，为下次插入做准备
      while($row=mysql_fetch_row($res)){
        $son_id=$row[0]+1;
      }
      if(empty($visiteduser)){//如果是我回复别人，获取他回复的是谁
           $sql2="select * from textbord where id='".$id."'";
           $res1=$sqlhelper->execute_dql($sql2);
           while($row1=mysql_fetch_assoc($res1)){
               $visiteduser=$row1['leftname'];//这里已经写过了
            }
      }
      $sql="insert into leavemessage (id,son_id,leavename,backname,area,adds,new) values ('".$id."','".$son_id."','".$user."','".$visiteduser."','".$area1."','1','1')";
      $num=$sqlhelper->execute_dml($sql);
      return $num;
}

function SaveAlbum($user,$name,$des,$style,$date){
     $sqlhelper=new Sqlhelper();
     $sql="select count(*) from album";//从数据库查询一下现在总共建了多少个相册
     $res=$sqlhelper->execute_dql($sql);
     while($row=mysql_fetch_row($res)){
        $id=$row[0]+1;//获取要建的相册的编号
      }
      $sql="insert into album (id,name,dsc,style,user,time) values ('".$id."','".$name."','".$des."','".$style."','".$user."','".$date."')";//把要创建的相册和对应的名字插入数据库之中
    
      $num=$sqlhelper->execute_dml($sql);


      return $num;//作为创建成功与否的标志
}


function showAlbum($user){//在网页山显示相册
    $sqlhelper=new Sqlhelper();
    mysql_query("set names utf8");
    $sql="select * from album where user='".$user."'";
    $res=$sqlhelper->execute_dql($sql);
    return $res;

}
function SelectAlbum($user,$album,$filename){//选择文件夹上传图片
  $sqlhelper=new Sqlhelper();
  mysql_query("set names utf8");
  $sql="select id from album where name='".$album."' and user='".$user."'" ;//根据给定的相册名找出其相册id
  $res=$sqlhelper->execute_dql($sql);
  while($row=mysql_fetch_row($res)){
    $id=$row[0];
  }
  $sql2="select count(*) from photo where id='".$id."'" ;//查询该相册已经上传了多少张相片
  $res1=$sqlhelper->execute_dql($sql2);
   while($row1=mysql_fetch_row($res1)){
    $son_id=$row1[0]+1;//为新上传的相片设置了编号
  }
  $sql1="insert into photo (id,son_id,username) values('".$id."','".$son_id."','".$filename."')";
  $num=$sqlhelper->execute_dml($sql1);

}

function selectAllphoto($id){
   $sqlhelper=new Sqlhelper();
   mysql_query("set names utf8");
   $sql="select * from photo where id='".$id."'";
   $res=$sqlhelper->execute_dql($sql);//执行查询操作
   return $res;


}

function Searchfriends($friends){
     $sqlhelper=new Sqlhelper();
     mysql_query("set names utf8");
     $sql="select * from b where user='".$friends."'";
     $res=$sqlhelper->execute_dql($sql);
     return $res;

}
function  Addfriends($receiver,$sender){
    $sqlhelper=new Sqlhelper();
    mysql_query("set names utf8");
    $sql2="select receiver,status from news where sender='".$sender."'";
    $res2=$sqlhelper->execute_dql($sql2);
    while($row1=mysql_fetch_assoc($res2)){

        if(($row1['receiver']==$receiver)&&($row1['status']==1)){
            echo "<script>window.alert('对方已经是您的好友');window.location.href='friends.php'</script>";
            exit();
        }
    }
    $id=1;
    $sql1="select count(*) from news";//查询有多少条记录
    $res=$sqlhelper->execute_dql($sql1);
    if($row=mysql_fetch_row($res)){
        $id=$row[0]+1;//查询一下下次插入时的id
    }
    $sql="insert into news (id,receiver,sender,adds,new) values ('$id','".$receiver."','".$sender."','1','1')";
    $res1=$sqlhelper->execute_dml($sql);
 
   return $res1;
}

function Selectnews($user){//在学生主页如果有动态则用这个韩式显示
    $sqlhelper=new Sqlhelper();
    $sql="select * from news where receiver='".$user."'";//查询里面有几条记录
    mysql_query("set names utf8");
    $res=$sqlhelper->execute_dql($sql);
    return $res;
}

function Dealnews($user){//学生查看消息之后把数据库之中的消息给重置
     $sqlhelper=new Sqlhelper();
     mysql_query("set names utf8");
     $sql="update news set new=0 where receiver='".$user."'";
     $res=$sqlhelper->execute_dml($sql);
     $sql1="update textbord set new=0 where username='".$user."'";
     $res1=$sqlhelper->execute_dml($sql1);
     $sql2="update leavemessage set new=0";
     $res2=$sqlhelper->execute_dml($sql2);//一旦查看过，则不再有新消息提醒
     return $res;
}
function Agreefriends($id){
    $sqlhelper=new Sqlhelper();
    mysql_query("set names utf8");
    $sql="update news set status=1 where id=$id";
    $res=$sqlhelper->execute_dml($sql);
    return $res;
}
function Rejectfriends($id){
    $sqlhelper=new Sqlhelper();
    mysql_query("set names utf8");
    $sql="update news set status=2 where id=$id";
    $res=$sqlhelper->execute_dml($sql);
    return $res;
}
function Deletefriends($id){
    $sqlhelper=new Sqlhelper();
    mysql_query("set names utf8");
    $sql="update news set adds=0 where id=$id";
    $res=$sqlhelper->execute_dml($sql);
    return $res;
}
function  SelectListfriends($user){//查看自己的好友时的函数
    $sqlhelper=new Sqlhelper();
    mysql_query("set names utf8");
    $sql="select * from news where receiver='".$user."' and status=1";//符合条件
    $res=$sqlhelper->execute_dql($sql);
    return $res;
}

function Selectnewslist($user){
    $sqlhelper=new Sqlhelper();
    mysql_query("set names utf8");
    $sql="select * from textbord where username='".$user."' and adds=1";//把没有被查看的留言给显示出来
    $res=$sqlhelper->execute_dql($sql);
    return $res;
}

function Selectsonlist($user){
    $sqlhelper=new Sqlhelper();
    mysql_query("set names utf8");
    $sql="select * from textbord where leftname='".$user."' and new=0";//把没有被查看的留言给显示出来
    $res=$sqlhelper->execute_dql($sql);
    return $res;
}
function Selectphoto($user){
     $sqlhelper=new Sqlhelper();
    mysql_query("set names utf8");
    $sql="select photo from b where user='".$user."'";//查看一下该用户是否已经上传了头像
    $res=$sqlhelper->execute_dql($sql);
    return $res;
}
function uploadphoto1($user,$filename){
     $sqlhelper=new Sqlhelper();
     mysql_query("set names utf8");
     $sql="update b set photo='".$filename."' where user='".$user."'";
     $num=$sqlhelper->execute_dml($sql);
     return $num;

}
function selectHistoryNum($user,$date){
    $sqlhelper=new Sqlhelper();
    mysql_query("set names utf8");
    $sql="select count(*) from showhistory where user='".$user."' and date='".$date."'";
    $num=$sqlhelper->execute_dql($sql);
    return $num;//返回题目的数量

}


?>