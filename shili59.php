<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php 
     print("pi=".pi());
	 print("<br>");
	 print("sin(0.5 * pi())=".sin(0.5 * pi()));
	print("<br>");
	print("cos(2 * pi())=".cos(2 * pi()));
	print("<br>");
	
	//打印从1到100中间的10个随机的数
	for($index = 0; $index < 10; $index++)
	{
		print(rand(1,100) . "<BR>\n");
	}
?>
</body>
</html>