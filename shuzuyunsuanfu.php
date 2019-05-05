<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body> 

<?php
$x=array("a"=>"red","b"=>"gree");
$y=array("c"=>"blue","d"=>"yello");
$z=$x+$y;//union of $x and $y
val_dump($z);
echo"<br>";
val_dump($x==$y);
echo"<br>";
val_dump($x===$y);
echo"<br>";
val_dump($x !==$y);
echo"<br>";
val_dump($x<>$y);
echo"<br>";
val_dump($x !==$y);
?>
</body>
</html>