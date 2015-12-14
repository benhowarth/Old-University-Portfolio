<!DOCTYPE html>
<html>
<head>
	<!--link rel='stylesheet' href='style.css'/-->
	<link rel='stylesheet' href='jquery-ui.min.css'>
	<link rel='stylesheet' href='jquery-ui.structure.min.css'>
	<style>
		#dungeonHolder
		{
			font-size:1em;
			white-space: pre;
			font-family: courier;
			/*line-spacing:1em;
			letter-spacing:1em;*/
		}
		#dungeonHolderHolder
		{
			width:250px;
			height:300px;
			overflow:hidden;
			border-style:double;
			border-width:3px;
		}
		.moveBtn
		{
			width:50px;
			height:50px;
			background-color:#DDD;
			padding:0px;
			line-height:50px;
			text-align:center;
			font-family: courier;
			border-style:solid;
			border-width:1px;
		}
		#btnLeft,#btnMiddle,#btnRight,#score{
			display:inline-block;
			font-family: courier;
		}
		#btnUp,#btnDown{
			margin-left:62px;
			margin-top:9px;
			margin-bottom:9px;
			font-family: courier;
		}
		.noselect {
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
		body{
			overflow:hidden;
			font-family: courier;
		}
		
		.ui-widget{
			background:#BBB;
		}
		
		.ui-widget-header,.ui-state-default,ui-button{
			background:#DDD;
		}
	</style>
    <meta charset="utf-8" />
    <script src="jquery-2.1.1.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script src="jquery.ui.touch-punch.min.js"></script>
	<script src='shuffle.js'></script>
	<script src='question_quadraticV1.js'></script>
	<script src='question_addition_subtraction.js'></script>
	<script src='question_multiplication.js'></script>
	<script src='question_percentage.js'></script>
	<script src='main.js'></script>
</head>
<body class="noselect">
	
		<div>
		<?php
		$host="localhost";
		$user="901992";
		$password="freeweb7";
		$con=mysql_connect($host,$user,$password);
		if(!$con) {
			echo '<p>MySQL Server is not connected</p>';
		} else {
		}
		mysql_select_db('901992');
		
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$name=htmlentities($_POST['nameInput']);
			$score=htmlentities($_POST['scoreEnd']);
			$level=htmlentities($_POST['levelEnd']);
			$sql="INSERT INTO scores (name,score,level) VALUES ('$name','$score','$level')";
			$retval=mysql_query($sql,$con);
			if(!$retval){
				die("Could not get data: ".mysql_error());
			}
			header("Refresh:2; url=highscores.php");
		}
		
		mysql_close($con);
		?>
	</div>

	
	<div id="dungeonHolderHolder">
		<div id="dungeonHolder">The Dungeon Goes Here</div>
	</div>
	<div id="questionDialog">
		<div id="questionDialogText"></div>
		<div id="questionDialogTimer">Time left: null</div>
	</div>
	<div id="gameOverDialog">
		<form id="scoreForm" name="scoreForm" method="post">
			<div id="gameOverText"></div>
			<input id="levelEnd" name="levelEnd"></input>
			<input id="scoreEnd" name="scoreEnd"></input>
			<div id="gameOverText2">Name:</div><input name="nameInput" id="nameInput"></input>
		</form>
	</div>
	<br>
	<div id="score">Score:0</div>
	<div id="btns">
		<div id="btnUp" class="moveBtn">&uArr;</div>
		<div id="btnLeft" class="moveBtn">&lArr;</div>
		<div id="btnMiddle" class="moveBtn">&Phi;</div>
		<div id="btnRight" class="moveBtn">&rArr;</div>
		<div id="btnDown" class="moveBtn">&dArr;</div>
	</div>
</body>
</html>