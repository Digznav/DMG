/*jQuery.validator.setDefaults({
	debug: true,
	success: "valid"
});*/

$('#registroForm').validate({
	rules:{
		nombre:"required",
		edad:{ required:true, number:true, min:1 },
		estado:"required",
		correo:{ required:true, email:true },
		tel:{ required:true, number:true },
		escuela:"required",
		comentario:"required",
		adjunto:{
			required:"#proyecto:checked"
		}
	},
	errorPlacement:function(error, element) {
		error.hide();
	},
	success:"valid",
	errorElement:"span",
	errorClass:"invalid"
});
//required:"#proyecto:checked",
//accept:"application/pdf, application/msword, application/zip"
/*jQuery(function($) {
	var $numberVerify = $( '.numberV' );
	$numberVerify.autotab();
	$numberVerify.autotab('filter', 'number');
});*/