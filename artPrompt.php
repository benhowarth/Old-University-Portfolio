<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ben Howarth | Art Prompt Tool</title>
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
			<h1 class="lob">Art Prompt</h1>
		</div>
	</div>
	<div class="block row fullWidth">
		<div class="columns medium-6 small-12">
			<div class="embed-cont">
				<embed id="artPromptEmbed" src="artPrompt.html" width="450" height="900"></embed> 
			</div>
		</div>
		<div class="columns medium-6 small-12">
			<p>
			Aside from coding, I enjoy making art and animation in my spare time. However, sometimes
			I need inspiration to get me out of art block, this tool generates a random colour palette,
			outputs HEX and RGB values and gives a noun, adjective and verb from an online service called
			<a href="https://wordnik.com/">Wordnik</a> using an AJAX call.
			<br>
			</br>
			I have found this tool to be useful and I may, at some point, polish it up and release it
			to the public as a web service with customisable options.
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
