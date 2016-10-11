<!-- Start of Include: Top Header -->
<!doctype html>

<html lang = "en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Project 1- Hero Homepage </title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="css/side-menu.css">
	<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {
		width:40%;
		margin: auto;
	}
	</style>

</head>

<body id="layout">


<!-- End of Include: Top Header -->

<?php
include "includes/nav.inc";
?>
	<div class="main">

		<header class="header">
		<h1>SuperHero Central</h1>
	</header>

<?php
include "includes/carousel.inc"
?>

	
<!-- Enter slideshow here -->

	<div class="content">
		<h2 class="content-subhead">Suerheroes</h2>
			<p>In modern popular fiction, a superhero (sometimes rendered super-hero or super hero) is a type of costumed heroic character who possesses supernatural or superhuman powers and who is dedicated to fighting crime, protecting the public, and usually battling supervillains. A female superhero is sometimes called a superheroine (also rendered super-heroine or super heroine). Fiction centered on such characters, especially in American comic books since the 1930s, is known as superhero fiction.</p>

		<h2 class="content-subhead">You Don't Need Powers to be A Hero</h2>
			<p>By most definitions, characters do not require actual supernatural or superhuman powers or phenomena to be deemed superheroes. While the Dictionary.com definition of "superhero" is "a figure, especially in a comic strip or cartoon, endowed with superhuman powers and usually portrayed as fighting evil or crime", the longstanding Merriam-Webster dictionary gives the definition as "a fictional hero having extraordinary or superhuman powers; also: an exceptionally skillful or successful person". Terms such as masked crime fighters, costumed adventurers or masked vigilantes are sometimes used to refer to characters such as the Spirit, who may not be explicitly referred to as superheroes but nevertheless share similar traits.</p>

<!-- Start of Include: Footer -->
		<footer>
			<p> We also took everything from Wikipedia, and like Prof Kostin, will return it to where it belongs. </p>
			<p> And to stay honest, we also used DC Wiki to provide Green Lantern's Story section. </p>
		</footer>

		<script src="scripts/ui.js"></script>
<!-- End of Include: Footer -->


	</div>
	</div>

</body>



</html>
