<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>相册</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="imagetoolbar" content="no" />
  <link rel="stylesheet" href="css/xiangce.css" type="text/css"/>
 
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
       
	    <?php
       session_start();
       if(!empty($_GET['visiteduser'])){
                $visiteduser=$_GET['visiteduser'];
        }
      ?>
	    <li><a href="hisxiangce.php?visiteduser=<?php echo  $visiteduser; ?>" target="mainiframe">他的相册</a></li>
      <li><a href="hisnote.html?visiteduser=<?php echo  $visiteduser; ?>">他的笔记</a></li>
      <li><a href="hisliuyan.php?visiteduser=<?php echo  $visiteduser; ?>">给他留言</a></li>
	    </ul>
      </div>
      <div class="sider3">
      <h3>个性签名:</h3>
       <p contentEditable="true">我在成长 </p>
      </div>
      <div class="sider4">

        <div class="showAlbum"><!--此部分为显示相册专用-->
          <?php 
           require_once 'StudentService.php';
          
           $user=$_SESSION['user'];//获取当前操作人
           $visiteduser=$_GET['visiteduser'];//获取当前要访问人的名字
           $res=showAlbum($visiteduser);//找到当前用户创建的所有相册
           while($row=mysql_fetch_assoc($res)){
             $id=$row['id'];
            ?>
           <div class='setAlbum'><!--此部分为设置单个相册的样式专用-->
            <a href='xiangce2.php?id=<?php echo $id; ?>'><?php echo $row['name'];  ?></a>
          </div>

           <?php } ?>

         </div>
       
       
      </div>
  </div>
  </body>
</html>