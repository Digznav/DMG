var actualArray = 0;
$(document).ready(function(){
	var first_subnav = $('.panel').first(),
			first_panel = '#' + first_subnav.attr('id');
	var margen_izq = $('.general_cont').width() - $(first_panel).width(),
			margen_izq_hide = -1 * ($('.panel').width() - margen_izq);
	var actual_panel = first_panel,
			next_panel;

	var firstShopStep = $('.cont_shop').find('.steps').eq(0),
			secondShopStep = $('.cont_shop').find('.steps').eq(1);
	
	var ruta = window.location.href,
			esplit = ruta.split("/"),
			last_item = esplit[esplit.length - 1],
			nombre_pagina = last_item.split(".");

	var opacidad = 0;

	var posicion_boton, posicion_boton_top;

	var posicion_inicial = $('.button_navigation').position(),
			posicion_inicial_top = posicion_inicial.top;

	var hover_here, hover_here_top;

	var ancho_texto_accr,
			margen_imagen = parseInt($('.img_accr').css('marginRight'));

	var shadows_div = $('<div class="shadows"></div>'),
			shadows_subnav_div = $('<div class="shadows_subnav"></div>'),
			hover_button_navigation_shadow_div = $('<div class="hover_button_navigation_shadow"></div>');

	var stepTwo = null, getModels = null, getResults = null, catSelected = null, catSelectedBefore = null;
	
	var phrasesPage = [
		'Hoy, el sol golpeará duramente sobre su vehículo.',
		'Hoy, ráfagas de viento y polvo golpearán su vehículo.',
		'Hoy, la lluvia caerá sobre su vehículo.',
		'Hoy, abundante ceniza caerá sobre su vehículo.',
		'Hoy, cambios bruscos de temperatura azotarán su vehículo.',
		'No vayas más lejos, adquiere tu funda en nuestra tienda en línea.'
	];
	$('.corte span').loadText( phrasesPage, 5000 );

	ancho_texto_accr = $('.cont_accr').width() - $('.img_accr').width() - margen_imagen - 2;
	$('.cont_accr p').width(ancho_texto_accr);
	
	$('.panel').hide();
	$('.but_nav').addClass('animate_here').last().addClass('notLine');
	$('.but_subnav').last().addClass('notVline');
	$('.fondo').after(shadows_div).after(shadows_subnav_div);
	$('.hover_button_navigation').after(hover_button_navigation_shadow_div);
	
	$('.hover_button_navigation').css('top', posicion_inicial_top).hide();
	$('.hover_button_navigation_shadow').css( 'top' , posicion_inicial_top).hide();
	
	if (last_item == "" || last_item == "index.html" || last_item == "feeper.com"){
		/*$('.shadows').css({ 'background': "url('imgs/menuP_shadow.png') no-repeat 22px 0, url('imgs/fondo_shadow.png') no-repeat 0 53px" });*/
		$('.shadows_subnav').hide();
		
		$('.but_nav').hover(
			function(){
				posicion_boton = $(this).position();
				posicion_boton_top = posicion_boton.top + posicion_inicial.top;
				if (opacidad == 0){
					$('.hover_button_navigation').fadeIn(200);
					$('.hover_button_navigation_shadow').fadeIn(200);
				};
				opacidad = 1;
				/*$('.hover_button_navigation').animate( { 'top': posicion_boton_top } , 50);*/
				$('.hover_button_navigation').css({ 'top': posicion_boton_top});
				$('.hover_button_navigation_shadow').css({ 'top': posicion_boton_top});
			}
		);
	}
	else{
		/*$('.shadows').css({ 'background': "url('imgs/menuP_shadow.png') no-repeat 22px 0, url('imgs/menu_shadow.png') no-repeat 848px 111px, url('imgs/fondo_shadow.png') no-repeat 0 53px" });*/
		if ( nombre_pagina[0] == "tienda") {
			$('.shadows_subnav').hide();
		}
		
		$('#' + nombre_pagina[0]).addClass('active_here').removeClass('animate_here');
		$('.hover_button_navigation').show();
		$('.hover_button_navigation_shadow').show();
		
		hover_here = $('#' + nombre_pagina[0]).position();
		hover_here_top = hover_here.top;
		posicion_inicial_top = posicion_inicial_top + hover_here_top;
		
		$('.hover_button_navigation').css({ 'top': posicion_inicial_top });
		$('.hover_button_navigation_shadow').css({ 'top': posicion_inicial_top });

		$('.but_nav').hover(
			function(){
				posicion_boton = $(this).position();
				posicion_boton_top = posicion_boton.top + posicion_inicial.top;
				$('.hover_button_navigation').css({ 'top': posicion_boton_top });
				$('.hover_button_navigation_shadow').css({ 'top': posicion_boton_top });
			},
			function(){
				$('.hover_button_navigation').css({ 'top': posicion_inicial_top });
				$('.hover_button_navigation_shadow').css({ 'top': posicion_inicial_top });
			}
		);
	}

	$('.hover_button_navigation').hover(function(){
		if (opacidad == 1){
			$('.hover_button_navigation').fadeOut(200);
			$('.hover_button_navigation_shadow').fadeOut(200);
		}
		opacidad = 0;
	});
	$('.imagen_nav').hover(function(){
		if (opacidad == 1){
			$('.hover_button_navigation').fadeOut(200);
			$('.hover_button_navigation_shadow').fadeOut(200);
		}
		opacidad = 0;
	});

/*::::Animacion de paneles::::*/
	$(first_panel).show().animate({ left: margen_izq }, 400 );
	$('.but_subnav').on('click', function(event){
		event.preventDefault();
		$('.sub_nav a').removeClass('subNavActive');
		$(this).addClass('subNavActive');
		next_panel = $(this).attr('href');
		if(next_panel != actual_panel){
			$(actual_panel).animate({ left: margen_izq_hide }, 400, function(){ $(this).hide(); });
			$(next_panel).show().animate({left: margen_izq }, 400);
			actual_panel = next_panel;
		}
	});
	if (nombre_pagina[0] == 'materiales' || nombre_pagina[0] == 'ayuda' || nombre_pagina[0] == 'contacto'){
		$('.but_' + nombre_pagina[0]).on('click', function(event){
			event.preventDefault();
			$('.sub_nav a').removeClass('subNavActive');
			next_panel = $(this).attr('href');
			if(next_panel != actual_panel){
				$(actual_panel).animate({left: margen_izq_hide }, 400, function(){ $(this).hide(); });
				$(next_panel).show().animate({left: margen_izq }, 400);
				actual_panel = next_panel;
			}
		});
	}

/*::::TIENDA::::*/
	/*Pasos de tienda - Animación inicial*/
	firstShopStep.toggleClass('step_visible');

	/*Botones de categorías*/
	function showTitleCategory () { $(this).closest('li').find('span').stop().slideToggle('fast'); }
	function hideTitleCategory () { $(this).closest('li').find('span').stop().slideToggle('fast'); }
	
	/*Función que regresa al paso uno*/
	function returntoStepOne (e) {
		e.preventDefault();
		/*secondShopStep.find('form legend').empty();*/
		$('#sBrand').empty().append('<option value="">Selecciona una marca</option>').removeAttr('data-category');
		$('#sModel').empty().append('<option value="">Selecciona un modelo</option>');
		$('#input_modelos').hide();
		$('#search').addClass('search_disabled').removeClass('search').prop('disabled', true);
		
		if ( $('.sold_out').is(':visible') ){ $('.sold_out').hide(); }
		if ($('.error_models').is(':visible')) { $('.error_models').hide(); }
		
		firstShopStep.toggleClass('step_visible');
		secondShopStep.toggleClass('step_visible');
		
		if ( $('.result_list').is(':visible') ){			
			$('.result_list').empty().hide();
			$('.result_image').empty().hide();
			$('.promoProducts').show();
			$('.error_results').hide();
		}
		/*hideResultsList();*/
	}
	
	/*Función que activa el paso dos y llena el campo de marcas*/
	function activeStepTwo (e) {
		var noCaterogia = $(this).data("category");
		/*var url = $(this).attr('href');*/

		catSelected = $(this);
		
		if (noCaterogia == 1) { $('.avisoFundasCarros').show(); }
		else { $('.avisoFundasCarros').hide(); }
		e.preventDefault();

		if (stepTwo) { stepTwo.abort(); }

		stepTwo = $.ajax({
			url:'getSearchElements.php',
			data: { 'category': noCaterogia },
			dataType:'JSON',
			cache:false,
			timeout:8000,
			beforeSend: function(result) {
				catSelected.children('img').hide();
				catSelected.find('.cat_loading').show();
				catSelectedBefore = catSelected;
			},
			complete: function (result) {
				catSelected.find('img').show();
				catSelected.find('.cat_loading').hide();
				stepTwo = null;
			},
			success: function(result) {
				//$('#feeper_shop').hide();
				secondShopStep.find('form legend').empty().text( result.category.categoria );
				
				if (result.brands.length == 0) { $('.sold_out').show(); }
				else {
					var brandList = $.map(result.brands, function(brand){
						return '<option value="' + brand.id_marca + '">' + brand.marca + '</option>';
					});
					$('#input_marcas').find('#sBrand').attr('data-category', result.category.id_categoria ).append(brandList.join(''));
				}
				$('#input_modelos').hide();
				//$('#search').hide(); <----------------------------------------------------------Search
				firstShopStep.toggleClass('step_visible');
				secondShopStep.toggleClass('step_visible');
			},
			error: function(error) {
				if (catSelectedBefore.find('.cat_loading').is(':visible')){
					catSelectedBefore.find('.cat_loading').hide();
					catSelectedBefore.find('img').show();
				}
				if (error.statusText != "abort") {
					$('#step_one').append('<div class="error_cat_loading"><strong>No se pudo realizar la búsqueda correctamente.</strong><br>Por favor intente de nuevo.</div>');
					$('.error_cat_loading').delay(1500).fadeOut(function(){ $(this).remove(); });
					
				}
			}
		});
	}
		/*Función que se activa después de seleccionar la marca y llena el campo con los modelos de la marca seleccionada*/
		function getModelProducts(e) {
			var idMarca = $('#sBrand').val();
			var marcaCateogoria = $('#sBrand').attr('data-category');

			if (getModels) { getModels.abort(); }
			
			getModels = $.ajax({
				url:'getSearchElements.php',
				data:{ 'brand': idMarca , 'brandCategory' : marcaCateogoria },
				dataType:'JSON',
				cache:false,
				timeout:8000,
				beforeSend: function(result) {
					$('#input_modelos').hide().find('#sModel').empty().append('<option value="">Selecciona un modelo</option>');
					$('.loading_models').show();
					$('.error_models').hide();
					$('.error_models').hide();
					$('#search').addClass('search_disabled').removeClass('search').prop('disabled', true);
				},
				complete: function(result) {
					$('.loading_models').hide();
					getModels = null;
				},
				success: function(result) {
					if (result.models.length == 0) { $('.sold_out').show(); }
					else {
						var modelsList = $.map(result.models, function(model){
							return '<option value="' + model.id_modelo + '">' + model.modelo + '</option>';
						});
						$('#input_modelos').show().find('#sModel').attr('data-brand', result.id_marca ).append(modelsList.join(''));
					}
				},
				error: function(error) {
					if (error.statusText != "abort") {
						$('.error_models').show();
					}
				}
			});
		}

	/*Función que muestra los resultados de la búsqueda es base a los campos seleccionados*/
	function showResultsList(e) {
		e.preventDefault();
		$('.result_image').empty();
		$('.promoProducts').fadeOut('fast',function() {
			$('.result_list').empty().show(function(){
				addResult($('.resultSection .result_list'), $('.result_image'));
			});
		});
	}
	
	/*function hideResultsList(){ }*/
	
		/*Función que añade cada uno de los resultados*/
		function addResult (resultDiv, imageDiv) {
			//Aqui se hace el llamado de Ajax con los datos de la busqueda
			var dataForm = $('#feeper_shop').serialize(),
					actualBrand = $('#sBrand').val(),
					actualModel = $('#sModel').val(),
					actualCategory = $('#sBrand').attr('data-category'),
					imgCat = '';
			/*var imgCat = 'cat' + actualCategory + '.png';*/

			if (getResults) { getResults.abort(); }

			getResults = $.ajax({
				url:'getResultElements.php',
				data: dataForm,
				dataType:'JSON',
				cache:false,
				timeout:8000,
				beforeSend: function(result) {
					$('.error_results').hide();
					$('.loading_results').show();
				},
				complete: function(result) {
					$('.loading_results').hide();
					getResults = null;
				},
				success: function(result) {
					if (result.resultadosBusqueda.length == 0) {
						$('.error_results').html('<span><strong>Lo sentimos, Este producto está agotado.</strong><br>Por favor realice otra búsqueda.').show();
					}
					else {
						var resultList = $.map(result.resultadosBusqueda, function(elementSearch){
							/*'<ul class="result" data-brand="' + result.marcaDescrip.id_marca + '" data-model="' + result.modeloDescrip.id_modelo + '" data-code="' + elementSearch.idproducto + elementSearch.clave + '-' + elementSearch.IdMaterial + '" data-price="' + elementSearch.precio + '">*/
							
							return '<ul class="result"><li class="product_descrip"><ul><li><strong>Modelo: </strong><span>' + result.modeloDescrip.modelo + '</span></li><li><strong>Material: </strong><span>' + elementSearch.material + '</span></li><li><strong>Código: </strong><span>' + elementSearch.idproducto + elementSearch.clave + '-' + elementSearch.IdMaterial + '</span></li><li><strong>Precio: </strong><span>$' + elementSearch.precio + '</span></li></ul></li><li class="payment_methods"><ul><li><a href="#" data-url="https://mexico.dineromail.com/Carrito/cart.asp?NombreItem=Funda ' + result.marcaDescrip.marca + ' ' + result.modeloDescrip.modelo + ' ' + elementSearch.material + '&TipoMoneda=1&PrecioItem=' + elementSearch.precio + '&NroItem=' + elementSearch.idproducto + elementSearch.clave + '-' + elementSearch.IdMaterial + '&image_url=https://mexico.dineromail.com/imagenes/LogosVendedores/146490.jpg&DireccionExito=http://www.feeper.com/2009/gracias.php&DireccionFracaso=http://www.feeper.com/2009/asusordenes.php&DireccionEnvio=1&Mensaje=1&Comercio=146490"><img src="https://mexico.dineromail.com/imagenes/vender/agregar/agregar-al-carrito.gif" alt="dineromail"></a></li><li><a href="#" data-url="paypal/agregacar.php?id=' + elementSearch.idproducto + '"><img src="https://www.paypal.com/en_US/i/btn/btn_cart_LG.gif" alt="paypal"></a></li></ul></li></ul>';

							/*return '<ul class="result">
													<li class="product_descrip">
														<ul>
															<li><strong>Modelo: </strong><span>' + result.modeloDescrip.modelo + '</span></li>
															<li><strong>Material: </strong><span>' + elementSearch.material + '</span></li>
															<li><strong>Código: </strong><span>' + elementSearch.idproducto + elementSearch.clave + '-' + elementSearch.IdMaterial + '</span></li>
															<li><strong>Precio: </strong><span>$' + elementSearch.precio + '</span></li>
														</ul>
													</li>
													<li class="payment_methods">
														<ul>
															<li>
																<a href="#" data-url="https://mexico.dineromail.com/Carrito/cart.asp?NombreItem=Funda ' + result.marcaDescrip.marca + ' ' + result.modeloDescrip.modelo + ' ' + elementSearch.material + '&TipoMoneda=1&PrecioItem=' + elementSearch.precio + '&NroItem=' + elementSearch.idproducto + elementSearch.clave + '-' + elementSearch.IdMaterial + '&image_url=https://mexico.dineromail.com/imagenes/LogosVendedores/146490.jpg&DireccionExito=http://www.feeper.com/2009/gracias.php&DireccionFracaso=http://www.feeper.com/2009/asusordenes.php&DireccionEnvio=1&Mensaje=1&Comercio=146490">
																	<img src="https://mexico.dineromail.com/imagenes/vender/agregar/agregar-al-carrito.gif" alt="dineromail">
																</a>
															</li>
															<li>
																<a href="#" data-url="paypal/agregacar.php?id=' + elementSearch.idproducto + '">
																	<img src="https://www.paypal.com/en_US/i/btn/btn_cart_LG.gif" alt="paypal">
																</a>
															</li>
														</ul>
													</li>
												</ul>';*/
						});
						if ( actualCategory != 5 || actualBrand != 62 ) { imgCat = 'cat' + actualCategory + '.png'; }
						else { imgCat = 'cat' + actualModel + '.png'; }
						imageDiv.append('<img src="imgs/shop/modelos/' + imgCat + '" alt="modelo">').fadeIn();
						resultDiv.append('<div class="logo_marca"><img src="imgs/shop/marcas/' + result.marcaDescrip.logotipo + '" alt="logomarca"></div>').append(resultList.join(''));
						$('#search').addClass('search_disabled').removeClass('search').prop('disabled', true);
					}
				},
				error: function(error) {
					if (error.statusText != 'abort'){
						$('.error_results').html('<span><strong>Lo sentimos, la búsqueda no se pudo realizar adecuadamente.</strong><br>Por favor haz <a href="#">clic aquí</a> para intentar de nuevo.</span>').show();
					}
				}
			});
		}
	
	//FALTA POPUP DE COMPRA FINALIZADA

	/*Menú de las categorias - Primer paso*/
	$('.menu_categories').find('a').bind({
		mouseenter: showTitleCategory,
		mouseleave: hideTitleCategory,
		click: activeStepTwo
	});

	/*Lista de marcas. Cuando seleccionas alguna manda a llamar a la función*/
	$('#sBrand').change(getModelProducts);
		/*Si se produjo un error en la acción pasada, el link de "clic aquí" llamará de nuevo a la función*/
		$('.error_models').find('a').click(getModelProducts);

	/*Lista de modelos. Cuando seleccionas alguno activa el boton de búsqueda*/
	$('#sModel').change(function(){
		$('#search').removeClass('search_disabled').addClass('search').prop('disabled', false);
	});

	/*Botón que regresa al paso uno y reinicia el formulario*/
	secondShopStep.find('a.back').click(returntoStepOne);
	
	/*Botón que muestra los resultados que por default está escondido*/
	$('#search').click(showResultsList);
		/*Si se produjo un error en obtener los resultados de la búsqueda, el link de "clic aquí" llamará de nuevo a la función*/
		$('.error_results').delegate('a', 'click', showResultsList);

	/*Botón de DineroMail - Paso 1*/
	$('.category_description').find('#button_dineromail').hover(function(){
		$(this).closest('.category_description').find('.bancos_dineromail').stop().slideToggle('fast');
	});

	/*Botón Agregar al carrito de Paypal y Dineromail - Paso 2*/
	$('.result_list').delegate('.payment_methods a','click',function(e){
		var urlPayment = $(this).data('url');
		window.open(urlPayment,'Carrito','width=600,height=275,toolbar=no,location=no,status=no,menubar=no,resizable=yes,scrollbars=yes');
		e.preventDefault();
		return false;
	});

	/*Botón de Ver carrito de Dineromail - Paso 2*/
	$('.seeShoppingCar').find('a').click(function(e){
		var shopCarURL = $(this).data('shopcarurl');
		window.open(shopCarURL,'Carrito','width=600,height=275,toolbar=no,location=no,status=no,menubar=no,resizable=no,scrollbars=no');
		e.preventDefault();
		return false;
	});
});

/*CARRUCEL DE FRASES*/
$.fn.loadText = function( textArray, interval ) {
	return this.each( function() {
		var obj = $(this);
		obj.fadeOut( 'fast', function() {
			obj.empty().html( nextElement( textArray ) );
			obj.fadeIn('fast');
		});
		timeOut = setTimeout(function() { obj.loadText( textArray, interval )}, interval );
	});
}
function nextElement(aArray) {
	var arrayLength = aArray.length - 1;
	var randArray = aArray[actualArray];
	if (actualArray >= arrayLength) { actualArray = 0; }
	else { actualArray++; }

	return randArray;
}