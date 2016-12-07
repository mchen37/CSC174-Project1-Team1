<?php $parentTitle = "SuperHero Central"; $currentBody = "body_red"; include "inc/top.inc";?>

		<?php include "inc/nav.inc";?>

		<!--Carousel Wrapper-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
				
			<!-- indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="item_container overflow_hidden">
						<video class="item active" autoplay loop muted playsinline>
							<source src="videos/superhero.mp4" type="video/mp4">
							<source src="videos/superhero.webm" type="video/webm">
							Your browser does not support the video tag.
						</video>
					</div>
				</div>
				<div class="item">
					<div class="item_container">
						<img src="images/spidey.png" alt="spidey">
						<div class="carousel-caption">
							<h2 class="deepshadow">Spider-Man</h2>
							<a href="spiderman.php">Read more ></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="item_container">
						<img src="images/greenlantern.png" alt="greenlantern">
						<div class="carousel-caption">
							<h2 class="deepshadow">Green Lantern</h2>
							<a href="greenlantern.php">Read more ></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="item_container">
						<img src="images/thor.png" alt="thor">
						<div class="carousel-caption">
							<h2 class="deepshadow">Thor</h2>
							<a href="thor.php">Read more ></a>
						</div>
					</div>
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

		</div><!-- Slideshow -->

		<h2><div class="deepshadow">Superheroes</div></h2>

		<p>In modern popular fiction, a superhero (sometimes rendered super-hero or super hero) is a type of costumed heroic character who possesses supernatural or superhuman powers and who is dedicated to fighting crime, protecting the public, and usually battling supervillains. A female superhero is sometimes called a superheroine (also rendered super-heroine or super heroine). Fiction centered on such characters, especially in American comic books since the 1930s, is known as superhero fiction.</p>

		<h2><div class="deepshadow">You Don't Need Powers to be A Hero</div></h2>

		<p>By most definitions, characters do not require actual supernatural or superhuman powers or phenomena to be deemed superheroes. While the Dictionary.com definition of "superhero" is "a figure, especially in a comic strip or cartoon, endowed with superhuman powers and usually portrayed as fighting evil or crime", the longstanding Merriam-Webster dictionary gives the definition as "a fictional hero having extraordinary or superhuman powers; also: an exceptionally skillful or successful person". Terms such as masked crime fighters, costumed adventurers or masked vigilantes are sometimes used to refer to characters such as the Spirit, who may not be explicitly referred to as superheroes but nevertheless share similar traits.</p>

		<?php include "inc/footer.inc";?>

	</div><!--.container-->
	
	<?php include "inc/scripts.inc";?>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script>
		$(document).ready(function() {
		    $("#myCarousel").swiperight(function() {
		    	$("#myCarousel").carousel('prev');
		    });
		    $("#myCarousel").swipeleft(function() {
		    	$("#myCarousel").carousel('next');
		    });
			
		});
	</script>
	
	</body>

</html>