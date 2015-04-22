$(document).ready(function() {
	setSlide(parseInt(window.location.hash.substr(1, 1)) || 0);
});

function setSlide(which) {
	if(which >= skillList.length) which=0;
	test = which;
	$("#skills").css("background-color", skillList[which].color);
	//$("body").css("background-color", skillList[which].color);
	
	$($(".current").children()).addClass("stagger");
	$(".current").removeClass("current");
	
	$($(".skill")[which]).addClass("current");
	$($(".sampleList")[which]).addClass("current");
	$($("#wrapper")[0]).addClass("skills");
	$($("#backgroundImage")[0]).addClass("skills");
	
	$($(".sampleList")[which].children).addClass("stagger");
	
	delay = (100 * $(".sampleList")[which].children.length) + 450;
	setTimeout(function() {
		$(".stagger").removeClass("stagger");
	}, delay);
		
	if(which == 0) $(".skills").removeClass("skills");
	
	window.location.hash = which;
}

$(document).ready(function() {
	$(".skill").click(function(event) {
		$(".open").css("height", "5vh");
		$(".open").removeClass("open");
		setSlide(Array.prototype.indexOf.call(event.target.parentElement.childNodes, event.target)-1);
	});
});