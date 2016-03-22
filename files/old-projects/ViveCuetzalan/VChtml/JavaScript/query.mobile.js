var $reservForm = $('#reservacionForm');
var ruleSet_default = { required:true, number:true, max:999 },
		rules_HabsAdults = { min:1 },
		rules_Child = { min:0 };

$.extend(rules_HabsAdults, ruleSet_default);
$.extend(rules_Child, ruleSet_default);

/*$prsnQntty.validate({
	rules:{
	},
	errorPlacement:function(error, element) {
		error.hide();
	},
	success:"valid",
	errorElement:"span",
	errorClass:"invalid"
});*/


/*,
	errorElement:"span",
	errorClass:"invalid"*/

/*changeHab:rules_HabsAdults,
changeAdult:rules_HabsAdults,
changeChild:rules_Child,*/

$reservForm.validate({
	rules:{
		hotel:"required",
		habitaciones: { required:true, number:true, min:1 },
		adultos: { required:true, number:true, min:1 },
		peques: { required:true, number:true, min:0 },
		nombre:"required",
		mail:{ required:true, email:true },
		direccion:"required",
		telLada:{ required:true, maxlength:3, number:true, min:0 },
		telNumero:{ required:true, number:true },
		comentarios:"required"
	},
	errorPlacement:function(error, element) {
		error.hide();
	},
	errorClass:"invalid"
});

jQuery(function($){
	var 
			$dyIn = $( '#dayIn' ),
			$dyOut = $( '#dayOut' ),
			$calDy_In = $( '#calDayIn' ),
			$calDy_Out = $( '#calDayOut' ),
			$mainNv = $( '.mainNav' ),
			$navMbl = $( '.showNavMobile a' )
			//$container = $( '.cont' ),
			//$onlyTxt = $( '.onlyText' ),
			//$scrllCnt = $( '.scrollCont' ),
			//$opnTxtLsh = $( '#openTxtLash' ), $clsTxtLsh = $( '#closeTxtLash' ),
			//$sectionTitle = $( '.sectionTitle' ), $sectionTitle_Span = $sectionTitle.find( 'span' ),
			//$dropTxt = $( '.dropText' ),
			//iniHghtText = $scrllCnt.height(), iniWidthText = $onlyTxt.outerWidth(),
			//opn_TxtLshWidth = $opnTxtLsh.width(),
			//scrllCntExtra, scrllCntHeight
			;
	var dOut = new Date();
	dOut.setDate(dOut.getDate()+1);

	$navMbl.click(function(e) {
		e.preventDefault();
		$(this).toggleClass('MovNavActive');
		$mainNv.stop().slideToggle();
	});
	
	$calDy_In.datepicker({
		minDate:new Date(),
		changeMonth: true,
		altField: '#dayIn',
		altFormat:'m/d/yy',
		onSelect: function( selectedDate ) {
			var limDayOut = new Date( selectedDate );
			limDayOut.setDate(limDayOut.getDate()+1);
			$calDy_Out.datepicker( "option", "minDate", limDayOut );
		}
	});

	$calDy_Out.datepicker({
		minDate:dOut,
		defaultDate: "+1w",
		changeMonth: true,
		altField: '#dayOut',
		altFormat:'m/d/yy',
		onSelect: function( selectedDate ) {
			$calDy_In.datepicker( "option", "maxDate", selectedDate );
		}
	});

	/*$dyIn.datepicker({
		minDate:new Date(),
		changeMonth: true,
		dateFormat:'d',
		onSelect:function(selectedDate) {
			var limDayOut = new Date( selectedDate );
			limDayOut.setDate(limDayOut.getDate()+1);
			$dyIn.datepicker( "option", "minDate", limDayOut );
		}
	});

	$dyOut.datepicker({
		minDate:"+1d",
		changeMonth:true,
		dateFormat:'d',
		altField: '#dayOut',
		altFormat:'mm/d/yy'
	});*/
		/*onClose:function(selectedDate) {
			$caldy_In.datepicker("option","maxDate",new Date($('#dayOut').val()));
			//console.log($("#dayInDate").datepicker("option","minDate"));
		}*/
	
	$('input, textarea').placeholder();
	if ($.fn.placeholder.input && $.fn.placeholder.textarea) { /*console.log('Placeholder: input and textarea.');*/ }
	else if ($.fn.placeholder.input) { /*console.log('Placeholder: input yes, textarea no.');*/ }
});