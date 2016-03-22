$(document).ready(function(){
	var date = new Date();
	var day = date.getDate();
	var month = ["ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE"];
	var numMonth = date.getMonth();
	var year = date.getYear() + 1900;
	$('.fecha').html(day + " DE " + month[numMonth] + " DE " + year );

	//Array de tipo de salones
	var salonType = [
		{ "title":"Salón", "active":"true", "type":"text", "chckbox":"false", "initialContent":"Nombre"},
		{ "title":"Mts. 2", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Tipo U", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Auditorio", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Escuela", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Imperial", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Cocktail<br>Sentados", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Cocktail<br>Parados", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Ruso", "active":"true", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Banquete<br>sin pista", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Banquete<br>Buffet", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Banquete", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Herradura", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Oficina", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Mesa redonda<br>con pista", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Boda", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0"},
		{ "title":"Teatro", "active":"false", "type":"number", "chckbox":"true", "initialContent":"0"}
	];
	/*var salonType = '{"0": { "title":"Salón", "active":"true", "type":"text", "checkbox":"false" },"1": { "title":"Mts. 2", "active":"true", "type":"text", "checkbox":"true" },"2": { "title":"Tipo U", "active":"true", "type":"text", "checkbox":"true" },"3": { "title":"Auditorio", "active":"true", "type":"text", "checkbox":"true" },"4": { "title":"Escuela", "active":"true", "type":"text", "checkbox":"true" },"5": { "title":"Imperial", "active":"true", "type":"text", "checkbox":"true" },"6": { "title":"Cocktail<br>Sentados", "active":"true", "type":"text", "checkbox":"true" },"7": { "title":"Cocktail<br>Parados", "active":"true", "type":"text", "checkbox":"true" },"8": { "title":"Ruso", "active":"true", "type":"text", "checkbox":"true" },"9": { "title":"Banquete<br>sin pista", "active":"false", "type":"text", "checkbox":"true" },"10": { "title":"Banquete<br>Buffet", "active":"false", "type":"text", "checkbox":"true" },"11": { "title":"Banquete", "active":"false", "type":"text", "checkbox":"true" },"12": { "title":"Herradura", "active":"false", "type":"text", "checkbox":"true" },"13": { "title":"Oficina", "active":"false", "type":"text", "checkbox":"true" },"14": { "title":"Mesa redonda<br>con pista", "active":"false", "type":"text", "checkbox":"true" },"15": { "title":"Boda", "active":"false", "type":"text", "checkbox":"true" },"16": { "title":"Teatro", "active":"false", "type":"text", "checkbox":"true" }}';*/
	/*var salonTypeObj = JSON.parse(salonType);*/
	console.log(salonType.length);

	/*var json = '{"result":{"resultado1": 1,"resultado2": 2}, "count":1}',
			obj = JSON.parse(json);

	$.each(obj.result, function(i, val){
		console.log(i + ' ' + val);
	});*/

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
	$('.salonList thead tr').append($allSalonTypes + '<th></th>');

	//Aquí el de salones
	var salonesIniciales = 5;
	var $salon = "";
	for(numSalon = 0; numSalon <= salonesIniciales; numSalon++){
		var contSalon = numSalon + 1;
		var $inputs = "";
		
		for (var i = 0; i < salonType.length; i++){
			$inputs += '<td class="c' + i + '"><input type="' + salonType[0].type + '" name="salon' + contSalon + '[]" value="' + salonType[i].initialContent + '" placeholder="' + salonType[i].initialContent + '"';
			if (salonType[i].active != "true"){ $inputs += ' disabled'; }
			$inputs += ' class="cC' + salonType[i].type + '"></td>';
			/*if (i != 0) { $inputs += ' class="numero"></td>'; }
			else { $inputs += '></td>'; }*/
		}
		
		/*$salon += '<tr class="f' + contSalon + '">' + $inputs + '</tr>';*/
		
		$salon += '<tr class="f' + contSalon + '">' + $inputs;
		if (numSalon != 0 ) { $salon += '<td><span class="removeSalon" data-remove="' + contSalon + '">X</span></td></tr>'; }
		else { $salon += '<td></td></tr>'; }
	}
	
	//add them to the DOM
	$('.salonList tbody').append($salon);

	//remove
	$('#salones').delegate('.removeSalon', 'click', function(){
		var rowSelected = 'f' + $(this).data('remove');
		$(this).closest('.' + rowSelected).empty().remove();
	});

	//Disable and enable
	$('.checkCol').click(function(){
		var columnSelected = $(this).data('columna');
		if ($(this).is(':checked')) {
			$('.salonList ' + 'td.c' + columnSelected + ' input').prop('disabled', false);
			/*console.log(salonType[columnSelected].title);*/
			/*console.log(salonType[columnSelected].active);*/
			salonType[columnSelected].active = "true";
			/*console.log(salonType[columnSelected].active);*/
		}
		else{
			$('.salonList ' + 'td.c' + columnSelected + ' input').prop('disabled', true).val('0');
			/*console.log(salonType[columnSelected].title);*/
			/*console.log(salonType[columnSelected].active);*/
			salonType[columnSelected].active = "false";
			/*console.log(salonType[columnSelected].active);*/
		};
	});
	//Watch inputs
	$('#salones input.cCnumber').change(function(){
		if ( $(this).val() == '') $(this).val('0');
	});


	//add a new "salon"
	$('#addSalon').on('click', function(){
		var $inputs = "";
		numSalon++;
		console.log('asd');
		/*for (var i = 1; i <= 17; i++){
			$inputs += '<td><input type="text" name="salon' + numSalon + '[]"></td>';
		}*/
		for (var i = 0; i < salonType.length; i++){
			$inputs += '<td class="c' + i + '"><input type="' + salonType[0].type + '" name="salon' + numSalon + '[]" value="' + salonType[i].initialContent + '" placeholder="' + salonType[i].initialContent + '"';
			if (salonType[i].active != "true"){ $inputs += ' disabled'; }
			$inputs += ' class="cC' + salonType[i].type + '"></td>';
		}
		
		$salon = '<tr class="f' + numSalon + '">' + $inputs;
		$salon += '<td><span class="removeSalon">X</span></td></tr>';
		$('.salonList tbody').append($salon);
	});








	//Aquí el de fotos
	var fotosIni = 5;
	var $foto = "";
	for(numFoto=0;numFoto<=fotosIni;numFoto++){
		var contFoto = numFoto+1;
		var $inputs = "";
		$foto += '<p>';
		$inputs += '<input type="file" accept="image/*" name="pic'+contFoto+'" id="pic'+contFoto+'">';
		$foto += $inputs;
		$foto += '<span class="removeFoto">X</span></p>';
	}
	
	//add them to the DOM
	$('.fotos').prepend($foto);

	//remove a textfield
	$('form').on('click', '.removeFoto', function(){
		$(this).parent().remove();
	});
	
	//add a new "salon"
	$('#addFoto').on('click', function(){
		numFoto++;
		var $inputs = "";
		$foto = '<p>';
		$inputs += '<input type="file" accept="image/*" name="pic'+numFoto+'" id="pic'+numFoto+'">';
		$foto += $inputs;
		$foto += '<span class="removeFoto">X</span></p>';
		$(this).before($foto);
	});
	
});