<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
//构造一个数组变量
$users=array("bob"=>"Yobert","steve"=>"Btephen","jon"=>"Aonathon");

for(reset($users);
$index=key(users);next($users))
{
 print("$index;$users{$index}<BR>\n");
 }
 print("<hr>");
 //使数组排序
 asort($users);
 //打印排序后的数组
for(reset($users);
$index=key($users);next($users))
{  
  print("$index;$users[$index]<BR>\n");
  }
?>
</body>
</html>