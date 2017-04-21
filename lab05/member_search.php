<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Web Development :: Assignment 1" />
		<meta name="keywords" content="web, development, assignment, 1" />
		
		<title>VIP Members</title>
	</head>
	<body>
		<form action = "member_search.php" method = "post">
			<label>Last Name <input type="text" name="lname"></label>
			<br>
			<input type="submit" value="Submit">
			<input type="reset" value="Reset">
			<br>
		</form>
		
		<?php
			if(isset($_POST['lname'])){
				require_once ("../../conf/settings.php"); 
				$conn = @mysqli_connect($host,$user,$pswd,$dbnm) or die ('Database connection failure');
  
				$lname = $_POST['lname'];
				$query = "select member_id, fname, lname, email from vipmembers where lname = '$lname'";
				$result = mysqli_query($conn, $query);
	
				if(!$result) {
					echo "<p>Something is wrong with ",	$query, "</p>";
				} else {
					echo "<br><table border=\"1\">";
					echo "<tr>\n"
						."<th scope=\"col\">Member ID</th>\n"
						."<th scope=\"col\">First Name</th>\n"
						."<th scope=\"col\">Last Name</th>\n"
						."<th scope=\"col\">Email</th>\n"
						."</tr>\n";
					while ($row = mysqli_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>",$row["member_id"],"</td>";
						echo "<td>",$row["fname"],"</td>";
						echo "<td>",$row["lname"],"</td>";
						echo "<td>",$row["email"],"</td>";
						echo "</tr>";
					}
					echo "</table>";
					echo "<br><a href=\"vip_member.php\"><abbr title=\"Return home\">Return home</abbr></a>";
					mysqli_free_result($result);
				}
				mysqli_close($conn);
			}
		?>
	</body>
</html>