$(document).ready(function() {
	var first_subnav = $('.panel').first(),
			first_panel = '#' + first_subnav.attr('id');
	var actual_panel = first_panel,
			next_panel;
	
	//Carousel Pikachoose
	$("#pikame").PikaChoose({ transition:[5],showCaption:false });
	//Ajax popup
	$('.ajax_pop').click(function() {
		//Getting the variable's value from a link
		var loginBox = $(this).attr('href');
		var loadSizeWidth = 600;
		var loadSizeHeight = 350;
		//Fade in the Popup
		$(loginBox).fadeIn(300);
		$(loginBox).css({ 'width':'50px', 'height':'50px' });
		//Set the center alignment padding + border see css style
		var popMargTop = ($(loginBox).height()) / 2;
		var popMargLeft = ($(loginBox).width()) / 2;
		$(loginBox).css({ 'margin-top':-popMargTop, 'margin-left':-popMargLeft });
		// Add the mask to body
		$('body').append('<div class="mask"></div>');
		$('.mask').fadeIn(300);
		// ajax
		var id = $(this).attr('data-popup');
		$.ajax({
			type:'GET',
			data:'memberID=' + id,
			url:'libs/getmember.php',
			dataType:'text',
			timeout:3000,
			beforeSend:function(objeto){
				$('.progress').fadeIn(10);
				$('.resultado').fadeOut(10);
				/*console.log('estoy enviando');*/
				$('.progress').html('<img src="imgs/loader2.gif" alt="processing">');
			},
			success:function(datos){
				/*console.log(datos);*/
				$('.progress').fadeOut();
				$(loginBox).animate({
					width: loadSizeWidth,
					height: loadSizeHeight,
					marginLeft: -(loadSizeWidth / 2),
					marginTop: -(loadSizeHeight / 2)
				},
				300,
				function(){
					$('.btn_close').fadeIn();
					$('.resultado').fadeIn().html(datos);
				});
			}
		});
		return false;
	});
	//Normal popup
	$('.normal_pop').click(function() {
		//Getting the variable's value from a link
		var loginBox = $(this).attr('href');
		//Fade in the Popup
		$(loginBox).fadeIn(300);
		//$(loginBox).css({ 'width':'400px', 'height':'300px' });
		//Set the center alignment padding + border see css style
		var popMargTop = ($(loginBox).height()) / 2;
		var popMargLeft = ($(loginBox).width()) / 2;
		$(loginBox).css({ 'margin-top':-popMargTop, 'margin-left':-popMargLeft });
		$('.btn_close').fadeIn();
		// Add the mask to body
		$('body').append('<div class="mask"></div>');
		$('.mask').fadeIn(300);
		return false;
	});
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, .mask').live('click', function() {
		$('.mask , .popup').fadeOut(300 , function() {
			$('.mask').remove();
		});
		return false;
	});
	//Enabled/Disabled Guest input
	$('#eYes').change(function(){
		$('#eGuest').attr('disabled', !this.checked);
		$('#eGuest').attr('value', 0);
	});
	//Sponsors aside trick
	$(window).scroll(function(){
		if($(window).scrollTop() >= 315){
			$('.sponsors').css({
				'position':'fixed', 'top':'0', 'left':'50%', 'margin-left':'-450px', 'z-index':'99999'
			});
		}
		else {
			$('.sponsors').css({
				'position':'static', 'margin':'0'
			});
		}
	});
	//Arrive
	$(window).resize(function() {
		size_ArriveMap();
	});
	function size_ArriveMap(){
		//768 453
		if ( $(window).height() < 768){
			$('.arrive_map').css({
				'height': $(window).height() - 355 + ( 768 - $(window).height() )
			});
		}
		else
		{
			$('.arrive_map').css({
					'height': $(window).height() - 405
				});
		}
	}
	size_ArriveMap();

	$('.panel').hide();
	$(first_panel).show();
	$('.scoreSubnav').on('click', 'a.botsubMenu', function(e){
		e.preventDefault();
		next_panel = $(this).attr('href');
		if(next_panel != actual_panel){
			$(actual_panel).hide();
			$(next_panel).show();
			actual_panel = next_panel;
			$('.scoreSubnav a.elementActive').removeClass('elementActive');
			$(this).addClass('elementActive');
		}
	});
});