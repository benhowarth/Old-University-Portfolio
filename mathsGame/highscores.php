<html>
<head>
	<title>PHP MySQL Test Highscores</title>
</head>
<body>
	<div>
		<?php
		$host="localhost";
		$user="901992";
		$password="freeweb7";
		$con=mysql_connect($host,$user,$password);
		if(!$con) {
			echo '<p>MySQL Server is not connectedL</p>';
		} else {
			echo '<p>Connected to MySQL</p>';
		}
		echo "<h1>Highscores</h1>";
		mysql_select_db('901992');
		$sql='SELECT * FROM scores ORDER BY score DESC LIMIT 10';
		$retval=mysql_query($sql,$con);
		if(!$retval){
			die("Could not get data: ".mysql_error());
		}
		echo "<table>";
		while($row=mysql_fetch_array($retval,MYSQL_ASSOC))
		{
			echo "<tr>";
			echo "<td>Name:{$row['name']}</td>";
			echo "<td>Score:{$row['score']}</td>";
			echo "<td>Level:{$row['level']}</td>";
			echo "<td>Date:{$row['timestamp']}</td>";
			echo "</tr>";
		}
		echo "</table>";
		
		
		
		mysql_close($con);
		?>
	</div>
	<br>
	<a href = "mathsGame2.php"> Click here to go back </a>
	
</body>
</html>