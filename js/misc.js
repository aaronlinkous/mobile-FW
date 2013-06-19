function check_val(input) {
	$(input).val() != "" ? $(input).addClass("has_value") : $(input).removeClass("has_value");
}

$(document).ready(function(){
	$("select").each(function(){
		check_val(this);
	});
	
	$("select").on("keyup click blur focus change paste", function(){
		check_val(this);
	});

	$(".toggle_header").on("click", function(e) {
		$(this).toggleClass("open");
	});
});