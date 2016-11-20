
$(document).ready(function(){//jquery的主方法
        var rsEmail,rsName,rsUser,rsPwd;
        var user,pwd,name,email,yan;
        $("#user").focus(function(){//当输入用户名的文本框获取焦点时
             $("#user3").remove();
             $("#user4").remove();
             $("#inputuser").remove();
             $("#user1").append("<div id='user2'>*必须为2-8个全是汉字或者6-10个字符组合成的用户名</div>");

        });
        $("#pwd").focus(function(){//当输入用户名的文本框获取焦点时
             $("#pwd4").remove();
             $("#pwd5").remove();
             $("#inputpwd").remove();
             $("#pwd2").append("<div id='pwd3'>必须由字母和数字组成，不能包含空格和下划线</div>");

        });
        $("#name").focus(function(){
            $("#name3").remove();
            $("#name2").remove();
            $("#inputname1").remove();
            $("#name1").append(" <div  id='inputname'>*只能是2-8纯英文字母或2-8个纯汉字</div>");
        });
        $("#pwd1").focus(function(){
            $("#pwd5").remove();
            $("#inputpwd1").remove();
            $("#inputpwd11").remove();
            $("#pwd11").append("<div id='inputpwd111'></div>");
            });
        $("#email").focus(function(){
           $("#email2").remove();
           $("#email4").remove();
           $("#inputemail").remove();
           $("#email1").append("<div id='email3'></div>");
        });
        $("#pwd1").focusout(function(){//确认密码的文本框被激活
            var p1=$("#pwd").val();
            var p2=$("#pwd1").val();
            if(p1==p2){
                 $("#inputpwd111").remove();
                 $("#pwd11").append("<div id='pwd5' style='width:300px'><i class='check circle icon'></i></div>");
            }else{
                $("#inputpwd111").remove();
                $("#pwd11").append("<div id='inputpwd1'><i class='remove'></i></div>");
               
            }

        });
        
		$("#user").focusout(function(){//当输入名字的文本框失去焦点的时候
             user=$("#user").val();//获取文本框的内容
             rsUser = ((user != null) && (user != ""));//判断内容是否为空
             if(rsName==false){//考虑姓名为空的时候
               
                $("#user2").remove();
             	$("#user1").append("<div   id='inputuser' style='width:300px'><i class='remove icon'></div>");
                
             }else{
                 var regName = new RegExp("^[\\u4e00-\\u9fa5]{2,8}$|^[a-zA-Z0-9][a-zA-Z0-9]{5,9}$");
                 rsUser = regName.test(user);
				 if (rsUser == false){//不符合规范的时候
                     $("#user2").remove();
                     $("#user1").append("<div  id='inputuser' style='width:300px'><i class='remove icon'></div>");
                     
				 }else{
                    $("#user2").remove();
				 	$("#user1").append("<div id='user3' style='width:300px'><i class='check circle icon'></i></div>");
                   
				 }

             }
        });
        $("#name").focusout(function(){
            name=$("#name").val();//获取文本框的内容
            rsName = ((name != null) && (name != ""));
            if(rsName==false){//考虑姓名为空的时候
               
                $("#inputname").remove();
                $("#name1").append("<div  id='inputname1' style='width:300px'><i class='remove icon'></div>");
                
             }else{
                 var regName = new RegExp("^[\\u4e00-\\u9fa5]{2,8}$|^[a-zA-Z0-9][a-zA-Z0-9]{5,9}$");
                 rsName = regName.test(name);
                 if (rsName == false){//不符合规范的时候
                     $("#inputname").remove();
                     $("#name1").append("<div  id='inputname1' style='width:300px'><i class='remove icon'></div>");
                     
                 }else{
                    $("#inputname").remove();
                    $("#name1").append("<div id='name2' style='width:300px'><i class='check circle icon'></i></div>");
                   
                 }

             }


        });

        $("#pwd").focusout(function(){
            pwd=$("#pwd").val();
            rsPwd = ((pwd != null) && (pwd != ""));
            if(rsPwd==false){
                $("#pwd3").remove();
                $("#pwd2").append("<div  id='inputpwd' style='width:300px'><i class='remove icon'></div>");
                
            }else{
                var regName = new RegExp("^[a-zA-Z0-9][a-zA-Z0-9.,!?]{5,15}$");
                rsPwd = regName.test(pwd);
                if(rsPwd==false){//不符合规范的时候
                     $("#pwd3").remove();
                      $("#pwd2").append("<div  id='inputpwd' style='width:300px'><i class='remove icon'></div>");
                }else{
                    $("#pwd3").remove();
                    $("#pwd2").append("<div id='pwd4' style='width:300px'><i class='check circle icon'></i></div>");
                    
                     $("#pwd1").removeAttr("disabled");
                }

            }

        });
        $("#email").focusout(function(){
             email=$("#email").val();//获取文本框内容
             rsEmail = ((email != null) && (email != ""));
              if(rsEmail==false){
                $("#email3").remove();
                $("#email1").append("<div  id='inputemail'><i class='remove icon'></i></div>");
              }else{
                 var regEmail=new RegExp("^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$");
                 rsEmail=regEmail.test(email);
                 if(rsEmail==false){
                     $("#email3").remove();
                     $("#email1").append("<div class='ui pointing label' id='inputemail'><i class='remove icon'></div>");
                 }else if(rsEmail==true){
                     $("#email3").remove();
                     $("#email1").append("<div id='email4' style='width:300px'><i class='check circle icon'></i></div>");
                 }
              }
            

        });
       
           
            $("#rbutton1").click(function(){
               if(rsEmail&&rsName&&rsUser&&rsPwd){//如果通过之后的
                $.ajax({
                    method:"post",
                    url:"register2.php",
                    data:{
                         "email":email
                     },
                    success:function(response){
                    alert("邮件发送成功");
                    $("#right").attr("style","padding-top:50px;");
                    $("#rewrite1").attr("style","display:none");
                    $("#right").append("<div id='yan'>我们已经给"+email+"发送了一条验证码</div>");
                    $("#right").append("<div class='ui center aligned basic segment'><div class='ui left icon action input'><input type='text' placeholder='请输入验证码' id='yan1'></div><div  id='smile' class='ui teal labeled icon button' >现在注册<i class='add icon'></i></div></div>");
                    $("#smile").click(function(){
                     yan=$("#yan1").val();
                        $.ajax({
                            method:"post",
                            url:"register.php",
                            data:{
                                "yan":yan
                            },
                            success:function(response){
                                $.ajax({
                                    method:"post",
                                    url:"register.php",
                                    data:{
                                        "user":user,
                                         "pwd":pwd,
                                         "name":name,
                                         "email":email,
                                         "yan":yan


                                    },
                                    success:function(response){
                                        if(response==1){
                                            alert("恭喜您注册成功");
                                            window.location.href='login.html';


                                        }else if(response==0){
                                            alert("用户名或邮箱已被占用");
                                            window.location.href='register1.html';
                                        }

                                    }

                                });


                            }

                        });
                         

                      });
                        

                    }


                });
                
            }
            });//这个是第一个下一步的按钮
           


     
		
	





});