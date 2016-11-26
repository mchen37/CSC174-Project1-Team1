<?php $parentTitle = "SuperHero Central"; $currentBody = "body_red"; include "inc/top.inc";?>

		<?php include "inc/nav.inc";?>

		<!-- Slideshow plugin rewrite -->
		<div class="container">

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
						<img src="images/spidey.png" alt="spider" width="600" height="480">
					</div>
					<div class="item">
						<img src="images/greenlantern.jpg" alt="spider" width="600" height="480">
					</div>
					<div class="item">
						<img src="images/thor.jpg" alt="spider" width="600" height="480">
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
		<!-- End slideshow rewrite-->

		<h2>Superheroes</h2>

		<p>In modern popular fiction, a superhero (sometimes rendered super-hero or super hero) is a type of costumed heroic character who possesses supernatural or superhuman powers and who is dedicated to fighting crime, protecting the public, and usually battling supervillains. A female superhero is sometimes called a superheroine (also rendered super-heroine or super heroine). Fiction centered on such characters, especially in American comic books since the 1930s, is known as superhero fiction.</p>

		<h2>You Don't Need Powers to be A Hero</h2>

		<p>By most definitions, characters do not require actual supernatural or superhuman powers or phenomena to be deemed superheroes. While the Dictionary.com definition of "superhero" is "a figure, especially in a comic strip or cartoon, endowed with superhuman powers and usually portrayed as fighting evil or crime", the longstanding Merriam-Webster dictionary gives the definition as "a fictional hero having extraordinary or superhuman powers; also: an exceptionally skillful or successful person". Terms such as masked crime fighters, costumed adventurers or masked vigilantes are sometimes used to refer to characters such as the Spirit, who may not be explicitly referred to as superheroes but nevertheless share similar traits.</p>

		<?php include "inc/footer.inc";?>

	</div><!--.container-->
	
	<?php include "inc/scripts.inc";?>
	
	</body>

</html>