var $buoop = {};
$buoop.ol = window.onload;
window.onload=function(){
	try {if ($buoop.ol) $buoop.ol();}catch (e) {}
	var e = document.createElement("script");
	e.setAttribute("type", "text/javascript");
	e.setAttribute("src", "//browser-update.org/update.js");
	document.body.appendChild(e);
}
/*
	Source: http://www.benknowscode.com/2012/11/selecting-ranges-jquery-ui-datepicker.html
	Demo: http://bseth99.github.io/projects/jquery-ui/4-jquery-ui-datepicker-range.html
*/

$.datepicker._defaults.onAfterUpdate = null;
var datepicker__updateDatepicker = $.datepicker._updateDatepicker;
$.datepicker._updateDatepicker = function( inst ) {
	datepicker__updateDatepicker.call( this, inst );
	var onAfterUpdate = this._get(inst, 'onAfterUpdate');
	if (onAfterUpdate)
		onAfterUpdate.apply((inst.input ? inst.input[0] : null),
			[(inst.input ? inst.input.val() : ''), inst]);
}

jQuery(function($){
	var $container = $( '.cont' ), $onlyTxt = $( '.onlyText' ),
			$scrllCnt = $( '.scrollCont' ),
			$opnTxtLsh = $( '#openTxtLash' ), $clsTxtLsh = $( '#closeTxtLash' ),
			$sectionTitle = $( '.showText' ), $sectionTitle_Span = $sectionTitle.find( 'span' ),
			$dropTxt = $( '.dropText' ),
			$opnInfo = $( '.openInfo' ),
			iniHghtText = $scrllCnt.height(), iniWidthText = $onlyTxt.outerWidth(),
			opn_TxtLshWidth = $opnTxtLsh.width(),
			scrllCntExtra, scrllCntHeight;

	var $rsrvn = $( '.reservation' ),
			$opnHtLsh = $( '#openHoteLash' ), $clsHtLsh = $( '#closeHoteLash' ), $sndReserv = $( '#sendReservInfo' ),
			$clRng = $( '#calRange' ), $cl_RngDiv = $clRng.find( 'div' ),
			$dyIn = $( '#dayIn' ),
			$dyInMnth = $( '#dayInMonth' ), $dyInDate = $( '#dayInDate' ), $dyInDay = $( '#dayInDay' ),
			$dyOut = $( '#dayOut' ),
			$dyOutMnth = $( '#dayOutMonth' ), $dyOutDate = $( '#dayOutDate' ), $dyOutDay = $( '#dayOutDay' ),
			$chngIn = $( '#changeIn' ), $chngOut = $( '#changeOut' ),
			$txtHabs = $( '#txtHab' ), $txtAdlt = $( '#txtAdults' ), $txtChld = $( '#txtChild' ),
			$iniPerHab = $( '#habitaciones' ), $iniPerAdult = $( '#adultos' ), $iniPerChild = $( '#peques' ),
			$prsn_QnttyChangeHab = $prsnQntty.find( '#changeHab' ),
			$prsn_QnttyChangeAdult = $prsnQntty.find( '#changeAdult' ),
			$prsn_QnttyChangeChild = $prsnQntty.find( '#changeChild' ),
			$openFch = $( '#openFechaClic' ), $saveFch = $( '#saveFechaClic' ), $cancelFch = $( '#cancelFechaClic' ), $tmpDisabled = $( '#tempDisabled' ),
			$openPrsn = $( '#openPersonaClic' ), $savePrsn = $( '#savePersonClic' ), $cancelPrsn = $( '#cancelPersonClic' ),

			opn_HtLshWidth = $opnHtLsh.width(),
			prsn_QnttyHght = $prsnQntty.height()/2,
			iniDy_In = new Date(), iniDy_Out = new Date(),
			meses = new Array ("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"),
			semana = new Array("Dom","Lun","Mar","Mié","Jue","Vie","Sáb"),

			rsrvHght = $rsrvn.height()/2,
			cur = -1, prv = -1;

	$clsTxtLsh.click(function(event) {
		event.preventDefault();
		$scrllCnt.slideUp(function() {
			$onlyTxt.animate({left:-(iniWidthText/2)},function() {
				$opnTxtLsh.animate({left:0});
			});
		});
	});
	$opnTxtLsh.click(function(event) {
		event.preventDefault();
		$(this).animate({left:-opn_TxtLshWidth},function() {
			$onlyTxt.animate({left:50+'%'}, function() {
				$scrllCnt.slideDown();
			});
		});
	});

	$sectionTitle.click(function() {
		$sectionTitle_Span.toggleClass('icoRight').toggleClass('icoBottom');
		$dropTxt.stop().slideToggle();
	});

	$rsrvn.css("margin-top","-"+rsrvHght+"px");
	$prsnQntty.css("margin-top","-"+prsn_QnttyHght+"px");
	iniDy_Out.setDate(iniDy_Out.getDate()+7);

	$dyInMnth.html(meses[iniDy_In.getMonth()]);
	$dyInDate.html(iniDy_In.getDate());
	$dyInDay.html(semana[iniDy_In.getDay()]);
	$dyIn.val((iniDy_In.getMonth()+1)+"/"+iniDy_In.getDate()+"/"+iniDy_In.getFullYear());

	$dyOutMnth.html(meses[iniDy_Out.getMonth()]);
	$dyOutDate.html(iniDy_Out.getDate());
	$dyOutDay.html(semana[iniDy_Out.getDay()]);
	$dyOut.val((iniDy_Out.getMonth()+1)+"/"+iniDy_Out.getDate()+"/"+iniDy_Out.getFullYear());

	$cl_RngDiv.datepicker({
		minDate:new Date(),
		numberOfMonths: [2,1],
		changeMonth: true,
		changeYear: true,
		showButtonPanel: false,
		beforeShowDay: function ( date ) {
			return [true, ( (date.getTime() >= Math.min(prv, cur) && date.getTime() <= Math.max(prv, cur)) ? 'date-range-selected' : '')];
		},

		onSelect: function ( dateText, inst ) {
			var h1, h2, cp1, cp2;
			prv = cur;
			cur = (new Date(inst.selectedYear, inst.selectedMonth, inst.selectedDay)).getTime();
			if ( prv == -1 || prv == cur ) {
				prv = cur;
				sd = new Date(dateText);
				$chngIn.val(dateText);
				$chngOut.val(dateText);
				$saveFch.prop( "disabled", true ).addClass('disabledButton');
			} else {
				h1 = $.datepicker.formatDate( 'm/d/yy', new Date(Math.min(prv,cur)), {} );
				h2 = $.datepicker.formatDate( 'm/d/yy', new Date(Math.max(prv,cur)), {} );
				cp1 = $dyIn.val()+'-'+$dyOut.val();
				cp2 = h1+'-'+h2;

				if( cp1 == cp2 ) {
					//console.log( cp1 +" || "+ cp2 );
					$saveFch.prop( "disabled", true ).addClass('disabledButton');
				} else {
					//console.log( cp1 +" || "+ cp2 );
					$saveFch.prop( "disabled", false ).removeClass('disabledButton');
				};

				$chngIn.val(h1);
				$chngOut.val(h2);
			}
		}
	});

	function enableFecha() {
		$clRng.fadeOut();
		$tmpDisabled.fadeOut(function() { $openFch.toggleClass('activeDate'); });
	}
	$openFch.click(function() {
		var v = $dyIn.val() + ' - ' + $dyOut.val(), d, cl_RngHght = $clRng.height()/2;
		$clRng.css("margin-top","-"+cl_RngHght+"px");
		$chngIn.val( $dyIn.val() );
		$chngOut.val( $dyOut.val() );
		$saveFch.prop( "disabled", true ).addClass('disabledButton');
		try {
			if ( v.indexOf(' - ') > -1 ) {
				d = v.split(' - ');
				prv = $.datepicker.parseDate( 'm/d/yy', d[0] ).getTime();
				cur = $.datepicker.parseDate( 'm/d/yy', d[1] ).getTime();
			} else if ( v.length > 0 ) {
				prv = cur = $.datepicker.parseDate( 'm/d/yy', v ).getTime();
			}
		} catch ( e ) { cur = prv = -1; }
		if ( cur > -1 )
			$cl_RngDiv.datepicker('setDate', new Date(cur));

		$cl_RngDiv.datepicker('refresh');

		$(this).toggleClass('activeDate');
		$clRng.fadeIn();
		$tmpDisabled.fadeIn();
	});
	$saveFch.click(function() {
		var s1, s2, fec;
		s1 = $.datepicker.formatDate( 'M/d/D', new Date(Math.min(prv,cur)), {} );
		s2 = $.datepicker.formatDate( 'M/d/D', new Date(Math.max(prv,cur)), {} );
		fec = s1.split('/');
		$dyInMnth.html(fec[0]);
		$dyInDate.html(fec[1]);
		$dyInDay.html(fec[2]);
		$dyIn.val( $chngIn.val() );

		fec = null; fec = s2.split('/');
		$dyOutMnth.html(fec[0]);
		$dyOutDate.html(fec[1]);
		$dyOutDay.html(fec[2]);
		$dyOut.val( $chngOut.val() );

		enableFecha();
	});
	$cancelFch.click(function() {
		enableFecha();
	});
	
	function enablePerson() {
		$prsnQntty.fadeOut();
		$tmpDisabled.fadeOut(function() { $openPrsn.toggleClass('activePersona'); });
	}
	$openPrsn.click(function() {
		$savePrsn.prop( "disabled", true ).addClass('disabledButton');
		$prsn_QnttyChangeHab.val( $iniPerHab.val() );
		$prsn_QnttyChangeAdult.val( $iniPerAdult.val() );
		$prsn_QnttyChangeChild.val( $iniPerChild.val() );
		$prsnQntty.fadeIn();
		$tmpDisabled.fadeIn();
		$(this).toggleClass( 'activePersona' );
	});
	$savePrsn.click(function() {
		if ($prsnQntty.valid()) {
			$iniPerHab.val( $prsn_QnttyChangeHab.val() ); $txtHabs.html( $prsn_QnttyChangeHab.val() );
			$iniPerAdult.val( $prsn_QnttyChangeAdult.val() ); $txtAdlt.html( $prsn_QnttyChangeAdult.val() );
			$iniPerChild.val( $prsn_QnttyChangeChild.val() ); $txtChld.html( $prsn_QnttyChangeChild.val() );
			enablePerson();
		}
	});
	$cancelPrsn.click(function() {
		$prsnQntty.validate().resetForm();
		enablePerson();
	});

	function watchChangePersons() {
		var iniPerson = $iniPerHab.val()+'-'+$iniPerAdult.val()+'-'+$iniPerChild.val(),
				ntChng = parseInt($prsn_QnttyChangeHab.val())+'-'+parseInt($prsn_QnttyChangeAdult.val())+'-'+parseInt($prsn_QnttyChangeChild.val());

		if ( iniPerson == ntChng || !$prsnQntty.valid() ) { $savePrsn.prop( "disabled", true ).addClass('disabledButton'); }
		else { $savePrsn.prop( "disabled", false ).removeClass('disabledButton'); };
	}
	$prsn_QnttyChangeHab.keyup(watchChangePersons);
	$prsn_QnttyChangeAdult.keyup(watchChangePersons);
	$prsn_QnttyChangeChild.keyup(watchChangePersons);

	$opnHtLsh.click(function(event) {
		event.preventDefault();
		$(this).animate({right:-opn_HtLshWidth},function() {
			$rsrvn.animate({right:0});
			if ( !$opnHtLsh.hasClass('no-back-transition') && !$opnHtLsh.hasClass('no-hotel') ) {
				$.vegas('slideshow', { backgrounds:hotelsBackgrounds });
			};
		});
	});

	$clsHtLsh.click(function() {
		$reservForm.validate().resetForm();
		$rsrvn.animate({right:-270}, function() {
			$opnHtLsh.animate({right:0});
			if ( !$opnHtLsh.hasClass('no-back-transition') && !$opnHtLsh.hasClass('no-hotel') ) {
				$.vegas('slideshow', { backgrounds:iniBackgrounds });
			}
		});
	});

	$reservForm.find('#hotel').change(function() {
		if ( !$opnHtLsh.hasClass('no-hotel') ) {
			var htl = $(this).val(),
					htlSngl = htl.split(' || '),
					bckImgHtl = htlSngl[0];
			$.vegas('stop')( hotelsBackgrounds[bckImgHtl] );
		};
	});

	$opnInfo.hover(function() {
		var comment = $(this).attr('href');
		$(comment).stop().fadeIn('fast');
	}, function() {
		var comment = $(this).attr('href');
		$(comment).stop().fadeOut('fast');
	}).click(function(e) {
		e.preventDefault();
	});

	function scrContChange() {
		scrllCntExtra = parseInt($onlyTxt.css('margin-top')) + parseInt($onlyTxt.css('padding-bottom')) + $('.sectionTitle').height();
		scrllCntHeight = scrllCntExtra + iniHghtText;
		if ( scrllCntHeight >= $(window).height() ) {
			scrllCntHeight = $(window).height() - scrllCntExtra - 50;
			$scrllCnt.height(scrllCntHeight);
		} else { $scrllCnt.height('auto'); }
	}

	if ($container.hasClass('onlyText')) { scrContChange(); }

	$(window).resize(function() {
		opn_TxtLshWidth = $opnTxtLsh.width();
		opn_HtLshWidth = $opnHtLsh.width();
		rsrvHght = $rsrvn.height()/2;
		$rsrvn.css("margin-top","-"+rsrvHght+"px");
		if ($container.hasClass('onlyText')) { scrContChange(); }
	});
	
	$('input, textarea').placeholder();
	if ($.fn.placeholder.input && $.fn.placeholder.textarea) { /*console.log('Placeholder: input and textarea.');*/ }
	else if ($.fn.placeholder.input) { /*console.log('Placeholder: input yes, textarea no.');*/ }
});