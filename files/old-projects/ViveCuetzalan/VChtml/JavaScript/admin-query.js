jQuery(function($){

	function deleteRow(event) {
		event.preventDefault();
		var elN = $(this).closest('.obj-li');
		elN.css("background-color","#EC1C24");
		elN.fadeOut(400, function(){
			elN.remove();
		});
		return false;
	};

	$('#ObjectsList').on('click','.deleteRow',deleteRow);

	$('input, textarea').placeholder();
	if ($.fn.placeholder.input && $.fn.placeholder.textarea) { /*console.log('Placeholder: input and textarea.');*/ }
	else if ($.fn.placeholder.input) { /*console.log('Placeholder: input yes, textarea no.');*/ }
});