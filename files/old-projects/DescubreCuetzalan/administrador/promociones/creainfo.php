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
    	<td class="seccion" colspan="2" valign="middle">Promociones <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Información <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Edición 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">INFORMACIÓN</td>
    </tr>
</table> 

<div align="center">
  <?php 
if (isset($_SESSION['k_username'])) {
	if($_POST["titulo"]!="" && $_POST["titulo"]!=NULL)
	{
		$titulo = $_POST["titulo"];
		$promocion = $_POST["promocion"];
		
		$xml = fopen ("../../xml/promociones/promociones.xml", "w");
		if (!$xml) {
			echo "No se pudo abrir el archivo XML.";
			exit;
		}
		fwrite ($xml, '<?xml version="1.0" encoding="utf-8"?>');
		fwrite ($xml, '<promociones>');	
		$contenidoxml = '<titulo>'.$titulo.'</titulo><promocion>'.$promocion.'</promocion>';
		fwrite ($xml, $contenidoxml);
		fwrite ($xml, ' </promociones>');
		if (fclose ($xml)){
?>
		 La información de la promoción ha sido editada<BR>
         <a href="index.php">Continuar</a><BR>
<?php
		}
		else
		{
?>
			Error al escribir el XML<BR>
            <a href="index.php">Continuar</a><br>
<?php
		}
	}
	else
	{
?>
		<a href="index.php">Regresar</a><br>
<?php			
	}
?>
	<a href="../logout.php">Salir del administrador</a>
<?php    
}else{
?>
	Favor de ingresar al sistema:
    <p><a href="../index.php">Login</a></p>
<?php
}
?>
</div>
</body>
</html>