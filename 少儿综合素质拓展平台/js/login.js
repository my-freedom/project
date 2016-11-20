$(document).ready(function(){
	var user,pwd;
	var rsUser,rsPwd,rsCheck,rsUser1;
	var count;
  var email1;
	$("#userr").focus(function(){//当获得焦点时
      $("#inputuserr1").remove();
      $("#userr2").remove();

	});
	$("#userr").focusout(function(){//当失去焦点时
        user=$("#userr").val();
        rsUser = ((user != null) && (user != ""));
        if(rsUser==false){
        	$("#userr1").append("<div   id='inputuserr1' style='width:20px'><i class='remove icon'></div>");
        }else{
        	var regUser = new RegExp("^[\\u4e00-\\u9fa5]{2,8}$|^[a-zA-Z0-9][a-zA-Z0-9]{5,9}$");
            rsUser = regUser.test(user);
            var regUser1=new RegExp("^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$");
             rsUser1=regUser1.test(user);
            if(!rsUser&&!rsUser1){//两个都为假
                 $("#userr1").append("<div   id='inputuserr1' style='width:20px'><i class='remove icon'></div>");
            }else if(rsUser||rsUser1){//两个有一个为真即可
               $("#userr1").append("<div id='userr2' style='width:20px'><i class='check circle icon'></i></div>");
               if(rsUser){//此人选择的是采用用户名登录
                     count=0;
               }else if(rsUser1){
               	    count=1;
               }
            }
        }

	});
       $("#pwdd").focus(function(){
       	  $("#inputpwdd2").remove();
       	  $("#inputpwdd3").remove();

       });

           $("#pwdd").focusout(function(){
            pwd=$("#pwdd").val();
            rsPwd = ((pwd != null) && (pwd != ""));
            if(rsPwd==false){
                $("#pwdd2").append("<div  id='inputpwdd2' style='width:20px'><i class='remove icon'></div>");
                
            }else{
                var regName = new RegExp("^[a-zA-Z0-9][a-zA-Z0-9.,!?]{5,15}$");
                rsPwd = regName.test(pwd);
                if(rsPwd==false){//不符合规范的时候
                      $("#pwdd2").append("<div  id='inputpwdd2' style='width:20px'><i class='remove icon'></div>");
                }else{
                   
                    $("#pwdd2").append("<div id='inputpwdd3' style='width:20px'><i class='check circle icon'></i></div>");
                    
               
                }

            }

        });
           $("#num").focus(function(){
           	     $("#num3").remove();
           	     $("#num4").remove();

           });

       $("#num").focusout(function(){
       	  var check=$("#num").val();//获取验证码的值
       	  $.ajax({
       	  	        method:"post",
                    url:"logincheck.php",
                    data:{
                         "check":check
                     },
                    success:function(response){
                    	if(response==true){
                    		rsCheck=true;
                    		$("#num1").append("<div id='num3' style='width:20px'><i class='check circle icon'></i></div>");

                    	}else{
                    		$("#num1").append("<div  id='num4' style='width:20px'><i class='remove icon'></div>");
                    	}
                    }

       	  });


       });

       $("#loginbutton").click(function(){
       	   if((rsUser||rsUser1)&&rsPwd&&rsCheck){//三个都为真
       	   	  $.ajax({
       	  	        method:"post",
                    url:"loginprocess.php",
                    data:{
                         "user":user,
                         "pwd":pwd,
                         "count":count
                     },
                    success:function(response){

                       if(response==0){
                       	   window.location.href="student.php";
                       }else if(response==1){
                       	 window.location.href="teacher.php";
                       }else if(response==2){
                       	alert("用户名或密码不正确");
                       }

                    }

       	  });

       	   }

       });
       $("#loginbutton1").click(function(){//采用验证码的方式登录
          $("#loginr").attr("style","display:none");
          $("#loginrr").append(" <div class='ui form'><div class='field' ><label>请输入邮箱号:</label><div class='ui left icon input' id='userr1'><input type='text' placeholder='请输入邮箱号' id='emial1'><i class='mail icon'></i> <div class='ui red submit button' id='sendcheck'>发送验证码</div></div><div class='field' ><label>请输入验证码:</label><div class='ui left icon input' id='userr1'><input type='text' placeholder='请输入验证码' id='check3' disabled='none'><i class='mail icon'></i> </div><div class='ui blue submit button'  id='fast'>快速登录</div></div></div>");
          $("#sendcheck").click(function(){
                 email1=$("#emial1").val();
                var regEmail=new RegExp("^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$");
                var rsEmail1=regEmail.test(email1);
                if(rsEmail1){
                  $.ajax({//这个是为了发送邮件
                   method:"post",
                   url:"register2.php",
                   data:{
                    "email":email1
                   },
                 success:function(response){
                  alert(response);
                  $("#check3").removeAttr("disabled");
                 
                  $("#fast").click(function(){
                    var check4=$("#check3").val();
                    var email=email1;
                   
                   
                   $.ajax({
                    method:"post",
                    url:"checkcode.php",
                    data:{
                         "email1":email,
                         "check4":check4
                        
                     },
                    success:function(response){
                      

                       if(response==1){
                           window.location.href="student.php";
                       }else if(response==0){
                         alert("验证码不正确");
                       }

                    }

                 });


                  });
                  


            }
          });

                }
               

          });
         
           
           

       });

    $("#divid").click(function(){
           window.location.href='register1.html';
    });
   
});