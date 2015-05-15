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
			My Photos
		</header>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
			<ol class="carousel-indicators circs">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner carsel" role="listbox">
				<div class="item active" class="carsel">
			      
			    </div>
				
					<?php
	
						//parse through the info
						foreach ($results['data'] as $items) {
							
							//gives url for each picture in results
							$image_url = $items['images']['low_resolution']['url'];
							echo '<div class="item" class="carsel">';
							echo '<img src="' . $image_url . '">';
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
				<div class="nav">
					<a href="index.php">Log-Out</a>
				</div>
				<div class="footer">
					Created by Maxwell
				</div>
			</nav>
		</footer>	
</html>

