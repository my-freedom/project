<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>个人中心</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="imagetoolbar" content="no" />
  <link rel="stylesheet" href="css/learningcenter.css" type="text/css"/>
  <style>
  ul{
      margin: 0;
      padding: 0;
    }
    li{
      list-style: none;
    }
  #pro3{
      border: 2px solid #ccc;
      border-radius: 10px;
      position: relative;
      height: auto;
      width: 500px;
      left:6%;
      font-size: 20px;
      margin-top:-50px;
      

    }
    #pro3 span{
      color:green;


    }
    #pro3 p{
      font-color:red;
    }
    #pro3 input{
      
      margin-left: 200px;
    }
    .box{
      height: auto;
      width: 500px;
      border: 2px solid #ccc;
      position: relative;
      padding:20px;
      left:6%;
      border-radius: 10px;
     background: white;
     display: none;
    
    }
    #study{
      width:700px;
  height:auto;
  background:white;
  margin-top:60px;
  margin-left: 350px;
  left:300px;
  border-radius: 10px;
  padding-top: 70px;
  padding-left: 100px;
  padding-bottom:50px;
    }
   
  </style>
  </head>
  <body>
  <div class="tit"><span class="tite"><img src="images/homepage3.png"/>&nbsp;&nbsp;&nbsp;少儿综合素质拓展平台</span><span><a href="Reback.php">注销</a></span><span><a href="register.html">在线咨询</a></span><span><a href="login.html">收藏网站</a></span><span><a href="register.html">设为首页</a></span>
   </div>
  <div class="top">
  <a href="student.php">首页</a><a href="learningcenter.php">学习中心</a><a href="my.php">个人中心</a><a href="list.html">排行榜</a><a href="register.html">视频中心</a><a href="register.html">课外乐园</a>
  </div>
   <div class="mid">
    <div class="sider1">
        <ul>
        <li><a href='learningcenter.php'>自学中心</a></li>
        <li><a href="his.php">查看历史</a></li>
        <li><a href="wrong.php">查看错题</a></li>
        </ul>
      </div>
  <div id="study">


<?php
session_start();
require_once 'SqlHelper.php';
require_once 'StudentService.php';
header("content-type:text/html;charset=utf-8");
$id=1;
$grade=$_GET['grade'];
$book=$_GET['book'];
$subject=$_GET['subject'];
$unit=$_GET['unit'];
$check=$_GET['check'];//这个是做题记录
 /*if(!empty($_POST['sum'])){//
         $ProId1=$_POST['sum'];
         $_SESSION['sum']=$ProId1;
     }else{
        $ProId1=$_SESSION['sum'];
}*///这里的sum好像是总题数

    
    $l=explode("/",$check);//把字符串分割，并把结果传到数组里,现在已经获取到了字符串

    

      for($i=0;$i<count($l);$i=$i+2){
                $num=getProblem($l[$i],$l[$i+1],$book,$grade,$subject,$unit);//查找做对的题目
              

      if($num==1){//说明这道题答对了

          $result=getResult($l[$i],$book,$grade,$subject,$unit);//根据题号查询出改作对题目的所有信息
          while ($row = mysql_fetch_assoc($result)) {  ?>
          <div class="box1" id="box1" >
            <p>
        <h4><span><?php echo $row['id'] ?></span><span>.</span><span></span><span><?php echo $row['problem'] ?></span></h4>
            </p>
      <ul>
       <li><span>A.</span><?php echo $row['option1'] ?></br></li>
        <li><span>B.</span><?php echo $row['option2'] ?></br></li>
        <li><span>C.</span><?php echo $row['option3'] ?></br></li>
        <li><span>D.</span><?php echo $row['option4'] ?></br></li>
        <li><span style='color:green;'>恭喜您此题答对</span></li>
        <li><span>该题您的选项为<?php echo $row['rightanswers']?></span></li>
      </div>
      <div class="box2" id="box2">
        <img src='images/duihao.jpg' alter='duihao' width:"30px" height="50px"> 
      </div>
      </ul>
           <?php
       }
          
        }else{




                 $result=getResult($l[$i],$book,$grade,$subject,$unit);//获取题目没做对的信息

          while ($row = mysql_fetch_assoc($result)){ ?>
            
            <p>
        <h4><span><?php echo $row['id'] ?></span><span>.</span><span></span><span><?php echo $row['problem'] ?></span></h4>
            </p>
      <ul>
        <li><span>A.</span><?php echo $row['option1'] ?></br></li>
        <li><span>B.</span><?php echo $row['option2'] ?></br></li>
        <li><span>C.</span><?php echo $row['option3'] ?></br></li>
        <li><span>D.</span><?php echo $row['option4'] ?></br></li>
        <li><span style='color:red;'>抱歉您该题答错</span></li>
        <li><span style='color:red;'>该题您的选项为<?php echo $l[$i+1]?></span></li>
        <li><span>该题的正确选项为<?php echo $row['rightanswers']?></span></li>
        <img src='images/cuohao.gif' alter='duihao' width:"30px" height="30px"> 
      </ul>
      
          
          <?php
          }
        }
      } 




    ?>
  </div>
 </div>
  </body>
</html>