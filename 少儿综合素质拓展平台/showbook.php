<?php 
  require_once "StudentService.php";
  function showbook($user){
  	
  	$aaa=SelectBook($user);//这个可以查询出这个用户的年级和教材信息
  	return $aaa;
  }
?>