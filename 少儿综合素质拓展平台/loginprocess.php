<?php
    header("content-type:text/html;charset=utf-8");
    require_once  'loginservice.php';
	error_reporting(0);
	session_start();
    $pwd1=md5($_POST['pwd']);
    $a=$_POST['user'];
    $b=$_POST['pwd'];
    $id=0;
    $count=$_POST['count'];
    
    if($count==0){//判断其是否是采用用户名登录
        $res=teacherLogin($a);//先判断老师这里会不会有这个用户名
       while($row=mysql_fetch_assoc($res)){//如果不为空的话会执行循环体
        $id=1;
        if($row['user']==$a&&$row['pwd']==$pwd1){
            $a=1;
            echo $a;
             $_SESSION['user']=$a;
        }else{
            $a=2;
            echo $a;
        }
    }

       if($id==0){
        GetConnected($a,$pwd1);
         $_SESSION['user'] = $a;
    }


    }else if($count==1){//其采用的是邮箱登录
      if($id==0){
        //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$aa."\r\n",true);
        GetConnected1($a,$pwd1);
    }

    }
    

    

    

	

        
    

?>				
			
	