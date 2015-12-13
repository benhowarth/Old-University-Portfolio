<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ben Howarth | Case Studies</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <script src="lib/vendor/jquery.js"></script>
  <script src="lib/vendor/modernizr.js"></script>
  <script src="lib/vendor/fastclick.js"></script>
  <script src="js/packery.pkgd.min.js"></script>
</head>
<body>
  
  <?php include("header.php") ?>
  
  
  
  <script src="js/foundation.min.js"></script>
  
  <script>
    $(document).foundation();
  </script>
  
	<div id="grid">
		<a class="item" href="anxiety.php">
			<img src="http://placehold.it/350x350&Text=Anxiety"/>
		</a>

		<a class="item" href="mathsDungeon.php">
			<img src="http://placehold.it/350x350&Text=Maths"/>
		</a>

		<a class="item" href="maze.php">
			<img src="http://placehold.it/350x350&Text=Maze"/>
		</a>
		
		<a class="item" href="suvat.php">
			<img src="http://placehold.it/350x350&Text=SUVAT"/>
		</a>
		
		<a class="item" href="artPrompt.php">
			<img src="http://placehold.it/350x350&Text=Art"/>
		</a>
		
		<a class="item" href="dayNight.php">
			<img src="http://placehold.it/350x350&Text=DayNight"/>
		</a>
	</div>
	<script>
	$(document).on("ready",function(){
		  var $container = $('#grid');
		// initialize
		$container.packery({
		  itemSelector: '.item',
		  gutter: 10,
			"columnWidth": 350,
			"rowHeight": 350
		});
	});
	//jQuery(window).trigger("resize");
	</script>
</body>
</html>
