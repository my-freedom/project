<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
    session_start();
    if(!empty($_SESSION['user'])){
    $user=$_SESSION['user'];//获取用户名
    }
  ?>
	<meta charset="UTF-8">
	<title>清理错题</title>
  <style>
    .x{
    background-image:url(images/jindan1.png);
    width:215px;
    height:200px;
    color:red;
  }
  .y{
    background-image:url(images/jinhua2.png);
    width:235px;
    height:200px;

  }
   .z{
    background-image:url(images/kongdan1.png);
    width:235px;
    height:200px;
  }
  .zz{
     background:url(images/da.png);
     padding-top:120px;
      width:60px;
  }



  table{
    font:20px;
    font-weight: bold;
    margin:0 auto;
    text-align: center;
  }
  .ti{
    margin:0 auto;
    background: url(images/a-new-learning_01.png) no-repeat;
    width:1000px;
    height:80px;
    color:gray;
    font-family: 微软雅黑;
    font-size:30px;
    text-align: center;
    padding-top: 40px;
  }
  .control{
    width:40px;
    background: green;
    
    


  }
  .controll{
    width:40px;
    background: green;
  }
  #control22{
    margin: 0 auto;
    padding-left: 500px;

  }
  #control222{
    padding-top: 680px;
    padding-left: 500px;

  }
  .afterclick{
    background:red;
    width:40px;
  }
  #close{ 
  background:url(images/close.png) no-repeat; 
  width:30px; 
  height:30px; 
  cursor:pointer; 
  position:absolute; 
  right:5px; 
  top:15px; 
  text-indent:-999em;
  }
#mask{ 
  background-color:#ccc;
  opacity:0.5;
  filter: alpha(opacity=50); 
  position:absolute; 
  left:0;
  top:0;
  z-index:1000;
  }
#login{ 
  position:fixed;
  z-index:1001;
  }
.loginCon{ 
  position:relative; 
  width:500px;
  height:340px;
  background:url(images/sky.png) #2A2C2E center center no-repeat;
  }
.loginCon ul{
  position:absolute;
  top:100px;
  left:130px;
  font-size:16px;
}
.shu{
    margin:0 auto;
    background:url(images/backshu.jpg);
    width:1000px;
    height:660px;
    border-radius: 10px;
     -webkit-box-shadow: -4px 3px 5px #888888;
     -moz-box-shadow: -4px 3px 5px #888888; 
     -o-box-shadow: -4px 3px 5px #888888;
     box-shadow: -4px 3px 5px #888888; 
     position: absolute;
     text-align: center;
  }
   .shu1{
    position: absolute;
    width:550px;
    height:200px;
    top:460px;
    left:250px;
  }

  .ci{
    position: absolute;
    text-align: center;
    font-family: 微软雅黑;
    font-size: 30px;
    top:70px;
    left:300px;
    width:450px;
    height:70px;
    background:url(images/timu1.png) no-repeat;
    color:white;
    padding-top: 50px;
  }


.yy1{
    background:url(images/da.png);
    padding-top: 100px;
    width:60px;
  }

.mo{
    background:url(images/dishu.png) no-repeat;
    padding-top: 100px;
    width:60px;
  }

.wuzeiback{
    margin:0 auto;
    background:url(images/wuzeiback2.png);
    width:1000px;
    height:660px;
    border-radius: 10px;
    -webkit-box-shadow: -4px 3px 5px #888888;
  -moz-box-shadow: -4px 3px 5px #888888; 
  -o-box-shadow: -4px 3px 5px #888888;
  box-shadow: -4px 3px 5px #888888; 
  position: absolute;
  text-align: center;
  }
  .wuzeiA{
    position: absolute;
    width:200px;
    height:200px;
    top:460px;
    left:400px;
    padding-top: 100px;
    background:url(images/wuzei.png) no-repeat;
    font-weight: bold;
    font-size: 20px;
  }
  .moA{
    position: absolute;
    top:260px;
    left:160px;
    font-weight: bold;
    font-size: 20px;
    color:white;
    cursor: pointer;
  }
  .moB{
    position: absolute;
    top:170px;
    left:440px;
    font-weight: bold;
    font-size: 20px;
    color:white;
    cursor: pointer;
  }
  .moC{
    position: absolute;
    top:390px;
    left:480px;
    font-weight: bold;
    font-size: 20px;
    color:white;
    cursor: pointer;
  }
  .moD{
    position: absolute;
    top:300px;
    left:850px;
    font-weight: bold;
    font-size: 20px;
    color:white;
    cursor: pointer;
  }
  .wuzeiA1{
    position: absolute;
    width:200px;
    height:200px;
    top:460px;
    left:400px;
    padding-top: 100px;
    background:url(images/wuzei1.png) no-repeat;
    font-weight: bold;
    font-size: 20px;
  }
  .wuzeiA2{
    position: absolute;
    width:200px;
    height:200px;
    top:460px;
    left:400px;
    padding-top: 100px;
    background:url(images/wuzei2.png) no-repeat;
    font-weight: bold;
    font-size: 20px;
  }
#control2222{
    padding-top: 850px;
    padding-left: 500px;

  }

  </style>
</head>
<link rel="stylesheet" href="css/learningcenter1.css" type="text/css"/>
<body>
	  <div class="tit"><span class="tite"><img src="images/homepage3.png"/>&nbsp;&nbsp;&nbsp;少儿综合素质拓展平台</span><span><a href="Reback.php">注销</a></span><span><a href="register.html">在线咨询</a></span><span><a href="login.html">收藏网站</a></span><span><a href="register.html">设为首页</a></span>
   </div>
  <div class="top">
  <a href="student.php">首页</a><a href="learningcenter.php">学习中心</a><a href="my.php">个人中心</a><a href="list.html">排行榜</a><a href="video.html">视频中心</a>
  </div>
  <div class="mid" id="mid">
    <div class="sider2" id="sider2">
        

         
           
        
           
         </div>
    <div id="hiddden1">
      <div class="sider1" id="sider1">
      	<input type='text' style='display:none' id='hid' value='<?php echo $user;?>' >
        <ul>
        <li><a href='learningcenter.php'>自学中心</a></li>
        <li><a href="his.php">查看历史</a></li>
        <li><a href="wrong.php">查看错题</a></li>
        </ul>
      </div>
     
      </div>

    </div>
     
  </div>
<script src="js/semantic.min.js"></script>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/wrong.js"></script>
</body>
</html>