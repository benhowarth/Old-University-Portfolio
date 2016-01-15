<html>
<head>
	<title>PHP MySQL Test Highscores</title>
	<style>
		.CSSTableGenerator {
			margin:0px;padding:0px;
			width:100%;
			box-shadow: 10px 10px 5px #888888;
			border:1px solid #000000;
			
			-moz-border-radius-bottomleft:0px;
			-webkit-border-bottom-left-radius:0px;
			border-bottom-left-radius:0px;
			
			-moz-border-radius-bottomright:0px;
			-webkit-border-bottom-right-radius:0px;
			border-bottom-right-radius:0px;
			
			-moz-border-radius-topright:0px;
			-webkit-border-top-right-radius:0px;
			border-top-right-radius:0px;
			
			-moz-border-radius-topleft:0px;
			-webkit-border-top-left-radius:0px;
			border-top-left-radius:0px;
		}.CSSTableGenerator table{
			border-collapse: collapse;
				border-spacing: 0;
			width:100%;
			height:100%;
			margin:0px;padding:0px;
		}.CSSTableGenerator tr:last-child td:last-child {
			-moz-border-radius-bottomright:0px;
			-webkit-border-bottom-right-radius:0px;
			border-bottom-right-radius:0px;
		}
		.CSSTableGenerator table tr:first-child td:first-child {
			-moz-border-radius-topleft:0px;
			-webkit-border-top-left-radius:0px;
			border-top-left-radius:0px;
		}
		.CSSTableGenerator table tr:first-child td:last-child {
			-moz-border-radius-topright:0px;
			-webkit-border-top-right-radius:0px;
			border-top-right-radius:0px;
		}.CSSTableGenerator tr:last-child td:first-child{
			-moz-border-radius-bottomleft:0px;
			-webkit-border-bottom-left-radius:0px;
			border-bottom-left-radius:0px;
		}.CSSTableGenerator tr:hover td{
			
		}
		.CSSTableGenerator tr:nth-child(odd){ background-color:#e5e5e5; }
		.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
			vertical-align:middle;
			
			
			border:1px solid #000000;
			border-width:0px 1px 1px 0px;
			text-align:left;
			padding:7px;
			font-size:10px;
			font-family:Arial;
			font-weight:normal;
			color:#000000;
		}.CSSTableGenerator tr:last-child td{
			border-width:0px 1px 0px 0px;
		}.CSSTableGenerator tr td:last-child{
			border-width:0px 0px 1px 0px;
		}.CSSTableGenerator tr:last-child td:last-child{
			border-width:0px 0px 0px 0px;
		}
		.CSSTableGenerator tr:first-child td{
				background:-o-linear-gradient(bottom, #cccccc 5%, #b2b2b2 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cccccc), color-stop(1, #b2b2b2) );
			background:-moz-linear-gradient( center top, #cccccc 5%, #b2b2b2 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#cccccc", endColorstr="#b2b2b2");	background: -o-linear-gradient(top,#cccccc,b2b2b2);

			background-color:#cccccc;
			border:0px solid #000000;
			text-align:center;
			border-width:0px 0px 1px 1px;
			font-size:14px;
			font-family:Arial;
			font-weight:bold;
			color:#000000;
		}
		.CSSTableGenerator tr:first-child:hover td{
			background:-o-linear-gradient(bottom, #cccccc 5%, #b2b2b2 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cccccc), color-stop(1, #b2b2b2) );
			background:-moz-linear-gradient( center top, #cccccc 5%, #b2b2b2 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#cccccc", endColorstr="#b2b2b2");	background: -o-linear-gradient(top,#cccccc,b2b2b2);

			background-color:#cccccc;
		}
		.CSSTableGenerator tr:first-child td:first-child{
			border-width:0px 0px 1px 0px;
		}
		.CSSTableGenerator tr:first-child td:last-child{
			border-width:0px 0px 1px 1px;
		}
	</style>
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
		}
		echo "<h1>Highscores</h1>";
		mysql_select_db('901992');
		$sql='SELECT * FROM scores ORDER BY score DESC LIMIT 10';
		$retval=mysql_query($sql,$con);
		if(!$retval){
			die("Could not get data: ".mysql_error());
		}
		echo "<table class='CSSTableGenerator'>";
		echo "<tr>";
		echo "<td>Name</td>";
		echo "<td>Score</td>";
		echo "<td>Level</td>";
		echo "<td>Date</td>";
		echo "</tr>";
		while($row=mysql_fetch_array($retval,MYSQL_ASSOC))
		{
			echo "<tr>";
			echo "<td>{$row['name']}</td>";
			echo "<td>{$row['score']}</td>";
			echo "<td>{$row['level']}</td>";
			echo "<td>{$row['timestamp']}</td>";
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