$(document).ready(function(){
/////////////////////////////////////
// КАЛЬКУЛЯТОР
/////////////////////////////////////
$("#number").on("keyup", function(){
	var tipTovara = $('input[name="vibor"]:checked').val();
	if (tipTovara == "detskiy") {
			var number = $("#number").val();
			if (number == 1) {
				var sum = 2080;
				$(".sum").text(sum);
				$(".sum").append(" руб.");
				$("#bonus").text('');
			} else if (number == 2) {
				var sum = 4160;
				$(".sum").text(sum);
				$(".sum").append(" руб.");
				$("#bonus").text("Бесплатная доставка");
			} else if (number == 3) {
				var sum = 5899;
				$(".sum").text(sum);
				$(".sum").append(" руб.");
				$("#bonus").text("Скидка 5% + бесплатная доставка");
			} else if (number => 4) {
				var sum = number * 1960;
				$(".sum").text(sum);
				$(".sum").append(" руб.");
				$("#bonus").text("Скидка 5% + бесплатная доставка");
			}
	} else if ((tipTovara == "vzrosliy")) {
			var number = $("#number").val();
			if (number == 1) {
				var sum = 1970;
				$(".sum").text(sum);
				$(".sum").append(" руб.");
				$("#bonus").text('');
			} else if (number == 2) {
				var sum = 3940;
				$(".sum").text(sum);
				$(".sum").append(" руб.");
				$("#bonus").text("Бесплатная доставка");
			} else if (number == 3) {
				var sum = 5599;
				$(".sum").text(sum);
				$(".sum").append(" руб.");
				$("#bonus").text("Скидка 5% + бесплатная доставка");
			} else if (number => 4) {
				var sum = number * 1860;
				$(".sum").text(sum);
				$(".sum").append(" руб.");
				$("#bonus").text("Скидка 5% + бесплатная доставка");
			}
	} else {
		$(".sum").text('');
		$("#number").val('');
		$("#bonus").text('');
	}
	if ($("#dostavka-kurier").prop("checked") == true) {
		if (number == 1) {
				var sum2 = sum + 200;
				$("#modal-zakaz > .itog").text('').text('ИТОГО: '+sum2+' руб.');
			} else {
				var sum2 = sum;
				$("#modal-zakaz > .itog").text('').text('ИТОГО: '+sum2+' руб.');
			}
	}
	if ($("#dostavka-post").prop("checked") == true) {
		var sum2 = sum + 290;
		$("#modal-zakaz > .itog").text('').text('ИТОГО: '+sum2+' руб.');
	}
	if ($("#dostavka-samovivoz").prop("checked") == true) {
		var sum2 = sum;
		$("#modal-zakaz > .itog").text('').text('ИТОГО: '+sum2+' руб.');
	}
	//КЛИК ПО СПОСОБАМ ДОСТАВКИ
	$("#dostavka-kurier + label").on('click', function(){
		if (number == 1) {
				var sum2 = sum + 200;
				$("#modal-zakaz > .itog").text('').text('ИТОГО: '+sum2+' руб.');
			} else {
				var sum2 = sum;
				$("#modal-zakaz > .itog").text('').text('ИТОГО: '+sum2+' руб.');
			}
	});
	$("#dostavka-post + label").on('click', function(){
		var sum2 = sum + 290;
		$("#modal-zakaz > .itog").text('').text('ИТОГО: '+sum2+' руб.');
	});
	$("#dostavka-samovivoz + label").on('click', function(){
		var sum2 = sum;
		$("#modal-zakaz > .itog").text('').text('ИТОГО: '+sum2+' руб.');
	});
});
});