<?php 
	header ("Expires: Thu, 27 Mar 1980 23:59:00 GMT"); //la pagina expira en una fecha pasada
	header ("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT"); //ultima actualizacion ahora cuando la cargamos
	header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE
	header ("Pragma: no-cache"); 	
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/admon.css" type="text/css" />
<title>.::FLETE DE REGRESO::.</title>


	
	<script type="text/JavaScript" src="js/jquery-1.9.1.js"></script>
	<script type="text/JavaScript" src="js/jquery.validate.js"></script>
	
	<script language="JavaScript">
	
	Object.size = function(obj) {
      var size = 0, key;
      for (key in obj) {
          if (obj.hasOwnProperty(key)) size++;
      }
      return size;
    };
	
	
	
	
	function selectSucs (){
		$('#sucursales option').prop('selected', 'selected');
	}
	

	
	
	
	$.extend($.validator.messages, {
		required: "Este campo es requerido.",
		remote: "Please fix this field."
	});
	
	
	
    $(document).ready(function() {

		// validate the fields when it is submitted
		$("#edicioninformacionpersonal").validate();
			
	
	
      //$.ajax({
      $.ajax({
        url: 'estado_ciudad.php?action=getStates',
        dataType: 'json',
        success: function(data) {
          var size = Object.size(data);
          var items = "";
          for(var i = 0; i < size; i++)
          {
            items = items + '<option value="' + data[i].id + '"   abrev="'  + data[i].abrev + '" >' + data[i].nombre + '</option>';
          }  
          $('#suc_estado').append(items);
          $('#suc_estado').change();
        }
      });

     $('#suc_estado').change(function() {
      $.ajax({
        url: 'estado_ciudad.php?action=getCities&stateID=' + $('#suc_estado').val(),
        dataType: 'json',
        success: function(data) {
          var size = Object.size(data);
          var items = "";
          for(var i = 0; i < size; i++)
          {
            items = items + '<option value="' + data[i].id + '">' + data[i].nombre + '</option>';
            //console.log(data[i].id_state + " : " + data[i].name);
          }  
          $('#suc_ciudad').html("");
          $('#suc_ciudad').append(items);
          $('#suc_ciudad').change();
        }
      });      
     });

	 
	 
	 
	 //$.ajax({
      $.ajax({
        url: 'estado_ciudad.php?action=getStates',
        dataType: 'json',
        success: function(data) {
          var size = Object.size(data);
          var items = "";
          for(var i = 0; i < size; i++)
          {
            items = items + '<option value="' + data[i].id + '"   abrev="'  + data[i].abrev + '" >' + data[i].nombre + '</option>';
          }  
          $('#matriz_estado').append(items);
          $('#matriz_estado').change();
        }
      });

     $('#matriz_estado').change(function() {
      $.ajax({
        url: 'estado_ciudad.php?action=getCities&stateID=' + $('#matriz_estado').val(),
        dataType: 'json',
        success: function(data) {
          var size = Object.size(data);
          var items = "";
          for(var i = 0; i < size; i++)
          {
            items = items + '<option value="' + data[i].id + '">' + data[i].nombre + '</option>';
            //console.log(data[i].id_state + " : " + data[i].name);
          }  
          $('#matriz_ciudad').html("");
          $('#matriz_ciudad').append(items);
          $('#matriz_ciudad').change();
        }
      });      
     });
	 
	 
	 $('#agregar_suc').click(function() {	 	
		var id = $('#suc_estado').val() + "_" + $('#suc_ciudad').val();
		var text = $('#suc_ciudad  option:selected').text() + ", " +$('#suc_estado  option:selected').attr('abrev');

		if ($("#sucursales option[value='"+  id +"']").length == 0){
			var item = '<option value="' + id + '" >' + text + '</option>';
			$('#sucursales').append(item);
			selectSucs ();	
		}
	 });
	 
	 
	 $('#eliminar_suc').click(function() {
		$('#sucursales :selected').remove();
		selectSucs ();
	 });
	 
	 
	 
	 
      //$.ajax({
      $.ajax({
        url: 'tipos_unidad.php',
        dataType: 'json',
        success: function(data) {
          var size = Object.size(data);
          var items = "";
          for(var i = 0; i < size; i++)
          {
            items = items + '<option value="' + data[i].clave + '"    >' + data[i].nombre + '</option>';
          }  
          $('#tipoUnidadSol').append(items);
        }
      });
	 
	 
	 
	 //$.ajax({
      $.ajax({
        url: 'estado_ciudad.php?action=getStates',
        dataType: 'json',
        success: function(data) {
          var size = Object.size(data);
          var items = "";
          for(var i = 0; i < size; i++)
          {
            items = items + '<option value="' + data[i].id + '"   abrev="'  + data[i].abrev + '" >' + data[i].nombre + '</option>';
          }  
          $('#estadosPrestaServ').append(items);
        }
      });	 
	 


	  //habilitar/deshabilitar estados donde presta servicios
	  $('input[name=prestaServ]').change(function() {		
		var radioanswer = 'none';
		if ($('input[name=prestaServ]:checked').val() != null) {           
		   radioanswer = $('input[name=prestaServ]:checked').val();
		   if ( radioanswer == '*' ){ //todos
		   		$('#estadosPrestaServ').prop('disabled', true);
		   }else{
		   		$('#estadosPrestaServ').prop('disabled', false);
		   }							
		}
	 });
	 
    });      
    </script>
	


</head>
<body>

					<form name="edicioninformacionpersonal" id="edicioninformacionpersonal" action="guardar_perfil.php" method="post">
                        <input type="hidden" name="clave" value=""/>                           
                            <table width="680px" align="center" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td colspan="2" style="background:url(imgs/fondobarratitulo.png) repeat-x top; padding-left:60px" height="30px" valign="middle" align="left" class="titulo2">
                                        Usuario
                                    </td>
                                </tr>                                                                
                                <tr>
                                    <td width="340px"  valign="middle" style="padding-right:5px;" class="normal3" align="right">
                                        Tipo de Usuario
                                    </td>
                                    <td width="340px"  valign="top" style="padding-left:10px;" align="left">
                                         Perfil de Transportista
                                        <input type="hidden" name="perfil" value="2" id="perfil"  />                                         
										                                    
                                    </td>        
                                </tr>                                
                                                            
                                
															
								<tr>
									<td width="340px"  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										 <label for="cname">Nombre del contacto de trafico</label>
									</td>
									<td width="340px"  valign="middle" style="padding-left:10px;" align="left">
										<input type="text" name="cname" id="cname" size="40" value="" maxlength="200" required />
									</td>        
								</tr>								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										<label for="telefono">Tel&eacute;fono de tr&aacute;fico </label>
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<input type="text" name="lada" id="lada" size="3" value="" maxlength="3"  required > -
										<input type="text" name="telefono" id="telefono" size="20" maxlength="12"  value=""  required >
									</td>        
								</tr>
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										<label for="c1correo">Correo de tr&aacute;fico</label>
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<input type="text" name="c1correo" id="c1correo" size="40" value=""  required />
									</td>        
								</tr> 
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										<label for="celular">Celular</label>
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<input type="text" name="celular" id="celular" size="40" value="" maxlength="12" required  />
									</td>        
								</tr>
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										ID Nextel
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<input type="text" name="nextel" size="40" value="" />
									</td>        
								</tr>
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										&nbsp;
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										&nbsp;
									</td>        
								</tr>  
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										Oficina Matriz
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										&nbsp;
									</td>        
								</tr>  
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										Estado
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<select name="matriz_estado" id="matriz_estado">
											
										</select>
									</td>        
								</tr>
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										Ciudad/Municipio/Delegaci&oacute;n
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<select name="matriz_ciudad" id="matriz_ciudad">
											
										</select>
									</td>        
								</tr>
								
								
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										&nbsp;
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										&nbsp;
									</td>        
								</tr>  
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										Sucursales
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										&nbsp;
									</td>        
								</tr>  
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										<select multiple name="sucursales[]" size=10 id="sucursales" style="width:250px;" required>
										  
										</select>
										
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<table >
											<tr >
												<td >
													&nbsp;<br>
													<input type=button name="agregar_suc" value="agregar sucursal" id="agregar_suc">
													<br>
													<input type=button name="eliminar_suc" value="eliminar sucursal"  id="eliminar_suc">
												</td>
												<td>
													Estado<br>
													<select name="suc_estado" id="suc_estado">
														
													</select>
													<br>
													Ciudad/Municipio/Delegaci&oacute;n
													<br>
													<select name="suc_ciudad" id="suc_ciudad">
														
													</select>
												</td>
											</tr>
										</table>	
										
									</td>        
								</tr>
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										
									</td>        
								</tr>
								
								
								
								
								
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										&nbsp;
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										&nbsp;
									</td>        
								</tr>
								
								<tr>
									<td  valign="top" style="padding-right:5px;" class="normal3" align="right">
										Estados en donde presta sus servicios
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<input type=radio name=prestaServ id=prestaServ1  value="*" checked > Toda la Republica
										<br>
										<input type=radio name=prestaServ id=prestaServ2  value=""  > En los siguientes estados<br>
										<select multiple name="estadosPrestaServ[]" id="estadosPrestaServ" required disabled >
										  
										</select>
									</td>         
								</tr>
								
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										Tipo de Rastreo
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<select  name="tipoRastreo" id="tipoRastreo" required >
										  <option value="Satelital">Satelital</option>
										  <option value="Ninguno">Ninguno</option>
										</select>
									</td>        
								</tr>
								
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										Recurso Confiable
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<select  name="recursoConfiable" id="recursoConfiable" required >
										  <option value="S">Si</option>
										  <option value="N">No</option>
										</select>
									</td>        
								</tr>
								
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										&iquest;Cuenta con permiso Trans-Frontera? 
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<select  name="permisoTrasnFrontera" id="permisoTrasnFrontera" required >
										  <option value="S">Si</option>
										  <option value="N">No</option>
										</select>
									</td>        
								</tr>
								
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										Breve Rese&ntilde;a
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<textarea name="breveResena" id="breveResena" required></textarea>
									</td>        
								</tr>
								
								
								
								<tr>
									<td  valign="top" style="padding-right:5px;" class="normal3" align="right">
										Tipo de unidad con las que cuenta la Empresa
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<select multiple name="tipoUnidadSol[]" id="tipoUnidadSol" required >
										  
										</select>
									</td>        
								</tr>


								
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />		
										<br>
										<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false"
											> Mostrar otra Imagen </a>								
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<input type="text" name="captcha_code" size="10" maxlength="6" />										
									</td>        
								</tr>

								
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										&nbsp;
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										&nbsp;
									</td>        
								</tr>
								
								
								<tr>
									<td  valign="middle" style="padding-right:5px;" class="normal3" align="right">
										&nbsp;
									</td>
									<td  valign="middle" style="padding-left:10px;" align="left">
										<input name="" value="Enviar" type="Submit">
										<input name="" value="Limpiar" type="Reset">
									</td>        
								</tr>
								
                            </table>
					</form>
						
</body>
</html>						