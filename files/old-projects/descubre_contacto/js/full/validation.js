$(document).ready(function() {
	$("#descubre_form").validate({
		rules: {
			"paquetes_opciones[]": { required:true },
			"rutas_opciones[]": { required:true },
			"hospedaje_opciones[]": { required:true },
			"recorridos_opciones[]": { required:true },
			nombre: "required",
			ciudad: "required",
			estado: "required",
			email: { required:true, email:true },
			personas: { required:true, number:true },
			tel: "required",
			llegada: "required",
			salida: "required"
		},
		errorClass: "invalid"
	});
});