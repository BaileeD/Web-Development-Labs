<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Using file functions</title>
	</head>
	<body>
		<h1>Web Development - Lab05</h1>
		<?php
			require_once ("../../conf/settings.php"); 
			$conn = @mysqli_connect($host,$user,$pswd,$dbnm) or die ('Database connection failure');
  
			$query = "select member_id, fname, lname from vipmembers";
			$result = mysqli_query($conn, $query);
	
			if(!$result) {
				echo "<p>Something is wrong with ",	$query, "</p>";
			} else {
				echo "<table border=\"1\">";
				echo "<tr>\n"
					."<th scope=\"col\">Member ID</th>\n"
					."<th scope=\"col\">First Name</th>\n"
					."<th scope=\"col\">Last Name</th>\n"
					."</tr>\n";
				while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>",$row["member_id"],"</td>";
					echo "<td>",$row["fname"],"</td>";
					echo "<td>",$row["lname"],"</td>";
					echo "</tr>";
				}
				echo "</table>";
				
				echo "<br><a href=\"vip_member.php\"><abbr title=\"Return home\">Return home</abbr></a>";
				mysqli_free_result($result);
			}
			mysqli_close($conn);
		?>
	</body>
</html> 