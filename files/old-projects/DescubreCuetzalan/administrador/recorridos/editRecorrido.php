<?php session_start();?>
<?php
require_once('../phpdao-2.7/generated/include_dao.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::Descubre Cuetzalan, Administrador::.</title>
<link rel="stylesheet" href="../admon.css" type="text/css" />
</head>
        
<body>
<?php include("../menuA.php");?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Rutas  <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Información <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Edición 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">INFORMACIÓN</td>
    </tr>
</table> 

<?php 
if (isset($_SESSION['k_username'])) {

	$recorridoEspecifico = DAOFactory::getRecorridoDAO()->load($_POST["id"]); 

	$recorridoEspecifico->nombre =  $_POST["nombre"];
	$recorridoEspecifico->dirigidoa = $_POST["dirigido"];
	$recorridoEspecifico->duracion = $_POST["duracion"];
	$recorridoEspecifico->incluye = $_POST["incluye"];
	$recorridoEspecifico->recorrido = $_POST["recorrido"];
	$recorridoEspecifico->costo = $_POST["costo"];
	$recorridoEspecifico->minimo = $_POST["minimo"];

	$transaction = new Transaction();
	DAOFactory::getRecorridoDAO()->update($recorridoEspecifico);
	$transaction->commit();

	echo "Se ha actualizado correctamente.";	
?>
	<br>
	<br>
	<br>
	<a href="index.php">Regresar</a><br>
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