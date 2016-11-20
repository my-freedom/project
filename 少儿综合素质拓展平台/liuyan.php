<!doctype html>
<html>
 <head>
  <?php  session_start();
    if(!empty($_GET['user'])){
      $user=$_GET['user'];
    }
    if(!empty($_GET['area'])){
      $area=$_GET['area'];
    }
  ?>
  <meta charset="UTF-8">
  <title>留言</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="imagetoolbar" content="no" />
  <link rel="stylesheet" href="css/liuyan.css" type="text/css"/>
  <script>
  function showdiv(str){
    var s=str;
    id=s.substr(3);
   var a=document.getElementById(str);
   var b=document.getElementById("pn"+id);
   
    if(a.value=="回复")
    {
      b.style.display="block";
      a.style.display="none";
     
    }
    else{
      b.style.display="none";
      a.style.display="block";
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
       <p contentEditable="true">我在成长 </p>
      </div>
      <div class="sider4">
      <h3>留言板：</h3>
      <form action="textbord.php" method="post">
      <textarea rows="7" cols="90" name="speak" class="123" ></textarea></br>
      <input class="sud1" type="submit" value="确定"/>
      <input class="sud2" type="reset" value="取消"/>
      </form>
      <?php 
          
          require_once 'StudentService.php';
          $id=1;
          
          $user=$_SESSION['user'];
          $res=SelectList($user);
          
            while($row=mysql_fetch_assoc($res)){      $id1="btn".$id;?>
         
           <div class="sider4-1">
           <span><?php  if($row['leftname']==$user){
              echo "我自己留言说:";
           }else{
                echo $row['leftname']."给我留言说:";
           }; ?></span>
           <li class="scure"><?php   echo $row['area'];?></li>
              <?php 
              $id_select=$row['id'];//获取当前留言的id号，为回复的id做准备
              $res1=SelectReback($id_select);//查找到当前留言下所以的子id
               while($row1=mysql_fetch_assoc($res1)){?>
                <span><?php  
                   if($row1['leavename']==$row1['backname']){
                        echo "我回复说:";
                   }else{
                   if($row1['leavename']==$user){
                     echo "我回复".$row1['backname']."说";//我回复***说，用于本用户回复别人
                   }else if($row1['backname']==$user){
                        echo $row1['leavename']."回复我说：";
                   }
                   else{
                echo $row1['leavename']."回复".$row1['backname']."说"; }}?></span>
                <li class="scure"><?php   echo $row1['area'];?></li>
                <?php } ?>
            <form action="huifu.php?user=<?php echo $user;?>&area=<?php   echo $row['area'];?>&button=2&id=<?php echo $row['id']; ?>" method="post">
            <div id="pn<?php echo $id;?>" style="display:none">
              <textarea rows="3" cols="70" name="area1" class="123" ></textarea>
              <input type='submit' value='确定'/><!--这是回复时提交的表单-->
            </div>
            </form> 
           
            
            <form action="huifu.php?user=<?php echo $user;?>&area=<?php   echo $row['area'];?>&button=1&id=<?php echo $row['id']; ?>" method="post">
           <button id="btnLogin2" hidefocus="true" class="login-btn">删除</button>
           </form>
           <input type="submit"  value="回复" onclick="showdiv(this.name)" id="<?php echo $id1; ?>" name="<?php echo $id1; ?>" >
       </div>
             
    <?php  $id++;  } ?>
     
      </div>
  </div>
  </body>
</html>