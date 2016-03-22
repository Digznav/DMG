var $buoop = {};
var currentDate = new Date();
$buoop.ol = window.onload;
window.onload=function(){
	try {if ($buoop.ol) $buoop.ol();}catch (e) {}
	var e = document.createElement("script");
	e.setAttribute("type", "text/javascript");
	e.setAttribute("src", "//browser-update.org/update.js");
	document.body.appendChild(e);
}
var i = 0;
function loading() { i++; i = i < 8 ? i : 0; $('#lderSbmt').text(i); }
setInterval(loading, 100);

jQuery(function($){
	$('#Info-tab').on('click','a', function(event) {
		event.preventDefault();
		var slPnl = $(this).attr('href');
		if (!$(this).hasClass('crrnt') && !$(this).hasClass('avoid')) {
			$('#Info-tab a.crrnt').removeClass('crrnt');
			$(this).addClass('crrnt');
			$('.panel').hide();
			$(slPnl).fadeIn('fast');
		}
	});

	$('input, textarea').placeholder();
	if ($.fn.placeholder.input && $.fn.placeholder.textarea) { /*console.log('Placeholder: input and textarea.');*/ }
	else if ($.fn.placeholder.input) { /*console.log('Placeholder: input yes, textarea no.');*/ }

	$('.clsFrm').on('click',function(event) {
		event.preventDefault();
		$('.cntctCnt').slideToggle(function() {
			$('.opnFrm').fadeIn();
		});
		document.getElementById("cntctFrm").reset();
		$('#cntctFrm').validate().resetForm();
		$( "#fLlegada" ).datepicker( "option", "maxDate", null );
		$("#fSalida").datepicker( "option", "minDate", currentDate );
	});
	$('.opnFrm').on('click', function(event) {
		event.preventDefault();
		$(this).fadeOut('fast');
		$('.cntctCnt').slideToggle();
	});

	$("#fLlegada").datepicker({
		defaultDate: +1,
		minDate:currentDate,
		onClose: function( selectedDate ) {
			$("#fSalida").datepicker( "option", "minDate", selectedDate );
		}
	});
	$("#fSalida").datepicker({
		minDate:currentDate,
		onClose: function( selectedDate ) {
		  $( "#fLlegada" ).datepicker( "option", "maxDate", selectedDate );
		}
	});

	/*var ruleSet_default = { required:true, number:true, max:999 },
			rules_HabsAdults = { min:1 },
			rules_Child = { min:0 };

	$.extend(rules_HabsAdults, ruleSet_default);
	$.extend(rules_Child, ruleSet_default);*/

	function errorFunc(boton) {
		boton.prop( "disabled", false ).removeClass('ctvBttn');
		$('.curtain').fadeIn('fast',function() {
			$('#clbck-err').fadeIn().delay(3000).fadeOut('fast', function() {
				$('.curtain').fadeOut('fast');
			});
		});
	}
	
			//estado:"required",
	$('#cntctFrm').validate({
		rules:{
			hotel:"required",
			llegada:"required",
			salida:"required",
			hab:"required",
			adultos:"required",
			nombre:"required",
			correo:{ required:true, email:true },
			pais:"required",
			tel:{ required:true, number:true }
		},
		errorClass:"invalid",
		errorPlacement:function(error, element) {
			error.hide();
		},
		submitHandler: function(form) {
			var contacto = $(form);
			$.ajax(contacto.attr('action'), {
				type:'POST',
				data:contacto.serialize(),
				timeout:8000,
				beforeSend: function() {
					$('.snd-info').prop("disabled",true).addClass('ctvBttn');
					$('.curtain').hide();
					$('.cllbck-frmt').hide();
					$('.snd-info span').hide();
					$('.snd-info #lderSbmt').show();
				},
				complete: function() {
					console.log('completo');
					$('.snd-info span').hide();
					$('.snd-info #initSbmt').show();
				},
				success: function(result) {
					if (result == 'success') {
						//contacto.validate().resetForm();
						//vFrm.resetForm();
						$('.snd-info').prop("disabled",false).removeClass('ctvBttn');
						$('.curtain').fadeIn('fast',function() {
							$('#clbck-scs').fadeIn();
						});
						$('.cntctCnt').delay(3000).slideToggle(function() {
							$('.opnFrm').fadeIn();
							$('.curtain').hide();
							$('.cllbck-frmt').hide();
						});
						document.getElementById("cntctFrm").reset();
						$("#fLlegada").datepicker( "option", "maxDate", null );
						$("#fSalida").datepicker( "option", "minDate", currentDate );
					} else{
						errorFunc( $('.snd-info') );
					};
				},
				error: function(result) { errorFunc($('.snd-info')); }
			});
		}
	});
});

$(window).load(function() {
	function setMarginTop () {
		var mrgTp = ($('.infoPrt-txt').height()/2) - ($(this).height()/2);
		return mrgTp;
	}
	$('.infoPrt-lgo img').css('margin-top', setMarginTop );
	$('.infoPrt-lgo span').css('margin-top', setMarginTop );
	$('.footNav, .ftFooter p').css('margin-left', function() {
		var mgLft = 896 - $(this).width();
		return mgLft/2;
	});

});