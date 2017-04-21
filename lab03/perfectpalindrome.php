<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Using string functions</title>
</head>
<body>
	<h1>Web Development – Lab 3</h1>
	<?php
		if (isset ($_POST["palin"])){
			$pal = $_POST["palin"];
			$pal = strtolower($pal);
			$palrev = strrev($pal);
			if (strcmp($pal, $palrev) == 0){
				
				echo "<p>The text you entered '",$pal,"' is a perfect palindrome!</p>";
			} else {
				echo "<p>The text you entered '",$pal,"' is not a perfect palindrome!</p>";
			}
		} else {
			echo "<p>Please enter string from the input form.</p>";
		}
	?>
</body>
</html>	