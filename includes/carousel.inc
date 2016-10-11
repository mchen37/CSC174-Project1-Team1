<!--

Left as a comment so it can be used as a stand alone html file

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Carousel Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {
		width:70%;
		margin: auto;
	}
	</style>
</head>
<body>

End comment

-->

<div class="container">
	<br>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="img/spidey.png" alt="spider" width="600" height="480">
			</div>
			<div class="item">
				<img src="img/greenlantern.jpg" alt="spider" width="600" height="480">
			</div>
			<div class="item">
				<img src="img/thor.jpg" alt="spider" width="600" height="480">
			</div>
		</div>

		<!-- Left and right controls -->

		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<!--

</body>
</html>

-->
