$(document).ready(function(){
	var height = $(document).height();
	$("#modal").css("height",height);
	$(".top > header > nav > ul > li#modal-zakaz").click(function(){
		$("#modal").css("visibility","visible");
		$("#modal").css("transition","opacity .3s");
		$("#modal").css("opacity","1");
	});
	$(".close-button").click(function(){
		$("#modal").css("transition","opacity .3s, visibility .3s");
		$("#modal").css("visibility","hidden");
		$("#modal").css("opacity","0");
	});
});