<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
	if(checkdate(2,18,1970))//检查日期函数
	{
		print("2,18,1970  :"."这是一个正确的日期格式");
	}
	else
	{
		print("这不是一个正确的日期格式");
	}
	if(checkdate(52,18,1970))//检查日期函数
	{
		print("这是一个正确的日期格式");
	}
	else
	{
		print("52,18,1970  :"."这不是一个正确的日期格式");
	}
?>
</body>
</html>