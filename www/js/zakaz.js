$(document).ready(function(){
/////////////////////////////////////
// КАЛЬКУЛЯТОР
/////////////////////////////////////
	$("#number").keyup("change", function(){
		var number = $("#number").val();
		$(".sum").text(number);
		$(".sum").append(" руб.");
	});
});