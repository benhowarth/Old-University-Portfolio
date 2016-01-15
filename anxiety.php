<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ben Howarth | Anxiety App</title>
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
		
		
		$("#game").append("<"+thing+" id='anxietyAppEmbed' src='anxiety/anxietyApp.html' width='100%' height='100%' class='noselect'></"+thing+"> ");
	});
  </script>
</head>
<body>
  
  <?php include("header.php") ?>
  
  <div class="block row fullWidth">
		<div class="columns small-12 fullWidth">
			<h1 class="lob">Anxiety/Panic Attack Management App</h1>
		</div>
	</div>
	<div class="block row fullWidth">
		<div class="columns medium-6 small-12">
			<div id="game" class="embed-cont">
				
			</div>
			<button onclick="location.href='anxiety/anxietyApp.html'">Fullscreen</button>
		</div>
		<div class="columns medium-6 small-12">
			<p>
			This app is the result of my EPQ, or Extended Project Qualification, in which,
			I chose to create an artefact, seen here, and an accompanying mini-dissertation.
			It is for someone experiencing a panic attack to open and interact with to hopefully
			distract and calm them. It includes many randomly generated elements to keep it fresh
			and interesting to the end user.
			<br>
			<br>
			The idea is that the user controls a central 'planet', with surrounding 'asteroid belts',
			and a glow, which always accompanies the random colour (calm, subdued colours) of the planet and asteroids. The user
			can drag the planet around with a pleasant, delayed motion. The randomly  generated star and
			planets create a dual layered parallax background.
			<br>
			<br>
			In addition, I use a sine wave and scales to generate calm, ambient music, although this has been disabled on the current version on this page for maximum functionality purposes.
			<br>
			<br>
			This is all created with <a href="http://p5js.org/">p5.js</a>.
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
