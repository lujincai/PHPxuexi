<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
	print("开始时间:". microtime() . "<BR>\n");

	for($index = 0; $index < 10; $index++)
	{
		print("tick ");
	}
	print("<br>"."停止: " . microtime() . "<BR>\n");
?>
<?
	$CurrentHour = date("h");

	print("从现在开始50小时以后为: ");
	print(date("h:i A l F dS, Y",
		mktime($CurrentHour+50)));
	print("<BR>\n");
?>
<?
	$CurrentTime = time();

	print($CurrentTime);
?>
</body>
</html>