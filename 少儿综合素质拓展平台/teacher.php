<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<title>教师主页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="css/teacher.css" type="text/css"/>
<style>
html{ height:100%}
#mask{ height:100%; width:100%; display:none;position:absolute; top:0; left:0; background:#000; z-index:10;opacity:0.5; filter:alpha( opacity=50);}
#searchTip{ width:980px; height:800px; display:none;position:absolute; left:50%; margin-left:-490px;}
#searchTip div{ position:absolute;display:none;}
#searchTip div a{ position:absolute; width:95px; height:32px; text-indent:-999px; overflow:hidden; cursor:pointer; }
#searchTip div span{ position:absolute; height:30px; width:30px;  text-indent:-999px; overflow:hidden; cursor:pointer; }

.stepA{ width:420px; height:280px; background:url(images/guide1.png) no-repeat;z-index: 20; top:194px; left:133px}
.stepA span{top:69px; left:357px;}
.stepA a{top:159px; left:165px;}

.stepB{ background:url(images/guide2.png) no-repeat;z-index: 20; width:420px; height:280px;top:232px; left:133px}
.stepB a{top:159px; left:165px;}
.stepB span{ top:69px; right:34px; }

.stepC{ background:url(images/guide3.png) no-repeat;z-index: 20; width:420px; height:280px;top:274px; left:133px}
.stepC a{top:160px; left:165px;}
.stepC span{ top:70px; right:35px; }

.stepD{ background:url(images/guide4.png) no-repeat;z-index: 20; width:420px; height:280px;top:320px; left:133px}
.stepD a{top:160px; left:165px;}
.stepD span{ top:71px; right:35px; }

table{
    width:600px;
    border:1px solid gray;
    text-align: center;
}
td{
    border:1px solid gray;
    text-align: center;
}
</style>
<script>
 function change(val, obj){
           obj.style.backgroundColor="#4c4c4c";
            if (val=='right1') {
                
                right1.style.display='block';
                right2.style.display='none';
                
                right4.style.display='none';
                right5.style.display='none';
                
            } else if(val=='right2'){
                
                right1.style.display='none';
                right2.style.display='block';
               
                right4.style.display='none';
                right5.style.display='none';
                
            } else if(val=='right3'){
                
                right1.style.display='none';
                right2.style.display='none';
               
                right4.style.display='none';
                right5.style.display='none';
               
            }else if(val=='right4'){
                
                right1.style.display='none';
                right4.style.display='block';
                
                right2.style.display='none';
                right5.style.display='none';
                
            } else if(val=='right5'){
                
                right1.style.display='none';
                right2.style.display='none';
                right5.style.display='block';
                right4.style.display='none';
                
                
            }else if(val=='right6'){
                
                right1.style.display='none';
               
                
                right4.style.display='none';
                right5.style.display='none';
                right2.style.display='none';
            } 
       }

       function change2(obj){
         obj.style.backgroundColor="silver";
       }
       window.onload=function(){
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
  </div>
  <div class="logo">
        <span class="logo_1">
        <img src="images/homepage3.png"/><span>少儿综合素质拓展平台</span>
        </span>
        <span class="logo_2">
        
        </span>
  </div>
  <div class="teacherfunction">
    <div class="left">
    <ul>
    <li onmouseover="change('right1',this)" onmouseout="change2(this)">模板下载</li>
    <li onmouseover="change('right2',this)" onmouseout="change2(this)">批量上传</li>
    <li onmouseover="change('right4',this)" onmouseout="change2(this)">试题管理</li>
    <li onmouseover="change('right5',this)" onmouseout="change2(this)">视频上传</li>
    </ul>
    </div>
    <div class="right1" id="right1">
       <div class="blackleft" id="bl1">
            <table id="table_xiazai"   >
                 <tr height="40px"><td colspan="2" style="text-align:left">资源列表:</td></tr>
                <tr height="60px"><td style="text-align:center">文件名</td><td></td></tr>
                
                <tr height="60px"><td style="text-align:center">类型</td><td>problem.xlsx</td></tr>
                
                <tr height="80px"><td colspan="2" style="text-align:center"><a href="download.php" style="font-family:楷体;font-size:25px;font-color:#007799">下载</a></td></tr>
            </table>
        </div>
    </div>
      

    <div class="right2" id="right2" style="display:none">
        <div class="blackleft" id="bl1">
                <table id="table_xiazai">
<form action="reader.php" method="post" enctype="multipart/form-data">
                <tr height="40px"><td colspan="2" style="text-align:left">批量上传:</td></tr>
                <tr height="60px"><td colspan="2"><input type="file" name="file1"/></td></tr>
              
                <tr height="80px" style>
                    <td><input type="submit" name="submit" value="提交" class="sub" style="text-align:center"></td>
                    <td> <input type="reset"  name="reset" value="重置"  class="sub"style="text-align:center"></td>
                </tr>
            </table>
        </div>
    </div>

     <div class="right5" id="right5" style="display:none">
        <div class="blackleft" id="bl1">
                <table id="table_xiazai">
<form action="reader.php" method="post" enctype="multipart/form-data">
                <tr height="40px"><td colspan="2" style="text-align:left">视频上传:</td></tr>
                <tr height="60px"><td colspan="2"><input type="file" name="file1"/></td></tr>
                <tr height="70px"><td colspan="2">视频名称：<input type="textarea" name="detail" row='3' col='30'/></td></tr>
                <tr height="80px" style>
                    <td><input type="submit" name="submit" value="提交" class="sub" style="text-align:center"></td>
                    <td> <input type="reset"  name="reset" value="重置"  class="sub"style="text-align:center"></td>
                </tr>
            </table>
        </div>
    </div>


    <div class="right4" id="right4"  style="display:none">
        <div class="blackleft4" id="bl1">
            <?php
            require_once 'teacherService.php';
            $res=searchAll(); ?>
            <table>
                <tr><td>年级</td><td>教材</td><td>学科</td><td>单元</td><td>查看详情</td></tr>
            <?php 
            while($row=mysql_fetch_assoc($res)){ ?>
              <tr><td><?php echo $row['grade']; ?></td><td><?php echo $row['book']; ?></td><td><?php echo $row['subject']; ?></td><td><?php  echo $row['unit'] ?></td><td><a href='showProblem.php?book=<?php echo $row['book']; ?>&grade=<?php  echo $row['grade'];?>&subject=<?php echo $row['subject'];?>&unit=<?php echo $row['unit'] ?>'><img src='images/search.png' width="20px" height="20px"></a></td><tr>
            <?php }
                ?>
   }
?>

        </div>
        </div>


    </div> 
          
      </table>
        </div>
       
       
  </div>
  <script src="js/semantic.min.js"></script>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src='js/teacher.js'>

  </script>
</body>
</html>