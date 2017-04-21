<!DOCTYPE html>
<html>
<head>
<title>PHP Math Functions</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	function factorial($n){
		$result = 1;
		$factor = $n;
		while($factor > 1){
			$result = $result*$factor;
			$factor--;
		}
		return $result;
	}
?>
</body>
</html>	