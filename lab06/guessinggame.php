<?php
	session_start(); // start the session
	if (!isset ($_SESSION["guess"])) { // check if session variable exists
		$_SESSION["guess"] = 0; // create the session variable
	}
	if (!isset ($_SESSION["rand"])) { // check if session variable exists
		$_SESSION["rand"] = rand(1, 100); // create the session variable
	}
	$guess = $_SESSION["guess"]; // copy the value to a variable
	$randNum = $_SESSION["rand"]; // copy the value to a variable
?>
<html>
	<head>
		<title>Managing Session</title>
	</head>
	<body>
		<h1>Guessing Game</h1>
		<p>Enter a number between 1 and 100, then press the guess button.</p>
		<form action = "guessinggame.php" method = "post">
			<input type="text" name="num"></label>
			<input type="submit" value="Guess">
			<br>
		</form>
		<?php
			session_start();
			$guess = $_SESSION["guess"];
			$randNum = $_SESSION["rand"];
			if(isset($_POST['num'])){
				if (is_numeric($_POST['num'])){
					$num = $_POST['num'];
					if ($num == $randNum){
						echo "<p>Congratulations! You guessed the hidden number.</p>";
						echo "<p>Number of guesses: $guess</p>"; // displays the number of guesses
					} 
					if(!($num == $randNum)){
						if ($num < $randNum){
							echo "<p>Your guess is too low.</p>";
							$guess++;
							echo "<p>Number of guesses: $guess</p>"; // displays the number of guesses
							$_SESSION["guess"] = $guess;
							$_SESSION["rand"] = $randNum;
						} else if ($num > $randNum){
							echo "<p>Your guess is too high.</p>";
							$guess++;
							echo "<p>Number of guesses: $guess</p>"; // displays the number of guesses
							$_SESSION["guess"] = $guess;
							$_SESSION["rand"] = $randNum;
						} else {
							echo "<p>Invalid input</p>";
						}
					}
				}
			}
			
		?>
		<p>
			<a href="giveup.php">Give Up</a>
		</p>
		<p>
			<a href="startover.php">Start Over</a>
		</p>
	</body>
</html> 