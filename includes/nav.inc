<?php
$pagename = basename($_SERVER['PHP_SELF']);
echo "<style>." , basename($pagename, ".php"). "{background-color: #AFAFAF;} </style>"
?>


	<nav>
		<ul>
			<li class = "index"> <a href = "index.php"> Home </a> </li>
			<li class = "Spiderman"> <a href = "SpiderMan.php"> Spider-Man </a> </li>
			<li class = "GreenLantern"> <a href = "GreenLantern.php"> Green Lantern </a> </li>
			<li class = "Thor"> <a href = "Thor.php"> Thor </a> </li>
			<li class = "Colophon"> <a href = "Colophon.php"> Colophon </a></li>
		</ul>
	</nav>
