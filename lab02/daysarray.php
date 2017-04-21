<!DOCTYPE html>
<html>
<head>
<title>PHP Functions</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<h1>Use of PHP built-in functions</h1>
<?php
	$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	echo "<p>The days of the week in English are: </p>". implode(", ", $days);
	/*foreach ($days as $item) {
		echo $item,", ";
	}*/
	
?>	
<?php
	$days = array("Dimanche", "Lundi", "Mardi", "Mercedi", "Jeudi", "Vendredi", "Samedi");
	echo "<p>The days of the week in French are: </p>". implode(", ", $days);
	/*foreach ($days as $item) {
		echo $item,", ";
	}*/
?>
</body>
</html>	