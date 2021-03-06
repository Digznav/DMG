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
			eMember: "required",
			eShirt: "required",
			eEmail: { required: true, email: true },
			ePhone: { required: true, number: true },
			eGuest: { required: true, number: true },
		},
		messages: {
			eName: "Please enter your name",
			eAge: { required: "Please enter your age", number: "Only numbers please" },
			eDayBirthday:"Please enter a date of birth",
			eMonthBirthday:"Please enter a month of birth",
			eYearBirthday:"Please enter a birth year",
			eClubName: "Please enter the Club you belong to",
			eCategory: "Please select your country",
			eYears: { required: "Please enter the time (in years) you have been playing golf", number: "Only numbers please" },
			eAchiv: "Please enter your achievements in golf",
			eRegAssociation: "Please complete this field",
			eHandicap: { required: "Please enter your Handicap Index", number: "Only numbers please" },
			eMember: "Please enter your member/GHIN number",
			eShirt: "Please choose a shirt size",
			eEmail: { required: "Please enter your email", email: "Please enter a valid email" },
			ePhone: { required: "Please enter your phone number", number: "Only numbers please" },
			eGuest: { required: "Please enter the number of the guests that are going with you", number: "Only numbers please" },
		},
		errorClass: "invalid"
	});
});