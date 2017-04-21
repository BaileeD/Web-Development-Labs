<!DOCTYPE html>
<html>
<head>
<title>PHP Functions</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<h1>Use of PHP built-in functions</h1>
<?php
$variable = 5;
$isEven = $variable%2==0;

(is_Int($variable) && $isEven)
? $result = "Variable contains an even integer!" : $result = "Variable doesnt contain an even integer.";
echo "<p>", $result, "</p>"


?>
</body>
</html>	