jQuery(function($) {
	var mn = 1;
	var mx = $('.btns-sldr').data('panels');
	var crrnt = 0;

	/*$('.mr-Txt').on('click', function(e) {
		e.preventDefault();
		$('.blkTxt').fadeIn();
	});*/

	$('.btns-sldr').on('click','a',function(e) {
		e.preventDefault();
		var button = $(this);
		if (button.hasClass('nxt')) {
			// Don't allow decrementing over max
			if (crrnt < mx) {
				var nxt = parseFloat(crrnt) + 1;
			} else { nxt = mn; }

		} else {
			// Don't allow decrementing below zero
			if (crrnt > mn) {
				var nxt = parseFloat(crrnt) - 1;
			} else { nxt = mx; }
		}

		crrnt = nxt;	
		
		$('.pnl').hide();
		$('#n'+crrnt).stop().fadeIn('fast');

	});

	$('.btns-sldr a.nxt').trigger('click');

	$('.mr-Txt').fancybox({ padding:0 });
});