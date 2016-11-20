<!DOCTYPE html>
<html>
<head>
<meta name="data-spm" content="a2107" />
<title>少儿综合素质拓展平台</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<script>
</script>
<style>
*{
	padding:0;
	margin:0;
}
.main{
	width:720px;
	height:340px;
	left:350px;
	top:30px;
	background:url(../images/task.png);
	border-radius: 10px;
	margin: 0 auto;
  padding-top: 50px;
  padding-left: 50px;
  color:silver;
  font-weight: bold;
}
.new1,.new2,.new3,.new4,.new5{
  border-radius: 10px;
  border:1px solid white;
  width:500px;
  height:auto;
  margin-bottom: 10px;
  padding-left: 10px;


}
</style>
</head>
<body>
  <div class="main">
  	<?php
  	 require_once 'StudentService.php';
     require_once 'SqlHelper.php';
     header("Content-type:text/html; charset=utf-8");
    if(!empty($_GET['button'])){//看看他是通过那个页面跳转而来
          $style=$_GET['button'];
    }
     if($style=="add"){//添加好友时的请求
           $receiver=$_GET['user1'];//要添加谁为好友
           $sender=$_GET['user'];//当前用户是谁
           $res=Addfriends($receiver,$sender);
           if($res==1){
           	   echo "<script>alert('发送请求成功，正在等待对方审核')</script>";
           	   echo "正在跳转，请稍候.....";
           	   echo "<script>window.location.href='friends.php';</script>";
           }else{
               echo "<script>alert('对不起，服务器繁忙，请稍候再试')</script>";
               echo "<script>window.location.href='friends.php';</script>";
           }
     }else if($style=="show"){//查看消息的时候
    	$user=$_GET['user'];
        Dealnews($user);//将已经查看过的新消息置为空
        $res=Selectnews($user);
        while($row=mysql_fetch_assoc($res)){
        	if($row['adds']!=0){
        		if($row['status']==0){
               $newid=$row['id']; ?>

               <div class="new1">
               <?php
        		   echo $row['sender']."请求添加您为好友</br>";
        		   echo "<a href='deal.php?button=agree&newid=$newid'>同意</a>&nbsp;&nbsp;<a href='deal.php?button=reject&newid=$newid'>拒绝</a>&nbsp;&nbsp;<a href='deal.php?button=delete&newid=$newid'>删除</a>";
        	     ?>
             </div>
               <?php
              }else if($row['status']==1){?>
              <div class="new2">
              <?php
                   $newid=$row['id'];
        	         echo $row['sender']."请求添加您为好友";
                   echo "您同意了该请求<br/>";
                   echo "<a href='deal.php?newid=$newid&button=delete'>删除</a>";
                   ?>
                 </div>
                 <?php
        		}else if($row['status']==2){?>
            <div class="new3">
              <?php
                   $newid=$row['id'];
        			     echo $row['sender']."请求添加您为好友</br>";
        			     echo "您已经拒接了该请求</br>";
        			     echo "<a href='deal.php?newid=$newid&button=delete'>删除</a>";?>
                 </div>
                   <?php
        		}
        	}
        }//这一模块会先提示添加好友的信息


         $res1=Selectnewslist($user);//新的留言显示模块
         while($row1=mysql_fetch_assoc($res1)){?>
         <div class="new4">
         <?php

            echo $row1['leftname']."给您留言说:<br/>";
            echo $row1['area']."</br>";
            echo "<a href='#' >回复</a>&nbsp;&nbsp;<a href='#' >删除</a>"; ?>
          </div>
            <?php
         }

         $res2=Selectsonlist($user);//查询的回复版块
         while($row2=mysql_fetch_assoc($res2)){
         $id=$row2['id'];
         $sqlhelper=new Sqlhelper();
         $sql1="select * from leavemessage where id='".$id."' and adds=1";//把留言已经查看过了但是回复没查看过的给挑出来；
         $res1=$sqlhelper->execute_dql($sql1);
         while($row1=mysql_fetch_assoc($res1)){
          ?>
          <div class="new5">
          <?php
            echo $row1['leavename']."给您回复说".$row1['area'];
            ?>
          </div>
            <?php
         }
    }



    }
  	?>
  </div>
</body>
</html>


