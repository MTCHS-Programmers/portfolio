<link rel="stylesheet" type="text/css" href="<?php path(); ?>src/css/menu.css">

<ul>
	<li><a href="/">Home</a></li>
	<li><a href="/portfolio">Portfolio</a></li>
	<li><a href="/projects">Projects</a></li>
	<li><a href="/games">Games</a></li>
</ul>

<script>
	window.addEventListener("load", function() {
		defaultTop = $("#menu")[0].offsetTop;
		$(window).scroll(function() {
			if($(document).scrollTop() >= defaultTop) {
				if(typeof($("#menu")[0].classList[0]) == "undefined")
					$("#menu").addClass("locked");
			}
			else {
				$("#menu").removeClass("locked");
			}
		});
	});
</script>
