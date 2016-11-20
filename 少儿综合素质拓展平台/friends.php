<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>笔记</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="imagetoolbar" content="no" />
  <link rel="stylesheet" href="css/note.css" type="text/css"/>
  </head>
  <body>
  <div id="mask"></div>
  <div class="top">
  <ul>
    <li class="cat-1"><img src="images/ren.png"><a href="student.php">首页</a></li>
  <li class="cat-2"><img src="images/fangzi.png"><a href="learningcenter.php">学习中心</a></li>
  <li class="cat-3"><img src="images/lu.png"><a href="#">个人中心</a></li>
  <li class="cat-4"><img src="images/shipin.png"><a href="list.html">排行榜</a></li>
  <li class="cat-5"><img src="images/yingyong.png"><a href="#">视频中心</a></li>
  <li class="cat-7"><img src="images/yinyue.png"><a href="#">课外乐园</a></li>
	</ul>
  </div>
  <div class="main">
      <div class="sider1">
          <input type="file" name="file" accept="image/gif, image/jpeg"/> 
      </div>
      <div class="sider2">
        <ul>
        <li><a href="my.php">个人资料</a></li>
	    <li><a href="seculity.html">账号安全</a></li>
	    <li><a href="xiangce.php" target="mainiframe">相册</a></li>
	    <li><a href="note.html">课堂笔记</a></li>
      <li><a href="friends.php">好友</a></li>
	    <li><a href="liuyan.php">留言板</a></li>
	    </ul>
      </div>
      <div class="sider3">
      <h3>个性签名:</h3>
       <p contentEditable="true">在此留下你的签名，嘿嘿</p>
      </div>
       <div class="sider4">
        <form action='friends.php' method='POST'>
          请输入要添加的好友名称:<input type='text' name='friends' />
          <input type='submit' value='搜索' />
        </form>
        <div>
          <?php
          session_start();
           require_once 'StudentService.php';
           header("Content-Type:text/html;charset=utf-8"); 
            $user=$_SESSION['user'];
               if(!empty($_POST['friends'])){
              $friends=$_POST['friends'];//获取要搜索的好友名称
               $res=Searchfriends($friends);//查询好友
               while($row=mysql_fetch_assoc($res)){?>
                 <div>
                  <?php echo  $row['user'];?>
                  <?php echo  $row['grade'];?>
                  <a href='dealwithnews.php?user1=<?php echo  $row['user'];?>&user=<?php echo $user; ?>&button=add'>添加好友</a>
                </div>
           <?php  }  
               }?>
        </div>
        <a href='friends.php'>展开好友列表</a>
        <?php 
           
             $res=SelectListfriends($user);
             while($row=mysql_fetch_assoc($res)){?>
                  <div>
                    <a href="my1.php?visiteduser=<?php  echo $row['sender']; ?>"><?php  echo $row['sender']; ?></a>
                  </div>
             <?php }
        ?>
       </div>
  </body>
</html>