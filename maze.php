<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ben Howarth | Maze Generator</title>
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
		
		
		$("#game").append("<"+thing+" id='mazeEmbed' src='mazeGen.html' width='450' height='450'></"+thing+"> ");
	});
  </script>
</head>
<body>
  
  <?php include("header.php") ?>
  
	<div class="block row fullWidth">
		<div class="columns small-12 fullWidth">
			<h1 class="lob">Maze Generator</h1>
		</div>
	</div>
	<div class="block row fullWidth">
		<div class="columns medium-6 small-12">
			<h3 class="lob">Click the maze to refresh</h3>
			<div id="game" class="embed-cont">
			</div>
		</div>
		<div class="columns medium-6 small-12">
			<p>
			After stumbling upon <a href="http://www.jamisbuck.org/presentations/rubyconf2011/">a talk by Jamis Buck</a> from Ruby Conference 2011, I became interested in mazes
			and how they can be generated. I chose to try to create a maze generator based on the
			recursive backtracking algorithm, as it seemed just challenging enough, while being efficient
			and creating interesting and varied perfect mazes.
			<br>
			<br>
			Click the maze on this page to generate a new maze (there may be a longer loading time on mobile, which I am working to fix).
			<br>
			<br>
			Throughout staying up far too long testing and improving, I learn a lot about
			trees (as mazes can be effectively modelled as trees) and traversal algorithms.
			<br>
			<br>
			I'm still trying to optimise my code and it's slower refresh time on mobile.
			</p>
		</div>
		
	</div>
  
  
  
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
	$(document).ready(function(){
		if($(window).width()>864&&$(window).width()<1200){
			$("#mazeEmbed").width(600);
			$("#mazeEmbed").height(600);
		}
		else if($(window).width()>=1200){
			$("#mazeEmbed").width(800);
			$("#mazeEmbed").height(800);
		}
	});
  </script>
</body>
</html>
