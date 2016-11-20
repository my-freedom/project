<!DOCTYPE html>
<html  lang="en">
 <head>
  <?php 
    session_start();
    if(!empty($_SESSION['user'])){
    $user=$_SESSION['user'];
    require_once 'showbook.php';
    $aaa=showbook($user);
    $grade=$aaa[0]['grade'];//这里有一个班级
  }
  ?>
  <title>个人中心</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="imagetoolbar" content="no" />
  <link rel="stylesheet" href="css/his.css" type="text/css"/>
  <script src="js/common.js"></script>
  
  </head>
  <body>
  <div class="tit"><span class="tite"><img src="images/homepage3.png"/>&nbsp;&nbsp;&nbsp;少儿综合素质拓展平台</span><span><a href="login.html">注销</a></span><span><a href="register.html">在线咨询</a></span><span><a href="login.html">收藏网站</a></span><span><a href="register.html">设为首页</a></span>
   </div>
  <div class="top">
  <a href="student.php">首页</a><a href="learningcenter.php">学习中心</a><a href="my.php">个人中心</a><a href="list.html">排行榜</a><a href="video.html">视频中心</a>
  </div>
  <div class="mid">
      <div class="sider1">
        <ul>
        <li><a href='learningcenter.php'>自学中心</a></li>
        <li><a href="his.php">查看历史</a></li>
        <li><a href="wrong.php">查看错题</a></li>
        </ul>
      </div>
      <div class="sider2">
        <div class="ind">
       
        </div>
         <div class="pro" id='pro' >


           <div class="yuwen">
            <span style="float:left;margin-left:21px; margin-top:50px;text-align=center; color:green; font-weight:bold;" id="book1">
              <?php
              
               
               
               
                $book=$aaa[0]['book'];
                  echo $book;
               
              ?>
            </span>
            
           <p onclick="change('yw','<?php echo $book; ?>')"  id="pbook1"><img  id="yu" src="images/chaxun1.png"  /></p></div>




           <div class="shuxue">
              <span style="float:left;margin-left:21px; margin-top:50px;text-align=center; color:green; font-weight:bold;" id="book2">
              <?php
              
                  echo $book;
               
              ?>
            </span>
           
           <p onclick="change('sx','<?php echo $book; ?>')"  id="pbook2"><img  id="yu1" src="images/chaxun1.png"/></p></div>




           <div class="yingyu">
              <span style="float:left;margin-left:21px; margin-top:50px;text-align=center; color:green; font-weight:bold;" id="book3">
              <?php
              
                  echo $book;
              ?>
            </span>
           
           <p onclick="change('yy','<?php echo $book; ?>')"  id="pbook3"><img id="yu2" src="images/chaxun1.png"/></p></div>
         </div>


         
          <div class="yw" id="yw" style="display:none;"><!--此处是设置单元的显示-->
            <div class="arrow1"></div>
         
         </div>
         <div class="sx" id="sx" style="display:none">
            <div class="arrow2"></div>
           
         </div>
         <div class="yy" id="yy" style="display:none">
           <div class="arrow3"></div>
            </div>


        
         
          <div id="study" style="display:none;"><!--这个是显示题目的div-->
              
           </div>
     

     
      

     
  </div>
  <script>
   var strr;
   var  id=0;
    var id1=0;
    var id2=0;
    var m1,m2,m3,m4,m5;
    function $(id){
     return document.getElementById(id);//根据id获取对象
   }
    function change(val,str){
            strr=str;//将教材设为全局变量
            if (val=='yw') {
                $("yu").style.display="none";
                $("yw").style.display="block";
                $("yu1").style.display="block";
                $("yu2").style.display="block";
                $("sx").style.display="none";
                $("yy").style.display="none";
               
            } else if(val=='sx'){
                $("yu").style.display="block";
                $("yw").style.display="none";
                $("yy").style.display="none";
                $("yu1").style.display="none";
                $("sx").style.display="block";
                $("yu2").style.display="block";
               
            } else if(val=='yy'){//到此是生效的
               $("yw").style.display="none";
               $("sx").style.display="none";
               $("yu2").style.display="none";
               $("yu").style.display="block";
               $("yu1").style.display="block";
               $("yy").style.display="block";
            }

           myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
           if(myXmlHttpRequest){
              var url="gainUnitProblem.php";
              var data="book="+strr+"&subject="+val+"&num=1";//这个地方也是生效的
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
         var uniti=myXmlHttpRequest.responseText;//注意这里responseText后面不需要括号,e我这里返回的是json数据类型
         var unit_object=eval("("+uniti+")");//将json文件转化为一个对象
         var m=count(unit_object);//对于一个对象来说，如果直接使用.length计算其长度，会出现undefind的错误,所以这里自定义了一个函数来得到对象的长度
        // alert(m);这里其长度为1。说明单元是1
         for(var i=0;i<m;i++){//进行遍历
           var p=unit_object[i].sub;

            
           if(p=="yw" &&id==0){//m-1为0
            
            if(i<m-1){//有效规避了无刷新时标签无限次增加的问题
           var aa=document.createElement("a");//这里对象在取值的时候好像并不会解析
           $('yw').appendChild(aa);
        
           aa.innerText=unit_object[i].unit0;//这里才是年级
           aa.setAttribute("href","#");
           bbb=unit_object[i].book;//这里是教材
           aa.setAttribute("id",p);
           aa.setAttribute("name",bbb);
           aa.setAttribute("onclick","change3(this)");
           
         }else if(i==m-1){
          var aa=document.createElement("a");//这里对象在取值的时候好像并不会解析
           $('yw').appendChild(aa);
            aa.setAttribute("id",p);
           aa.innerText=unit_object[i].unit0;
            bbb=unit_object[i].book;
            aa.setAttribute("name",bbb);
           aa.setAttribute("href","#");
            aa.setAttribute("onclick","change3(this)");
           id=1;
         }
         
         }else if(p=="sx" &&id1==0){
          if(i<m-1){
          var aa=document.createElement("a");//这里对象在取值的时候好像并不会解析
           $('sx').appendChild(aa);
        
           aa.innerText=unit_object[i].unit0;
            bbb=unit_object[i].book;
            aa.setAttribute("name",bbb);
             aa.setAttribute("id",p);
           aa.setAttribute("href","#");
            aa.setAttribute("onclick","change3(this)");
         }else if(i==m-1){
           var aa=document.createElement("a");//这里对象在取值的时候好像并不会解析
           $('sx').appendChild(aa);
        
           aa.innerText=unit_object[i].unit0;
            bbb=unit_object[i].book;
             aa.setAttribute("id",p);
            aa.setAttribute("name",bbb);
           aa.setAttribute("href","#");
            aa.setAttribute("onclick","change3(this)");
          id1=1;
         }
           

         }else if(p=="yy" &&id2==0){//到这里也是生效的

          if(i<m-1){//没有走这个
          var aa=document.createElement("a");//这里对象在取值的时候好像并不会解析
           $('yy').appendChild(aa);
           aa.innerText=unit_object[i].unit0;//把单元数添加到文本框
            
            bbb=unit_object[i].book;
            aa.setAttribute("name",bbb);
             aa.setAttribute("id",p);
            aa.setAttribute("href","#");
            aa.setAttribute("onclick","change3(this)");
           
         }else if(i==m-1){//走的是这里
           var aa=document.createElement("a");//这里对象在取值的时候好像并不会解析
           $('yy').appendChild(aa);
        
           aa.innerText=unit_object[i].unit0;
            bbb=unit_object[i].book;
            aa.setAttribute("name",bbb);//name设为人教版
             aa.setAttribute("id",p);
            aa.setAttribute("href","#");
            aa.setAttribute("onclick","change3(this)");
          id2=1;
         }

         }


         }//被嵌在循环里
       

         //这里写结果集获取到了以后的操作
       }
    }
  }
       function change3(obj){

            
            
          
            var book=obj.name;//这里的book是人教版
            
            var subject=obj.id;//这里是空的，问题出现在这里
           
            subj=subject;
            if(subj=='yw'){
               subj="语文";
             }else if(subj=='sx'){
               subj="数学";
             }else if(subj=='yy'){
               subj="英语";
               
            }
            
            var unit=obj.innerText;
            unitei=unit;
            myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
           if(myXmlHttpRequest){
              var url="gainUnitProblem.php";
              var data="book="+book+"&subject="+subject+"&num=4&unit="+unit+"&user=<?php echo $user;  ?>&grade=<?php echo $grade;?>";

              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=huifu;
              myXmlHttpRequest.send(data);

        
           }else{
            alert("创建ajax对象失败");
           }

            
       }

       function huifu(){//当你选择单元数的时候会触发这个
        if(myXmlHttpRequest.readyState==4){//发送状态成功
              if(myXmlHttpRequest.status==200){
                
               
                 var uniti=myXmlHttpRequest.responseText;//注意这里responseText后面不需要括号,e我这里返回的是json数据类型
                 var unit_object=eval("("+uniti+")");//将json文件转化为一个对象
                 var m=count(unit_object);
                 if(m==0){//说明不存在
                     alert("没有做过该单元的试题");
                 }else{
                    //接收到了其history
                     $('study').style.display='block';
                     $('pro').style.display='none';
                     $('yy').style.display="none";
                     $('yw').style.display="none";
                     $('sx').style.display="none";

                      var q7=document.createElement('table');

                      $('study').appendChild(q7);
                      var q1=document.createElement('tr');
                      q7.appendChild(q1);
                      var q2=document.createElement('td');
                      q2.setAttribute("class","r1");
                      q2.innerText="年级";
                      q7.appendChild(q2);
                      var q2=document.createElement('td');
                      q2.setAttribute("class","r1");
                      q2.innerText="教材";
                      q7.appendChild(q2);
                      var q2=document.createElement('td');
                      q2.setAttribute("class","r1");
                      q2.innerText="学科";
                      q7.appendChild(q2);
                      var q2=document.createElement('td');
                      q2.setAttribute("class","r1");
                      q2.innerText="单元";
                      q7.appendChild(q2);
                      var q2=document.createElement('td');
                      q2.setAttribute("class","r1");
                      q2.innerText="记录";
                      q7.appendChild(q2);
                      var q2=document.createElement('td');
                      q2.setAttribute("class","r1");
                      q2.innerText="查看详情";
                      q7.appendChild(q2);


                    for(var i=0;i<m;i++){
                      m1=unit_object[i].grade;
                      m2=unit_object[i].book;
                      m3=unit_object[i].subject;
                      m4=unit_object[i].unit;
                      m5=unit_object[i].history;
                      var q9=document.createElement('tr');
                      q7.appendChild(q9);
                      var q8=document.createElement('td');

                      q8.setAttribute("id","A"+i);
                      q9.appendChild(q8);

                     var q7=document.createElement('td');

                      q7.setAttribute("id","B"+i);
                      q9.appendChild(q7);

                      var q6=document.createElement('td');

                      q6.setAttribute("id","C"+i);
                      q9.appendChild(q6);
                      


                      var q5=document.createElement('td');

                      q5.setAttribute("id","D"+i);
                      
                      q9.appendChild(q5);
                      
                      var q4=document.createElement('td');

                      q4.setAttribute("id","E"+i);
                    
                      q9.appendChild(q4);
                      var q4=document.createElement('td');

                      q4.setAttribute("id","F"+i);
                      
                      q9.appendChild(q4);
                      
                      


                      


                    }
                    for(var i=0;i<m;i++){
                      var A="A"+i;
                      var B="B"+i;
                      var C="C"+i;
                      var D="D"+i;
                      var E="E"+i;
                      var F="F"+i;
                      var a=document.getElementById(A);
                      var b=document.getElementById(B);
                      var c=document.getElementById(C);
                      var d=document.getElementById(D);
                      var e=document.getElementById(E);
                      var f=document.getElementById(F);
                      a.innerText=unit_object[i].grade;
                      var m=unit_object[i].grade;
                      b.innerText=unit_object[i].book;
                      var n=unit_object[i].book;
                      c.innerText=unit_object[i].subject;
                      var p=unit_object[i].subject;
                      d.innerText=unit_object[i].unit;
                      var q=unit_object[i].unit;
                      e.innerText=unit_object[i].history;
                      var r=unit_object[i].history;
                      f.innerHTML="<a href='CheckAnswer.php?grade="+m+"&book="+n+"&subject="+p+"&unit="+q+"&check="+r+"'><img src='images/search.png' width='20px' height='20px'></a>";

                      



                    }
                 }
               
               
               
            }
          }
        }

       function test(){
       var ok=document.getElementsByName("search");
       if (ok[0].checked == true){
         if(ok[0].value=='pro'){
          $('pro').style.display="block";
          $('date').style.display="none";
          var s=document.getElementById('study');
            s.style.display="none";
         }
       }else if(ok[1].checked == true){
         if(ok[1].value=='sj'){
          var date=document.getElementById('date');
          date.style.display="block";
          $('pro').style.display="none";
          yw.style.display='none';
          sx.style.display='none';
          yy.style.display='none';
          var s=document.getElementById('study');
          s.style.display="none";
         }
       }
      }
      function write(){
        var a=document.getElementById("study");
        a.style.display="block";
      }

</script>
  </body>
</html>