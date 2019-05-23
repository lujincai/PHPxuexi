<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php   
  $text="My dog's name is Angus.";
  //print Angus
  print(substr($text,17,5)."<hr>");//取出子串
 ?>
 <?
    //切开字串
	//create a demo string
	$line="leon\tatkinson\tleon@clearink.com";
	//    loop while there are still tokens
	for($token = strtok($line, "\t");
		$token != "";
		$token = strtok("\t"))
	{
		print("token: $token<BR>\n");
	}
?>
<?
	//传回字串中某字串开始处至结束的字串
	$text = "Although this is string, it's not very long.";
	print("<hr>".strstr($text, ",")); 
?>
</body>
</html>