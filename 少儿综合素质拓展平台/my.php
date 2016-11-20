<!doctype html>
<html>
 <head>
  <?php  session_start();
   $username=$_SESSION['user'];
         require_once 'StudentService.php';
         $res=ShowAfterUpdate($username);
         while($row=mysql_fetch_assoc($res)){
          $name=$row['name'];
          $_SESSION['name']=$name;
          $sex=$row['sex'];
          $birthday=$row['birthday'];
          $grade=$row['grade'];
          $book=$row['book'];
          $phone=$row['phone'];
          $email=$row['email'];
 }

  ?>
  <meta charset="UTF-8">
  <title>个人中心</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="imagetoolbar" content="no" />
  <link rel="stylesheet" href="css/my.css" type="text/css"/>
  <script>
function openNew(){
	//获取页面的高度和宽度
	var sWidth=document.body.scrollWidth;
	var sHeight=document.body.scrollHeight;
	
	//获取页面的可视区域高度和宽度
	var wHeight=document.documentElement.clientHeight;
	
	var oMask=document.createElement("div");
		oMask.id="mask";
		oMask.style.height=sHeight+"px";
		oMask.style.width=sWidth+"px";
		document.body.appendChild(oMask);
	var oLogin=document.createElement("div");
		oLogin.id="login";
		oLogin.innerHTML="<div class='loginCon'><div class='sider5'><form action='UpdateInfro.php' method='post' ><h3>我的资料：</h3><li >姓    名:  <input type='text' name='name'  value='<?php  echo $name; ?>'/></li><li>性    别:  <input type='text' name='sex' value='<?php  echo $sex; ?>'/></li><li>年    级:  <input type='text' name='grade' value='<?php  echo $grade; ?>'/></li><li>教 材:   <input type='text' name='book' value='<?php  echo $book; ?>'/></li><li>生 日:   <input type='text' name='birthday' value='<?php  echo $birthday; ?>'/></li><li>电 话:   <input type='text' name='phone' value='<?php  echo $phone; ?>'/></li><li>邮 箱:   <input type='text' name='email' value='<?php  echo $email; ?>'/></li><input type='submit' class='xiugai' hidefocus='true' value='确定' /></form></div><div id='close'>点击关闭</div></div>";
		document.body.appendChild(oLogin);
	
	//获取登陆框的宽和高
	var dHeight=oLogin.offsetHeight;
	var dWidth=oLogin.offsetWidth;
		//设置登陆框的left和top
		oLogin.style.left=sWidth/2-dWidth/2+"px";
		oLogin.style.top=wHeight/2-dHeight/2+"px";
	//点击关闭按钮
	var oClose=document.getElementById("close");
	
		//点击登陆框以外的区域也可以关闭登陆框
		oClose.onclick=oMask.onclick=function(){
					document.body.removeChild(oLogin);
					document.body.removeChild(oMask);
					};
					};
					
	window.onload=function(){
			var oBtn=document.getElementById("btnLogin");
				//点击登录按钮
				oBtn.onclick=function(){
					openNew();
					return false;
					}
				
		}
</script>
  </head>
  <body>
  <div id="mask"></div>
  <div class="top">
  <ul>
    <li class="cat-1"><img src="images/ren.png"><a href="student.php">首页</a></li>
	<li class="cat-2"><img src="images/fangzi.png"><a href="learningcenter.php">学习中心</a></li>
	<li class="cat-3"><img src="images/lu.png"><a href="#">个人中心</a></li>
	<li class="cat-4"><img src="images/shipin.png"><a href="list.html">排行榜</a></li>
	<li class="cat-5"><img src="images/yingyong.png"><a href="video.html">视频中心</a></li>

	</ul>
  </div>
  <div class="main">
      <div class="sider1">
          
        
      </div>
      <div class="sider2">
        <ul>
        <li><a href='my.php'>个人资料</a></li>
	    <li><a href="seculity.html">账号安全</a></li>
	    <li><a href="xiangce.php" target="mainiframe">相册</a>&nbsp;</li>
	    <li><a href="note.html">课堂笔记</a></li>
      <li><a href="friends.php">好友</a></li>
	    <li><a href="liuyan.php">留言板</a></li>
	    </ul>
      </div>
      <div class="sider3">
      
      </div>
      <div class="sider4">

        <ul>

            <h2>我的资料:</h2>
            <li>姓    名:   <?php  echo $name; ?></li>
            <li>性    别:   <?php  echo $sex; ?></li>
            <li>生    日:   <?php  echo $birthday; ?></li>
            <li>年    级:   <?php  echo $grade; ?></li>
            <li>教    材:   <?php  echo $book; ?></li>
            <li>电    话:   <?php  echo $phone; ?></li>
            <li>邮    箱:   <?php  echo $email; ?></li>
        </ul>
        <button id="btnLogin" hidefocus="true" class="login-btn">修改</button> 
      </div>
  </div>
  </body>
</html>