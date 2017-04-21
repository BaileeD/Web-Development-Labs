<!DOCTYPE html>
<html>
<head>
<title>PHP Math Functions</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	
	$year=$_GET["year"];
	
	if (is_numeric($year)){
		if(($year%4==0)&&($year%100!=0)){
			echo "The year ", $year, " is a leap year!";
		}else{
			echo "The year ", $year, " is a standard year!";
		}
	}else{
		echo "That is not a year!";
	}
	
?>
</body>
</html>	