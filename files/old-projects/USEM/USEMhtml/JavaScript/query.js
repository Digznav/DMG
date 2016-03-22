$(document).ready(function(){
	var first_subnav = $('.panel').first(),
			first_panel = '#' + first_subnav.attr('id');
	var actual_panel = first_panel,
			next_panel;
	var listaImagenes = null;
	
	$('.panel').hide();
	$(first_panel).show();
	$('.subNav').on('click','a', function(e){
		e.preventDefault();
		next_panel = $(this).attr('href');
		if(next_panel != actual_panel){
			$(actual_panel).hide();
			$(next_panel).show();
			actual_panel = next_panel;
			$('.subNav a.elementActive').removeClass('elementActive');
			$(this).addClass('elementActive');
		}
	});
	$('.bot_subNav').click(function(e){
		e.preventDefault();
		next_panel = $(this).attr('href');
		if(next_panel != actual_panel){
			$(actual_panel).hide();
			$(next_panel).show();
			actual_panel = next_panel;
			$('.subNav a.elementActive').removeClass('elementActive');
		}
	});
	$('.downCalendar').hover(
		function() { $('.tooltip').stop().fadeIn('fast'); },
		function() { $('.tooltip').stop().fadeOut('fast'); }
	);

	function showTitleGallery() { $(this).closest('li').find('span').stop().slideToggle('fast'); }
	function hideTitleGallery() { $(this).closest('li').find('span').stop().slideToggle('fast'); }
	function getImagesList(event) {
		event.preventDefault();
		var albumSel = $(this).data("album");
		var finalList = "";
		$(this).closest('.albumList').find('li').removeClass('albumSelected');
		$(this).closest('li').addClass('albumSelected');

		if (listaImagenes) { listaImagenes.abort(); }

		listaImagenes = $.ajax({
			url:"libs/gallery.json",
			dataType:"JSON",
			cache:false,
			timeout:8000,
			beforeSend: function(result){
				$.colorbox.remove();
				$('.galleryAdvice').hide();
				$('.galleryLoading').show();
				$('.galleryError').hide();
				$('.imagesList').empty().hide();
				$('.titleGallery').hide();
			},
			complete: function (result){
				$('.galleryLoading').hide();
				listaImagenes= null;
			},
			success: function(result){
				$.each(result, function(key, albumes){
					$.each(albumes, function(key, album){
						if (album.AlbumName == albumSel) { albumSel = album; }
					});
				});
				$('.titleGallery').show().find('span').html(albumSel.Title);
				if (albumSel.AlbumName == 'videos'){
					finalList += '<li><a href="' + albumSel.URLVideo + '" title="' + albumSel.Title + '" class="youtube"><img src="' + albumSel.Url + 'img1.jpg' + '" alt="' + albumSel.AlbumName + '"></a></li>';
				}
				else {
					for (var i = 1; i <= albumSel.Images; i++) {
						//var imagen = $("<img>", { src:albumSel.Url + 'img' + i + '.jpg', alt:albumSel.AlbumName });
						//var anchor = $("<a></a>", { class:'group', href:albumSel.Url + 'img' + i + '.jpg', title:albumSel.Title } );
						finalList += '<li><a href="' + albumSel.Url + 'img' + i + '.jpg' + '" title="' + albumSel.Title + '" class="groupColor"><img src="' + albumSel.Url + 'img' + i + '.jpg' + '" alt="' + albumSel.AlbumName + '"></a></li>';
					}
				}
				$('.imagesList').append(finalList).show();

				if (albumSel.AlbumName != "videos") {
					$('.imagesList').delegate('a.groupColor','click', function(e){
						e.preventDefault;
						$.colorbox({ href:$(this).attr('href'), title:$(this).attr('title') });
						return false;
					});
				}
				else {
					$('.imagesList').delegate('a.youtube','click', function(e){
						e.preventDefault;
						$.colorbox({ href:$(this).attr('href'), title:$(this).attr('title'), iframe:true, innerWidth:640, innerHeight:360 });
						return false;
					});
				}
			},
			error: function(error){
				if(error.statusText != "abort") {
					$('.galleryError').show();
				}
			}
		});
	}

	$('.albumList a').bind({
		mouseenter: showTitleGallery,
		mouseleave: hideTitleGallery,
		click: getImagesList
	});
	function widhtCont() {
		var cntHght = $('.container').height(),
				cntMrgn = parseInt(($('.container').css('margin-bottom'))),
				ftHght = $('.footUSEM').height(),
				ttlHght = cntHght+cntMrgn+ftHght;
				wndwHght = $(window).height();
		$('.footUSEM').css('marginTop',0);
		if ((wndwHght-ttlHght) > 0) {
			$('.footUSEM').css('marginTop',wndwHght-ttlHght);
		};

	}

	$(window).resize(function() {
		widhtCont();
	});
	widhtCont();
});