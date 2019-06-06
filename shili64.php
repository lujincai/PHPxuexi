<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
	$image_file = "64.jpg";
	$image_size = getimagesize($image_file);
	print("图片的宽度：". $image_size[0]."<br>");
	print("图片的高度：". $image_size[1]."<br>");
	print("文件的格式为：". $image_size[2]."<br>");
?>
</body>
</html>