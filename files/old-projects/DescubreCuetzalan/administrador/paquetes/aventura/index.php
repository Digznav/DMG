<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::Descubre Cuetzalan, Administrador::.</title>
<link rel="stylesheet" href="../../admon.css" type="text/css" />
<script type="text/javascript">
function valida_principal() {
	/*validar aventura*/
	if (document.principal.aventura.value == "0") {
		alert("Seleccione una aventura válida");
		document.principal.aventura.focus();
		return 0;
	}
	/*termina validar aventura*/
document.principal.submit(); //Submit al form
}
</script>
<script type="text/javascript">
function valida_infor(){
	var enter = "\n";
	var caracteres = 'abcdefghijklmnopqrstuvwxyzñ1234567890 ABCDEFGHIJKLMNOPQRSTUVWXYZÑáéíóúÁÉÍÓÚ-_!¡()$.,–' + String.fromCharCode(13) + enter;   
	var numerosp = '1234567890. ' + String.fromCharCode(13) + enter;   
	var ubicacion;      
	var contador=0;
	var i=0;

	/*validar titulo*/
	if (document.editainfo.titulo.value.length < 3 || document.editainfo.titulo.value.length > 101) {
		alert("Inserte un Título correcto (menos de 101 caracteres).");
		document.editainfo.titulo.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.titulo.value.length; i++) {   
    	ubicacion = document.editainfo.titulo.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en el Título."); 
			document.editainfo.titulo.focus();  
      		return 0; 
		}   
	}   
	/*termina validar titulo*/
	/*validar dirigido*/
	if (document.editainfo.dirigido.value.length < 3 || document.editainfo.dirigido.value.length > 101) {
		alert("Describa a quien va dirigida la ruta (menos de 101 caracteres).");
		document.editainfo.dirigido.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.dirigido.value.length; i++) {   
    	ubicacion = document.editainfo.dirigido.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en la descripción"); 
			document.editainfo.dirigido.focus();  
      		return 0; 
		}   
	}   
	/*termina validar dirigido*/
	/*validar duración*/
	if (document.editainfo.duracion.value.length < 3 || document.editainfo.duracion.value.length > 101) {
		alert("Inserte la duración del recorrido (menos de 101 caracteres).");
		document.editainfo.duracion.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.duracion.value.length; i++) {   
    	ubicacion = document.editainfo.duracion.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en la duración"); 
			document.editainfo.duracion.focus();  
      		return 0; 
		}   
	}   
	/*termina validar duracion*/
	/*validar incluye*/
	if (document.editainfo.incluye.value.length < 3) {
		alert("Describa lo que incluye el recorrido.");
		document.editainfo.incluye.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.incluye.value.length; i++) {   
    	ubicacion = document.editainfo.incluye.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en lo que incluye"); 
			document.editainfo.incluye.focus();  
      		return 0; 
		}   
	}   
	/*termina validar incluye*/
	/*validar recorrido*/
	if (document.editainfo.recorrido.value.length < 3) {
		alert("Describa el recorrido.");
		document.editainfo.recorrido.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.recorrido.value.length; i++) {   
    	ubicacion = document.editainfo.recorrido.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en el recorrido"); 
			document.editainfo.recorrido.focus();  
      		return 0; 
		}   
	}   
	/*termina validar recorrido*/
	/*validar costo*/
	if (document.editainfo.costo.value.length < 3) {
		alert("Describa el costo.");
		document.editainfo.costo.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.costo.value.length; i++) {   
    	ubicacion = document.editainfo.costo.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en el costo"); 
			document.editainfo.costo.focus();  
      		return 0; 
		}   
	}   
	/*termina validar costo*/
	/*validar minimo*/
	if (document.editainfo.minimo.value.length < 3 || document.editainfo.minimo.value.length > 101) {
		alert("Describa el mínimo de personas (menos de 101 caracteres).");
		document.editainfo.minimo.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.minimo.value.length; i++) {   
    	ubicacion = document.editainfo.minimo.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en el minimo"); 
			document.editainfo.minimo.focus();  
      		return 0; 
		}   
	}   
	/*termina validar minimo*/

	/*validar imagenes*/
	if (document.editainfo.imagenes.value == "0") {
		alert("Seleccione la cantidad de imágenes a mostrar");
		document.editainfo.imagenes.focus();
		return 0;
	}
	/*termina validar imagenes*/
document.editainfo.submit(); //Submit al form
}
</script>
<script type="text/javascript">
function valida_elementos(){
	var numerosp = '1234567890';   
	var ubicacion;      
	var contador=0;
	var i=0;

	/*validar elementos*/
	if (document.noimagenes.elementos.value.length < 1 || document.noimagenes.elementos.value.length > 2) {
		alert("Inserte un número de imágenes correcto (menos de 3 caracteres).");
		document.noimagenes.elementos.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.noimagenes.elementos.value.length; i++) {   
    	ubicacion = document.noimagenes.elementos.value.substring(i, i + 1);   
    	if (numerosp.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "'."); 
			document.noimagenes.elementos.focus();  
      		return 0; 
		}   
	}   
	/*termina validar elementos*/

	document.noimagenes.submit(); //Submit al form
}
</script>
<script type="text/javascript">
function valida_archivos(){
	var Ext = "";
	/*validar archivo seleccionado*/
<?php
	for($r=1;$r<($_POST["elementos"])+1;$r++){
?>
		Ext = "";
		if (document.losarchivos.userfile<?php echo $r;?>.value != "") {		
			Ext = GetExtension(document.losarchivos.userfile<?php echo $r;?>.value);
			if (Ext != "jpg")
			{
				alert("El archivo " + <?php echo $r;?> + " no es de formato JPG");
				document.losarchivos.userfile<?php echo $r;?>.focus();
				return 0;
			}
		}
<?php
	}
?>
	/*termina validar archivo seleccionado*/
	document.losarchivos.submit(); //Submit al form
}
function GetExtension(Filename) {
	var I = Filename.lastIndexOf(".");
	return (I > -1) ? Filename.substring(I + 1, Filename.length).toLowerCase() : "";
}
</script>
</head>
        
<body>
<?php include("../../menuA.php");?>
<?php 
if (isset($_SESSION['k_username'])) {
	if(isset($_POST['aventura']) && $_POST['seccion'] == "informacion"){
		
		/*estoy en seccion info general*/		
?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Paquetes <img src="../../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Aventura <img src="../../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Información 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">INFORMACIÓN</td>
    </tr>
</table> 
<a href="index.php">Regresar</a>
		<form action="creainfo.php" method="post" name="editainfo">
    		<TABLE width="730" border="0" cellpadding="0" align="center">
                <TR>
                    <TD align="right">Título:</TD>
                    <TD align="left"><input type="text" name="titulo" size="100" maxlength="100"/></TD>
                </TR>
                <TR>
                    <TD align="right">Dirigido a:</TD>
                    <TD align="left"><input type="text" name="dirigido" size="100" maxlength="100"/></TD>
                </TR>
                <TR>
                    <TD align="right">Duración:</TD>
                    <TD align="left"><input type="text" name="duracion" size="100" maxlength="100 "/></TD>
                </TR>
                <TR>
                    <TD align="right" valign="top">Incluye:</TD>
                    <TD align="left"><textarea name="incluye" rows="8" cols="80"></textarea></TD>
                </TR>
                <TR>
                    <TD align="right" valign="top">Recorrido:</TD>
                    <TD align="left"><textarea name="recorrido" rows="8" cols="80"></textarea></TD>
                </TR>
          <TR>
                    <TD align="right" valign="top">Costo:</TD>
                    <TD align="left"><textarea name="costo" rows="3" cols="80"></textarea></TD>
                </TR>
                <TR>
                    <TD align="right">Mínimo:</TD>
                    <TD align="left"><input type="text" name="minimo" size="100"/></TD>
                </TR>
                <TR>
                    <TD align="right">Imágenes:</TD>
                    <TD align="left"><select name="imagenes">
                    					<option value="0">Seleccione</option>
                    					<option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="30">30</option>
                                     </select>
                	</TD>
                </TR>
		    </TABLE><input type="hidden" name="aventura" value="<?php echo $_POST['aventura'];?>"/>
    		<input type="button" onclick="valida_infor()" value="Editar" />
		</form>		
<?php
	}
	else if(isset($_POST['aventura']) && $_POST['seccion'] == "galeria"){
		/*estoy en seccion galeria general*/
		if(isset($_POST['elementos'])){
			/*estoy en seccion galeria seccion 2*/
			
			$elementos = $_POST['elementos'];
			$aventura = $_POST['aventura'];
?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Paquetes <img src="../../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Aventura <img src="../../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Imágenes <img src="../../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Selección
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">IMÁGENES</td>
    </tr>
</table> 

			<a href="index.php">Regresar</a><BR>
            Seleccione imágenes con las siguientes características:<BR>
            Extensión: jpg<BR>
            Tamaño: 716 x 305
			<FORM METHOD="POST" ACTION="creaimgs.php" enctype="multipart/form-data" name="losarchivos">
				<input name="elementos" type="hidden" value="<?php echo $elementos; ?>"/>
                <input name="aventura" type="hidden" value="<?php echo $aventura; ?>"/>
				<table width="600" align="center" border="1" cellpadding="0" cellspacing="0">
<?php
					for($i=1;$i<$elementos+1;$i++)
					{
?>
	  					<tr>    
  							<td><img src="../../../imgs/Paquetes/aventura/<?php echo $aventura;?>/imag<?php echo $i;?>.jpg" width="120" height="100" />
                            </td>
        	    			<td>
                            	<input name="userfile<?php echo $i;?>" type="file">
                			</td>
<?php
			  				if($i<$elementos){?>
		  						<td><img src="../../../imgs/Paquetes/aventura/<?php echo $aventura;?>/imag<?php echo ($i+1);?>.jpg" width="120" height="100" />
                                </td>
          						<td>
                                	<input name="userfile<?php echo ($i+1);?>" type="file">
                                </td>
<?php 
			  				} 
?>
  						</tr>
<?php
  						$i++;
					}
 ?>
				</table><br>
                <input type="button" onclick="valida_archivos()" value="Editar" />
			</FORM>

<?php	
		}
		else{
			/*estoy en seccion galeria seccion 1*/
?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Paquetes <img src="../../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Aventura <img src="../../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Imágenes
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">IMÁGENES</td>
    </tr>
</table> 

            <a href="index.php">Regresar</a>
            <FORM METHOD="POST" ACTION="index.php" name="noimagenes">
                Inserte el número de imágenes a mostrar:
                <input name="elementos"  type="text" value="15" align="Center" MAXLENGTH="2"/>
                <input type="hidden" name="aventura" value="<?php echo $_POST['aventura'];?>"/>
                <input type="hidden" name="seccion" value="<?php echo $_POST['seccion'];?>"/>
                <input type="button" onclick="valida_elementos()" value="Enviar" />
            </FORM>
<?php    
	 	}			
	}
	else{
		/*estoy en seccion general*/
?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Paquetes <img src="../../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Aventura 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">PAQUETES - AVENTURA</td>
    </tr>
</table> 

		<form name="principal" action="index.php" method="post">
            <table width="600" border="0"  align="center">
                <tr>
                	<td align="center">
                    	PAQUETE - AVENTURA:
                        <select name="aventura">
                            <option value="0">Seleccione</option>
                            <option value="1">AVENTURA 1</option>
                            <option value="2">AVENTURA 2</option>
			            </select>
                	</td>            
            	</tr>
                <tr>
                    <td align="center">
                    	Seleccione la sección a editar
                    </td>
                </tr>
                <tr>
                	<td align="center">
                    	<input type="radio" name="seccion" value="informacion" checked="checked"/>INFORMACIÓN
                        <input type="radio" name="seccion" value="galeria"  /> GALERÍA
                    </td>
                </tr>
            </table>
            <input type="button" onclick="valida_principal()" value="Aceptar" />
        </form>
        <a href="../../home.php">Regresar</a>
<?php
	}
?>

    
    
    
	<br>
	<br>
	<a href="../../logout.php">Salir del administrador</a>
<?php    
}else{
?>
	Favor de ingresar al sistema: <p><a href="../../index.php">Login</a></p>
<?php
}
?>
</body>
</html>
