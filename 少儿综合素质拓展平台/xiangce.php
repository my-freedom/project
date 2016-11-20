<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>相册</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="imagetoolbar" content="no" />
  <link rel="stylesheet" href="css/xiangce.css" type="text/css"/>

  <script>
      function showdiv() {

            document.getElementById("hpn").style.display = "block";
            //         document.getElementById("pn").style.height='80px';
            document.getElementById("strHref").href = "javascript:hidediv();";
            document.getElementById("strHref").innerHTML = "收起-";
        }
        function hidediv() {
            document.getElementById("hpn").style.display = "none";
            //          document.getElementById("pn").style.height='60px';
            document.getElementById("strHref").href = "javascript:showdiv();";
            document.getElementById("strHref").innerHTML = "上传照片";
        }
        function showdiv1() {
            document.getElementById("hpn1").style.display = "block";
            //         document.getElementById("pn").style.height='80px';
            document.getElementById("strHref1").href = "javascript:hidediv1();";
            document.getElementById("strHref1").innerHTML = "收起-";
        }
        function hidediv1() {
            document.getElementById("hpn1").style.display = "none";
            //          document.getElementById("pn").style.height='60px';
            document.getElementById("strHref1").href = "javascript:showdiv1();";
            document.getElementById("strHref1").innerHTML = "新建相册";
        }
         function showdiv3(str) {
           
            var s=str;
            var s1=s.substr(3);
            var s2=document.getElementById(s1).title;
            if(s2=="编辑"){
              document.getElementById(str).style.display = "block";
               document.getElementById(s1).title = "收起";

            }else if(s2=="收起"){
                  document.getElementById(s1).title = "编辑";
                  //document.getElementById(s1).innerHTML="<img src="images/xiushi.png" alter="hahaa" />";
                  document.getElementById(str).style.display = "none";
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
	    <li><a href="xiangce.php" target="mainiframe">相册</a>&nbsp;</li>
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
        <a href="javascript:showdiv();"  id="strHref" class="btn-slide">上传照片</a> 
        <a href="javascript:showdiv1();"  id="strHref1" class="btn-slide">新建相册</a><br/>

        <div class="showAlbum"><!--此部分为显示相册专用-->
          <?php 
           require_once 'StudentService.php';
           session_start();
           $user=$_SESSION['user'];//获取当前操作人
           $res=showAlbum($user);//找到当前用户创建的所有相册
           $iid=0;
           while($row=mysql_fetch_assoc($res)){
             $id=$row['id'];
             $iid++;
            ?>
           <div class='setAlbum'><!--此部分为设置单个相册的样式专用-->
            <div class='setAlbum1'>
              <img src="images/4.PNG" alter="hah"/>
            </div>
            <div class="setAlbum2">
            <a class="as" href='xiangce2.php?id=<?php echo $id; ?>'><?php echo $row['name'];  ?></a>
            <a onclick="showdiv3(this.name);"  id="<?php  echo $iid; ?>" class="btn" name="<?php echo "str".$iid;  ?>" title="编辑" ><img src="images/xiushi.png" alt="修改/删除" /></a>
            <div id='<?php  echo "str".$iid;?>' style="display: none;  float:left">
              <ul >
                <li><a href="#">修改</a></li>
                <li><a href="#">删除</a></li>
              </ul>
            </div> 
          </div>
          </div>

           <?php } ?>

         </div>
        <div id="hpn" style="display: none">
          <form action='xiangce1.php?button=2' method='post' enctype="multipart/form-data">
          <label class="leb">选择相册：</label>
          <select name="album" selected="selected">
          <option >--请选择--</option>
            <?php 
            $res1=showAlbum($user);
            while($row1=mysql_fetch_assoc($res1)){?>
             <option ><?php echo $row1['name']; ?></option>
          <?php } ?>
          </select>
          <input class="xi" type="file" name="file" accept="image/gif, image/jpeg"/>
          <input type="submit" name="submit" value="确定" class="sub1"/>
          <input type="reset"  name="reset" value="取消"  class="sub2"/>
          </form>
        </div>
        <div id="hpn1" style="display: none">
          <form action='xiangce1.php?button=1' method="post">
          相册名字:<input type="text" name="use" value=""/></br>
          相册描述:<input type="text" name="us" value=""/></br>
          相册类型:<input type="text" name="u" value=""/></br>
          <input type="submit" name="submit" value="确定" class="sub1"/>
          <input type="reset"  name="reset" value="取消"  class="sub2"/>
          </form>
        </div>
      </div>
  </div>
  </body>
</html>