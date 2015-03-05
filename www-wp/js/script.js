$(document).ready(function(){
//ЧИСТИМ МОДАЛЬНОЕ ОКНО////
$("#modal-zakaz").trigger('reset')
$("#dostavka-post + label").css("display","none");
$("#dostavka-kurier + label").css("display","none");
$("#dostavka-samovivoz + label").css("display","none");
$(".sum").text('');
$("#number").val('');
$("#bonus").text('');
$("#modal-zakaz > .itog").text('');
///////////////////////////
	$(".ugolok").click(function(){
		$("body,html").animate({scrollTop: 0}, 400);  
	});
	var height = $(document).height();
	$("#modal").css("height",height);
	$("#for-modal-zakaz, a.table-buy").click(function(){
		$("body,html").animate({scrollTop: 0}, 400);
		$("#modal").css("visibility","visible");
		$("#modal").css("transition","opacity .3s");
		$("#modal").css("opacity","1");
		//ЧИСТИМ ОТКРЫВАЕМУЮ ФОРМУ
		$("#modal-zakaz").trigger('reset')
		$(".sum").text('');
		$("#number").val('');
		$("#bonus").text('');
		$(".opisanie.vzrosliy").removeAttr("style");
		$(".opisanie.detskiy").removeAttr("style");
		$("#city").removeAttr("style");
		$("#dostavka-post + label").css("display","none");
		$("#dostavka-kurier + label").css("display","none");
		$("#dostavka-samovivoz + label").css("display","none");
		$("#modal-zakaz > .results").text('');
		$("#modal-zakaz > .itog").text('');
	});
	$(".close-button").click(function(){
		$("#modal").css("transition","opacity .3s, visibility .3s");
		$("#modal").css("visibility","hidden");
		$("#modal").css("opacity","0");
	});	
	//СЛАЙДЕР (АВТО-ИСЧЕЗНОВЕНИЕ 10 сек)
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
	$(".slide1").click(function(){
		location = 'http://stop-ushastik.ru/korrektor/';
	});
// ОБРАТНЫЙ ЗВОНОК
	$("#obratniy-zvonok").click(function(){
		var obratniyname = $("#obratniy-name").val();
		var tlf = $("#tlf").val();
		var msg = $("#msg").val();
		var data = 'obratniy-name='+obratniyname+'&tlf='+tlf+'&msg='+msg;
		$.ajax({
			type: 'POST',
			url: 'wp-content/themes/stopushastik/php/zvonok-submit.php',
			data: data,
			success: function(data) {
				$("#slider-form > .zvonok-results").html(data);
				$("#slider-form > .zvonok-results").css("display","block");
				setTimeout(function(){
					$("#slider-form > .zvonok-results").css("display","none");
				}, 6000);
			}
		
		});
	});
	// SUBMIT FORM
	$("#modal-zakaz-submit").click(function(){
		var tovar = $('input[name="vibor"]:checked').val();
		var value = $("#number").val();
		var fio = $("#fio").val();
		var adress = $("#adress").val();
		var telefon = $("#telefon").val();
		var email = $("#e-mail").val();
		if ($("#city-list").val !== '99') {
			var city = $("#city-list").val();
		} else {
			var city = $("#city").val();
		}
		var dostavka = $('input[name="dostavka"]:checked').val();
		var oplata = $('input[name="oplata"]:checked').val();
		var data = 'tovar='+tovar+'&value='+value+'&fio='+fio+'&adress='+adress+'&telefon='+telefon+'&email='+email+'&city='+city+'&dostavka='+dostavka+'&oplata='+oplata;
		$.ajax({
			type: 'POST',
			url: 'wp-content/themes/stopushastik/php/zakaz-submit.php',
			data: data,
			success: function(data) {
				$('.results').html(data);
				setTimeout(function(){
					$("#modal").css("transition","opacity .3s, visibility .3s");
					$("#modal").css("visibility","hidden");
					$("#modal").css("opacity","0");
				}, 6000);
			}
		});
	});
	//ВОБОР ГОРОДА
	$("#city-list").change(function(){
		var cityValue = $("#city-list").val();
		if (cityValue == 0) {
			$("#city").css("display","none");
			$("#dostavka-post + label").css("display","none");
			$("#dostavka-kurier + label").css("display","none");
			$("#dostavka-samovivoz + label").css("display","none");
		} else if (cityValue == 99) {
			$("#city").css("display","block");
			$("#dostavka-post + label").removeAttr("style");
			$("#dostavka-kurier + label").css("display","none");
			$("#dostavka-samovivoz + label").css("display","none");
		} else if (cityValue !== 99) {
			$("#city").css("display","none");
			$("#dostavka-post + label").css("display","none");
			$("#dostavka-kurier + label").removeAttr("style");
			$("#dostavka-samovivoz + label").removeAttr("style");
		}
	});
	/////////////////
	$("#radio-detskiy-label").click(function(){
		$(".opisanie.detskiy").css("display","block");
		$(".opisanie.vzrosliy").removeAttr("style");
		$(".sum").text('');
		$("#number").val('');
		$("#bonus").text('');
	});
	$("#radio-vzrosliy-label").click(function(){
		$(".opisanie.vzrosliy").css("display","block");
		$(".opisanie.detskiy").removeAttr("style");
		$(".sum").text('');
		$("#number").val('');
		$("#bonus").text('');
	});
});