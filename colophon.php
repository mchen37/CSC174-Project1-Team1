<?php $parentTitle = "SuperHero Central"; $currentTitle = "Colophon"; $separator = " | "; $currentBody = "body_blue"; include "inc/top.inc";?>

		<?php include "inc/nav.inc";?>

		<h2>Colophon</h2>

		<article class="col-md-8">

			<h3>What we do</h3>

			<p>We are CSC 174 students who would like to create a reference website for all Super Hero lovers.</p>

			<h3>Who we are</h3>

			<h4>Team 1</h4>

			<ul>
				<li>Steven Lebowski - Architect</li>
				<li>Jorge Sanchez De Llano - Framework wrangler</li>
				<li>Davon Brown - Content master and interaction designer</li>
				<li>Nicholas Heitsch - CSS artist</li>
				<li>Connor Dent - JavaScript engineer</li>
			</ul>

			<h4>Team 7</h4>

			<ul>
				<li>Moses Chen - Architect</li>
				<li>Ming Hang Tam - Framework wrangler</li>
				<li>Yichen Lu - Content master and interaction designer</li>
				<li>Xingyi Li - CSS artist</li>
				<li>Guanhong Chen - Javascript engineer</li>
			</ul>

			<h3>Technologies used</h3>
				
			<ul>
				<li>Built on Bootstrap framework</li>
				<li>Based on SMACSS (Scalable and Modular Architecture for CSS), with <a href="https://necolas.github.io/normalize.css/">"normalize.css"</a></li>
				<li>Overridden Bootstrap CSS with custom CSS in "styles.css"</li>
				<li>Added a fixed navigation bar at the top, with a hamburger menu icon for mobile devices</li>
				<li>Embedded a JavaScript-powered slideshow, with detection of swiping gestures on mobile devices and Bootstrap Carousel plugin</li>
				<li>Embedded video through HTML5 video element in one of the slides of the slideshow</li>
				<li>Employed the use of PHP includes</li>
				<li>Worked with <a href="https://github.com/theSKML01/CSC174-Project1-Team1">a shared repository on Github</a></li>
				<li>Employed a solution for the current menu highlight problem</li>
				<li>Supported mobile website view using CSS media queries</li>
				<li>Embedded four Google fonts - "Cuprum", "Gentium Book Basic", "Alfa Slab One" and "Old Standard TT"</li>
			</ul>

		</article>

		<aside class="col-md-4">

			<h3>Source cited</h3>

			<p>We took everything from Wikipedia, and like Prof Kostin, will return it to where it belongs. To be honest, we also used DC Wiki to provide Green Lantern's Story section.</p>

			<ul>
				<li>Wikipedia</li>
				<li>dc.wikia.com</li>
			</ul>

		</aside>
			
		<?php include "inc/footer.inc";?>

	</div><!--.container-->
	
	<?php include "inc/scripts.inc";?>
	
	</body>

</html>