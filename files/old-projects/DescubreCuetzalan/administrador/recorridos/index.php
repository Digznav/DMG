<?php session_start();?>
<?php
require_once('../phpdao-2.7/generated/include_dao.php');
$recorridos = DAOFactory::getRecorridoDAO()->queryAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::Descubre Cuetzalan, Administrador::.</title>
<link rel="stylesheet" href="../admon.css" type="text/css" />
<script type="text/javascript">
function valida_principal() {
    /*validar ruta*/
    if (document.principal.ruta.value == "0") {
        alert("Seleccione un Recorrido válido");
        document.principal.ruta.focus();
        return 0;
    }
    /*termina validar ruta*/
document.principal.submit(); //Submit al form

}

function valida_infor(){
        if (document.editainfo.nombre.value.length < 1){

            alert("Inserte un Nombre correcto.");
                document.editainfo.nombre.focus();
                return 0;
        }
        document.editainfo.submit();
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
	if(isset($_POST['ruta']) && $_POST['seccion'] == "informacion"){
		/*estoy en seccion info general
        */
$recorridoEspecifico = DAOFactory::getRecorridoDAO()->load($_POST["ruta"]); 

        	
?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Recorridos <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Información 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">INFORMACIÓN</td>
    </tr>
</table> 
<a href="index.php">Regresar</a>

<form action="editRecorrido.php" method="post" name="editainfo">
    		<TABLE width="730" border="0" cellpadding="0" align="center">
                <TR>
                    <input type="text" name="id" size="100" maxlength="100" hidden="true" value="<?php echo $recorridoEspecifico->id; ?>"/>
                    <TD align="right">Nombre:</TD>
                    <TD align="left"><input type="text" name="nombre" size="100" maxlength="100" value="<?php echo $recorridoEspecifico->nombre; ?>"/></TD>
                </TR>
                <TR>
                    <TD align="right">Dirigido a:</TD>
                    <TD align="left"><input type="text" name="dirigido" size="100" maxlength="100" value="<?php echo $recorridoEspecifico->dirigidoa; ?>"/></TD>
                </TR>
                <TR>
                    <TD align="right">Duración:</TD>
                    <TD align="left"><input type="text" name="duracion" size="100" maxlength="100" value="<?php echo $recorridoEspecifico->duracion; ?>"/></TD>
                </TR>
                <TR>
                    <TD align="right" valign="top">Incluye:</TD>
                    <TD align="left"><textarea name="incluye" rows="8" cols="80"><?php echo $recorridoEspecifico->incluye; ?></textarea></TD>
                </TR>
                <TR>
                    <TD align="right" valign="top">Recorrido:</TD>
                    <TD align="left"><textarea name="recorrido" rows="8" cols="80"><?php echo $recorridoEspecifico->recorrido; ?></textarea></TD>
                </TR>
          <TR>
                    <TD align="right" valign="top">Costo:</TD>
                    <TD align="left"><textarea name="costo" rows="3" cols="80"><?php echo $recorridoEspecifico->costo; ?></textarea></TD>
                </TR>
                <TR>
                    <TD align="right">Mínimo:</TD>
                    <TD align="left"><input type="text" name="minimo" size="100" value="<?php echo $recorridoEspecifico->minimo; ?>"/></TD>
                </TR>
		    </TABLE><input type="hidden" name="ruta" value="<?php echo $_POST['ruta'];?>"/>
    		<input type="button" onclick="valida_infor()" value="Editar" />
		</form>		
<?php
	}
	else if(isset($_POST['ruta']) && $_POST['seccion'] == "galeria"){
		/*estoy en seccion galeria general*/
        if(isset($_POST['elementos'])){
			/*estoy en seccion galeria seccion 2*/
			$elementos=$_POST['elementos'];
           /* $elementos=0;*/
			$ruta= $_POST['ruta'];
?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Recorridos <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Imágenes <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Selección
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
                <input name="ruta" type="hidden" value="<?php echo $ruta; ?>"/>
				<table width="600" align="center" border="1" cellpadding="0" cellspacing="0">
<?php
					for($i=1;$i<$elementos+1;$i++)
					{
?>
	  					<tr>    
  							<td><img src="../../imgs/Recorridos/<?php echo $ruta;?>/imag<?php echo $i;?>.jpg" width="120" height="100" />
                            </td>
        	    			<td>
                            	<input name="userfile<?php echo $i;?>" type="file">
                			</td>
<?php
			  				if($i<$elementos){?>
		  						<td><img src="../../imgs/Recorridos/<?php echo $ruta;?>/imag<?php echo ($i+1);?>.jpg" width="120" height="100" />
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
        <td class="seccion" colspan="2" valign="middle">Recorridos <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Imágenes
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
                <input type="hidden" name="ruta" value="<?php echo $_POST['ruta'];?>"/>
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
        	Recorridos 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">RECORRIDOS</td>
    </tr>
</table> 

<form name="principal" action="index.php" method="post">
            <table width="600" border="0"  align="center">
                <tr>
                	<td align="center">
                    	RECORRIDO:
                        <select name="ruta">
                            <option value="0">Seleccione</option>
                            <?php
                            for ( $i=0; count( $recorridos ) > $i ; $i++ ) {
                                $reco = $recorridos[$i]; ?>
                                    <option value="<?php echo $reco->id; ?>"><?php echo $reco->nombre; ?></option>";
                            <?php }  ?>
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
        <br><br>
        <a href="nuevorecorrido.php">Nuevo Recorrido</a><br><br>
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
