var $prsnQntty = $( '#perQuantity' ),
		$reservForm = $('#reservacionForm');
var ruleSet_default = { required:true, number:true, max:999 },
		rules_HabsAdults = { min:1 },
		rules_Child = { min:0 };

$.extend(rules_HabsAdults, ruleSet_default);
$.extend(rules_Child, ruleSet_default);

$prsnQntty.validate({
	rules:{
		changeHab:rules_HabsAdults,
		changeAdult:rules_HabsAdults,
		changeChild:rules_Child
	},
	errorPlacement:function(error, element) {
		error.hide();
	},
	success:"valid",
	errorElement:"span",
	errorClass:"invalid"
});

/*,
	errorElement:"span",
	errorClass:"invalid"*/