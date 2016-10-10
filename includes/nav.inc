<?php
$pagename = basename($_SERVER['PHP_SELF']);
echo "<style>." , basename($pagename, ".php"). "{background: black;
    background: -webkit-linear-gradient(gray, black);
    background: -o-linear-gradient(gray, black);
    background: -moz-linear-gradient(gray, black); 
    background: linear-gradient(gray, black);} </style>"
?>

	<a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

	<nav id="menu" class = "pure-menu">
		<a class="pure-menu-heading" class="index" href="index.php">Home</a>
		<ul class="pure-menu-list">
			<li class="pure-menu-item SpiderMan"> <a class="pure-menu-link" href = "SpiderMan.php"> Spider-Man </a> </li>
			<li class="pure-menu-item GreenLantern"> <a class="pure-menu-link" href = "GreenLantern.php"> Green Lantern </a> </li>
			<li class="pure-menu-item Thor"> <a class="pure-menu-link" href = "Thor.php"> Thor </a> </li>
			<li class="pure-menu-item Colophon"> <a class="pure-menu-link" href = "Colophon.php"> Colophon </a></li>
		</ul>
	</nav>
