$(document).ready(function(){
	$(".ugolok").click(function(){
		$("body,html").animate({scrollTop: 0}, 400);  
	});
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
	setTimeout(function(){
		$(".slide2").css("opacity","1");
		$(".slide1").css("opacity","0");
	}, 10000);
		setInterval(function(){
			$(".slide1").css("opacity","1");
			$(".slide2").css("opacity","0");
			setTimeout(function(){
				$(".slide2").css("opacity","1");
				$(".slide1").css("opacity","0");
			}, 10000);
		}, 20000);
});