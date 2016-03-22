<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::Descubre Cuetzalan, Administrador::.</title>
<link rel="stylesheet" href="admon.css" type="text/css" />
</head>
        
<body>
<?php include("menuA.php");?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">BIENVENIDO 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">BIENVENIDO</td>
    </tr>
</table> 

<?php 
if (isset($_SESSION['k_username'])) {
?>
  <table width="600" border="0"  align="center">
    	<tr>
        	<td align="center"><a href="rutas/rutas.php">Rutas</a></td>
      	</tr>
        <tr>
          <td align="center"><a href="recorridos/index.php">Recorridos</a></td>
        </tr>
      	<tr>
        	<td align="center"><a href="paquetes/aventura/index.php">Paquetes-Aventura</a></td>
      	</tr>
      	<tr>
        	<td align="center"><a href="paquetes/naturaleza/index.php">Paquetes-Naturaleza y Cultura</a></td>
      	</tr>
		<tr>
        	<td align="center"><a href="promociones/index.php">Promociones</a></td>
      	</tr>
        <tr>
        	<td align="center"><a href="hoteles/index.php">Hoteles</a></td>
      	</tr>
        <tr>
        	<td align="center"><a href="cabanas/index.php">Cabañas</a></td>
      	</tr>
        <tr>
        	<td align="center"><a href="campamentos/index.php">Campamentos</a></td>
      	</tr>
    </table>
	<br>
	<br>
	<a href="logout.php">Salir del administrador</a>
<?php    
}else{
?>
	Favor de ingresar al sistema: <p><a href="index.php">Login</a></p>
<?php
}
?>
</body>
</html>
