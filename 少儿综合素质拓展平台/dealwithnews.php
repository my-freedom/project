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
               $newid=$row['id'];
        		   echo $row['sender']."请求添加您为好友";
        		   echo "<a href='deal.php?button=agree&newid=$newid'>同意</a><a href='deal.php?button=reject&newid=$newid'>拒绝</a><a href='deal.php?button=delete&newid=$newid'>删除此条消息</a>";
        	    }else if($row['status']==1){
                   $newid=$row['id'];
        	         echo $row['sender']."请求添加您为好友";
                   echo "您已经同意了该请求";
                   echo "<a href='deal.php?newid=$newid&button=delete'>删除</a>";
        		}else if($row['status']==2){
                   $newid=$row['id'];
        			     echo $row['sender']."请求添加您为好友";
        			     echo "您已经拒接了该请求";
        			     echo "<a href='deal.php?newid=$newid&button=delete'>删除</a>";
        		}
        	}
        }//这一模块会先提示添加好友的信息


         $res1=Selectnewslist($user);//新的留言显示模块
         while($row1=mysql_fetch_assoc($res1)){
            echo $row1['leftname']."给您留言说:<br/>";
            echo $row1['area'];
            echo "<a href='#' >回复</a><a href='#' >删除该提示消息</a>";
         }

         $res2=Selectsonlist($user);//查询的回复版块
         while($row2=mysql_fetch_assoc($res2)){
         $id=$row2['id'];
         $sqlhelper=new Sqlhelper();
         $sql1="select * from leavemessage where id='".$id."' and adds=1";//把留言已经查看过了但是回复没查看过的给挑出来；
         $res1=$sqlhelper->execute_dql($sql1);
         while($row1=mysql_fetch_assoc($res1)){
            echo $row1['leavename']."给您回复说".$row1['area'];
         }
    }



    }

?>