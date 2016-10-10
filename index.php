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
	<link href="css/carousel.css">  
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
<!-- Enter slideshow here -->

	<div class="content">
		<h2 class="content-subhead">Stuff</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In malesuada, eros ut auctor varius, velit orci egestas lorem, ut sagittis orci turpis ac leo. Vestibulum nec ipsum tristique, lobortis quam eget, porttitor dui. Nam tempor tempor nunc, vitae luctus lectus consectetur quis. Cras ultricies sapien vitae mauris finibus, quis sagittis est scelerisque. Praesent vel magna finibus, aliquam odio ut, imperdiet augue. Morbi ullamcorper pretium lacinia. Ut vehicula massa ac tristique volutpat. Suspendisse nec metus vulputate, facilisis dolor vel, vehicula est. Nullam semper ex in leo posuere, vel blandit nibh congue. Integer urna nisi, feugiat eu orci non, tincidunt finibus quam. Aenean in commodo dui.</p>

		<h2 class="content-subhead">More Stuff</h2>
			<p>Vestibulum nec varius dui. Aliquam faucibus et sapien sed tincidunt. Mauris lacinia accumsan turpis, et scelerisque velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent posuere libero cursus neque rhoncus, sed faucibus erat vehicula. Praesent eget volutpat nisi. Donec pretium ligula purus, non sodales nunc dictum nec. Cras tempus orci a nulla ullamcorper, quis interdum massa faucibus. Praesent accumsan venenatis erat, vitae dignissim purus rutrum a. Nunc pulvinar, orci et rhoncus consequat, urna neque aliquet mauris, vitae tincidunt tellus eros id odio. Aliquam mollis fringilla tortor sed imperdiet. Vestibulum imperdiet dolor in mauris hendrerit, non feugiat sapien condimentum.

Sed quis feugiat dolor. Aenean eu commodo nibh, id congue elit. Vestibulum vel urna metus. Duis pellentesque lorem quis dolor maximus vestibulum. Curabitur sed lectus ornare, ultricies nunc ac, convallis tortor. Sed volutpat maximus volutpat. In est eros, ultricies nec feugiat at, porttitor non libero. Nam arcu tellus, placerat eget posuere quis, finibus ac erat. Aliquam massa nunc, pharetra eu metus ut, congue sollicitudin dolor.</p>

<!-- Start of Include: Footer -->
		<footer>
			<p> We also took everything from Wikipedia, and like Prof Kostin, will return it to where it belongs. </p>
			<p> And to stay honest, we also used DC Wiki to provide Green Lantern's Story section. </p>
		</footer>

<?php
include "includes/carousel.inc"
?>
		<script>
			$('.carousel').carousel()	</script>

		<script src="scripts/ui.js"></script>
		<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript"  src="scripts/bootstrap-carousel.js"></script>





	</div>
	</div>
</body>



</html>
