$(document).ready(function(){
	var date = new Date();
	var day = date.getDate();
	var month = new Array();
	var numMonth = date.getMonth();
	var year = date.getYear() + 1900;
	month[0] = "ENERO";
	month[1] = "FEBRERO";
	month[2] = "MARZO";
	month[3] = "ABRIL";
	month[4] = "MAYO";
	month[5] = "JUNIO";
	month[6] = "JULIO";
	month[7] = "AGOSTO";
	month[8] = "SEPTIEMBRE";
	month[9] = "OCTUBRE";
	month[10] = "NOVIEMBRE";
	month[11] = "DICIEMBRE";
	$('.fecha').html(day + " DE " + month[numMonth] + " DE " + year );

	//Array de tipo de salones
	var salonType = new Array();
	salonType[0] = "Salón";
	salonType[1] = "Mts. 2";
	salonType[2] = "Tipo U";
	salonType[3] = "Auditorio";
	salonType[4] = "Escuela";
	salonType[5] = "Imperial";
	salonType[6] = "Cocktail<br>Sentados";
	salonType[7] = "Cocktail<br>Parados";
	salonType[8] = "Ruso";
	salonType[9] = "Banquete<br>sin pista";
	salonType[10] = "Banquete<br>Buffet";
	salonType[11] = "Banquete";
	salonType[12] = "Herradura";
	salonType[13] = "Oficina";
	salonType[14] = "Mesa redonda<br>con pista";
	salonType[15] = "Boda";
	salonType[16] = "Teatro";

	var json = '{"result":{"resultado1": 1, "resultado2": 2}, "count":1}',
			obj = JSON.parse(json);

	console.log(obj);

	var $allSalonTypes = '';
	for (var i = 1; i < salonType.length; i++) {
		$allSalonTypes += '<th class="col' + (i + 1) + '"><input type="checkbox" class="checkCol" data-columna="' + i + '"><br><span>' + salonType[i] + '</span></th>';
	};
	$('.salonList thead tr').append('<th class="col0"><span>' + salonType[0] + '</span></th>' + $allSalonTypes + '<th></th>');

	//Aquí el de salones
	var salonesIniciales = 5;
	var $salon = "";
	for(numSalon = 0; numSalon <= salonesIniciales; numSalon++){
		var contSalon = numSalon + 1;
		var $inputs = "";
		
		for (var i = 0; i < salonType.length; i++){
			if (i == 0) {
				$inputs += '<td class="c' + i + '"><input type="text" name="salon' + contSalon + '[]" placeholder="Nombre"></td>';
			}
			else { $inputs += '<td class="c' + i + '"><input type="text" class="numero" name="salon' + contSalon + '[]" disabled value="0"></td>'; }
		}
		
		$salon += '<tr class="f' + contSalon + '">' + $inputs;
		$salon += '<td><span class="removeSalon" data-remove="' + contSalon + '">X</span></td></tr>';
	}
	
	//add them to the DOM
	$('.salonList tbody').append($salon);

	//remove
	$('#salones').on('click', '.removeSalon', function(){
		var rowSelected = 'f' + $(this).data('remove');
		$(this).closest('.' + rowSelected).empty().remove();
	});

	//Disable and enable
	$('.checkCol').click(function(){
		var columnSelected = $(this).data('columna');
		if ($(this).is(':checked')) {
			$('.salonList ' + 'td.c' + columnSelected + ' input').prop('disabled', false);
		}
		else{
			$('.salonList ' + 'td.c' + columnSelected + ' input').prop('disabled', true);
		};
	});
	//Watch inputs
	$('#salones input.numero').change(function(){
		if ( $(this).val() == '') $(this).val('0');
	});


	//add a new "salon"
	$('#addSalon').on('click', function(){
		var $inputs = "";
		numSalon++;
		console.log('asd');
		for (var i = 1; i <= 17; i++){
			$inputs += '<td><input type="text" name="salon' + numSalon + '[]"></td>';
		}
		
		$salon = '<tr class="fila">' + $inputs;
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