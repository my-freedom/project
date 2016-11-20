<html>
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
  <meta charset="UTF-8">
  <title>个人中心</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="imagetoolbar" content="no" />
  <link rel="stylesheet" href="css/learningcenter.css" type="text/css"/>
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
  #control2222{
    padding-top: 850px;
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
    -webkit-box-shadow: -4px -3px 5px #888888;
  -moz-box-shadow: -4px -3px 5px #888888; 
  -o-box-shadow: -4px -3px 5px #888888;
  box-shadow: -4px -3px 5px #888888; 
  position: absolute;
  text-align: center;
  }
  .wuzeiA{
    position: absolute;
    width:200px;
    height:200px;
    top:460px;
    left:450px;
    padding-top: 100px;
    padding-left: 70px;
    background:url(images/wuzei.png) no-repeat;
    font-weight: bold;
    font-size: 30px;
    font-family: "微软雅黑";

  }
  .moA{
    position: absolute;
    top:260px;
    left:160px;
    font-weight: bold;
    font-size: 30px;
    color:white;
    cursor: pointer;
  }
  .moB{
    position: absolute;
    top:170px;
    left:440px;
    font-weight: bold;
    font-size: 30px;
    color:white;
    cursor: pointer;
  }
  .moC{
    position: absolute;
    top:390px;
    left:480px;
    font-weight: bold;
    font-size: 30px;
    color:white;
    cursor: pointer;
  }
  .moD{
    position: absolute;
    top:300px;
    left:850px;
    font-weight: bold;
    font-size: 30px;
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
     padding-left: 70px;
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
     padding-left: 70px;
  }





  </style>
  <script src="js/common.js"></script>
  <script>
  var strr;
  var subj;
  var unitei;
  var q=0;
  var q2,q3,q8;
  id=0;
  id1=0;
  id2=0;
  var q1,q4,q5,q6,q7;
  var v1,v4,v5,v6,v7;
  var m2,m3,m4,m5,m6;
  var w;
  var count;
  var s='';
  var count1;
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
         for(var i=0;i<m;i++){//进行遍历
           var p=unit_object[i].sub;
          
           if(p=="yw" &&id==0){
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

            var s=document.getElementById('study');
            var apple=document.getElementById('hiddden1');
            apple.style.display="none";
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
              var data="book="+book+"&subject="+subject+"&num=2&unit="+unit+"&user=<?php echo $user;  ?>&grade=<?php echo $grade;?>";
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
               
                var uniti=myXmlHttpRequest.responseText;//这里有可能会返回两种结果
                var strs= new Array();
                strs=uniti.split("/");//对字符串进行分割
               
                if(strs[1]){
                  
               
                if(!strs[0]){ //这是为空的时候

                }else{
               
                if(confirm(strs[0])){//弹出一个进行确认的对话框
                  grade=strs[1];//年级
                  book=strs[2];
                  subject=strs[3];
                  unit=strs[4];
                myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
               if(myXmlHttpRequest){
                     var url="gainUnitProblem.php";
                     var data="book="+book+"&subject="+subject+"&num=3&unit="+unit+"&user=<?php echo $user;  ?>&grade="+grade;
                     myXmlHttpRequest.open("post",url,true);//以post的方式打开
                     myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
                     myXmlHttpRequest.onreadystatechange=fugai;//基本不需要什么操作
                     myXmlHttpRequest.send(data);

               }else{
                   alert("创建ajax对象失败");
               }



                }else{//取消的话暂时没有操作，回来再写

                         window.location.href="learningcenter.php";


                }
              }
               }else{//这里就是我所需要改造的地方


                var unit_object=eval("("+uniti+")");//将返回的json数据类型转化为对象
                q2=unit_object;//全局变量
                var m=count(unit_object);
                q3=m;
                count1=q3;
                var i;
                if(q2[0].subject=="语文"){
                


                  var s1=document.getElementById('mid');//获取mid的id
                  var p7=document.createElement('div');
                  p7.setAttribute('class','ti');
                  p7.setAttribute('id','A1')
                  s1.appendChild(p7);

                  var p1=document.createElement('table');
                  s1.appendChild(p1);
                  var p2=document.createElement('tr');
                  p1.appendChild(p2);
                  var p3=document.createElement('td');
                  p3.setAttribute('class','x');
                  p3.setAttribute('id','B1');
                  p2.appendChild(p3);
                  var p4=document.createElement('td');
                   p4.setAttribute('class','x');
                  p4.setAttribute('id','C1');
                  p2.appendChild(p4);
                  var p5=document.createElement('td');
                  p5.setAttribute('class','x');
                  p5.setAttribute('id','D1');
                  p2.appendChild(p5);
                  var p6=document.createElement('td');
                  p6.setAttribute('class','x');
                  p6.setAttribute('id','E1');
                  p2.appendChild(p6);//在这里我生成了一个表格
                  var m1=document.createElement('div');
                  m1.setAttribute("id","control22");
                  s1.appendChild(m1);
                  q1=document.getElementById('A1');
                  q1.innerText=q2[0].problem;
                  q4=document.getElementById('B1');
                  q4.innerText=q2[0].option1;
                  q5=document.getElementById('C1');
                  q5.innerText=q2[0].option2;
                  q6=document.getElementById('D1');
                  q6.innerText=q2[0].option3;
                  q7=document.getElementById('E1');
                  q7.innerText=q2[0].option4;//将题目已经弄出来
                     //下面就是为砸金蛋做准备
                  q4.className='x';
                  q5.className='x';
                  q6.className='x';
                  q7.className='x';

                  q8=true;//控制同一组的金蛋只能被点一次
                  if(q2[0].rightanswers=='A'){
                          q4.setAttribute("onclick","checkA1()");
                          q5.setAttribute("onclick","checkB1()");
                          q6.setAttribute("onclick","checkC1()");
                          q7.setAttribute("onclick","checkD1()");

                     }else if(q2[0].rightanswers=='B'){
                          q4.setAttribute("onclick","checkA2()");
                          q5.setAttribute("onclick","checkB2()");
                          q6.setAttribute("onclick","checkC2()");
                          q7.setAttribute("onclick","checkD2()");
                     }else if(q2[0].rightanswers=='C'){
                          q4.setAttribute("onclick","checkA3()");
                          q5.setAttribute("onclick","checkB3()");
                          q6.setAttribute("onclick","checkC3()");
                          q7.setAttribute("onclick","checkD3()");

                     }else if(q2[0].rightanswers=='D'){
                              
                          q4.setAttribute("onclick","checkA4()");
                          q5.setAttribute("onclick","checkB4()");
                          q6.setAttribute("onclick","checkC4()");
                          q7.setAttribute("onclick","checkD4()");
                     }
                        
                     m2=q2[0].book;
                     m3=q2[0].grade;
                     m4=q2[0].subject;
                     m5=q2[0].unit;
                   for(i=0;i<m;i++){
                   var q1=document.createElement('input');
                   q1.setAttribute("type","submit");
                   q1.setAttribute("value",i);
                   q1.setAttribute("class","control")
                   q1.setAttribute("id","control"+i);
                   q1.setAttribute("onclick","anum(this.value)");//这里出来一个点击事件
                   m1.appendChild(q1);

                 }
                      var control="control0";
                      var l1=document.getElementById(control);
                      l1.className='afterclick';
               
                 }else if(q2[0].subject=="英语"){//现在开始生成英语的界面





                  var s1=document.getElementById('mid');//获取mid的id
                  var p8=document.createElement('div');
                  p8.setAttribute('class','shu');
                  s1.appendChild(p8);
                  var p7=document.createElement('div');
                  p7.setAttribute('class','ci');//这个是生成题目的
                  p7.setAttribute('id','A1');
                  s1.appendChild(p7);
                  
                  var p1=document.createElement('table');
                  p1.setAttribute('class','shu1');
                  s1.appendChild(p1);
                  var p2=document.createElement('tr');
                  p1.appendChild(p2);
                  var p3=document.createElement('td');
                  p3.setAttribute('class','mo');
                  p3.setAttribute('id','B1');
                  p2.appendChild(p3);
                  var p4=document.createElement('td');
                   p4.setAttribute('class','mo');
                  p4.setAttribute('id','C1');
                  p2.appendChild(p4);
                  var p5=document.createElement('td');
                  p5.setAttribute('class','mo');
                  p5.setAttribute('id','D1');
                  p2.appendChild(p5);
                  
                  var p6=document.createElement('td');
                  p6.setAttribute('class','mo');
                  p6.setAttribute('id','E1');
                  p2.appendChild(p6);//在这里我生成了一个表格
                  var m1=document.createElement('div');
                  m1.setAttribute("id","control222");
                  s1.appendChild(m1);
                  q1=document.getElementById('A1');//第一次的
                  q1.innerText=q2[0].problem;
                  q4=document.getElementById('B1');
                  q4.innerText=q2[0].option1;
                  q5=document.getElementById('C1');
                  q5.innerText=q2[0].option2;
                  q6=document.getElementById('D1');
                  q6.innerText=q2[0].option3;
                  q7=document.getElementById('E1');
                  q7.innerText=q2[0].option4;//将题目已经弄出来
                     //下面就是为砸地鼠做准备
                  q4.className='mo';
                  q5.className='mo';
                  q6.className='mo';
                  q7.className='mo';
                  q8=true;//控制同一组的金蛋只能被点一次
                  if(q2[0].rightanswers=='A'){
                          q4.setAttribute("onclick","checkAA1()");
                          q5.setAttribute("onclick","checkBB1()");
                          q6.setAttribute("onclick","checkCC1()");
                          q7.setAttribute("onclick","checkDD1()");

                     }else if(q2[0].rightanswers=='B'){
                          q4.setAttribute("onclick","checkAA2()");
                          q5.setAttribute("onclick","checkBB2()");
                          q6.setAttribute("onclick","checkCC2()");
                          q7.setAttribute("onclick","checkDD2()");
                     }else if(q2[0].rightanswers=='C'){
                          q4.setAttribute("onclick","checkAA3()");
                          q5.setAttribute("onclick","checkBB3()");
                          q6.setAttribute("onclick","checkCC3()");
                          q7.setAttribute("onclick","checkDD3()");

                     }else if(q2[0].rightanswers=='D'){
                              
                          q4.setAttribute("onclick","checkAA4()");
                          q5.setAttribute("onclick","checkBB4()");
                          q6.setAttribute("onclick","checkCC4()");
                          q7.setAttribute("onclick","checkDD4()");
                     }
                        
                     m2=q2[0].book;
                     m3=q2[0].grade;
                     m4=q2[0].subject;
                     m5=q2[0].unit;
                   for(var i=0;i<m;i++){
                   var q1=document.createElement('input');
                   q1.setAttribute("type","submit");
                   q1.setAttribute("value",i);
                   q1.setAttribute("class","controll")
                   q1.setAttribute("id","control"+i);
                   q1.setAttribute("onclick","anum1(this.value)");//这里出来一个点击事件
                   m1.appendChild(q1);

                 }
                     var control="control0";
                      var l1=document.getElementById(control);
                      l1.className='afterclick';


                 }else if(q2[0].subject=="数学"){
                   var s1=document.getElementById('mid');//获取mid的id
                   var p8=document.createElement('div');
                   p8.setAttribute('class','wuzeiback');
                   s1.appendChild(p8);
                   var p7=document.createElement('div');
                   p7.setAttribute('class','wuzeiA');//这个是生成题目的
                   p7.setAttribute('id','wuzeiA');
                   s1.appendChild(p7);
                   var p7=document.createElement('span');
                   p7.setAttribute('class','moA');//这个是生成题目的
                   p7.setAttribute('id','moA');
                   s1.appendChild(p7);

                   var p6=document.createElement('span');
                   p6.setAttribute('class','moB');//这个是生成题目的
                   p6.setAttribute('id','moB');
                   s1.appendChild(p6);
                   var p5=document.createElement('span');
                   p5.setAttribute('class','moC');//这个是生成题目的
                   p5.setAttribute('id','moC');
                   s1.appendChild(p5);
                   var p4=document.createElement('span');
                   p4.setAttribute('class','moD');//这个是生成题目的
                   p4.setAttribute('id','moD');
                   s1.appendChild(p4);

                   var m1=document.createElement('div');
                   m1.setAttribute("id","control2222");
                   s1.appendChild(m1);
                   q1=document.getElementById('wuzeiA');//第一次的
                   q1.innerText=q2[0].problem;
                   q4=document.getElementById('moA');
                   q4.innerText=q2[0].option1;
                   q5=document.getElementById('moB');
                   q5.innerText=q2[0].option2;
                   q6=document.getElementById('moC');
                   q6.innerText=q2[0].option3;
                   q7=document.getElementById('moD');
                   q7.innerText=q2[0].option4;//将题目已经弄出来
                     //下面就是为砸地鼠做准备
                   q1.className='wuzeiA';
                     m2=q2[0].book;
                     m3=q2[0].grade;
                     m4=q2[0].subject;
                     m5=q2[0].unit;
                      q8=true;//控制同一组的金蛋只能被点一次
                  if(q2[0].rightanswers=='A'){//走的是这个
                          q4.setAttribute("onclick","checkAAA1()");
                          q5.setAttribute("onclick","checkBBB1()");
                          q6.setAttribute("onclick","checkCCC1()");
                          q7.setAttribute("onclick","checkDDD1()");

                     }else if(q2[0].rightanswers=='B'){
                          q4.setAttribute("onclick","checkAAA2()");
                          q5.setAttribute("onclick","checkBBB2()");
                          q6.setAttribute("onclick","checkCCC2()");
                          q7.setAttribute("onclick","checkDDD2()");
                     }else if(q2[0].rightanswers=='C'){
                          q4.setAttribute("onclick","checkAAA3()");
                          q5.setAttribute("onclick","checkBBB3()");
                          q6.setAttribute("onclick","checkCCC3()");
                          q7.setAttribute("onclick","checkDDD3()");

                     }else if(q2[0].rightanswers=='D'){
                              
                          q4.setAttribute("onclick","checkAAA4()");
                          q5.setAttribute("onclick","checkBBB4()");
                          q6.setAttribute("onclick","checkCCC4()");
                          q7.setAttribute("onclick","checkDDD4()");
                     }
                      for(var i=0;i<m;i++){
                       
                   var q1=document.createElement('input');
                   q1.setAttribute("type","submit");
                   q1.setAttribute("value",i);
                   q1.setAttribute("class","controll")
                   q1.setAttribute("id","control"+i);
                   q1.setAttribute("onclick","anum2(this.value)");//这里出来一个点击事件
                   m1.appendChild(q1);

                 }
                     var control="control0";
                      var l1=document.getElementById(control);
                      l1.className='afterclick';

                        
                     






                 }


               }


              }
            }


       }
       function anum2(i){
           q=i;//传过来的是value值  q3=2;
            for(var id=0;id<q3;id++){
            if(id==q){
               var control="control"+q;
                      var l1=document.getElementById(control);
                      l1.className='afterclick';
                       q1=document.getElementById('wuzeiA');//第一次的
                   q1.innerText=q2[id].problem;
                   q4=document.getElementById('moA');
                   q4.innerText=q2[id].option1;
                   q5=document.getElementById('moB');
                   q5.innerText=q2[id].option2;
                   q6=document.getElementById('moC');
                   q6.innerText=q2[id].option3;
                   q7=document.getElementById('moD');
                   q7.innerText=q2[id].option4;//将题目已经弄出来
                      q1.className='wuzeiA';
                     m2=q2[id].book;
                     m3=q2[id].grade;
                     m4=q2[id].subject;
                     m5=q2[id].unit;
                     m6=q2[id].rightanswers;
                    q8=true;//控制同一组的金蛋只能被点一次
                  if(q2[id].rightanswers=='A'){
                          q4.setAttribute("onclick","checkAAA1()");
                          q5.setAttribute("onclick","checkBBB1()");
                          q6.setAttribute("onclick","checkCCC1()");
                          q7.setAttribute("onclick","checkDDD1()");

                     }else if(q2[id].rightanswers=='B'){
                          q4.setAttribute("onclick","checkAAA2()");
                          q5.setAttribute("onclick","checkBBB2()");
                          q6.setAttribute("onclick","checkCCC2()");
                          q7.setAttribute("onclick","checkDDD2()");
                     }else if(q2[id].rightanswers=='C'){
                          q4.setAttribute("onclick","checkAAA3()");
                          q5.setAttribute("onclick","checkBBB3()");
                          q6.setAttribute("onclick","checkCCC3()");
                          q7.setAttribute("onclick","checkDDD3()");

                     }else if(q2[id].rightanswers=='D'){
                              
                          q4.setAttribute("onclick","checkAAA4()");
                          q5.setAttribute("onclick","checkBBB4()");
                          q6.setAttribute("onclick","checkCCC4()");
                          q7.setAttribute("onclick","checkDDD4()");
                     }


                    }


       }
     }
        function anum(i){
           q=i;//传过来的是value值  q3=2;
           
           for(var id=0;id<q3;id++){
               if(id==q){
                      var control="control"+q;
                      var l1=document.getElementById(control);
                      l1.className='afterclick';
                      q1=document.getElementById('A1');
                     q1.innerText=q2[id].problem;
                      q4=document.getElementById('B1');
                     q4.innerText=q2[id].option1;
                      q5=document.getElementById('C1');
                     q5.innerText=q2[id].option2;
                      q6=document.getElementById('D1');
                     q6.innerText=q2[id].option3;
                      q7=document.getElementById('E1');
                     q7.innerText=q2[id].option4;//将题目已经弄出来
                     //下面就是为砸金蛋做准备
                     q4.className='x';
                     q5.className='x';
                     q6.className='x';
                     q7.className='x';
                     m2=q2[id].book;
                     m3=q2[id].grade;
                     m4=q2[id].subject;
                     m5=q2[id].unit;
                     m6=q2[id].rightanswers;
                     q8=true;//控制同一组的金蛋只能被点一次
                     if(q2[id].rightanswers=='A'){
                          q4.setAttribute("onclick","checkA1()");
                          q5.setAttribute("onclick","checkB1()");
                          q6.setAttribute("onclick","checkC1()");
                          q7.setAttribute("onclick","checkD1()");

                     }else if(q2[id].rightanswers=='B'){
                          q4.setAttribute("onclick","checkA2()");
                          q5.setAttribute("onclick","checkB2()");
                          q6.setAttribute("onclick","checkC2()");
                          q7.setAttribute("onclick","checkD2()");
                     }else if(q2[id].rightanswers=='C'){
                          q4.setAttribute("onclick","checkA3()");
                          q5.setAttribute("onclick","checkB3()");
                          q6.setAttribute("onclick","checkC3()");
                          q7.setAttribute("onclick","checkD3()");

                     }else if(q2[id].rightanswers=='D'){
                              
                          q4.setAttribute("onclick","checkA4()");
                          q5.setAttribute("onclick","checkB4()");
                          q6.setAttribute("onclick","checkC4()");
                          q7.setAttribute("onclick","checkD4()");
                     }
                     

               }
           }
          
                 
        }

        function anum1(i){//这个是打地鼠游戏用的函数
           q=i;//传过来的是value值  q3=2;

           for(var id=0;id<q3;id++){
               if(id==q){
                      var control="control"+q;
                      var l1=document.getElementById(control);
                      l1.className='afterclick';
                      q1=document.getElementById('A1');
                     q1.innerText=q2[id].problem;
                      q4=document.getElementById('B1');
                     q4.innerText=q2[id].option1;
                      q5=document.getElementById('C1');
                     q5.innerText=q2[id].option2;
                      q6=document.getElementById('D1');
                     q6.innerText=q2[id].option3;
                      q7=document.getElementById('E1');
                     q7.innerText=q2[id].option4;//将题目已经弄出来
                     //下面就是为砸金蛋做准备
                     q4.className='mo';
                     q5.className='mo';
                     q6.className='mo';
                     q7.className='mo';
                     m2=q2[id].book;
                     m3=q2[id].grade;
                     m4=q2[id].subject;
                     m5=q2[id].unit;
                     m6=q2[id].rightanswers;
                     q8=true;//控制同一组的金蛋只能被点一次
                     if(q2[id].rightanswers=='A'){
                          q4.setAttribute("onclick","checkAA1()");
                          q5.setAttribute("onclick","checkBB1()");
                          q6.setAttribute("onclick","checkCC1()");
                          q7.setAttribute("onclick","checkDD1()");

                     }else if(q2[id].rightanswers=='B'){
                          q4.setAttribute("onclick","checkAA2()");
                          q5.setAttribute("onclick","checkBB2()");
                          q6.setAttribute("onclick","checkCC2()");
                          q7.setAttribute("onclick","checkDD2()");
                     }else if(q2[id].rightanswers=='C'){
                          q4.setAttribute("onclick","checkAA3()");
                          q5.setAttribute("onclick","checkBB3()");
                          q6.setAttribute("onclick","checkCC3()");
                          q7.setAttribute("onclick","checkDD3()");

                     }else if(q2[id].rightanswers=='D'){
                              
                          q4.setAttribute("onclick","checkAA4()");
                          q5.setAttribute("onclick","checkBB4()");
                          q6.setAttribute("onclick","checkCC4()");
                          q7.setAttribute("onclick","checkDD4()");
                     }
                     


                     
                     


               }
           }
          
                 
        }
      
        function checkA1(){//正确选项为A，这里是
          if(q8==true){
          q4.className='y';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");//下面就要发送ajax请求






        }
        if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              openNew();
              saveStar();

        }
        
         
          q8=false;
          if(q8==false){//说明这个控件被点击
             
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              
              setTimeout("anum(q)",800);

          }

        }
function checkAAA1(){
           if(q8==true){
          q1=$('wuzeiA');
          q1.className='wuzeiA1';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              openNew();
              saveStar();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);
          }
        }
 function checkCCC3(){//这个是答对的
          if(q8==true){

            q1.className='wuzeiA1';
             var control="control"+q;//这里是为了设置下面的切换不可用
             var l1=document.getElementById(control);
             l1.setAttribute("disabled","none");//下面就要发送ajax请求

          }
           if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              openNew();
              saveStar();

        }
         q8=false;
          if(q8==false){//说明这个控件被点击
             
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              
              setTimeout("anum2(q)",800);

          }



        }
         function checkDDD4(){//这个是答对的
          if(q8==true){
            q1.className='wuzeiA1';
             var control="control"+q;//这里是为了设置下面的切换不可用
             var l1=document.getElementById(control);
             l1.setAttribute("disabled","none");//下面就要发送ajax请求

          }
           if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             saveStar();
              openNew();

        }
         q8=false;
          if(q8==false){//说明这个控件被点击
             
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              
              setTimeout("anum2(q)",800);

          }



        }


/**********************************************************8*/
function checkAA1(){//正确选项为A，这里是为打地鼠游戏准备的
          if(q8==true){
          q4.className='yy1';
          var control="control"+q;//这里是为了设置下面的切换不可用
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");//下面就要发送ajax请求






        }
        if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             saveStar();
              openNew();

        }
        
         
          q8=false;
          if(q8==false){//说明这个控件被点击
             
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              
              setTimeout("anum1(q)",800);

          }

        }

  /***************************************************/


         
        function checkA2(){
          count1--;
         if(q8==true){
          q4.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        }
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";
           
              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             } 
             if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
           if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             saveStar();
              openNew();
        }  
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
             
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
              setTimeout("anum(q)",800);

          }
        }
        function checkAAA2(){
         
           count1--;
           if(q8==true){
          q1=$('wuzeiA');
          q1.className='wuzeiA2';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");

        }
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";
           
              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             } 
             if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             saveStar();
              openNew();
        }  
         q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
             
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);

          }



        }

         /***************************************************/
          function checkAA2(){
          count1--;
         if(q8==true){
          q4.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        }
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";
           
              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             } 
             if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
           if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             saveStar();
              openNew();
        }  
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
             
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
              setTimeout("anum1(q)",800);

          }
        }


        function checkA3(){
          count1--;
          if(q8==true){
          q4.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
            if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
               if(q<q3){
              q=q+1;
            }
              setTimeout("anum(q)",800);
          }
        }
         function checkAAA3(){
           count1--;
           if(q8==true){
             q1=$('wuzeiA');
          q1.className='wuzeiA2';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");

        }
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";
           
              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             } 
             if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              openNew();
              saveStar();
        }  
         q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
             
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);

          }



        }
         function checkAA3(){
          count1--;
          if(q8==true){
          q4.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
            if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
               if(q<q3){
              q=q+1;
            }
              setTimeout("anum1(q)",800);
          }
        }
        /************************************/
        function checkA4(){
          count1--;
          if(q8==true){
          q4.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 

         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             
            if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum(q)",800);
          }
        }
         function checkAAA4(){
           count1--;
           if(q8==true){
             q1=$('wuzeiA');
          q1.className='wuzeiA2';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");

        }
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";
           
              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             } 
             if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }  
         q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
             
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);

          }



        }
         function checkAA4(){
          count1--;
          if(q8==true){
          q4.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 

         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             
            if(q==0){
          s=q+"/A";
        }else{
          s=s+"/"+q+"/A";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum1(q)",800);
          }
        }

        /****************************/

        function checkB1(){//如果点击了这个，说明肯定是错的，并且他选择的是B
         
          count1--;
          if(q8==true){
          q5.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
          } 


          //下面是要把出错的东西写入数据库
            myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
          if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          //下面是出现切换效果
             q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
             }
            setTimeout("anum(q)",800);
              //anum(q);
          }



        }
         function checkBBB1(){
           count1--;
           if(q8==true){
             q1=$('wuzeiA');
          q1.className='wuzeiA2';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");

        }
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";
           
              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             } 
             if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }  
         q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
             
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);

          }



        }
        function checkBB1(){//如果点击了这个，说明肯定是错的，并且他选择的是B
         
          count1--;
          if(q8==true){
          q5.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
          } 


          //下面是要把出错的东西写入数据库
            myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
          if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          //下面是出现切换效果
             q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
             }
            setTimeout("anum1(q)",800);
              //anum(q);
          }



        }
        /**********************************/
        function checkB2(){
           if(q8==true){
          q5.className='y';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum(q)",800);
          }
        }
         function checkBBB2(){
           if(q8==true){
             q1=$('wuzeiA');
          q1.className='wuzeiA1';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);
          }
        }
         function checkBB2(){
           if(q8==true){
          q5.className='yy1';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum1(q)",800);
          }
        }
        /********************************************/
        function checkB3(){
          count1--;
           if(q8==true){
          q5.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
     if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum(q)",800);
          }
        }
         function checkBBB3(){
          count1--;
           if(q8==true){
             q1=$('wuzeiA');
            
          q1.className='wuzeiA2';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
     if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);
          }
        }
         function checkBB3(){
          count1--;
           if(q8==true){
          q5.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
     if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum1(q)",800);
          }
        }
        /*********************************/
        function checkB4(){
          count1--;
           if(q8==true){
          q5.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
        if(q==q3-1){
        
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
            if(q<q3){
              q=q+1;
            }
             setTimeout("anum(q)",800);
          }
        }
        function checkBBB4(){
          count1--;
           if(q8==true){
             q1=$('wuzeiA');
          q1.className='wuzeiA2';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
     if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);
          }
        }
        function checkBB4(){
          count1--;
           if(q8==true){
          q5.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             if(q==0){
          s=q+"/B";
        }else{
          s=s+"/"+q+"/B";
        }
        if(q==q3-1){
        
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
            if(q<q3){
              q=q+1;
            }
             setTimeout("anum1(q)",800);
          }
        }
        /******************************************************/
         function checkC1(){
          count1--;
         
          if(q8==true){
          q6.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
       if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum(q)",800);
          }

        }
        function checkCCC1(){
          count1--;
         
          if(q8==true){
             q1=$('wuzeiA');
          q1.className='wuzeiA2';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
       if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);
          }

        }
         function checkCCC2(){
          count1--;
         
          if(q8==true){
             q1=$('wuzeiA');
          q1.className='wuzeiA2';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
       if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);
          }

        }
         function checkCCC4(){
          count1--;
         
          if(q8==true){
             q1=$('wuzeiA');
          q1.className='wuzeiA1';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
       if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);
          }

        }
         function checkDDD1(){
          count1--;
         
          if(q8==true){
             q1=$('wuzeiA');
          q1.className='wuzeiA2';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
       if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);
          }

        }
         function checkDDD2(){
          count1--;
         
          if(q8==true){
             q1=$('wuzeiA');
          q1.className='wuzeiA2';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
       if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);
          }

        }
         function checkDDD3(){
          count1--;
         
          if(q8==true){
             q1=$('wuzeiA');
          q1.className='wuzeiA2';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
       if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum2(q)",800);
          }

        }
        function checkCC1(){
          count1--;
         
          if(q8==true){
          q6.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
       if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
              if(q<q3){
              q=q+1;
            }
              setTimeout("anum1(q)",800);
          }

        }
        function checkC2(){
          count1--;
         if(q8==true){
          q6.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
               if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
            setTimeout("anum(q)",800);
          }
        }
        function checkCC2(){
          count1--;
         if(q8==true){
          q6.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
               if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
            setTimeout("anum1(q)",800);
          }
        }
        function checkC3(){
          if(q8==true){
          q6.className='y';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
          if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
            setTimeout("anum(q)",800);
          }
        }
        function checkCC3(){
          if(q8==true){
          q6.className='yy1';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
          if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
            setTimeout("anum1(q)",800);
          }
        }
        function checkC4(){
          count1--;
          if(q8==true){
          q6.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
               if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
            setTimeout("anum(q)",800);
          }
        }
         function checkCC4(){
          count1--;
          if(q8==true){
          q6.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
               if(q==0){
          s=q+"/C";
        }else{
          s=s+"/"+q+"/C";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
            setTimeout("anum1(q)",800);
          }
        }


        function checkD1(){
          count1--;
         
          if(q8==true){
          q7.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3-1){
              q=q+1;
            }
             setTimeout("anum(q)",800);
          }
        }
         function checkDD1(){
          count1--;
         
          if(q8==true){
          q7.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
        if(q==q3-1){
         
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3-1){
              q=q+1;
            }
             setTimeout("anum1(q)",800);
          }
        }
        function checkD2(){
          count1--;
          if(q8==true){
          q7.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
        if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3-1){
              q=q+1;
            }
             setTimeout("anum(q)",800);
          }
        }
        function checkDD2(){
          count1--;
          if(q8==true){
          q7.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
         myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
        if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3-1){
              q=q+1;
            }
             setTimeout("anum1(q)",800);
          }
        }
        function checkD3(){
          count1--;
           if(q8==true){
          q7.className='z';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
            myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q+"&userr=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
        if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
             setTimeout("anum(q)",800);
          }
        }
        function checkDD3(){
          count1--;
           if(q8==true){
          q7.className='zz';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
            myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&id="+q;
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
            if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
        if(q==q3-1){
          
          myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
              saveStar();
              openNew();
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
             setTimeout("anum1(q)",800);
          }
        }
        function checkD4(){
           if(q8==true){
          q7.className='y';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
        if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
        if(q==q3-1){
         
            
          //现在可以发送ajax请求了
            myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
                saveStar();
             //这里需要写开始弹出遮罩层了
             openNew();
          
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
            if(q<q3){
              q=q+1;
            }
              setTimeout("anum(q)",800);
          }
        }
        function checkDD4(){
           if(q8==true){
          q7.className='yy1';
          var control="control"+q;
          var l1=document.getElementById(control);
          l1.setAttribute("disabled","none");
        } 
        if(q==0){
          s=q+"/D";
        }else{
          s=s+"/"+q+"/D";
        }
        if(q==q3-1){
         
            
          //现在可以发送ajax请求了
            myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
            if(myXmlHttpRequest){
              var url="savewrong.php";

              var data="book="+m2+"&grade="+m3+"&subject="+m4+"&unit="+m5+"&s="+s+"&user=<?php echo $user;  ?>";
              //数据和传递的页面都没有问题
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=save1;
              myXmlHttpRequest.send(data);

        
            }else{
             alert("创建ajax对象失败");
             }
             saveStar();
             //这里需要写开始弹出遮罩层了
             openNew();
          
        }
          q8=false;
           if(q8==false){//说明这个控件被点击
              //q=q+1;
              
              
              q=parseInt(q);
            if(q<q3){
              q=q+1;
            }
              setTimeout("anum1(q)",800);
          }
        }


       function save1(){//成功之后的回调函数
         if(myXmlHttpRequest.readyState==4){//发送状态成功
          if(myXmlHttpRequest.status==200){
            
              
          }
        }

       }

       function fugai(){
        if(myXmlHttpRequest.readyState==4){//发送状态成功
              if(myXmlHttpRequest.status==200){
              var uniti=myXmlHttpRequest.responseText;//这里有可能会返回两种结果
              var unit_object=eval("("+uniti+")");//将返回的json数据类型转化为对象
                q2=unit_object;//全局变量
                var m=count(unit_object);
                var i;
                 q3=m;
                 count1=q3;//看看还有几道对的题
                 if(q2[0].subject=="语文"){
                  var s1=document.getElementById('mid');//获取mid的id
                  var p7=document.createElement('div');
                  p7.setAttribute('class','ti');
                  p7.setAttribute('id','A1')
                  s1.appendChild(p7);

                  var p1=document.createElement('table');
                  s1.appendChild(p1);
                  var p2=document.createElement('tr');
                  p1.appendChild(p2);
                  var p3=document.createElement('td');
                  p3.setAttribute('class','x');
                  p3.setAttribute('id','B1');
                  p2.appendChild(p3);
                  var p4=document.createElement('td');
                   p4.setAttribute('class','x');
                  p4.setAttribute('id','C1');
                  p2.appendChild(p4);
                  var p5=document.createElement('td');
                  p5.setAttribute('class','x');
                  p5.setAttribute('id','D1');
                  p2.appendChild(p5);
                  var p6=document.createElement('td');
                  p6.setAttribute('class','x');
                  p6.setAttribute('id','E1');
                  p2.appendChild(p6);//在这里我生成了一个表格
                  var m1=document.createElement('div');
                  m1.setAttribute("id","control22");
                  s1.appendChild(m1);
                  q1=document.getElementById('A1');
                  q1.innerText=q2[0].problem;
                  q4=document.getElementById('B1');
                  q4.innerText=q2[0].option1;
                  q5=document.getElementById('C1');
                  q5.innerText=q2[0].option2;
                  q6=document.getElementById('D1');
                  q6.innerText=q2[0].option3;
                  q7=document.getElementById('E1');
                  q7.innerText=q2[0].option4;//将题目已经弄出来
                     //下面就是为砸金蛋做准备
                  q4.className='x';
                  q5.className='x';
                  q6.className='x';
                  q7.className='x';

                  q8=true;//控制同一组的金蛋只能被点一次
                  if(q2[0].rightanswers=='A'){
                          q4.setAttribute("onclick","checkA1()");
                          q5.setAttribute("onclick","checkB1()");
                          q6.setAttribute("onclick","checkC1()");
                          q7.setAttribute("onclick","checkD1()");

                     }else if(q2[0].rightanswers=='B'){
                          q4.setAttribute("onclick","checkA2()");
                          q5.setAttribute("onclick","checkB2()");
                          q6.setAttribute("onclick","checkC2()");
                          q7.setAttribute("onclick","checkD2()");
                     }else if(q2[0].rightanswers=='C'){
                          q4.setAttribute("onclick","checkA3()");
                          q5.setAttribute("onclick","checkB3()");
                          q6.setAttribute("onclick","checkC3()");
                          q7.setAttribute("onclick","checkD3()");

                     }else if(q2[0].rightanswers=='D'){
                              
                          q4.setAttribute("onclick","checkA4()");
                          q5.setAttribute("onclick","checkB4()");
                          q6.setAttribute("onclick","checkC4()");
                          q7.setAttribute("onclick","checkD4()");
                     }
                        
                     m2=q2[0].book;
                     m3=q2[0].grade;
                     m4=q2[0].subject;
                     m5=q2[0].unit;
                   for(i=0;i<m;i++){
                   var q1=document.createElement('input');
                   q1.setAttribute("type","submit");
                   q1.setAttribute("value",i);
                   q1.setAttribute("class","control")
                   q1.setAttribute("id","control"+i);
                   q1.setAttribute("onclick","anum(this.value)");//这里出来一个点击事件
                   m1.appendChild(q1);

                 }
                 var control="control0";
                      var l1=document.getElementById(control);
                      l1.className='afterclick';
               }else if(q2[0].subject=="英语"){
                 var s1=document.getElementById('mid');//获取mid的id
                  var p8=document.createElement('div');
                  p8.setAttribute('class','shu');
                  s1.appendChild(p8);
                  var p7=document.createElement('div');
                  p7.setAttribute('class','ci');//这个是生成题目的
                  p7.setAttribute('id','A1');
                  s1.appendChild(p7);
                  
                  var p1=document.createElement('table');
                  p1.setAttribute('class','shu1');
                  s1.appendChild(p1);
                  var p2=document.createElement('tr');
                  p1.appendChild(p2);
                  var p3=document.createElement('td');
                  p3.setAttribute('class','mo');
                  p3.setAttribute('id','B1');
                  p2.appendChild(p3);
                  var p4=document.createElement('td');
                   p4.setAttribute('class','mo');
                  p4.setAttribute('id','C1');
                  p2.appendChild(p4);
                  var p5=document.createElement('td');
                  p5.setAttribute('class','mo');
                  p5.setAttribute('id','D1');
                  p2.appendChild(p5);
                  
                  var p6=document.createElement('td');
                  p6.setAttribute('class','mo');
                  p6.setAttribute('id','E1');
                  p2.appendChild(p6);//在这里我生成了一个表格
                  var m1=document.createElement('div');
                  m1.setAttribute("id","control222");
                  s1.appendChild(m1);
                  q1=document.getElementById('A1');//第一次的
                  q1.innerText=q2[0].problem;
                  q4=document.getElementById('B1');
                  q4.innerText=q2[0].option1;
                  q5=document.getElementById('C1');
                  q5.innerText=q2[0].option2;
                  q6=document.getElementById('D1');
                  q6.innerText=q2[0].option3;
                  q7=document.getElementById('E1');
                  q7.innerText=q2[0].option4;//将题目已经弄出来
                     //下面就是为砸地鼠做准备
                  q4.className='mo';
                  q5.className='mo';
                  q6.className='mo';
                  q7.className='mo';
                  q8=true;//控制同一组的金蛋只能被点一次
                  if(q2[0].rightanswers=='A'){
                          q4.setAttribute("onclick","checkAA1()");
                          q5.setAttribute("onclick","checkBB1()");
                          q6.setAttribute("onclick","checkCC1()");
                          q7.setAttribute("onclick","checkDD1()");

                     }else if(q2[0].rightanswers=='B'){
                          q4.setAttribute("onclick","checkAA2()");
                          q5.setAttribute("onclick","checkBB2()");
                          q6.setAttribute("onclick","checkCC2()");
                          q7.setAttribute("onclick","checkDD2()");
                     }else if(q2[0].rightanswers=='C'){
                          q4.setAttribute("onclick","checkAA3()");
                          q5.setAttribute("onclick","checkBB3()");
                          q6.setAttribute("onclick","checkCC3()");
                          q7.setAttribute("onclick","checkDD3()");

                     }else if(q2[0].rightanswers=='D'){
                              
                          q4.setAttribute("onclick","checkAA4()");
                          q5.setAttribute("onclick","checkBB4()");
                          q6.setAttribute("onclick","checkCC4()");
                          q7.setAttribute("onclick","checkDD4()");
                     }
                        
                     m2=q2[0].book;
                     m3=q2[0].grade;
                     m4=q2[0].subject;
                     m5=q2[0].unit;
                   for(var i=0;i<m;i++){
                   var q1=document.createElement('input');
                   q1.setAttribute("type","submit");
                   q1.setAttribute("value",i);
                   q1.setAttribute("class","controll")
                   q1.setAttribute("id","control"+i);
                   q1.setAttribute("onclick","anum1(this.value)");//这里出来一个点击事件
                   m1.appendChild(q1);

                 }
                     var control="control0";
                      var l1=document.getElementById(control);
                      l1.className='afterclick';



               }else if(q2[0].subject=="数学"){
                var s1=document.getElementById('mid');//获取mid的id
                   var p8=document.createElement('div');
                   p8.setAttribute('class','wuzeiback');
                   s1.appendChild(p8);
                   var p7=document.createElement('div');
                   p7.setAttribute('class','wuzeiA');//这个是生成题目的
                   p7.setAttribute('id','wuzeiA');
                   s1.appendChild(p7);
                   var p7=document.createElement('span');
                   p7.setAttribute('class','moA');//这个是生成题目的
                   p7.setAttribute('id','moA');
                   s1.appendChild(p7);

                   var p6=document.createElement('span');
                   p6.setAttribute('class','moB');//这个是生成题目的
                   p6.setAttribute('id','moB');
                   s1.appendChild(p6);
                   var p5=document.createElement('span');
                   p5.setAttribute('class','moC');//这个是生成题目的
                   p5.setAttribute('id','moC');
                   s1.appendChild(p5);
                   var p4=document.createElement('span');
                   p4.setAttribute('class','moD');//这个是生成题目的
                   p4.setAttribute('id','moD');
                   s1.appendChild(p4);

                   var m1=document.createElement('div');
                   m1.setAttribute("id","control2222");
                   s1.appendChild(m1);
                   q1=document.getElementById('wuzeiA');//第一次的
                   q1.innerText=q2[0].problem;
                   q4=document.getElementById('moA');
                   q4.innerText=q2[0].option1;
                   q5=document.getElementById('moB');
                   q5.innerText=q2[0].option2;
                   q6=document.getElementById('moC');
                   q6.innerText=q2[0].option3;
                   q7=document.getElementById('moD');
                   q7.innerText=q2[0].option4;//将题目已经弄出来
                     //下面就是为砸地鼠做准备
                   q1.className='wuzeiA';
                     m2=q2[0].book;
                     m3=q2[0].grade;
                     m4=q2[0].subject;
                     m5=q2[0].unit;
                      q8=true;//控制同一组的金蛋只能被点一次
                  if(q2[0].rightanswers=='A'){//走的是这个
                          q4.setAttribute("onclick","checkAAA1()");
                          q5.setAttribute("onclick","checkBBB1()");
                          q6.setAttribute("onclick","checkCCC1()");
                          q7.setAttribute("onclick","checkDDD1()");

                     }else if(q2[0].rightanswers=='B'){
                          q4.setAttribute("onclick","checkAAA2()");
                          q5.setAttribute("onclick","checkBBB2()");
                          q6.setAttribute("onclick","checkCCC2()");
                          q7.setAttribute("onclick","checkDDD2()");
                     }else if(q2[0].rightanswers=='C'){
                          q4.setAttribute("onclick","checkAAA3()");
                          q5.setAttribute("onclick","checkBBB3()");
                          q6.setAttribute("onclick","checkCCC3()");
                          q7.setAttribute("onclick","checkDDD3()");

                     }else if(q2[0].rightanswers=='D'){
                              
                          q4.setAttribute("onclick","checkAAA4()");
                          q5.setAttribute("onclick","checkBBB4()");
                          q6.setAttribute("onclick","checkCCC4()");
                          q7.setAttribute("onclick","checkDDD4()");
                     }
                      for(var i=0;i<m;i++){
                       
                   var q1=document.createElement('input');
                   q1.setAttribute("type","submit");
                   q1.setAttribute("value",i);
                   q1.setAttribute("class","controll")
                   q1.setAttribute("id","control"+i);
                   q1.setAttribute("onclick","anum2(this.value)");//这里出来一个点击事件
                   m1.appendChild(q1);

                 }
                     var control="control0";
                      var l1=document.getElementById(control);
                      l1.className='afterclick';



               }
 

              }
            }
       }
    function change4(){
            var s=document.getElementById('study');
            s.style.display="none";

       }

       function saveStar(){
           myXmlHttpRequest=getXmlHttpObject();//创建ajax对象
           if(myXmlHttpRequest){
              var url="gainUnitProblem.php";
              var data="book="+m2+"&subject="+m4+"&num=5"+"&grade="+m3+"&count1="+count1+"&user=<?php echo $user;  ?>";//这个地方也是生效的
              myXmlHttpRequest.open("post",url,true);//以post的方式打开
              myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//如果使用post方式提交则需要写这样一句话
              myXmlHttpRequest.onreadystatechange=chuli;
              myXmlHttpRequest.send(data);

        
      }else{
        alert("创建ajax对象失败");
      }


       }

       function openNew(){//这里是弹出的新窗口
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
     
    //var al="<div class='loginCon'><div><ul><li>做题情况:</li><li>获得奖励：";
    var al="<div class='loginCon'><div><ul><li>";
    if(count1==0){
       var al1="错题较多,没有得到奖励哦";
       var al=al+al1+"</li><li><a href='wrong.php'>马上去修改错题</a></li></ul></div></div>";
    }else if(count1<=(q3/2)){//正确率不高的时候
       var al1="再仔细一点哦";
       var al=al+al1+"</li><li>获得奖励：";
       for(var id=0;id<count1;id++){
         al=al+"<img src='images/star.png'>";
        }
        al=al+"</li></ul></div><div id='close'></div></div>";

    }else if(count1>(q3/2)&&count1<q3){
       var al1="干的不错，但还有提高空间";
       var al=al+al1+"</li><li>获得奖励：";
       for(var id=0;id<count1;id++){
         al=al+"<img src='images/star.png'>";
        }
       al=al+"</li></ul></div><div id='close'></div></div>";

    }else if(count1==q3){
      var al1="太棒了,请接收我膜拜的膝盖";
       var al=al+al1+"</li><li>获得奖励：";
       for(var id=0;id<count1;id++){
         al=al+"<img src='images/star.png'>";
        }
       al=al+"</li></ul></div><div id='close'></div></div>";
    }
    
    
    oLogin.innerHTML=al;
    //oLogin.innerHTML="<div class='loginCon'><div><ul><li>做题情况:</li><li>获得奖励：<img src='images/star.png'><img src='images/star.png'><img src='images/star.png'><img src='images/star.png'><img src='images/star.png'></li></ul></div><div id='close'></div></div>";
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
  <div class="tit"><span class="tite"><img src="images/homepage3.png"/>&nbsp;&nbsp;&nbsp;少儿综合素质拓展平台</span><span><a href="Reback.php">注销</a></span><span></span><span></span><span></span>
   </div>
  <div class="top">
  <a href="student.php">首页</a><a href="learningcenter.php">学习中心</a><a href="my.php">个人中心</a><a href="list.html">排行榜</a><a href="video.html">视频中心</a>
  </div>
  <div class="mid" id="mid">
    <div id="hiddden1">
      <div class="sider1">
        <ul>
        <li><a href='learningcenter.php'>自学中心</a></li>
        <li><a href="his.php">查看历史</a></li>
        <li><a href="wrong.php">查看错题</a></li>
        </ul>
      </div>
      <div class="sider2">
        <div class="ind">一起来愉快的学习吧！^^
        </div>
         <div class="pro">


           <div class="yuwen">
            <span style="float:left;margin-left:21px; margin-top:50px;text-align=center; color:green; font-weight:bold;" id="book1">
              <?php
              
               
               
               
                $book=$aaa[0]['book'];
                  echo $book;
               
              ?>
            </span>
            
           <p onclick="change('yw','<?php echo $book; ?>')"  id="pbook1"><img  id="yu" src="images/green.png"  /></p></div>




           <div class="shuxue">
              <span style="float:left;margin-left:21px; margin-top:50px;text-align=center; color:green; font-weight:bold;" id="book2">
              <?php
              
                  echo $book;
               
              ?>
            </span>
           
           <p onclick="change('sx','<?php echo $book; ?>')"  id="pbook2"><img  id="yu1" src="images/green.png"/></p></div>




           <div class="yingyu">
              <span style="float:left;margin-left:21px; margin-top:50px;text-align=center; color:green; font-weight:bold;" id="book3">
              <?php
              
                  echo $book;
              ?>
            </span>
           
           <p onclick="change('yy','<?php echo $book; ?>')"  id="pbook3"><img id="yu2" src="images/green.png"/></p></div>
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
      </div>
    </div>
      <div id="study" style="display:none"><!--这个是显示题目的div-->
        
      </div>
  </div>
  </body>
</html>