<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo do_html_title($the_title); ?></title>
		<!-- stylesheets -->
		<link rel="stylesheet" href="style.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<div id="wrap">
			<a href = "index.php">
			<div id="header">
				<div class=header_left>
						<img src = "images/image1.jpg" alt="Michael Nguyen" height = auto width = 60 ;>					
				</div>
				
				<div class=header_right>
					<h1>Michael Nguyen</h1>
					<h5><i>Photography | Design | Development</i></h5>					
				</div>
			</div>
			</a>
					<div id="navigation">
						<span class="menu-trigger"><img src = "images/menuicon.png" alt="Michael Nguyen" height = auto width = 30;></span>					
						<?php echo do_main_nav(); ?>
					</div>
