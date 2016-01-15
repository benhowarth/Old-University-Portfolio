<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ben Howarth | SUVAT Calculator</title>
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
		
		$("#game").append("<"+thing+" id='suvatEmbed' src='suvat.html' width='450' height='550'></"+thing+"> ");
	});
  </script>
</head>
<body>
  
  <?php include("header.php") ?>
  
  <div class="block row fullWidth">
		<div class="columns small-12 fullWidth">
			<h1 class="lob">SUVAT Calculator</h1>
		</div>
	</div>
	<div class="block row fullWidth">
		<div class="columns medium-6 small-12">
			<strong>You can input any 3 variables, press run, and the other two are calculated.</strong>
			<div id="game" class="embed-cont">
			</div>
		</div>
		<div class="columns medium-6 small-12">
			<p>
			During my AS Level Mechanics, I had a little trouble with remembering the
			SUVAT equations. So I decided that working on a calculator to help other students
			would help me to memorise the equations themselves and how to rearrange them.
			<br>
			<br>
			I had to rearrange each equation multiple times for the calculator, which helped me
			understand the relationship between the variables much more fully.
			<br>
			<br>
			I am still working to improve the efficiency and fix any underlying bugs.
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
