<?php
/**
 * Created by PhpStorm.
 * User: lijiashuai
 * Date: 2015/8/10
 * Time: 10:30
 */
   require_once 'SqlHelper.php';
   function GetRegisterConnneectd($user,$pwd,$name,$email){
        $sqlhelper=new SqlHelper();
        mysql_query("set names utf8");
        $sql="select user from b where user='".$user."'";
        $sql2="select email from b where email='".$email."'";
        $sql1="select user from teacher  where user='".$user."'";
        $result= $sqlhelper->execute_dql($sql);
        $result2=$sqlhelper->execute_dql($sql2);//查询该邮箱是否已经存在
        $result1=$sqlhelper->execute_dql($sql1);
        if((mysql_fetch_row($result)==0)&&(mysql_fetch_row($result2)==0)&&mysql_fetch_assoc($result1)==0){//不存在该用户
        $sql1="INSERT INTO b(user,pwd,name,email) VALUES ('".$user."','".$pwd."','".$name."','".$email."')";
          $num= $sqlhelper->execute_dml($sql1);
           if($num==1){
               $a=1;
               echo $a;
           }else{
                $a=0;
               echo $a;
           }

       }else if(mysql_fetch_row($result)==0){
            $a=0;
               echo $a;
       }else if(mysql_fetch_row($result2)==0){
             $a=0;
               echo $a;
       }



   }
?>