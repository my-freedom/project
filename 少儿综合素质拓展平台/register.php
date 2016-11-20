<?php
     require_once 'registerservice.php';
	 header("Content-Type: text/html;charset=utf-8");
    //告诉浏览器不要缓存数据
     header("Cache-Control: no-cache");
     session_start();
     

     $yan=$_POST['yan'];
     if($yan==$_SESSION['check']){
     $user=$_POST['user'];
     $pw=$_POST['pwd'];

	    $pwd=md5($pw);
	
	    $name=$_POST['name'];
	    $email=$_POST['email'];
        GetRegisterConnneectd($user,$pwd,$name,$email);
    }else{
    	$a="验证码不正确";
    	echo $a;
    }


?>