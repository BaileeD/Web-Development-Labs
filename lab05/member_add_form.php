<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Web Development :: Assignment 1" />
		<meta name="keywords" content="web, development, assignment, 1" />
		
		<title>VIP Members</title>
	</head>
	<body>
		<form action = "member_add.php" method = "post">
			<label>First Name <input type="text" name="fname" ></label>
			<br>
			<label>Last Name <input type="text" name="lname"></label>
			<br>
			<label>Gender (m/f) <input type="text" name="gender"></label>
			<br>
			<label>Email <input type="text" name="email"></label>
			<br>
			<label>Phone <input type="text" name="phone"></label>
			<br>
			<input type="submit" value="Submit">
			<input type="reset" value="Reset">
		</form>
	</body>
</html>