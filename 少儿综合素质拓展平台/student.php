<!DOCTYPE html>
<html>
<head>
  <?php 
    session_start();
     if(!empty($_SESSION['user'])){
               $user=$_SESSION['user'];
    }


  ?>
<meta name="data-spm" content="a2107" />
<title>少儿综合素质拓展平台</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="css/student.css" type="text/css" />
<link rel="stylesheet" href="../js/semantic.min.css" />
<style>
  html{ height:100%}
#mask{ height:100%;
  width:100%; 
  position:absolute;
  top:0;
  left:0;
  background:#000; 
  opacity:0.5; filter:alpha( opacity=50);
  display:none;
  z-index: 10;
}
#searchTip{ 
  width:980px; 
  height:800px;
  display:none;
   position:absolute; 
   left:50%;
    margin-left:-490px;
  }
#searchTip div{ 
  position:absolute;
  display: none;
}
#searchTip div a{ 
  position:absolute;
  width:95px; 
  height:32px; 
  text-indent:-999px;
  overflow:hidden; 
  cursor:pointer; 
}
#searchTip div span{ position:absolute;height:30px; width:30px;  text-indent:-999px; overflow:hidden; cursor:pointer; }

.stepA{ 
  width:420px; 
  height:280px; 
  background:url(images/yindao1.png) no-repeat; 
  top:69px; left:304px;z-index: 20;
}
.stepA span{
  top:70px; left:360px;
}
.stepA a{
  top:159px; left:166px;
 }
.stepB{ background:url(images/yindao2.png) no-repeat;
 z-index: 20;
  width:420px;
   height:280px;top:61px; left:527px;
 }
.stepB a{
  top:169px; left:162px;
}
.stepB span{ 
  top:81px;
   right:36px;
    }
.stepC{ background:url(images/yindao3.png) no-repeat;z-index: 20; width:420px; height:280px;top:67px; left:648px}
.stepC a{top:162px; left:165px; }
.stepC span{ top:74px; right:35px; }

.stepD{ background:url(images/yindao4.png) no-repeat;z-index: 20; width:420px; height:280px;top:67px; left:429px}
.stepD a{top:160px; left:164px;}
.stepD span{ top:71px; right:35px; }
.stepE{ background:url(images/yindao5.png) no-repeat;z-index: 20; width:420px; height:280px;top:215px; left:120px}
.stepE a{top:160px; left:167px;}
.stepE span{ top:71px; right:35px;}
.stepE{ background:url(images/yindao5.png) no-repeat;z-index: 20; width:420px; height:280px;top:215px; left:120px}
.stepE a{top:160px; left:167px;}
.stepE span{ top:71px; right:35px;}
.stepF{ background:url(images/yindao6.png) no-repeat;z-index: 20; width:420px; height:280px;top:70px; left:426px}
.stepF a{top:160px; left:164px;}
.stepF span{ top:74px; right:35px;}
</style>
<script src="js/common.js" ></script>
<script>
  var myXmlHttpRequest;
  function checkName(){
      myXmlHttpRequest=getXmlHttpObject();//这里引用外部文件出错了,原因是创建对象的时候大小写没注意
      if(myXmlHttpRequest){
        var url="addInfromation.php";
        var data="user=<?php echo $user; ?>";
        myXmlHttpRequest.open("post",url,true);//以post的方式打开
        myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
        myXmlHttpRequest.onreadystatechange=chuli;
        myXmlHttpRequest.send(data);

        
      }else{
        alert("创建ajax对象失败");
      }
  }
  function chuli(){
    if(myXmlHttpRequest.readyState==4){//发送状态成功
      if(myXmlHttpRequest.status==200){//返回成功
        var num=myXmlHttpRequest.responseText;//注意这里responseText后面不需要括号
        if(num!=1){
          aaa();
        }



      }
    }
  }
  checkName();

        function bianse2(){
    var dc=document.getElementById("s2");
        dc.style.background="#FF8800";
        dc.style.color="white";
        
   }

     function bianse22(){
   var dc=document.getElementById("s2");
        dc.style.background="rgba(200, 54, 54, 0.5)";
        dc.style.color="black";
   }
        function bianse3(){
    var dc=document.getElementById("s3");
        dc.style.background="#FF8800 ";
        dc.style.color="white";
        
   }
     function bianse33(){
    var dc=document.getElementById("s3");
        dc.style.background="rgba(200, 54, 54, 0.5)";
         dc.style.color="#FF8800 ";
   }
        function bianse4(){
    var dc=document.getElementById("s4");
        dc.style.background="#FF8800";
        dc.style.color="white";
        
   }
     function bianse44(){
    var dc=document.getElementById("s4");
        dc.style.background="rgba(200, 54, 54, 0.5)";
         dc.style.color="black";
   }
   function aaa(){
  var oMask=document.getElementById('mask');
   var oSearch=document.getElementById('searchTip');
   var aStep=oSearch.getElementsByTagName('div');
   var aA=oSearch.getElementsByTagName('a');
   var aClose=oSearch.getElementsByTagName('span');
   oMask.style.display=oSearch.style.display=aStep[0].style.display='block';
  //下一步按钮
  for( var i=0; i<aStep.length; i++){
    aA[i].index=i; //为每一个按钮增加一个index属性，为后面引用的
    aA[i].onclick=function(){
      this.parentNode.style.display="none";
      if(this.index< aStep.length-1){
        aStep[this.index+1].style.display="block";
      }
      else if( this.index==aStep.length-1){
        oMask.style.display=oSearch.style.display="none";
      }
    } 
  }
  //关闭按钮
  for(var i=0; i<aClose.length;i++){
    aClose[i].onclick=function(){
      oMask.style.display=oSearch.style.display="none";
    }
  }

}
  </script>

</head>
<body>
    <div id="mask"></div>
  <div id="searchTip">
  <div class="stepA"><a>下一步</a><span title="关闭">关闭</span></div>
    <div class="stepB"><a>下一步</a><span title="关闭">关闭</span></div>
    <div class="stepC"><a>下一步</a><span title="关闭">关闭</span></div>
    <div class="stepD"><a>下一步</a><span title="关闭">关闭</span></div>
    <div class="stepE"><a>下一步</a><span title="关闭">关闭</span></div>
    <div class="stepF"><a href="my.php">下一步</a><span title="关闭">关闭</span></div>
</div>
   <div class="tit"><span class="tite"><img src="images/homepage3.png"/>&nbsp;&nbsp;&nbsp;少儿综合素质拓展平台</span>
   </div>
  <div class="top">
  <a href="student.php">首页</a><a href="learningcenter.php">学习中心</a><a href="my.php">个人中心</a><a href="list.html">排行榜</a><a href="video.html">视频中心</a>
  </div>
  <div class="mid">
 <!--<div class="left">
         <ul>
           <li style="height:20px"></li>
         <li>
          <div id="s1">欢迎<?php  if(!empty($user)){
                    echo $user;
         } 
         ?>小朋友
       </div></li>
         <li style="height:10px"></li>
         <li><a href="task.html" target="miframe">任务</li>
          <li style="height:10px"></li>
         <?php
           require_once 'StudentService.php';
           header("Content-type:text/html; charset=utf-8");
           $res=Selectnews($user);
           $id=0;
           while($row=mysql_fetch_assoc($res)){
              $id+=$row['new'];//这里是新消息的数目
           }
            $res1=SelectList($user);//这里是判断留言的
           while($row1=mysql_fetch_assoc($res1)){
               if($row1['new']==1){//说明这条留言还没有被看过
                  $id+=$row1['new'];
                  
               }else{
                  $id1=$row1['id'];
                   $res2=SelectReback($id1);
                   while($row2=mysql_fetch_assoc($res2)){
                       if($row2['new']==1){//说明这条回复还没被看过
                        $id+=$row2['new'];

                       }
                   }
               }
           }

         ?>
         <li><a href="information.php?button=show&user=<?php  echo $_SESSION['user'];  ?>" target="miframe">消息(<?php echo $id; ?>)</a></li>
          <li style="height:10px"></li>
         <li><a href="Reback.php">注销</li>
         </ul>
     </div>
-->

<div class="left">
  <div id="s1" style="text-align:center;line-height:50px;font-size:20px">
    欢迎<?php  if(!empty($user)){
                    echo $user;
         } 
         ?>小朋友
  </div>
  <div id="s2" onMouseOver="bianse2();"onMouseLeave="bianse22();" style="text-align:center;line-height:50px">
        <a href="task.html" target="miframe">任务</a>
  </div>
  <div id="s3" onMouseOver="bianse3();"onMouseLeave="bianse33();" style="text-align:center;line-height:50px">
    <?php
           require_once 'StudentService.php';
           header("Content-type:text/html; charset=utf-8");
           $res=Selectnews($user);
           $id=0;
           while($row=mysql_fetch_assoc($res)){
              $id+=$row['new'];//这里是新消息的数目
           }
            $res1=SelectList($user);//这里是判断留言的
           while($row1=mysql_fetch_assoc($res1)){
               if($row1['new']==1){//说明这条留言还没有被看过
                  $id+=$row1['new'];
                  
               }else{
                  $id1=$row1['id'];
                   $res2=SelectReback($id1);
                   while($row2=mysql_fetch_assoc($res2)){
                       if($row2['new']==1){//说明这条回复还没被看过
                        $id+=$row2['new'];

                       }
                   }
               }
           }

         ?>

         <a href="information.php?button=show&user=<?php  echo $_SESSION['user'];  ?>" target="miframe">消息(<?php echo $id; ?>)</a>
  </div>
  <div id="s4" onMouseOver="bianse4();"onMouseLeave="bianse44();" style="text-align:center;line-height:50px">
         <a href="Reback.php">注销</a>
  </div>

  </div>

     <div class="foot"><img class="a1" src="images/ad.gif"/><img class="a2" src="images/game5.png"/><img class="a3" src="images/game1.jpg"/></div>
     <div class="footer1"></div>
     <div class="footer2"></div>
     <div class="footer3"></div>
     <div class="footer4"></div>
     <div class="right">
         <iframe name="miframe" width="740px" height="310px" src="task.html"/>
     </div>
     
  </div>


      <!-- 先引用JQuery.js再引用semantic.js，因为semantic依赖于JQuery实现-->
   <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
   <script type="text/javascript" src="../js/semantic.min.js"></script> 

</body>
</html>


