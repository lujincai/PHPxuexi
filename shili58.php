<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
     print(abs(-13));//打印绝对值
?>
<?
	//从-1到1打印acos函数的值
	print("<TABBLE BORDER=\"1\">\n");
	for($index=-1;$index<=1;$index+=0.25)
	{
		print("<TR>\n");
		print("<TD>$index</TD>\n");
		print("<TD>" . acos($index) . "</TD>\n");
		print("</TR>\n");
	}
	print("</TABLE>\n");
?>
<?
	//  从 -1 到 1打印asin函数的值
	print("<TABLE BORDER=\"1\">\n");
	print("<TR><TH>x</TH><TH>asin(x)</TH></TR>\n");
	for($index = -1; $index <= 1; $index += 0.25)
	{
		print("<TR>\n");
		print("<TD>$index</TD>\n");
		print("<TD>" . asin($index) . "</TD>\n");
		print("</TR>\n");
	}
	print("</TABLE>\n");
?>
</body>
</html>