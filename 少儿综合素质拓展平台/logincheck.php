<?php
   session_start();
  
   $check=$_POST['check'];
   if($check==$_SESSION['checkcode']){
   	  $a=true;
        
   	  echo $a;

   }else{
   	   $a=false;
   	   echo $a;
   	   
   }
?>