$(document).ready(function() {
	console.log('asd');
	$("#destinoForm").validate({
		rules: {
			nombreHotel: "required",
			calle: "required",
			colonia: "required",
			municipio: "required",
			ciudad: "required",
			codigopostal: "required",
			telefono: "required",
			fax: "required",
			ubicacion: "required",
			reservaciones: "required",
			email: { required:true, email:true },
			paginaweb: { required:true, url:true },
			servicio1: "required",
			servicio2: "required",
			datosgenerales1: "required",
			datosgenerales2: "required",
			"distancia[]": { required:true, number:true },
			picLogo: "required",
			picFachada: "required",
			picFoto1: "required",
			picFoto2: "required",
			picFoto3: "required"
		},
		messages: {
			nombreHotel: '<strong>Nombre del hotel:</strong> Campo requierdo.',
			calle: '<strong>Calle:</strong> Campo requierdo.',
			colonia: '<strong>Colonia:</strong> Campo requierdo.',
			municipio: '<strong>Municipio:</strong> Campo requierdo.',
			ciudad: '<strong>Ciudad:</strong> Campo requierdo.',
			codigopostal: '<strong>C.P.:</strong> Campo requierdo.',
			telefono: '<strong>Teléfono:</strong> Campo requierdo.',
			fax: '<strong>Fax:</strong> Campo requierdo.',
			ubicacion: '<strong>Ubicación:</strong> Campo requierdo.',
			reservaciones: '<strong>Reservaciones:</strong> Campo requierdo.',
			email: {
				required:'<strong>E-mail:</strong> Campo requierdo.',
				email:'<strong>E-mail:</strong> E-mail invalido.'
			},
			paginaweb: {
				required:'<strong>Página web:</strong> Campo requierdo.',
				url:'<strong>Página web:</strong> URL invalido.'
			},
			servicio1: '<strong>Servicios:</strong> Campo requerido.',
			servicio2: '<strong>Servicios:</strong> Campo requerido.',
			datosgenerales1: '<strong>Datos Generales:</strong> Campo requerido.',
			datosgenerales2: '<strong>Datos Generales:</strong> Campo requerido.',
			"distancia[]": {
				required:'<strong>Distancia:</strong> Campo requerido.',
				number:'<strong>Distancia:</strong> Solo números.'
			},
			picLogo: '<strong>Imagen de logo:</strong> Seleccione una imagen.',
			picFachada: '<strong>Imagen de fachada:</strong> Seleccione una imagen.',
			picFoto1: '<strong>Archivo de imagen:</strong> Campo requerido.',
			picFoto2: '<strong>Archivo de imagen:</strong> Campo requerido.',
			picFoto3: '<strong>Archivo de imagen:</strong> Campo requerido.'
		},
		errorClass: "invalid",
		errorLabelContainer: "#messageBox",
		wrapper: "li"
	});
});