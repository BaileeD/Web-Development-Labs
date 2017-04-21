<!DOCTYPE html>
<html>
<head>
<title>PHP Math Functions</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<h1>Use of PHP built-in math functions</h1>
<?php
	include('mathfunctions.php');
	$num=$_GET["num"];
	if($num > 0){
		echo factorial($num);
	}else {
		echo "Wrong input";
	}
	
?>
</body>
</html>	