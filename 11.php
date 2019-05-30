<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全局变量</title>
</head>

<?php
$x=75;
$y=25;

function addition()
{
	 $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}

addition() ;
echo $z; 
?>


<body>
</body>
</html>