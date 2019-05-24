<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>					
<?php
     //颠倒字串
	 print("abcefg 颠倒");
	 print(strrev("abcefg")."<hr>");
	 
	 //小写字串
	 print("小写:".strtoupper("heiio world")."<hr>");
	 
	 //大写字串
	 print("大写:".strtouppeer("hello world")."<hr>");
	 
	 //去空格
	 $text="   whitespace   ";
	 print("\"".trim($text)."\""); 
	 ?>
</body>
</html>