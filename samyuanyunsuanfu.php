<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
</body>
<?php
$test='菜鸟教程';
//普通写法
$userrname=isset($test)?$test:'noboay';
echo $userrname,PHP_EOL;

//PHP 5.3+版本写法
$userrname=$test?:'nobody';
echo $userrname,PHP_EOL;
?>
</body>
</html>