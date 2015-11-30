<link href='https://fonts.googleapis.com/css?family=Playfair+Display|Josefin+Sans' rel='stylesheet' type='text/css'>
<nav class="top-bar" data-topbar role="navigation">
	<ul class="title-area">
		<li class="name">
			<h2><a href="index.php">Home</a></h2>
		</li>
		<li class="toggle-topbar menu-icon"><a class="lob" href="#"><span></span></a></li>
	</ul>
	<section class="top-bar-section">
		<ul class="left">
		</ul>
		<ul class="right">
			<li><a href="about.php">About Me</a></li>
			<li class="has-dropdown">
				<a href="caseStudies.php">Case Studies</a>
				<ul class="dropdown">
					<li><a href="anxiety.php">Panic Attack/Anxiety App</a></li>
					<li><a href="mathsDungeon.php">Maths Revision Game</a></li>
					<li><a href="maze.php">Maze Generator</a></li>
					<li><a href="suvat.php">SUVAT Calculator</a></li>
					<li><a href="artPrompt.php">Art Prompt</a></li>
					<li><a href="dayNight.php">Day/Night Cycle</a></li>
				</ul>
			</li>
		</ul>
	
	</section>
	<script>
		$(".name h2").css("font-family","Josefin Sans");
		$(".right li a").css("font-family","Josefin Sans");
	</script>
</nav>

<?php function writeMenu() {
    echo "<br> the menu goes here <br>";
}
 ?>
 
 