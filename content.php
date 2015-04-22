<?php
	require_once($page["curPath"] . "assets/php/buildPage.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Anthony Turner</title>
		
		<link rel="icon" href="http://rettoph.com/x/hey%2520bae.png" type="image/png" />
		
		<link rel="stylesheet" type="text/css" href="src/css/style.css">
		<link rel="stylesheet" type="text/css" href="src/css/stagger.php?count=20">
		
		<script src="/src/assets/src/js/jquery.js"></script>
		<script src="src/js/skills.js"></script>
		<script src="src/js/workSamples.js"></script>
	</head>
	
	<body>
		<div id="backgroundImage"></div>
		
		<div id="wrapper">
			<div id="about">
				<?php require_once($page["curPath"] . "assets/about/index.php"); ?>
			</div>
			<div id="skills">
				<?php listSkills(); ?>
			</div>
				
			<div id="content">			
				<div id="work">
					<?php listWorkSamples(); ?>
				</div>
			</div>
		</div>
	</body>
</html>