$(document).ready(function() {
	$("#registerForm").validate({
		rules: {
			nombre: "required",
			apellido: "required",
			email: { required:true, email:true },
			empresa: "required",
			generoFemMas: "required",
			diaNacimiento: "required",
			mesNacimiento: "required",
			anioNacimiento: "required"
		},
		errorClass: "invalid"
	});
	$("#contactForm").validate({
		rules: {
			nombre: "required",
			email: { required:true, email:true },
			mensaje: "required"
		},
		errorClass: "invalid"
	});
});
