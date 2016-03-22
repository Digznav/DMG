jQuery(function($) {
	var chk_elem_count = 0;
	
	function changeCheck( elem ) {
		var $ckSl = elem.closest('.mnCnt-Frm');
		$ckSl.find('.mn-el').prop('checked', function( i, val ) { return !val; });
		elem.toggleClass('ctvCk');
	}
	function allChecked() {
		chk_elem_count = $('.allChk-Cont .mn-el:checked:not(.allCat-el)').length;
		if (chk_elem_count === 12) { return true; }
		else { return false };
	}

	$('.allCat-Bt').on('click',function() {
		var $allCk = $(this).closest('.allChk-Cont').find('.mn-el'),
				$allCkBut = $(this).closest('.allChk-Cont').find('.msk-Bt');
		if (allChecked()) {
			$allCk.prop('checked',false);
			$allCkBut.removeClass('ctvCk');
		} else {
			$allCk.not(':checked').prop('checked', function( i, val ) { return !val; });
			$allCkBut.not('.ctvCk').toggleClass('ctvCk');
		};
	});

	$('.mn-ck .msk-Bt:not(.allCat-Bt)').on('click',function() {
		var $chkAll_el = $(this).closest('.allChk-Cont').find('.allCat-el'),
				$chkAll_but = $(this).closest('.allChk-Cont').find('.allCat-Bt');
		changeCheck( $(this) );
		if ( allChecked() ) {
			$chkAll_el.prop('checked',true);
			$chkAll_but.addClass('ctvCk');
		} else {
			$chkAll_el.prop('checked',false);
			$chkAll_but.removeClass('ctvCk');
		};
	});
	
	$('.mn-rd .msk-Bt').on('click',function() {
		$('#sndBttn').prop('disabled', function( i, val ) { return !val; }).toggleClass('dbldBtn acptBtn');
		changeCheck( $(this) );
	});
	
	function errorFunc(boton) {
		boton.prop('disabled',false).toggleClass('acptBtn ldngBtn');
		$('#ourCategories').fadeOut('fast',function() {
			$('#clbck-err').fadeIn('fast').delay(3000).fadeOut('fast', function() {
				$('#ourCategories').fadeIn('fast');
			});
		});
	}

	$('#ourCategories').validate({
		rules:{
			correo:{ required:true, email:true },
			nombre:"required",
			apellido:"required"
		},
		errorClass:"invalid",
		errorPlacement:function(error, element) {
			error.hide();
		},
		submitHandler: function(form) {
			var categories = $(form);
			$.ajax(categories.attr('action'), {
				type:'POST',
				data:categories.serialize(),
				timeout:8000,
				beforeSend: function() {
					$(".cllbck-frmt").hide();
					$('.isButton').prop('disabled',true).removeClass('dbldBtn acptBtn').addClass('ldngBtn');
					/*$('.snd-info').prop("disabled",true).addClass('ctvBttn');
					$('.curtain').hide();
					$('.cllbck-frmt').hide();
					$('.snd-info span').hide();
					$('.snd-info #lderSbmt').show();*/
				},
				complete: function() {
					//console.log('completo');
					//$('.isButton').prop('disabled',false).removeClass('ldngBtn').addClass('dbldBtn');
				},
				success: function(result) {
					if (result == 'success') {
						//$('#debug').show().html(result);
						//$('.snd-info').prop("disabled",false).removeClass('ctvBttn');
						/*$('.curtain').fadeIn('fast',function() {
							$('#clbck-scs').fadeIn();
						});
						$('.cntctCnt').delay(3000).slideToggle(function() {
							$('.opnFrm').fadeIn();
							$('.curtain').hide();
							$('.cllbck-frmt').hide();
						});*/
						$('#ourCategories').fadeOut('fast',function() {
							$('#clbck-scs').fadeIn('fast', function() {
								setTimeout(function() {
									window.location.href='/Inicio';
								}, 2000);
							});
						});
						//window.location.href='/Inicio';
					} else {
						//$('#debug').show().html('Error 1<br>'+result);
						errorFunc( $('#sndBttn') );
					};
				},
				error: function(result) {
					//$('#debug').show().html('Error 2<br>'+result);
					errorFunc( $('#sndBttn') );
				}
			});
		}
	});

	/*$('#ourCategories').on('submit', function(e) {
		e.preventDefault();
		//console.log( $(this).serialize() );
	});*/
	
	$('#aceptAP').on('click', function(e) {
		e.preventDefault();
		$('.curtain, #AP').hide();
		$('#sndBttn').prop('disabled', function( i, val ) { return !val; }).toggleClass('dbldBtn acptBtn');
		changeCheck( $('.mn-rd .msk-Bt') );
	});
	$('#refuseAP').on('click', function(e) {
		e.preventDefault();
		window.location.href='/Inicio';
	});

});

$(window).load(function() {
		//{href:'../imgs/banner/prm_banner01.jpg'}
	/*$.fancybox.open([
		{href:'../AP/AP_INVIDO_Informacion_Productos_Pag _Int_ 140521.html'}
	],
	{type:'inline'});*/
});