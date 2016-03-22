var estoy;
var voy;
for (i=1; i<=50; i++){
	$('.gallery').append('<a href="#popup-box" class="other_pop" data-image="D1_' + i + '"><img src="imgs/galeria/1/thumbs/D1_' + i + '.jpg" alt="D1_' + i + '"></a>');
	estoy = i;
	console.log(estoy);
};
estoy++;
$(window).scroll(function(){
	if ($(window).scrollTop() + $(window).height() == $(document).height()) {
		voy = estoy + 4;
		for (i=estoy; i<=voy; i++){
			if ( estoy < 279 ) {
				$('.gallery').append('<a href="#popup-box" class="other_pop" data-image="D1_' + i + '"><img src="imgs/galeria/1/thumbs/D1_' + i + '.jpg" alt="D1_' + i + '"></a>');
				estoy = i;
			}
			console.log(estoy + 'dentro del scroll');
		}
		estoy++;
	};
});

$('.other_pop').live('click', function() {
	var loginBox = $(this).attr('href');
	var imagen = $(this).attr('data-image');
	$(loginBox).fadeIn(300);
	var popMargTop = ($(loginBox).height()) / 2;
	var popMargLeft = ($(loginBox).width()) / 2;
	$(loginBox).css({ 'margin-top':-popMargTop, 'margin-left':-popMargLeft });
	$('.btn_close').fadeIn();
	$('body').append('<div class="mask"></div>');
	$('.mask').fadeIn(300);
	$('#actual').attr('src', 'imgs/galeria/1/' + imagen + '.jpg');
	return false;
});