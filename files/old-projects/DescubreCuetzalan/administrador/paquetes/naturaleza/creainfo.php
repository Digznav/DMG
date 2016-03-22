<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::Descubre Cuetzalan, Administrador::.</title>
<link rel="stylesheet" href="../../admon.css" type="text/css" />
</head>
        
<body>
<?php include("../../menuA.php");?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Paquetes <img src="../../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Naturaleza y Cultura <img src="../../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Información <img src="../../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Edición 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">INFORMACIÓN</td>
    </tr>
</table> 

<?php 
if (isset($_SESSION['k_username'])) {
	$titulo = $_POST["titulo"];
	$dirigido= $_POST["dirigido"];
	$duracion = $_POST["duracion"];
	$incluye = $_POST["incluye"];
	$recorrido = $_POST["recorrido"];
	$costo = $_POST["costo"];
	$minimo = $_POST["minimo"];
	$naturaleza = $_POST["naturaleza"];
	$imagenes = $_POST["imagenes"];
	
	$xml = fopen ("../../../xml/paquetes/naturaleza/naturaleza".$naturaleza.".xml", "w");
	if (!$xml) {
		echo "No se pudo abrir el archivo XML.";
		exit;
	}
	fwrite ($xml, '<?xml version="1.0" encoding="utf-8"?>');
	fwrite ($xml, '<naturaleza>');	
	$contenidoxml = '<titulo>'.$titulo.'</titulo><dirigido>'.$dirigido.'</dirigido><duracion>'.$duracion.'</duracion><incluye>'.$incluye.'</incluye><recorrido>'.$recorrido.'</recorrido><costo>'.$costo.'</costo><minimo>'.$minimo.'</minimo><imagenes>'.$imagenes.'</imagenes>';
	fwrite ($xml, $contenidoxml);
	fwrite ($xml, ' </naturaleza>');
	if (fclose ($xml)){
		include("../../creamenu.php");
	   	echo 'Información del paquete Naturaleza '.$naturaleza.' Editada<BR><a href="index.php">Continuar</a><BR>';  
	}
	else
	{
		echo 'Error al escribir el XML particular de naturaleza<BR><a href="index.php">Continuar</a><br>';
	}
	
?>
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