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
	<title></title>
</head>
<body>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	</ol>
	<div class="carousel-inner" >
		<div class="item active" class="carsel">
			<?php
				require_once(__DIR__ ."/pics.php");
			?>
		</div>
		<div class="item active" class="carsel">
			<?php
				require_once(__DIR__ ."/pics.php");
			?>
		</div>
		<div class="item active" class="carsel">
			<?php
				require_once(__DIR__ ."/pics.php");
			?>
		</div>
		<div class="item active" class="carsel">
			<?php
				require_once(__DIR__ ."/pics.php");
			?>
		</div>
		<div class="item active" class="carsel">
			<?php
				require_once(__DIR__ ."/pics.php");
			?>
		</div>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
</div>
</body>
</html>