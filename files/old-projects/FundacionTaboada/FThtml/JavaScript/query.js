var months = new Array();
		months['Enero'] = 'January';
		months['Febrero'] = 'February';
		months['Marzo'] = 'March';
		months['Abril'] = 'April';
		months['Mayo'] = 'May';
		months['Junio'] = 'June';
		months['Julio'] = 'July';
		months['Agosto'] = 'August';
		months['Septiembre'] = 'September';
		months['Octubre'] = 'October';
		months['Noviembre'] = 'November';
		months['Diciembre'] = 'December';
(function($){
	$.fn.setEnglishDate = function(options) {
		// setting the defaults
		// $("textarea").textareaCounter({ limit: 100 });
		var defaults = { esp_mes:'#mes', esp_dia:'#dia', esp_anio: '#anio', eng_date:'#engDate' };
		var options = $.extend(defaults, options);
		// and the plugin begins
		return this.each(function() {
			/*var obj, text, wordcount, limited;*/
			var obj = $(this), monthSel, day, month, year;

			obj.change(function() {
				monthSel = $(options.esp_mes).val(),
				day = $(options.esp_dia).val(),
				year = $(options.esp_anio).val();
				if (monthSel != '' && day != '' && year != '') {
					month = months[monthSel]
					$(options.eng_date).val(month +' '+ day + ', ' + year);
				} else {
					$(options.eng_date).val('Select a date...');
				};
			});
		});
	};
})(jQuery);
/*function setDate(eMes, eDia, eAnio, iDate) {
	var monthSel = $(eMes).val(),
			day = $(eDia).val(),
			month,
			year = $(eAnio).val();
	if (monthSel != '' && day != '' && year != '') {
		month = months[monthSel]
		$(iDate).val(month +' '+ day + ', ' + year);
	} else {
		$(iDate).val('Select a date...');
	};
}*/
$(document).ready(function(){
	var getNews = null;
	var ruta = window.location.href,
			split = ruta.split('/'),
			pageTo = split[split.length - 1];
	var langElement = $('.langEngEsp a:not(.activeLang)'),
			otherLang = langElement.data('lang');
	function disabledNav(e) { e.preventDefault(); }
	$('.mainNav a[href="#"]').click(disabledNav);
	$('footer a[href="#"]').click(disabledNav);

	if (pageTo == '') { pageTo = 'index.html' };
	if (otherLang == 'es') { langElement.attr('href', '../'+pageTo ); }
	if (otherLang == 'en') { langElement.attr('href', 'en/'+pageTo ); }
	
	/*if (getNews) { getNews.abort(); }
	getNews = $.ajax({
		url: 'news.html',
		dataType:'HTML',
		cache:false,
		timeout:8000,
		beforeSend: function(result) {
			$('.loadingNews').show();
			$('.errorNews').hide();
		},
		complete: function (result) {
			$('.loadingNews').hide();
			getNews = null;
		},
		success: function(result) {
			$('.news header').after(result);
		},
		error: function(error) {
			if (error.statusText != 'abort') {
				$('.errorNews').show();
			}
		}
	});*/
	function enableEnglish() {
		var topics = $(this).closest('fieldset').find('.englishElements'),
				topicInputs = topics.find('input'),
				topicTextareas = topics.find('textarea')
				aviso = $(this).closest('fieldset').find('.aviso');
		if ($(this).is(':checked')) { aviso.hide(); }
		else { aviso.show(); };
		topics[this.checked ? 'removeClass' : 'addClass']('gray');
		topicInputs.attr('disabled', !this.checked);
		topicTextareas.attr('disabled', !this.checked).val('');
		topics.find('textarea.readOnly').val('');
		topics.find('input:not(.readOnly)').val('');
		if ($(this).val() == 'yesEngUpdate') {
			var ddia = $('#diaUpdate').val(),
				mmes = $('#mesUpdate').val(),
				mmonth = months[mmes],
				aanio = $('#anioUpdate').val();
			$('#dateUpdate').val(mmonth +' '+ ddia + ', ' + aanio);
		}
	};
	
	$('.yesEngAdd').click(enableEnglish);
	$('.yesEngUpdate').click(enableEnglish);

	$('.fechaAdd').setEnglishDate({esp_mes:'#mesAdd',esp_dia:'#diaAdd',esp_anio:'#anioAdd',eng_date:'#dateAdd'});
	$('.fechaUpdate').setEnglishDate({esp_mes:'#mesUpdate',esp_dia:'#diaUpdate',esp_anio:'#anioUpdate',eng_date:'#dateUpdate'});
	
	
	
});
$(function() {
	$('input, textarea').placeholder();
	if ($.fn.placeholder.input && $.fn.placeholder.textarea) { console.log('Placeholder: input and textarea.'); }
	else if ($.fn.placeholder.input) { console.log('Placeholder: input yes, textarea no.'); }
});