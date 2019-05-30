<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php 
	print(date("h:i A l"));
	print("<BR>\n");
	print(date("F dS,Y"));
?>
<?
   $current_date=getdate(time());
   print("<hr>");
   printf("%d:%d:%d",
             $current_date["hours"],
			 $current_date["minutes"],
		$current_date["seconds"]);
?>		
</body>
</html>