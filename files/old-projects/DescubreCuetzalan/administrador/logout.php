<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="admon.css" type="text/css" />
<title>.::Descubre Cuetzalan, Administrador::.</title>
<link href="style_destino.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("menuA.php");?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Log out 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">GRACIAS</td>
    </tr>
</table> 

<?php 
	session_start();
	// Borramos toda la sesion
	session_destroy();
?>
	Ha terminado la sesión<BR> 
	<a href="../index.php">Continuar</a>

</body>
</html>
