<?php session_start();?>
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
    	<td class="seccion" colspan="2" valign="middle">Cabañas  <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Información <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Edición 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">INFORMACIÓN</td>
    </tr>
</table> 

<?php 
if (isset($_SESSION['k_username'])) {
	$cabana = $_POST["cabana"];
	$nombre = $_POST["nombre"];
	$descripcion = $_POST["descripcion"];
	$col1 = $_POST["col1"];
	$col2 = $_POST["col2"];
	$col3 = $_POST["col3"];
	$elementosta = $_POST["elementosta"];
	for($r=0;$r<$elementosta;$r++){
		$elemcol1[$r]=$_POST["col1".$r];
		$elemcol2[$r]=$_POST["col2".$r];
		$elemcol3[$r]=$_POST["col3".$r];
	}
	$aclaracion = $_POST["aclaracion"];
	$adicionales = $_POST["adicionales"];
	$restricciones = $_POST["restricciones"];
	$imagenes=$_POST["imagenes"];
	$caracteristicas = "";
	$xml = fopen ("../../xml/hospedaje/cabanas/cabana".$cabana.".xml", "w");
	if (!$xml) {
		echo "No se pudo abrir el archivo XML.";
		exit;
	}
	fwrite ($xml, '<?xml version="1.0" encoding="utf-8"?>');
	fwrite ($xml, '<cabana>');
	for($e=0;$e<$elementosta;$e++){
	$caracteristicas .= "<caracteristica>";
	$caracteristicas .= "<car1>".$elemcol1[$e]."</car1>";
	$caracteristicas .= "<car2>".$elemcol2[$e]."</car2>";		
	$caracteristicas .= "<car3>".$elemcol3[$e]."</car3>";		
	$caracteristicas .= "</caracteristica>";
	}
	
	$contenidoxml = '<nombre>'.$nombre.'</nombre>
	<descripcion>'.$descripcion.'</descripcion>
	<tit1>'.$col1.'</tit1>
	<tit2>'.$col2.'</tit2>
	<tit3>'.$col3.'</tit3>'.$caracteristicas.'<aclaracion>'.$aclaracion.'</aclaracion>
	<adicionales>'.$adicionales.'</adicionales>
	<restricciones>'.$restricciones.'</restricciones><imagenes>'.$imagenes.'</imagenes>';
	fwrite ($xml, $contenidoxml);
	fwrite ($xml, ' </cabana>');
	if (fclose ($xml)){
		include("creamenu.php");
	   	echo 'La información de la cabaña '.$cabana.' ha sido editada<BR><a href="index.php">Continuar</a><BR>';	   
	}
	else
	{
		echo 'Error al escribir el XML<BR><a href="index.php">Continuar</a><br>';
	}
	
?>
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