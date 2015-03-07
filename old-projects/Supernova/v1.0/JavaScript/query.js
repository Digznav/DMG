jQuery(function($){
	var header = $( 'body > header' ),
			footer = $( 'body > footer' ),
			
			mainNav_FisrtLevel = $( '.stLvl' ),
			mainNav_FisrtLevel_List = mainNav_FisrtLevel.find('li'),
			mainNav_SecondLevel = $( '.ndLvl' ), mainNav_SecondLevel_Link = mainNav_SecondLevel.find('a');

	mainNav_FisrtLevel_List.hover(
		function() {
			$(this).find('.ndLvl').stop().fadeIn('fast');
		},
		function() {
			$(this).find('.ndLvl').stop().fadeOut('fast');
		}
	);

	mainNav_SecondLevel_Link.click(function(e) {
		e.preventDefault();
		var selPanel = $(this).attr('href');
		$('.panel').hide();
		$(selPanel).fadeIn();
	});
});