var changingMnths = null, mvTo, selMonth, articlesItems, jrnlObj, htmlArticlesList = [];
var journal = {
	init: function() {
		jrnlObj = this;
		var st_nav_el = $('.navPrensa .prsMth').first().find('a');
		selMonth = st_nav_el.data('month');
		mvTo = $('.rtclLoader').width();
		st_nav_el.addClass('selMth');
		$('.navPrensa .prsMth').on('click','a',jrnlObj.changeMonth);
		$('.articlesLists').on('click','.seeMore',jrnlObj.loadSingleArticle);
		jrnlObj.loadMonthsArticles(selMonth);
	},
	changeMonth: function(event) {
		event.preventDefault();
		selMonth = $(this).data('month');
		if (!$(this).hasClass('selMth')) {
			$(this).closest('.navPrensa').find('a.selMth').removeClass('selMth');
			$(this).addClass('selMth');
			jrnlObj.loadMonthsArticles(selMonth);
		};
	},
	loadSingleArticle: function(event) {
		event.preventDefault();
		var selSingArt = $(this).data('id-article');
		var fullArt = $('.fullArticle');
		$.each(htmlArticlesList, function(idx,obj) {
			if (obj.IDArticle == selSingArt) {
				$('.outImgTxt').detach().html(obj.outImgTxt).appendTo('.outCont');
				fullArt.find('img').attr({ src:obj.Img, alt:obj.Title });
				fullArt.find('.txtContArt').find('h3').html(obj.Title);
				fullArt.find('.txtContArt').find('div').html(obj.Article);
			};
		});
		$('.pnlArt').animate({marginLeft:-mvTo}, function() {
			$('.bakToList').fadeIn();
			$('.outImgTxt').fadeIn();
		});
		//htmlArticlesList
		/*$('.rtclLoader').stop().fadeIn('fast').delay(1000).fadeOut('fast',function() {
			
		});*/
	},
	loadMonthsArticles: function(mnth) {
		
		$('.articlesLists').empty();
		$('.pnlArt').css({marginLeft:0});
		$('.bakToList').hide();
		$('.outImgTxt').fadeOut('fast');

		if (changingMnths) { changingMnths.abort(); };
		changingMnths = $.ajax('/libs/'+mnth+'.json', {
			data: {id:mnth },
			dataType:'json',
			cache:false,
			timeout:5000,
			beforeSend:function(result){
				$('.rtclLoader').fadeIn('fast');
			},
			complete:function(result){
				$('.rtclLoader').fadeOut('fast',function() {
					$('.resume').each(function(i) {
						$(this).delay(i*100).fadeIn();
					});
				});
			},
			success:function(result){
				htmlArticlesList = [];
				articlesItems = $.map(result, function(obj,idx) {
					htmlArticlesList.push(obj);
					var artList = $('<article>', {'class':'resume'}),
							artImg = $('<img />', {'src':obj.Img, 'alt':obj.Title, 'class':'imgArt'}).appendTo(artList),
							artResume = $('<div>', {'class':'txtContArt'});
					$('<h3>'+obj.Title+'</h3>').appendTo(artResume);
					$('<div class="clearfix ttA">'+obj.Resume+'</div>').appendTo(artResume);
					$('<a class="seeMore" href="#" data-id-article="'+obj.IDArticle+'">Ver más</a>').appendTo(artResume);
					artResume.appendTo(artList);
					return artList;
				});
				$('.articlesLists').detach().html(articlesItems).prependTo('.pnlArt');
			},
			error:function(error){
				if (error.statusText != "abort") {
					//console.log(error);
				};
			}
		});
	}
}

jQuery(function($) {
	journal.init();
	
	
	$('.bakToList').on('click', function(e) {
		e.preventDefault();
		$('.outImgTxt').fadeOut('fast');
		$(this).fadeOut('fast',function() {
			$('.pnlArt').animate({marginLeft:0});
		});
		
	});
});