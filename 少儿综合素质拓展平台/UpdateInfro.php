<?php 
    session_start();
    header("Content-Type: text/html; charset=utf-8");
    require_once 'StudentService.php';
    $user=$_SESSION['user'];
    $name=$_POST['name'];
    $sex=$_POST['sex'];
    $grade=$_POST['grade'];
    $book=$_POST['book'];
    $birthday=$_POST['birthday'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $num=UpdateInfro($user,$name,$sex,$grade,$book,$birthday,$phone,$email);
    if($num==1){
    	echo "<script>alert('信息修改成功');window.location.href='my.php';</script>";
    }else{
    	
    	echo "<script>alert('信息修改失败，请重试');window.location.href='my.php';</script>";
    }

    





?>