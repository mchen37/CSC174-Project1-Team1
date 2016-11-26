$(function(){
	$('nav li a').each(function() {
		if ($(this).prop('href') == window.location.href) {
			if (window.location.href.substr(window.location.href.lastIndexOf("/")+1) == "spiderman.php") {
				$(this).parent('li').addClass('active_red');
			}
			if (window.location.href.substr(window.location.href.lastIndexOf("/")+1) == "greenlantern.php") {
				$(this).parent('li').addClass('active_green');
			}
			if (window.location.href.substr(window.location.href.lastIndexOf("/")+1) == "thor.php") {
				$(this).parent('li').addClass('active_gold');
			}
			if (window.location.href.substr(window.location.href.lastIndexOf("/")+1) == "colophon.php") {
				$(this).parent('li').addClass('active_blue');
			}
		}
	});
});