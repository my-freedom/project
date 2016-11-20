
var m,unit_object;
var q1,q2,q3,q4,q5,q6,q7,q8,q9;
var q;
var user=$('#hid').val();

var lg;
$(document).ready(function(){//jquery的主函数
	
	 
   
   $.ajax({//一点击这个页面就会出现错题
   	  method:"post",
   	  url:"cleanWrong.php",
   	  data:{
          "user":user
   	  },
   	  complete:function(response){//这里返回的是string类型
   	  	 
   	  	  var i;//首先应该出来判断这是语文还是英语
          
           unit_object= eval("("+response.responseText+")");
           m=count(unit_object);//这个统计出来了
            q2=unit_object;
         
          	if(unit_object[0].subject=='语文'){//这里生成砸金蛋的场景
   	  	  	//首先生成场景
   	  	  	   drawEgg();//将其抽象为一个函数
               lg=true;//说明已经完成初始化


   	  	  	
   	  	  	
   	  	  
   	  	     }else if(unit_object[0].subject=='英语'){//这里生成打地鼠的场景
                drawMouse();
                lg=true;
   	  	   }else if(unit_object[0].subject=='数学'){
             drawSea()
             lg=true;

           }

          

   	  	  
   	  	  
   	   


   	  },
      success:function(response){
        //alert(response);

      }

   });
function drawSea(){
  var sm=$("#hiddden1");
  sm.attr("style","display:none");
  var s1=$("#sider2");
  s1.append("<div class='wuzeiback'><div class='wuzeiA' id='wuzeiA'></div><span class='moA' id='moA'  ></span><span class='moB' id='moB'  ></span><span class='moC' id='moC'  ></span><span class='moD' id='moD'  ></span></div>");
  s1.append("<div id='control2222'></div>");
  q=0;//初始时第一个
   q1=$('#wuzeiA');
   q1.text(unit_object[0].problem);
   q4=$('#moA');
   q4.text(unit_object[0].option1);
   q5=$('#moB');
   q5.text(unit_object[0].option2);
   q6=$('#moC');
   q6.text(unit_object[0].option3);
   q7=$('#moD');
   q7.text(unit_object[0].option4);
   q8=true;//控制同一组的金蛋只能被点一次
   if(q2[0].rightanswers=='A'){
                          q4.attr("onclick","checkA1()");
                          q5.attr("onclick","checkB1()");
                          q6.attr("onclick","checkC1()");
                          q7.attr("onclick","checkD1()");

                     }else if(q2[0].rightanswers=='B'){
                          q4.attr("onclick","checkA2()");
                          q5.attr("onclick","checkB2()");
                          q6.attr("onclick","checkC2()");
                          q7.attr("onclick","checkD2()");
                     }else if(q2[0].rightanswers=='C'){
                          q4.attr("onclick","checkA3()");
                          q5.attr("onclick","checkB3()");
                          q6.attr("onclick","checkC3()");
                          q7.attr("onclick","checkD3()");

                     }else if(q2[0].rightanswers=='D'){
                              
                          q4.attr("onclick","checkA4()");
                          q5.attr("onclick","checkB4()");
                          q6.attr("onclick","checkC4()");
                          q7.attr("onclick","checkD4()");
                     }
                      var m1=$('#control2222');
                  for(var i=0;i<m;i++){
                    
                   m1.append("<input type='submit' class='control' value='"+i+"' id='control"+i+"' onclick='anum(this.value)' >");
                  
             
                 }
                 var l1=$("#control0");
             l1.removeAttr("class");
             l1.attr("class","afterclick");



}
function drawMouse(){//初始化的老鼠
   var sm=$("#hiddden1");
   sm.attr("style","display:none");
   var s1=$("#sider2");
   s1.append("<div class='shu'><div class='ci' id='A1'></div><table class='shu1'><tr><td class='mo' id='B1'></td><td class='mo' id='C1'></td><td class='mo' id='D1'></td><td class='mo' id='E1'></td></tr></table></div>");
   s1.append("<div id='control222'></div>");
   q=0;//初始时第一个
   q1=$('#A1');
   q1.text(unit_object[0].problem);
   q4=$('#B1');
   q4.text(unit_object[0].option1);
   q5=$('#C1');
   q5.text(unit_object[0].option2);
   q6=$('#D1');
   q6.text(unit_object[0].option3);
   q7=$('#E1');
   q7.text(unit_object[0].option4);
   q8=true;//控制同一组的金蛋只能被点一次
   if(q2[0].rightanswers=='A'){
                          q4.attr("onclick","checkA1()");
                          q5.attr("onclick","checkB1()");
                          q6.attr("onclick","checkC1()");
                          q7.attr("onclick","checkD1()");

                     }else if(q2[0].rightanswers=='B'){
                          q4.attr("onclick","checkA2()");
                          q5.attr("onclick","checkB2()");
                          q6.attr("onclick","checkC2()");
                          q7.attr("onclick","checkD2()");
                     }else if(q2[0].rightanswers=='C'){
                          q4.attr("onclick","checkA3()");
                          q5.attr("onclick","checkB3()");
                          q6.attr("onclick","checkC3()");
                          q7.attr("onclick","checkD3()");

                     }else if(q2[0].rightanswers=='D'){
                              
                          q4.attr("onclick","checkA4()");
                          q5.attr("onclick","checkB4()");
                          q6.attr("onclick","checkC4()");
                          q7.attr("onclick","checkD4()");
                     }
                      var m1=$('#control222');
                  for(var i=0;i<m;i++){
                    
                   m1.append("<input type='submit' class='control' value='"+i+"' id='control"+i+"' onclick='anum(this.value)' >");
                  
             
                 }
                 var l1=$("#control0");
             l1.removeAttr("class");
             l1.attr("class","afterclick");

}
function drawEgg(){//这仅仅是个初始化的工作
	          var sm=$("#hiddden1");
   	  	  	sm.attr("style","display:none");
           
   	  	  	var s1=$("#sider2");//获取sider2的id,现在要在其上面生成场景
            s1.append("<div class='ti' id='A1'></div>");
            s1.append("<table><tr><td class='x' id='B1'></td><td class='x' id='C1'></td><td class='x' id='D1'></td><td class='x' id='E1'></td></tr></table>");
            s1.append("<div id='control22'></div>");
            q=0;

            q1=$('#A1');
            q1.text(unit_object[0].problem);
            q4=$('#B1');
            q4.text(unit_object[0].option1);
            q5=$('#C1');
            q5.text(unit_object[0].option2);
            q6=$('#D1');
            q6.text(unit_object[0].option3);
            q7=$('#E1');
            q7.text(unit_object[0].option4);
            q8=true;//控制同一组的金蛋只能被点一次

            if(q2[0].rightanswers=='A'){
                          q4.attr("onclick","checkA1()");
                          q5.attr("onclick","checkB1()");
                          q6.attr("onclick","checkC1()");
                          q7.attr("onclick","checkD1()");

                     }else if(q2[0].rightanswers=='B'){
                          q4.attr("onclick","checkA2()");
                          q5.attr("onclick","checkB2()");
                          q6.attr("onclick","checkC2()");
                          q7.attr("onclick","checkD2()");
                     }else if(q2[0].rightanswers=='C'){
                          q4.attr("onclick","checkA3()");
                          q5.attr("onclick","checkB3()");
                          q6.attr("onclick","checkC3()");
                          q7.attr("onclick","checkD3()");

                     }else if(q2[0].rightanswers=='D'){
                              
                          q4.attr("onclick","checkA4()");
                          q5.attr("onclick","checkB4()");
                          q6.attr("onclick","checkC4()");
                          q7.attr("onclick","checkD4()");
                     }
                     
                    
                    
                     var m1=$('#control22');

                  for(var i=0;i<m;i++){
                  	
                   m1.append("<input type='submit' class='control' value='"+i+"' id='control"+i+"' onclick='anum(this.value)' >");
                  

                 }
             var l1=$("#control0");
             l1.removeAttr("class");
             l1.attr("class","afterclick");

}
function drawMo(){
            var sm=$("#hiddden1");
            sm.attr("style","display:none");
            var s1=$("#sider2");
            s1.append("<div class='shu'><div class='ci' id='A1'></div><table class='shu1'><tr><td class='mo' id='B1'></td><td class='mo' id='C1'></td><td class='mo' id='D1'></td><td class='mo' id='E1'></td></tr></table></div>");
             for(var i=0;i<m;i++){//觉得这个是多余的
                    
                   m1.append("<input type='submit' class='control' value='"+i+"' id='control"+i+"' onclick='anum(this.value)' >");
                  

                 }

}
function drawEg(){
            var sm=$("#hiddden1");
   	  	  	sm.attr("style","display:none");

   	  	  	var s1=$("#sider2");//获取sider2的id,现在要在其上面生成场景
            s1.append("<div class='ti' id='A1'></div>");
            s1.append("<table><tr><td class='x' id='B1'></td><td class='x' id='C1'></td><td class='x' id='D1'></td><td class='x' id='E1'></td></tr></table>");
            s1.append("<div id='control22'></div>");
             for(var i=0;i<m;i++){//还有这个
                  	
                   m1.append("<input type='submit' class='control' value='"+i+"' id='control"+i+"' onclick='anum(this.value)' >");
                  

                 }
}
function drawS(){
   var sm=$("#hiddden1");
   sm.attr("style","display:none");

   var s1=$("#sider2");
   s1.append("<div class='wuzeiback'><div class='wuzeiA' id='wuzeiA'>5</div><span class='moA' id='moA'  ></span><span class='moB' id='moB'  ></span><span class='moC' id='moC'  ></span><span class='moD' id='moD'  ></span></div>");
  s1.append("<div id='control2222'></div>");
  for(var i=0;i<m;i++){//还有这个
                    
                   m1.append("<input type='submit' class='control' value='"+i+"' id='control"+i+"' onclick='anum(this.value)' >");
                  

      }

}
  function count(a){//自定义一个计算对象长度的函数
     var t=typeof a;
     if(t=="string"){
       return a.length;
     }else if(t=="object"){
      var n=0;
      for(var i in a){
        n++;
      }
      return n;
     }else{
      return false;

     }
}
});
function anum(i){//初始时也触发这个
   q=i;//这里才有的q的赋值
  for(var id=0;id<q3;id++){
  	if((q==id)&&(unit_object[i].subject=='语文')){//这是是语文
  		if(lg==true){//表示已经完成了初始化操作
             
            afterDraw(q);//其实执行的是这个操作
             
                     

  		}else{
  			drawEg();//如果第一道题不是语文就这样生成
  			afterDraw(q);
  		}

  	}else if((q==id)&&(unit_object[i].subject=='英语')){
      if(lg==true){//已经被初始化
         afterDraw1(q);
      }else{//尚未初始化
        drawMo();
        afterDraw1(q);


      }
    }else if((q==id)&&(unit_object[i].subject=='数学')){
      if(lg==true){
        afterDraw2(q);
      }else{
        drawS();
        afterDraw2(q);
      }
    }

  }

 }
 function afterDraw1(q){

             var l1=$("#control"+q);
             l1.removeAttr("class");
             l1.attr("class","afterclick");//这个生效了
             q1.text(q2[q].problem);//系统说这行有错误
             
             q4.text(q2[q].option1);
             q5.text(q2[q].option2);
             q6.text(q2[q].option3);
             q7.text(q2[q].option4);
             q8=true;//控制同一组的金蛋只能被点一次
             if(q2[q].rightanswers=='A'){
                          q4.attr("onclick","checkA1()");
                          q5.attr("onclick","checkB1()");
                          q6.attr("onclick","checkC1()");
                          q7.attr("onclick","checkD1()");

                     }else if(q2[q].rightanswers=='B'){
                          q4.attr("onclick","checkA2()");
                          q5.attr("onclick","checkB2()");
                          q6.attr("onclick","checkC2()");
                          q7.attr("onclick","checkD2()");
                     }else if(q2[q].rightanswers=='C'){
                          q4.attr("onclick","checkA3()");
                          q5.attr("onclick","checkB3()");
                          q6.attr("onclick","checkC3()");
                          q7.attr("onclick","checkD3()");

                     }else if(q2[q].rightanswers=='D'){
                              
                          q4.attr("onclick","checkA4()");
                          q5.attr("onclick","checkB4()");
                          q6.attr("onclick","checkC4()");
                          q7.attr("onclick","checkD4()");
                     }
                     q4.removeAttr("class");
                     q4.attr("class",'mo');
                     q5.removeAttr("class");
                     q5.attr("class",'mo');
                     q6.removeAttr("class");
                     q6.attr("class",'mo');
                     q7.removeAttr("class");
                     q7.attr("class",'mo');

 }
 function afterDraw2(q){
    var l1=$("#control"+q);
             l1.removeAttr("class");
             l1.attr("class","afterclick");//这个生效了
             q1.text(q2[q].problem);

             q4.text(q2[q].option1);
             q5.text(q2[q].option2);
             q6.text(q2[q].option3);
             q7.text(q2[q].option4);
             q8=true;//控制同一组的金蛋只能被点一次
             if(q2[q].rightanswers=='A'){
                          q4.attr("onclick","checkA1()");
                          q5.attr("onclick","checkB1()");
                          q6.attr("onclick","checkC1()");
                          q7.attr("onclick","checkD1()");

                     }else if(q2[q].rightanswers=='B'){
                          q4.attr("onclick","checkA2()");
                          q5.attr("onclick","checkB2()");
                          q6.attr("onclick","checkC2()");
                          q7.attr("onclick","checkD2()");
                     }else if(q2[q].rightanswers=='C'){
                          q4.attr("onclick","checkA3()");
                          q5.attr("onclick","checkB3()");
                          q6.attr("onclick","checkC3()");
                          q7.attr("onclick","checkD3()");

                     }else if(q2[q].rightanswers=='D'){
                              
                          q4.attr("onclick","checkA4()");
                          q5.attr("onclick","checkB4()");
                          q6.attr("onclick","checkC4()");
                          q7.attr("onclick","checkD4()");
                     }
                      q1.removeAttr("class");
                      q1.attr("class",'wuzeiA');
 }
 function afterDraw(q){
 	         var l1=$("#control"+q);
             l1.removeAttr("class");
             l1.attr("class","afterclick");//这个生效了
             q1.text(q2[q].problem);

             q4.text(q2[q].option1);
             q5.text(q2[q].option2);
             q6.text(q2[q].option3);
             q7.text(q2[q].option4);
             q8=true;//控制同一组的金蛋只能被点一次
             if(q2[q].rightanswers=='A'){
                          q4.attr("onclick","checkA1()");
                          q5.attr("onclick","checkB1()");
                          q6.attr("onclick","checkC1()");
                          q7.attr("onclick","checkD1()");

                     }else if(q2[q].rightanswers=='B'){
                          q4.attr("onclick","checkA2()");
                          q5.attr("onclick","checkB2()");
                          q6.attr("onclick","checkC2()");
                          q7.attr("onclick","checkD2()");
                     }else if(q2[q].rightanswers=='C'){
                          q4.attr("onclick","checkA3()");
                          q5.attr("onclick","checkB3()");
                          q6.attr("onclick","checkC3()");
                          q7.attr("onclick","checkD3()");

                     }else if(q2[q].rightanswers=='D'){
                              
                          q4.attr("onclick","checkA4()");
                          q5.attr("onclick","checkB4()");
                          q6.attr("onclick","checkC4()");
                          q7.attr("onclick","checkD4()");
                     }
                     q4.removeAttr("class");
                     q4.attr("class",'x');
                     q5.removeAttr("class");
                     q5.attr("class",'x');
                     q6.removeAttr("class");
                     q6.attr("class",'x');
                     q7.removeAttr("class");
                     q7.attr("class",'x');
                    
                    

                     


 }
    function checkA1(){
 	    if(q8==true&&q2[q].subject=="语文"){
 		      q4.removeAttr("class");
          q4.attr("class","y");//表示这道题答对了
          
        }//如果做对了，就把该道题的错误记录删除，如果错了，则还保留
       if(q8==true&&q2[q].subject=="英语"){
          q4.removeAttr("class");
          q4.attr("class","yy1");//表示这道题答对了
          
        }
        if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA1");//表示这道题答对了

        }
        $(document).ready(function(){
          $.ajax({
          method:"post",
          url:"dealRecord.php",
          data:{
            "id":q2[q].id1,
            "user":user,
            "book":q2[q].book,
            "grade":q2[q].grade,
            "subject":q2[q].subject,
            "unit":q2[q].unit
          },
          success:function(response){//成功之后返回结果，同时题目要发生变动
              //自动变动了，不需要进行操作
              
          }
        });

        });
         m=m-1;
        q8=false;
         window.location.href='wrong.php';
        if(q8==false){//说明这个控件被点击
              //q=q+1;
              
             
            q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
              setTimeout("anum(q)",800);

          }



 }
 function checkB1(){
   if(q8==true&&q2[q].subject=="语文"){
         q5.removeAttr("class");
          q5.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q5.removeAttr("class");
          q5.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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
 function checkC1(){
   if(q8==true&&q2[q].subject=="语文"){
         q6.removeAttr("class");
          q6.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q6.removeAttr("class");
          q6.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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
 function checkD1(){
   if(q8==true&&q2[q].subject=="语文"){
         q7.removeAttr("class");
          q7.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q7.removeAttr("class");
          q7.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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
 function checkA2(){
   if(q8==true&&q2[q].subject=="语文"){
         q4.removeAttr("class");
          q4.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q4.removeAttr("class");
          q4.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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
 function checkB2(){
      if(q8==true&&q2[q].subject=="语文"){
          q5.removeAttr("class");
          q5.attr("class","y");//表示这道题答对了

          
        }//如果做对了，就把该道题的错误记录删除，如果错了，则还保留
       if(q8==true&&q2[q].subject=="英语"){
          q5.removeAttr("class");
          q5.attr("class","yy1");//表示这道题答对了
          
        }//
        if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA1");//表示这道题答对了

        }
        $(document).ready(function(){//发送ajax请求
          $.ajax({
          method:"post",
          url:"dealRecord.php",
          data:{
            "id":q2[q].id1,
            "user":user,
            "book":q2[q].book,
            "grade":q2[q].grade,
            "subject":q2[q].subject,
            "unit":q2[q].unit
          },
          success:function(response){//成功之后返回结果，同时题目要发生变动
              //自动变动了，不需要进行操作
          }
        });

        });
        m=m-1;
         q8=false;
          window.location.href='wrong.php';
        if(q8==false){//说明这个控件被点击
              //q=q+1;
              
             
            q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
              setTimeout("anum(q)",800);

          }



 }
 function checkC3(){
      if(q8==true&&q2[q].subject=="语文"){
          q6.removeAttr("class");
          q6.attr("class","y");//表示这道题答对了
          
        }//如果做对了，就把该道题的错误记录删除，如果错了，则还保留
       if(q8==true&&q2[q].subject=="英语"){
          q6.removeAttr("class");
          q6.attr("class","yy1");//表示这道题答对了
          
        }//
        if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA1");//表示这道题答对了

        }
        $(document).ready(function(){
          $.ajax({
          method:"post",
          url:"dealRecord.php",
          data:{
            "id":q2[q].id1,
            "user":user,
            "book":q2[q].book,
            "grade":q2[q].grade,
            "subject":q2[q].subject,
            "unit":q2[q].unit
          },
          success:function(response){//成功之后返回结果，同时题目要发生变动
              //自动变动了，不需要进行操作
          }
        });

        });
        m=m-1;
         q8=false;
         window.location.href='wrong.php';
        if(q8==false){//说明这个控件被点击
              //q=q+1;
              
             
            q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
              setTimeout("anum(q)",800);

          }



 }
 function checkD4(){
      if(q8==true&&q2[q].subject=="语文"){
          q7.removeAttr("class");
          q7.attr("class","y");//表示这道题答对了
          
        }//如果做对了，就把该道题的错误记录删除，如果错了，则还保留
       if(q8==true&&q2[q].subject=="英语"){
          q7.removeAttr("class");
          q7.attr("class","yy1");//表示这道题答对了
          
        }//
        if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA1");//表示这道题答对了

        }
        $(document).ready(function(){
          $.ajax({
          method:"post",
          url:"dealRecord.php",
          data:{
            "id":q2[q].id1,
            "user":user,
            "book":q2[q].book,
            "grade":q2[q].grade,
            "subject":q2[q].subject,
            "unit":q2[q].unit
          },
          success:function(response){//成功之后返回结果，同时题目要发生变动
              //自动变动了，不需要进行操作
              
          }
        });

        });
          m=m-1;
         q8=false;
          window.location.href='wrong.php';
        if(q8==false){//说明这个控件被点击
              //q=q+1;
              
             
            q=parseInt(q);
             if(q<q3){
              q=q+1;
            }
              setTimeout("anum(q)",800);

          }



 }
 function checkC2(){

   if(q8==true&&q2[q].subject=="语文"){
         q6.removeAttr("class");
          q6.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q6.removeAttr("class");
          q6.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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
 function checkD2(){
   if(q8==true&&q2[q].subject=="语文"){
         q7.removeAttr("class");
          q7.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q7.removeAttr("class");
          q7.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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
 function checkA3(){
   if(q8==true&&q2[q].subject=="语文"){
         q4.removeAttr("class");
          q4.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q4.removeAttr("class");
          q4.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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
 function checkA4(){
   if(q8==true&&q2[q].subject=="语文"){
         q4.removeAttr("class");
          q4.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q7.removeAttr("class");
          q7.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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
 function checkB3(){
   if(q8==true&&q2[q].subject=="语文"){
         q5.removeAttr("class");
          q5.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q5.removeAttr("class");
          q5.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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
 function checkB4(){
   if(q8==true&&q2[q].subject=="语文"){
         q5.removeAttr("class");
          q5.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q5.removeAttr("class");
          q5.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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
 function checkC4(){
   if(q8==true&&q2[q].subject=="语文"){
          q6.removeAttr("class");
          q6.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q6.removeAttr("class");
         q6.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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
 function checkD3(){
   if(q8==true&&q2[q].subject=="语文"){
          q7.removeAttr("class");
          q7.attr("class","z");
          
    }
    if(q8==true&&q2[q].subject=="英语"){
         q7.removeAttr("class");
         q7.attr("class","zz");
          
    }
    if(q8==true&&q2[q].subject=="数学"){
           q1.removeAttr("class");
           q1.attr("class","wuzeiA2");//表示这道题答对了

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