var $valAge = $( '#validateAge' );
var d = new Date();

var ruleSet_default = { required:true },
		rules_Year = { max:d.getFullYear() },
		rules_Month = { max:12 },
		rules_Day = { max:31 };

$.extend(rules_Year, ruleSet_default);
$.extend(rules_Month, ruleSet_default);
$.extend(rules_Day, ruleSet_default);


$valAge.validate({
	rules:{
		countryV:'required',
		yearV:rules_Year,
		monthV:rules_Month,
		dayV:rules_Day
	},
	errorPlacement:function(error, element) {
		error.hide();
	},
	success:"valid",
	errorElement:"span",
	errorClass:"invalid"
});

jQuery(function($) {
	var $numberVerify = $( '.numberV' );
	$numberVerify.autotab();
	$numberVerify.autotab('filter', 'number');
});

/*pattern="[0-9]*"
pattern="[0-9]*"
pattern="[0-9]*"*/