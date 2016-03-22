var mrgnLftPanel = -($('.panel').outerWidth()/2);

function footerMarginTop() {
	var wndwHgt = $(window).height(),
			cntnt = $('.headerPRM').height()+$('#container').height()+$('.footerPRM').height(),
			mrgnTp = wndwHgt - cntnt;
	if (wndwHgt > cntnt) { $('#container').css('padding-bottom',mrgnTp);	 }
	else { $('#container').css('padding-bottom',0);	 }
}

jQuery(function($){
	var $header = $( 'header' ),
			$mainNav = $( '.mainNav' );
	var closeHeader = $header.height(),
			openHeader = $mainNav.height();

	$header.find('.mainNav').find('a').attr("tabindex", "-1")

	var desplegado = false;
	$mainNav.children('ul').children('li').children('h2').on('click', function(){
		var ths = $(this);
		if (desplegado == false) {
			desplegado = !desplegado;
			ths.closest('header').stop().animate({ height: openHeader }, function() {
				$('.mainSubNav').fadeIn('fast');
			});
		}else {
			desplegado = !desplegado;
			$('.mainSubNav').fadeOut('fast', function() {
				ths.closest('header').stop().animate({ height: closeHeader });
			});
		};
	});

	function innerPanelFade (e,ths) {
		e.preventDefault();
		var selPanel = ths.attr('href');
		if (!ths.hasClass('activePanel')) {
			$('.innerNav').find('a').removeClass('activePanel');
			ths.addClass('activePanel');
			$('.PRMPanel').hide();
			$(selPanel).stop().fadeIn('slow');
		}
	}

	$('.NGnav.innerNav a').on('click',function(event) {
		innerPanelFade(event,$(this));
	});

	$('.GPRNav.innerNav a').on('click',function(event) {
		var selClass = $(this).attr('href').replace('#','');
		$('#container').removeClass().addClass('backGPR_AcercaDe_'+selClass);
		innerPanelFade(event,$(this));
	});

	$('.panel').delay(100).animate({
		opacity: 1,
		marginLeft: mrgnLftPanel,
	},1500, 'easeOutExpo');

	$('.doItSlide').click(function(e) {
		e.preventDefault();
		if (!$(this).hasClass('activeNav')) {
			var selPage = $(this).attr('href');
			$('.panel').animate({
				opacity: 1,
				marginLeft: 0,
			},500, 'easeInExpo', function() {
				document.location.href = selPage;
			});
		};
	});
	
	$(window).resize(function() {
		mrgnLftPanel = -($('.panel').outerWidth()/2);
		//console.log( $('.panel').width() );
		//console.log( $('.panel').outerWidth() );
		//console.log(mrgnLftPanel);
		$('.panel').css('margin-left',mrgnLftPanel);

		footerMarginTop();
	});

});

$(window).load(function () {
	var endTime = (new Date()).getTime();
	var millisecondsLoading = endTime - startTime;
	footerMarginTop();
	//console.log(millisecondsLoading);
});