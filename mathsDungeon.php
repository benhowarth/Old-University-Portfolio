<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ben Howarth | Maths Revision Game</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/caseStudies.css">
  <script src="lib/vendor/jquery.js"></script>
  <script src="lib/vendor/modernizr.js"></script>
  <script src="lib/vendor/fastclick.js"></script>
  <script>
	$(document).ready(function(){
		if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1){
			thing="iframe frameBorder='0'";
			thing2="iframe";
		}
		else{
			thing=thing2="embed";
		}
		
		
		$("#game").append("<"+thing+" id='mathsGameEmbed' src='mathsGame/mathsGame2.php' width='100%' height='600'></"+thing+"> ");
	});
  </script>
</head>
<body>
  
  <?php include("header.php") ?>
  
  <div class="block row fullWidth">
		<div class="columns small-12 fullWidth">
			<h1 class="lob">Maths Revision Game</h1>
		</div>
	</div>
	<div class="block row fullWidth">
		<div class="columns medium-6 small-12">
			<div id="game" class="embed-cont">
				
			</div>
			<button onclick="location.href='mathsGame/mathsGame2.php'">Fullscreen</button>
		</div>
		<div class="columns medium-6 small-12">
			<p>
				This is the main portion of my A-Level Computing project. It is an old-school,
				randomly generated, dungeon crawler rogue-like, where all of the scenery is made
				up of ASCII characters.
				<br>
				<br>
				It is intended to be used as a Maths revision tool,
				as the player ( <strong>@</strong> ) can explore the generated level, hit a question tile and answer a
				randomly-generated Maths question, which is based on what level the player is on.
				The player has 10 seconds to answer each question.
				The player moves to the next level when all questions on that level have been answered
				and at least one is correct, if all are wrong, the player loses and can submit their score
				to the highscores table.
				<br>
				<br>
				The player can move around the level, using either <strong>WASD</strong>, the
				<strong>arrow keys</strong> or the <strong>touch based arrows</strong>.
				<br>
				<br>
				I tried to write as simple a dungeon generation algorithm as possible, it is
				quick and fairly efficient, it consists of dropping a set amount of rooms and then
				connecting each room to the next with a corridor, ensuring the whole map is traversable.
				<br>
				I have written separate, relatively simple, algorithms to generate questions on
				addition, subtraction, multiplication, percentages and quadratic factorising.
				<br>
				<br>
				During this project, I had to learn more PHP, MySQL and server management than I ever
				had before. I found it really interesting and it gave me a further understanding of
				server side management and development, which can add incredible scope to client side
				code.
			</p>
		</div>
		
	</div>
  
  
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
