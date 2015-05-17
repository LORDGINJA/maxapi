<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet"  href="css/bootstrap.css">
		<link type="text/css" rel="stylesheet"  href="css/bootstrap.css.map">
		<link type="text/css" rel="stylesheet"  href="css/bootstrap-theme.css">
		<link type="text/css" rel="stylesheet"  href="css/bootstrap-theme.css.map">
		<link type="text/css" rel="stylesheet"  href="css/main.css">
		<meta charset="utf-8">
		<title>InstApi</title>
	</head>
	<body>
		<header>
			@LAMBADOODLE
		</header>
		<div id="carousel-example-generic" class="carousel slide carsel" data-ride="carousel" >
			<ol class="carousel-indicators circs">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				<li data-target="#carousel-example-generic" data-slide-to="5"></li>
				<li data-target="#carousel-example-generic" data-slide-to="6"></li>
				<li data-target="#carousel-example-generic" data-slide-to="7"></li>
				<li data-target="#carousel-example-generic" data-slide-to="8"></li>
				<li data-target="#carousel-example-generic" data-slide-to="9"></li>
				<li data-target="#carousel-example-generic" data-slide-to="10"></li>
				<li data-target="#carousel-example-generic" data-slide-to="11"></li>
				<li data-target="#carousel-example-generic" data-slide-to="12"></li>
				<li data-target="#carousel-example-generic" data-slide-to="13"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active" >
			    	<p>
			    		<h1>MY</h1>
			    		<h1>PHOTOS</h1>
			    	</p>
			    </div>
				
				<?php

					//parse through the info
					foreach ($results['data'] as $items) {
						
						//gives url for each picture in results
						$image_url = $items['images']['low_resolution']['url'];
						echo '<div class="item">';
						echo '<img class="img" src="' . $image_url . '">';
						echo '</div>';
						//saves $img_url
						savePictures($image_url);
						
					}
				?>
			</div>
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</body>
	<script src="js/main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>


	<footer class="main-navigation">
			<nav class="horizontal-nav primary-wrapper" role='navigation'>
				<a href="index.php"><img height="40px" width="70px" src="/maxapi/images/ins.png"> </a>
				<div class="nav">
					<a href="index.php">Log-Out</a>
				</div>
				<div class="footer">
					Created by Maxwell Karp
				</div>
			</nav>
		</footer>	
</html>

