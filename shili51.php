<?php
	//判断数组
	$colors=array("red","blue","green");
	if(is_array($colors))
	{
		print("colors if an arry"."<br>");
	}
	//双精度数判断
	$temperature=15.23;
	if(is_double($temperature))
	{
	    print("temperature is a double"."<br>");
		}
	//整数判断
    $pagecount=2234;
    if(is_integer($PageCount))
	 {
		 print("$pagecount is an integer"."<br>");
	 }
	 //对象判断
	 class widget
	 {
	  var $name;
	  var $length;
	 }
	 $thing=new widget;
	 if(is_object($thing))
	 {
			  print("greeting is an object"."<br>");
		  }
		  //字符判断
		  $greeting="hello";
		  if(is_string($greeting))
     	  {
              print("Greeting is a sting"."<br>");
		  } 
?>