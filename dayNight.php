<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ben Howarth | Day/Night Cycle</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/caseStudies.css">
  <script src="lib/vendor/jquery.js"></script>
  <script src="lib/vendor/modernizr.js"></script>
  <script src="lib/vendor/fastclick.js"></script>
</head>
<body>
  
  <?php include("header.php") ?>
  
  <div class="block row fullWidth">
		<div class="columns small-12 fullWidth">
			<h1 class="lob">Day/Night Cycle</h1>
		</div>
	</div>
	<div class="block row fullWidth">
		<div class="columns medium-6 small-12">
			<strong>Click to cycle between a quick day/night cycle or a real time cycle which matches your
			device's current time.</strong>
			<div class="embed-cont">
				<embed id="dayNightEmbed" src="dayNight.html" width="100%" height="50%"></embed> 
			</div>
		</div>
		<div class="columns medium-6 small-12">
			<p>
			This is a prototype idea for my interactive art and animation website. It is a simple
			day/night cycle test, each room in the building is meant to be a link to each different
			section of that website, however, I have disabled them here.
			<br>
			<br>
			I use a sine wave to move the sun/moon in a circular manner and smoothly transition from the
			night sky colour to day sky colour and vice versa.
			<br>
			The lights in the building also turn on and off randomly when it becomes night and day
			respectively.
			<br>
			In addition, every 'night', the sky generates some random constellations using the canvas.
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
