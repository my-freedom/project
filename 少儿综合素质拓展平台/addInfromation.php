<?php 
    require_once 'StudentService.php';//引入为学生服务的文件
	//这里两句话很重要,第一讲话告诉浏览器返回的数据是文本格式
	header("Content-Type: text/html;charset=utf-8");
	//告诉浏览器不要缓存数据
	header("Cache-Control: no-cache");

    
    $user=$_POST['user'];
    //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$user."\r\n",FILE_APPEND);//由于ajax无法调试,所以最好使用这种方式进行调试
    $num=GetLoginNum($user);
    //file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$num."\r\n",FILE_APPEND);
    echo $num;//输出的是普通文本

?>