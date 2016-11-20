<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/teacher.css" type="text/css"/>
	<style>
	table{
    width:600px;
    margin-left: 200px;
    border:1px solid gray;
    text-align: center;
}
td{
    border:1px solid gray;
    text-align: center;
}
	</style>

</head>
<body>
	<div class="logo">
        <span class="logo_1">
        <img src="images/homepage3.png"/><span>少儿综合素质拓展平台</span>
        </span>
        <span class="logo_2">
        
        </span>
  </div>
  <div class="teacherfunction">
	<?php
require_once 'teacherService.php';
$book=$_GET['book'];
$subject=$_GET['subject'];
$unit=$_GET['unit'];
$grade=$_GET['grade'];
$res=searchAll1($book,$grade,$unit,$subject);?>
<table>
	<tr><td>题号</td><td>问题</td><td>选项A</td><td>选项B</td><td>选项C</td><td>选项D</td><td>操作</td></tr>
<?php
while($row=mysql_fetch_assoc($res)){?>
   <tr><td><?php echo $row['id']; ?></td><td><?php echo $row['problem']; ?></td><td><?php echo $row['option1']; ?></td><td><?php echo $row['option2']; ?></td><td><?php echo $row['option3']; ?></td><td><?php echo $row['option4']; ?></td><td><a href='ud.php?id=<?php  echo $row['id']; ?>&book=<?php  echo $book;?>&subject=<?php  echo $subject; ?>&unit=<?php echo $unit;?>&num=1' >更新</a><a href='ud.php?id=<?php  echo $row['id']; ?>&book=<?php  echo $book;?>&subject=<?php  echo $subject; ?>&unit=<?php echo $unit;?>'>删除</a></td></tr>

	
<?php }


?>
</table>
</div>	
</body>
</html>

