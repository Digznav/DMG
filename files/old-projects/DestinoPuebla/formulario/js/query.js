$(document).ready(function(){
	var date = new Date();
	var day = date.getDate();
	var month = ["ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE"];
	var numMonth = date.getMonth();
	var year = date.getYear() + 1900;
	$('.fecha').html(day + " DE " + month[numMonth] + " DE " + year );

	//Array de tipo de salones
	var salonType = [
		{ "title":"Nombre del Salón", "active":"true", "type":"text", "chckbox":"false", "initialContent":"Nombre", "arrayName":"nombre" },
		{ "title":"Mts. 2", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"mts2" },
		{ "title":"Tipo U", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"tipou" },
		{ "title":"Auditorio", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"auditorio" },
		{ "title":"Escuela", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"escuela" },
		{ "title":"Imperial", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"imperial" },
		{ "title":"Cocktail Sentados", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"cocktailsentados" },
		{ "title":"Cocktail Parados", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"cocktailparados" },
		{ "title":"Ruso", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"ruso" },
		{ "title":"Banquete sin pista", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"banquetesinpista" },
		{ "title":"Banquete Buffet", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"banquetebuffet" },
		{ "title":"Banquete", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"banquete" },
		{ "title":"Herradura", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"herradura" },
		{ "title":"Oficina", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"oficina" },
		{ "title":"Mesa redonda con pista", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"mesaredonda" },
		{ "title":"Boda", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"boda" },
		{ "title":"Teatro", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0", "arrayName":"teatro" }
	];

	var $salonInvisible = '';
	for (var i = 0; i < salonType.length; i++) {
		$salonInvisible += '<td><input type="text" disabled value="' + salonType[i].initialContent + '" placeholder="' + salonType[i].initialContent + '" class="cC' + salonType[i].type + '"></td>';
	}
	$('.salonList tfoot tr').append($salonInvisible);

	var $allSalonTypes = '';
	for (var i = 0; i < salonType.length; i++) {
		$allSalonTypes += '<th class="col' + (i + 1) + '">';
		if (salonType[i].chckbox == 'true') {
			$allSalonTypes += '<input type="checkbox" class="checkCol" data-columna="' + i + '"';
			if (salonType[i].active == 'true') { $allSalonTypes += ' checked><br>'; }
			else { $allSalonTypes += '><br>'; }
		}
		$allSalonTypes += '<span>' + salonType[i].title + '</span></th>';
	};
	/*$('.salonList thead tr').append($allSalonTypes);*/
	$('.salonList thead tr').append($allSalonTypes);

	//Aquí el de salones
	var salonesIniciales = 4;
	var $salon = "";
	for(numSalon = 0; numSalon <= salonesIniciales; numSalon++){
		var contSalon = numSalon + 1;
		var $inputs = "";
		
		for (var i = 0; i < salonType.length; i++){
			$inputs += '<td class="c' + i + '"><input type="' + salonType[i].type + '" name="salon[' + salonType[i].arrayName + contSalon + ']" value="' + salonType[i].initialContent + '" placeholder="' + salonType[i].initialContent + '"';
			if (salonType[i].active != "true"){ $inputs += ' disabled'; }
			$inputs += ' class="cC' + salonType[i].type + '"></td>';
		}
		
		/*$salon += '<tr class="f' + contSalon + '">' + $inputs + '</tr>';*/
		
		$salon += '<tr class="f' + contSalon + '">';
		if (numSalon != 0 ) { $salon += '<td><span class="removeSalon dBoton" data-remove="' + contSalon + '">X</span></td>' + $inputs + '</tr>'; }
		else { $salon += '<td></td>' + $inputs + '</tr>'; }
	}
	
	//add them to the DOM
	$('.salonList tbody').append($salon);

	//remove
	$('#salones').on( 'click', '.removeSalon', function(){
		var rowSelected = 'f' + $(this).data('remove');
		$(this).closest('.' + rowSelected).empty().remove();
	});

	//Disable and enable
	$('.checkCol').click(function(){
		var columnSelected = $(this).data('columna');
		if ($(this).is(':checked')) {
			$('.salonList ' + 'td.c' + columnSelected + ' input').prop('disabled', false);
			salonType[columnSelected].active = "true";
		}
		else{
			$('.salonList ' + 'td.c' + columnSelected + ' input').prop('disabled', true).val('0');
			salonType[columnSelected].active = "false";
		};
	});
	//Watch inputs
	$('#salones input.cCnumber').change(function(){
		if ( $(this).val() == '') $(this).val('0');
	});
	$('.seccionDistancias input').change(function(){
		if ( $(this).val() == '') $(this).val('0');
		console.log("cambio");
	});

	//add a new "salon"
	$('#addSalon').on('click', function(){
		var $inputs = "";
		numSalon++;
		console.log('asd');
		/*for (var i = 1; i <= 17; i++){
			$inputs += '<td><input type="text" name="salon[' + salonType[i].arrayName + numSalon + ']"></td>';
		}*/
		for (var i = 0; i < salonType.length; i++){
			$inputs += '<td class="c' + i + '"><input type="' + salonType[i].type + '" name="salon[' + salonType[i].arrayName + numSalon + ']" value="' + salonType[i].initialContent + '" placeholder="' + salonType[i].initialContent + '"';
			if (salonType[i].active != "true"){ $inputs += ' disabled'; }
			$inputs += ' class="cC' + salonType[i].type + '"></td>';
		}
		
		$salon = '<tr class="f' + numSalon + '">';
		$salon += '<td><span class="removeSalon dBoton" data-remove="' + numSalon + '">X</span></td>' + $inputs + '</tr>';
		$('.salonList tbody').append($salon);
	});

	//Aquí el de fotos
	var fotosInicial = 2;
	var $imagenes = "";
	for( numFoto = 0; numFoto <= fotosInicial; numFoto++ ){
		var contFoto = numFoto + 1;
		var $foto = "";
		$foto += '<p><input type="file" accept="image/*" name="picFoto' + contFoto + '" id="picFoto'+contFoto+'"> ';
		
		if (numFoto > 2 ) { $foto += '<span class="removeFoto dBoton">X</span></p>'; }
		else { $foto += '</p>'; }
		$imagenes += $foto;
	}
	
	//add them to the DOM
	$('.seccionFotos .fotosHotel').append($imagenes);

	//remove a textfield
	$('form').on('click', '.removeFoto', function(){
		$(this).closest('p').empty().remove();
	});
	
	//add a new "salon"
	$('#addFoto').on('click', function(){
		numFoto++;
		var $foto = "";
		$foto += '<p><input type="file" accept="image/*" name="picFoto' + numFoto + '" id="picFoto' + numFoto + '"> <span class="removeFoto dBoton">X</span></p>';
		/*$foto += '<p><input type="file" accept="image/*" name="picFoto[]" id="foto' + numFoto + '"> <span class="removeFoto dBoton">X</span></p>';*/
		$('.fotosHotel').append($foto);
	});
	
});