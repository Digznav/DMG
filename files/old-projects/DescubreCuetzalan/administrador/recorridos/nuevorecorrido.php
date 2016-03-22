<?php session_start();
require_once('../phpdao-2.7/generated/include_dao.php');
if( !empty($_POST) ) {
	$recorridoEspecifico = new Recorrido();
	$recorridoEspecifico->nombre =  $_POST["nombre"];
	$recorridoEspecifico->dirigidoa = $_POST["dirigido"];
	$recorridoEspecifico->duracion = $_POST["duracion"];
	$recorridoEspecifico->incluye = $_POST["incluye"];
	$recorridoEspecifico->recorrido = $_POST["recorrido"];
	$recorridoEspecifico->costo = $_POST["costo"];
	$recorridoEspecifico->minimo = $_POST["minimo"];

	$transaction = new Transaction();
	DAOFactory::getRecorridoDAO()->insert($recorridoEspecifico);
	$transaction->commit();

	header("Location: index.php");
	die();	
}
?>
<?php
require_once('../phpdao-2.7/generated/include_dao.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::Descubre Cuetzalan, Administrador::.</title>
<link rel="stylesheet" href="../admon.css" type="text/css" />
<script type="text/javascript">
function valida_infor(){
        if (document.editainfo.nombre.value.length < 1){

            alert("Inserte un Nombre correcto.");
                document.editainfo.nombre.focus();
                return 0;
        }
        document.editainfo.submit();
}
</script>


</head>
        
<body>
<?php include("../menuA.php");?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Recorrido  <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Nuevo <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Nuevo 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">NUEVO RECORRIDO</td>
    </tr>
</table> 
<form action="" method="post" name="editainfo">
    		<TABLE width="730" border="0" cellpadding="0" align="center">
                <TR>
                    <input type="text" name="id" size="100" maxlength="100" hidden="true"/>
                    <TD align="right">Nombre:</TD>
                    <TD align="left"><input type="text" name="nombre" size="100" maxlength="100"/></TD>
                </TR>
                <TR>
                    <TD align="right">Dirigido a:</TD>
                    <TD align="left"><input type="text" name="dirigido" size="100" maxlength="100"/></TD>
                </TR>
                <TR>
                    <TD align="right">Duración:</TD>
                    <TD align="left"><input type="text" name="duracion" size="100" maxlength="100"/></TD>
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
		    </TABLE><input type="hidden" name="ruta" value="<?php echo $_POST['ruta'];?>"/>
    		<input type="button" onclick="valida_infor()" value="Enviar" />
		</form>		
<br>
	<br>
	<br>
	<a href="index.php">Regresar</a><br>
	<a href="../logout.php">Salir del administrador</a>
</body>
</html>