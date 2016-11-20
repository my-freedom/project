<?php
   require_once 'StudentService.php';
   $id=$_GET['id'];//获取要找到的相册的id
   $res=selectAllphoto($id);
   $upload="./file/";
   while($row=mysql_fetch_assoc($res)){
        $file=$row['username'];//找到在数据库里面的文件名
        $filename=$upload.$file;
        echo "<img src='$filename' alter='xiangce' >";
        echo "<br/>";
        echo $file;
   }

?>