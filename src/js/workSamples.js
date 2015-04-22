$(document).ready(function() {
	$(".title").click(function(event) {
		if($(event.target.parentElement).hasClass("open")) {
			$(event.target.parentElement).removeClass("open");
			
			event.target.parentElement.style.height = (window.innerHeight * 0.05) + "px";
		}
		else {
			$(".open").css("height", (window.innerHeight * 0.05) + "px");
			$(".open").removeClass("open");
			
			$(event.target.parentElement).addClass("open");
			
			var height = window.innerHeight / 100;
			for(i=0; i<$(".sample")[0].children.length; i++) {
				height += $(event.target.parentElement.children[i]).outerHeight();
			}
			
			event.target.parentElement.style.height = height + "px";
		}
	});
});