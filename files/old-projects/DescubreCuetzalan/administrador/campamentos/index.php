<?php session_start();
  header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::Descubre Cuetzalan, Administrador::.</title>
<link rel="stylesheet" href="../admon.css" type="text/css" />
<script type="text/javascript">
function valida_principal() {
	/*validar campamento*/
	if (document.principal.campamento.value == "0") {
		alert("Seleccione un campamento válido");
		document.principal.campamento.focus();
		return 0;
	}
	/*termina validar campamento*/
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

	/*validar nombre*/
	if (document.editainfo.nombre.value.length < 3 || document.editainfo.nombre.value.length > 25) {
		alert("Inserte un nombre correcto (menos de 25 caracteres).");
		document.editainfo.nombre.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.nombre.value.length; i++) {   
    	ubicacion = document.editainfo.nombre.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en el nombre."); 
			document.editainfo.nombre.focus();  
      		return 0; 
		}   
	}   
	/*termina validar nombre*/
	/*validar descripcion*/	
  	contador = 0;  
	for (i=0; i < document.editainfo.descripcion.value.length; i++) {   
    	ubicacion = document.editainfo.descripcion.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en la descripción"); 
			document.editainfo.descripcion.focus();  
      		return 0; 
		}   
	}   
	/*termina validar descripcion*/
	/*validar columna1*/
	if (document.editainfo.col1.value.length < 3 || document.editainfo.col1.value.length > 30) {
		alert("Inserte el titulo de la primer columna (menos de 30 caracteres).");
		document.editainfo.col1.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.col1.value.length; i++) {   
    	ubicacion = document.editainfo.col1.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en el título de la columna 1"); 
			document.editainfo.col1.focus();  
      		return 0; 
		}   
	}   
	/*termina validar columna1*/
		/*validar columna2*/
	if (document.editainfo.col2.value.length < 3 || document.editainfo.col2.value.length > 30) {
		alert("Inserte el titulo de la segunda columna (menos de 30 caracteres).");
		document.editainfo.col2.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.col2.value.length; i++) {   
    	ubicacion = document.editainfo.col2.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en el título de la columna 2"); 
			document.editainfo.col2.focus();  
      		return 0; 
		}   
	}   
	/*termina validar columna2*/
	/*validar columna3*/
	if (document.editainfo.col3.value.length < 3 || document.editainfo.col3.value.length > 30) {
		alert("Inserte el titulo de la tercera columna (menos de 30 caracteres).");
		document.editainfo.col3.focus();
		return 0;
	}
	
  	contador = 0;  
	for (i=0; i < document.editainfo.col3.value.length; i++) {   
    	ubicacion = document.editainfo.col3.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en el título de la columna 3"); 
			document.editainfo.col3.focus();  
      		return 0; 
		}   
	}   
	/*termina validar columna3*/
//	/*validar opciones*/
//	for(f=0; f < document.editainfo.elementosta.value; f++){
//		var opciones1 = "col10";
//		var opcione2 = "col2" + f;
//		var opcione3 = "col3" + f;
//		
//		alert(opciones1 + document.editainfo.opciones1.name);
//		/*validar opciones columna 1*/
//		contador = 0;  
//		for (i=0; i < document.editainfo.opciones1.value.length; i++) {   
//			ubicacion = document.editainfo.opciones1.value.substring(i, i + 1);   
//			if (caracteres.indexOf(ubicacion) != -1) {   
//				contador++;   
//			} else {   
//				alert("Inserte un valor diferente de '" + ubicacion + "' en el contenido de la posición"); 
//				document.editainfo.opciones1.focus();  
//				return 0; 
//			}   
//		}   
//		/*termina de validar opciones columna 1*/
//		/*validar opciones columna 2*/
//		contador = 0;  
//		for (i=0; i < document.editainfo.opcione2.value.length; i++) {   
//    		ubicacion = document.editainfo.opcione2.value.substring(i, i + 1);   
//    		if (caracteres.indexOf(ubicacion) != -1) {   
//    			contador++;   
//    		} else {   
//    			alert("Inserte un valor diferente de '" + ubicacion + "' en el contenido de la posición " + f + " de la primer columna"); 
//				document.editainfo.opcione2.focus();  
//      			return 0; 
//			}   
//		}
//		/*validar opciones columna 2*/
//		/*validar opciones columna 3*/
//		contador = 0;  
//		for (i=0; i < document.editainfo.opcione3.value.length; i++) {   
//    		ubicacion = document.editainfo.opcione3.value.substring(i, i + 1);   
//    		if (caracteres.indexOf(ubicacion) != -1) {   
//    			contador++;   
//    		} else {   
//    			alert("Inserte un valor diferente de '" + ubicacion + "' en el contenido de la posición " + f + " de la primer columna"); 
//				document.editainfo.opcione3.focus();  
//      			return 0; 
//			}   
//		}
//		/*validar opciones columna 3*/
//	}
//	/*termina de validar las opciones*/
	
	/*validar aclaracion*/
  	contador = 0;  
	for (i=0; i < document.editainfo.aclaracion.value.length; i++) {   
    	ubicacion = document.editainfo.aclaracion.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en la aclaración"); 
			document.editainfo.aclaracion.focus();  
      		return 0; 
		}   
	}   
	/*termina validar aclaracion*/
	/*validar adicionales*/
  	contador = 0;  
	for (i=0; i < document.editainfo.adicionales.value.length; i++) {   
    	ubicacion = document.editainfo.adicionales.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en las adicionales"); 
			document.editainfo.adicionales.focus();  
      		return 0; 
		}   
	}   
	/*termina validar adicionales*/
	/*validar restricciones*/
  	contador = 0;  
	for (i=0; i < document.editainfo.restricciones.value.length; i++) {   
    	ubicacion = document.editainfo.restricciones.value.substring(i, i + 1);   
    	if (caracteres.indexOf(ubicacion) != -1) {   
    		contador++;   
    	} else {   
    		alert("Inserte un valor diferente de '" + ubicacion + "' en las restricciones"); 
			document.editainfo.restricciones.focus();  
      		return 0; 
		}   
	}   
	/*termina validar restricciones*/
	
	

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
	var enter = "\n";
	var caracteres = 'abcdefghijklmnopqrstuvwxyzñ1234567890 ABCDEFGHIJKLMNOPQRSTUVWXYZÑáéíóúÁÉÍÓÚ-_!¡()$.,–' + String.fromCharCode(13) + enter;   
	var numerosp = '1234567890' + String.fromCharCode(13) + enter;   
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
function valida_elementosta(){	
	/*validar elementosta*/
	if (document.noopciones.elementosta.value == "0") {
		alert("Inserte un número de opciones correcto.");
		document.noopciones.elementosta.focus();
		return 0;
	}
	
	/*termina validar elementosta*/

	document.noopciones.submit(); //Submit al form
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
<?php include("../menuA.php");?>
<?php 
if (isset($_SESSION['k_username'])) {
	if(isset($_POST['campamento']) && $_POST['seccion'] == "informacion"){
		/*estoy en seccion info general*/
		if(isset($_POST['elementosta'])){
			/*estoy en seccion info seccion 2*/
			$elementosta=$_POST['elementosta'];
			$campamento = $_POST['campamento'];

$url = "../../xml/hospedaje/campamentos/campamento".$campamento.".xml";  
$contenido_xml = "";  
if($d = fopen($url, "r"))
{  
	while ($aux= fgets($d, 1024)){  
    $contenido_xml .= $aux;  
	}  
	fclose($d);  
}else
{  
	echo "No se pudo abrir el XML";  
}  
$xml = simplexml_load_string($contenido_xml);  
$adicionalesX = $xml->adicionales;
$descripcionX = $xml->descripcion;
$restriccionesX = $xml->restricciones;
$aclaracionX = $xml->aclaracion;
$oX=0;
foreach ($xml->caracteristica as $caracteristicasX)
{  
	$col1[$oX] = $caracteristicasX->car1;
	$col2[$oX] = $caracteristicasX->car2;
	$col3[$oX] = $caracteristicasX->car3;
	$oX++;
}
?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Campamentos <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Información 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">INFORMACIÓN</td>
    </tr>
</table> 
<a href="index.php">Regresar</a>

<form action="creainfo.php" method="post" name="editainfo">
    		<TABLE width="600" border="0" cellpadding="0" align="center">
                <TR>
                    <TD align="right">Nombre:</TD>
                    <TD align="left"><input type="text" name="nombre" size="50" value="<?php echo $xml->nombre;?>" maxlength="30"/></TD>
                </TR>
                <TR>
                    <TD align="right" valign="top">Descripción:</TD>
                    <TD align="left"><textarea name="descripcion" rows="8" cols="70"><?php echo $descripcionX?></textarea></TD>
                </TR>
                <tr>
                	<td colspan="2" align="left" style="font-weight:bolder; padding-left:20px">Columnas</td>
                </tr>
                <TR>
                    <TD align="right">Columna 1</TD>
                    <TD align="left"><input type="text" name="col1" size="50" value="<?php echo $xml->tit1;?>" maxlength="30"/></TD>
                </TR>
                <TR>
                    <TD align="right">Columna 2</TD>
                    <TD align="left"><input type="text" name="col2" size="50" value="<?php echo $xml->tit2;?>" maxlength="30"/></TD>
                </TR>
                <TR>
                    <TD align="right">Columna 3</TD>
                    <TD align="left"><input type="text" name="col3" size="50" value="<?php echo $xml->tit3;?>" maxlength="30"/></TD>
                </TR>
                <tr>
                	<td colspan="2">
                    	<hr />
                    </td>
                </tr>
                <tr>
                	<td colspan="2">
                    	<table width="600px" cellpadding="0" cellspacing="0" align="center">
							<?php
                            for($w=0;$w<$elementosta;$w++){
                            ?>
                            <TR>
                                <TD valign="top" align="center"><textarea name="col1<?php echo $w;?>" rows="8"><?php echo $col1[$w];?></textarea></TD>               
                                <TD valign="top" align="center"><textarea name="col2<?php echo $w;?>" rows="8"><?php echo $col2[$w];?></textarea></TD>  
                                <TD valign="top" align="center"><textarea name="col3<?php echo $w;?>" rows="8"><?php echo $col3[$w];?></textarea></TD>
                            </TR>
                            <?php	
                            }
                            ?>
	                	</table>
                    </td>
                </tr>
                <tr>
                	<td colspan="2">
                    	<hr>
                    </td>
                </tr>
                <TR>
                    <TD align="right" valign="top">Aclaración:</TD>
                    <TD align="left"><textarea name="aclaracion" rows="3" cols="70"><?php echo $aclaracionX;?></textarea></TD>
                </TR>
                <TR>
                    <TD align="right" valign="top">Adicionales:</TD>
                    <TD align="left"><textarea name="adicionales" rows="3" cols="70"><?php echo $adicionalesX;?></textarea></TD>
                </TR>
          <TR>
                    <TD align="right" valign="top">Restricciones:</TD>
                    <TD align="left"><textarea name="restricciones" rows="3" cols="70"><?php echo $restriccionesX;?></textarea></TD>
                </TR>               
                <TR>
                    <TD align="right">Imágenes:</TD>
                    <TD align="left">
                    	<select name="imagenes">
                            <option value="0">Seleccione</option>
                            <option value="5" <?php 
							if($xml->imagenes == "5"){
								echo 'selected="selected"';
							}
								?>>5</option>
                            <option value="6" <?php 
							if($xml->imagenes == "6"){
								echo 'selected="selected"';
							}
								?>>6</option>
                            <option value="7" <?php 
							if($xml->imagenes == "7"){
								echo 'selected="selected"';
							}
								?>>7</option>
                            <option value="8" <?php 
							if($xml->imagenes == "8"){
								echo 'selected="selected"';
							}
								?>>8</option>
                            <option value="9" <?php 
							if($xml->imagenes == "9"){
								echo 'selected="selected"';
							}
								?>>9</option>
                            <option value="10" <?php 
							if($xml->imagenes == "10"){
								echo 'selected="selected"';
							}
								?>>10</option>
                            <option value="11" <?php 
							if($xml->imagenes == "11"){
								echo 'selected="selected"';
							}
								?>>11</option>
                            <option value="12" <?php 
							if($xml->imagenes == "12"){
								echo 'selected="selected"';
							}
								?>>12</option>
                            <option value="13" <?php 
							if($xml->imagenes == "13"){
								echo 'selected="selected"';
							}
								?>>13</option>
                            <option value="14" <?php 
							if($xml->imagenes == "14"){
								echo 'selected="selected"';
							}
								?>>14</option>
                            <option value="15" <?php 
							if($xml->imagenes == "15"){
								echo 'selected="selected"';
							}
								?>>15</option>
                            <option value="20" <?php 
							if($xml->imagenes == "20"){
								echo 'selected="selected"';
							}
								?>>20</option>
                            <option value="25" <?php 
							if($xml->imagenes == "25"){
								echo 'selected="selected"';
							}
								?>>25</option>
                            <option value="30" <?php 
							if($xml->imagenes == "30"){
								echo 'selected="selected"';
							}
								?>>30</option>
                        </select>
                	</TD>
                </TR>
		    </TABLE>
            <input type="hidden" name="campamento" value="<?php echo $campamento;?>"/>
            <input type="hidden" name="elementosta" value="<?php echo $elementosta;?>"/>
    		<input type="button" onclick="valida_infor()" value="Editar" />
		</form>		
<?php
		}
		else{
			/*estoy en seccion info seccion 1*/
?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Campamentos <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Información
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">INFORMACIÓN</td>
    </tr>
</table> 

<a href="index.php">Regresar</a>
            <FORM METHOD="POST" ACTION="index.php" name="noopciones">
                Inserte el número de opciones a mostrar del Campamento:
                <select name="elementosta">
                	<option value="0">Seleccione</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
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
                </select>
                <input type="hidden" name="campamento" value="<?php echo $_POST['campamento'];?>"/>
                <input type="hidden" name="seccion" value="<?php echo $_POST['seccion'];?>"/>
                <input type="button" onclick="valida_elementosta()" value="Enviar" />
            </FORM>

<?php
		}
	}
	else if(isset($_POST['campamento']) && $_POST['seccion'] == "galeria"){
		/*estoy en seccion galeria general*/
		if(isset($_POST['elementos'])){
			/*estoy en seccion galeria seccion 2*/
			$elementos=$_POST['elementos'];
			$campamento= $_POST['campamento'];
?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Campamentos <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Imágenes <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Selección
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">IMÁGENES</td>
    </tr>
</table> 

<a href="index.php">Regresar</a><BR>
            Seleccione imágenes con las siguientes características:<BR>
<BR>
            Tamaño: 716 x 305
			<FORM METHOD="POST" ACTION="creaimgs.php" enctype="multipart/form-data" name="losarchivos">
				<input name="elementos" type="hidden" value="<?php echo $elementos; ?>"/>
                <input name="campamento" type="hidden" value="<?php echo $campamento; ?>"/>
				<table width="600" align="center" border="1" cellpadding="0" cellspacing="0">
<?php
					for($i=1;$i<$elementos+1;$i++)
					{
?>
	  					<tr>    
  							<td><img src="../../imgs/hospedaje/campamentos/campamento<?php echo $campamento;?>/imag<?php echo $i;?>.jpg" width="120" height="100" />
                            </td>
        	    			<td>
                            	<input name="userfile<?php echo $i;?>" type="file">
                			</td>
<?php
			  				if($i<$elementos){?>
		  						<td><img src="../../imgs/hospedaje/campamentos/campamento<?php echo $campamento;?>/imag<?php echo ($i+1);?>.jpg" width="120" height="100" />
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
    	<td class="seccion" colspan="2" valign="middle">Campamentos <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Imágenes
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
                <input type="hidden" name="campamento" value="<?php echo $_POST['campamento'];?>"/>
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
    	<td class="seccion" colspan="2" valign="middle">
        	Posadas 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">POSADAS</td>
    </tr>
</table> 

<form name="principal" action="index.php" method="post">
            <table width="600" border="0"  align="center">
                <tr>
                	<td align="center">
                    	POSADA:
                        <select name="campamento">
                            <option value="0">Seleccione</option>
                            <option value="1">CAMPAMENTO 1</option>
                            <option value="2">CAMPAMENTO 2</option>
                            <option value="3">CAMPAMENTO 3</option>
                            <option value="4">CAMPAMENTO 4</option>
                            <option value="5">CAMPAMENTO 5</option>
                            <option value="6">CAMPAMENTO 6</option>
                            <option value="7">CAMPAMENTO 7</option>
                            <option value="8">CAMPAMENTO 8</option>
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
            <input type="button" onclick="valida_principal()" value="Aceptar"/>
        </form>
        <a href="../home.php">Regresar</a>
<?php
	}
?>

    
    
    
	<br>
	<br>
	<a href="../logout.php">Salir del administrador</a>
<?php    
}else{
?>
	Favor de ingresar al sistema: <p><a href="../index.php">Login</a></p>
<?php
}
?>
</body>
</html>
