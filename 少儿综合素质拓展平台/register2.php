<?php
  /*require_once 'class.phpmailer.php';
  $mail=new PHPMailer();//创建一个对象
  $mail->Charset="UTF-8";
  $address=$_POST['email'];
  $mail->IsSMTP();
  $mail->Host="smtp.sina.com";//利用qq来进行操作
  $mail->SMTPAuth=true;
  $mail->Username="ljsgx1314@sina.com";
  $mail->Password="950609abcd,";
  $mail->Port=25;
  $mail->From="ljsgx1314@sina.com";
  $mail->FromName="少儿综合素质拓展平台";
  $mail->addAddress($address,'admin');
  $mail->Subject="恭喜您中奖了";
  $mail->Body="尊敬的用户，恭喜您中大奖了，奖品是20万奖金，和一台苹果mac ,但是需要缴纳100元的税费，即可拿起电话往18842629217的支付宝转账100元即可";
  if(!$mail->send()){
  	echo "邮件发送失败";
  	echo "错误原因: " . $mail->ErrorInfo;
  }else{
  echo "邮件发送成功";
}*/
  header("Content-Type: text/html;charset=utf-8");
  //告诉浏览器不要缓存数据
  header("Cache-Control: no-cache");
  session_start();
  require_once 'class.phpmailer.php';
  $mail=new PHPMailer();//创建一个对象
  $mail->Charset="UTF-8";
  $address=$_POST['email'];
  $mail->IsSMTP();
  $mail->Host="smtp.sina.com";
  $mail->SMTPAuth=true;
  $mail->Username="ljsgx1314@sina.com";
  $mail->Password="950609abcd,";
  $mail->Port=25;
  $mail->From="ljsgx1314@sina.com";
  $mail->FromName="少儿综合素质拓展";
  $mail->addAddress($address,'admin');
  $mail->Subject="欢迎您来注册";
  $checkcode="";
  for($i=0;$i<4;$i++){
    $checkcode.=rand(0,9);
  }
  $_SESSION['check']=$checkcode;//查看是否发送成功
  $mail->Body="尊敬的用户，您的验证码是".$checkcode;
  if(!$mail->send()){
    $a="邮件发送失败";
    $b="错误原因: " . $mail->ErrorInfo;
    $a=$a.$b;
    echo $a;
    
  }else{
  

  
  
  $c="邮件发送成功";
  echo $c;

}
?>