$(document).ready(function(){
	var prevImgSelected = "", currentImgSelected = "";
	$('body').append('<div class="curve imgBack"></div>');

	function setImageDescription() {
		currentImgSelected = $(this).data('area');
		$('.imageIndex').removeClass(prevImgSelected);
		$('.imageIndex').addClass(currentImgSelected);
		prevImgSelected = currentImgSelected;
	}
	function removeImageDesription() {
		$('.imageIndex').removeClass(prevImgSelected);
		currentImgSelected= "";
		prevImgSelected= "";
	}
	$('.person').hover(setImageDescription, removeImageDesription);
	$('.plant').hover(setImageDescription, removeImageDesription);
	$('.time').hover(setImageDescription, removeImageDesription);
	$('.dove').hover(setImageDescription, removeImageDesription);
	$('.light').hover(setImageDescription, removeImageDesription);

	$('.panel').hide().first().show();
	$('.subNav').on('click','a', function(e){
		e.preventDefault();
		var subNavSelected = $(this).attr('href');
		$('.panel').hide();
		$(subNavSelected).show();
		$('.subNav a').removeClass('subNavSelected');
		$(this).addClass('subNavSelected');
	});


	/*var footerRight = (parseInt($('.content').css('width'))-parseInt($('footer').css('width')))/2;
	$('footer').css('right',footerRight);

	$('.textContent').find('li').click(function(){
		var muestra = $(this).data('tab');
		$('.tabs').hide();
		$(muestra).show();
	});*/
});