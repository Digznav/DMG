$("#formNewsUpdate").validate({
	rules: {
		encabezadoUpdate: "required",
		fechaUpdate: "required",
		contenidoUpdate: "required",
		resumenUpdate: "required",
		headerUpdate: { required: ".yesEngUpdate:checked" },
		dateUpdate: { required: ".yesEngUpdate:checked" },
		contentUpdate: { required: ".yesEngUpdate:checked" },
		summaryUpdate: { required: ".yesEngUpdate:checked" }
	},
	errorPlacement: function(error, element) {
		error.hide();
	},
	errorElement:"span",
	errorClass: "invalid"
});
	/*errorLabelContainer: "#adminBox",
	wrapper: "li"*/
$("#formNewsAdd").validate({
	rules: {
		encabezadoAdd: "required",
		diaAdd: "required",
		mesAdd: "required",
		anioAdd: "required",
		contenidoAdd: "required",
		headerAdd: { required: ".yesEngAdd:checked" },
		contentAdd: { required: ".yesEngAdd:checked" }
	},
	errorPlacement: function(error, element) {
		error.hide();
	},
	errorElement:"span",
	errorClass: "invalid"
});
	/*messages: {
		encabezadoAdd: "required",
		diaAdd: "required",
		mesAdd: "required",
		anioAdd: "required",
		contenidoAdd: "required",
		headerAdd: { required:"required headerAdd" },
		contentAdd: { required:"required contentAdd" }
	},
	errorClass: "invalid",
	errorLabelContainer: "#errorNewsAdd",
	wrapper: "li"*/
$("#formAyuda").validate({
	rules: {
		nombre: "required",
		tel: "required",
		email: { required:true, email:true }
	},
	messages: {
		nombre: "Por favor ingrese su nombre.",
		tel: "Por favor ingrese su teléfono.",
		email: { required: "Por favor ingrese su correo.", email: "Correo inválido." }
	},
	errorPlacement: function(error, element) {
		error.hide();
	},
	errorLabelContainer: "#messageBox",
	errorElement:"span",
	errorClass: "invalid"
});