<?php
/**
 * Created by PhpStorm.
 * User: lijiashuai
 * Date: 2015/8/10
 * Time: 9:26
 */
      require_once 'SqlHelper.php';
      function checkLogin($email){
        $sqlhelper=new Sqlhelper();
        mysql_query("set names utf8");
        $sql="select user from b where email='".$emial."'";
        file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$sql,FILE_APPEND);
         $res=$sqlhelper->execute_dql($sql);
         return $res;


      }
     function teacherLogin($a){
         $sqlhelper=new Sqlhelper();
         mysql_query("set names utf8");
         $sql="select * from teacher where user='".$a."'";
         $res=$sqlhelper->execute_dql($sql);
         return $res;

     }

     function GetConnected($a,$pwd1){
         if($a!=null&&$pwd1!=null) {
             $sqlhelper = new SqlHelper();
             mysql_query("set names utf8");
        $sql = "select pwd from b where user = '".$a."'";

        $res = $sqlhelper->execute_dql($sql);
         if (!empty($row = mysql_fetch_row($res))) {
             $password =$row[0];
         }
         if ($password == $pwd1) {
             $a=0;
             echo $a;
             $_SESSION['user'] = $a;

         } else {
            $a=2;
             echo $a;
         }
             }else{

             $a=3;
             echo $a;
         }




     }

     function GetConnected1($a,$pwd1){
       
       if($a!=null&&$pwd1!=null) {
             $sqlhelper = new SqlHelper();
             mysql_query("set names utf8");
        $sql = "select pwd,user from b where email = '".$a."'";
        file_put_contents("C:/wamp/www/Stu3.0/myajaxlog.txt",$sql."\r\n",true);
        $res = $sqlhelper->execute_dql($sql);
         if (!empty($row = mysql_fetch_row($res))) {
             $password =$row[0];
             $userpost=$row[1];
         }
         if ($password == $pwd1) {
             $a=0;
             echo $a;
             $_SESSION['user'] = $userpost;

         } else {
            $a=2;
             echo $a;
         }
             }else{

             $a=3;
             echo $a;
         }




     }


?>