<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Web Development :: Assignment 1" />
		<meta name="keywords" content="web, development, assignment, 1" />
		<title>VIP Members</title>
	</head>
	<body>
		<?php
			require_once('../../conf/settings.php');
			$conn = @mysqli_connect($host, $user, $pswd) or die ('Database connection failure');
			@mysqli_select_db($conn, $dbnm) or die ('Database not available');
				
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
				
			$query = "select member_id from vipmembers";
			$result = mysqli_query($conn, $query);
			if(empty($result)) {
				$query = "use $sql_db";
				$result = mysqli_query($conn, $query);
				$query = "CREATE TABLE vipmembers (
					member_id int AUTO_INCREMENT,
					fname varchar(40) DEFAULT NULL,
					lname varchar(40) DEFAULT NULL,
					gender varchar(1) DEFAULT NULL,
					email varchar(40) DEFAULT NULL,
					phone varchar(20) DEFAULT NULL,
					CONSTRAINT member_id__pk PRIMARY KEY (member_id)
                )";
				$result = mysqli_query($conn, $query);
			}

			$query = "insert into vipmembers(fname, lname, gender, email, phone) values('$fname','$lname', '$gender', '$email', '$phone')";
			$result = mysqli_query($conn, $query);
			if(!$result) {
				echo "<p>Something is wrong with ",	$query, "</p>";
			} else {
				echo "<p>Congrats, your details has been saved to the database!</p><br>";
				echo "<a href=\"vip_member.php\"><abbr title=\"Return home\">Return home</abbr></a>";
			}
			/*Free the results of the querys and close the database connection.*/
			mysqli_free_result($result);
			mysqli_close($conn);
		?>
	</body>
</html>