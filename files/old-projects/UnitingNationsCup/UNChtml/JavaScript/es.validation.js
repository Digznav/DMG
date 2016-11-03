$(document).ready(function() {
	$("#uniting_form").validate({
		rules: {
			eName: "required",
			eAge: { required: true, number: true },
			eDayBirthday:"required",
			eMonthBirthday:"required",
			eYearBirthday:"required",
			eClubName: "required",
			eCategory: "required",
			eYears: { required: true, number: true },
			eAchiv: "required",
			eRegAssociation: "required",
			eHandicap: { required: true, number: true },
			eShirt: "required",
			eEmail: { required: true, email: true },
			ePhone: { required: true, number: true },
			eGuest: { required: true, number: true },
		},
		messages: {
			eName: "Por favor, introduzca su nombre",
			eAge: { required: "Por favor, introduzca su edad", number: "Solo números, por favor" },
			eDayBirthday:"Por favor ingrese un día de nacimiento",
			eMonthBirthday:"Por favor ingrese un mes de nacimiento",
			eYearBirthday:"Por favor ingrese un año de nacimiento",
			eClubName: "Por favor, introduzca el Club al que pertenece",
			eCategory: "Por favor, seleccione su país",
			eYears: { required: "Por favor, introduzca el tiempo (en años) que ha pasado jugando golf", number: "Solo números, por favor" },
			eAchiv: "Por favor, introduzca sus logros en el Golf",
			eRegAssociation: "Por favor, complete este campo",
			eHandicap: { required: "Por favor, introduzca su Handicap Index", number: "Solo números, por favor" },
			eShirt: "Por favor, elija una talla de camisa",
			eEmail: { required: "Por favor, introduzca su email", email: "Por favor, introduzca un email válido" },
			ePhone: { required: "Por favor, introduzca su número telefónico", number: "Solo números, por favor" },
			eGuest: { required: "Por favor, introduzca el número de invitados que irán con usted", number: "Solo números, por favor" },
		},
		errorClass: "invalid"
	});
});