$(document).ready(function(){
//Aquí el de salones
	var salonesIni = 5;
	var $salon = "";
	for(numSalon=0;numSalon<=salonesIni;numSalon++){
		var contSalon = numSalon+1;
		var $inputs = "";
		$salon += '<p><label for="var'+contSalon+'">Salón '+contSalon+': </label>';
		for (i=1;i<=11;i++){
			$inputs += '<input type="text" name="var'+contSalon+'" id="var'+contSalon+'">';
		}
		$salon += $inputs;
		$salon += '<span class="removeVar">x</span></p>';
	}
	
	//add them to the DOM
	$('.muchos').prepend($salon);
	
	//remove a textfield
	$('form').on('click', '.removeVar', function(){
		$(this).parent().remove();
	});

	//add a new "salon"
	$('#addVar').on('click', function(){
		numSalon++;
		var $inputs = "";
		$salon = '<p><label for="var'+numSalon+'">Salón '+numSalon+': </label>';
		for (i=1;i<=11;i++){
			$inputs += '<input type="text" name="var'+numSalon+'" id="var'+numSalon+'">';
		}
		$salon += $inputs;
		$salon += '<span class="removeVar">x</span></p>';
		$(this).before($salon);
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
		$foto += '<span class="removeFoto">x</span></p>';
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
		$foto += '<span class="removeFoto">x</span></p>';
		$(this).before($foto);
	});
});