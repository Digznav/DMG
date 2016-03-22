var $buoop = {};
$buoop.ol = window.onload;
window.onload=function(){
	try {if ($buoop.ol) $buoop.ol();}catch (e) {}
	var e = document.createElement("script");
	e.setAttribute("type", "text/javascript");
	e.setAttribute("src", "//browser-update.org/update.js");
	document.body.appendChild(e);
}
jQuery(function($){
	var header = $( 'body > header' ),
			footer = $( 'body > footer' ),
			mainNav_FisrtLevel = $( '.stLvl' ),
			mainNav_FisrtLevel_List = mainNav_FisrtLevel.find('li'),
			mainNav_SecondLevel = $( '.ndLvl' ), mainNav_SecondLevel_Link = mainNav_SecondLevel.find('a');
	
	$('.mainNav a[href="#"], .contactList a[href="#"]').click(function(event) { event.preventDefault(); });
	$('.innerNav a').click(function(event) {
		event.preventDefault();
		if ( !$(this).hasClass( "avoid" ) ) {
			var wMask = $(this).data('w-mask');
			$('.content.mask').height(wMask);
			var selPanel = $(this).attr('href');
			var prevPanel = $('.innerNav a.avoid').attr('href');
			//var prevPanel = $('.showPanel').attr('id');
			$('.innerNav a').removeClass('avoid active');
			$(this).addClass('avoid active');
			$(prevPanel).css({ 'top':'-1000px', opacity:0 });
			$(selPanel).css('top',0);
			$(selPanel).animate({ opacity:1 },'slow' );
		}
	});
	/*function closePopup() {
		$.fancybox.close();
		$.fancybox.open('#contactoForm');
	}
	$('.opnForm').click(function(e) {
		e.preventDefault();
		closePopup();
	});*/

	
});