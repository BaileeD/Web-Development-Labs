<html>
	<head>
		<title>Managing Session</title>
	</head>
	<body>
		<h1>Guessing Game</h1>
		<?php
			session_start(); 							// start the session
			$randNum = $_SESSION["rand"];				// copy the value to a variable
			echo "<p>Random number is: $randNum</p>";	// increment the value
			$_SESSION["rand"] = $randNum;				// update the session variable
		?>

		<p>
			<a href="startover.php">Start Over</a>
		</p>
	</body>
</html>