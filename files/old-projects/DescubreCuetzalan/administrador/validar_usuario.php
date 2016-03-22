<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="admon.css" type="text/css" />
<title>.::Descubre Cuetzalan, Administrador::.</title>

</head>

<body>
<?php include("menuA.php");?>
<table width="750" border="0" align="center" cellspacing="0" cellpadding="0">
    <tr>
    	<td class="seccion" colspan="2" valign="middle">Log in
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">INICIAR SESIÓN</td>
    </tr>
</table> 

<?php 
function quitar($mensaje)
{
    $nopermitidos = array("'",'\\','<','>',"\"");
    $mensaje = str_replace($nopermitidos, "", $mensaje);
    return $mensaje;
}     
$usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));   
$password = $_POST["password"];
$user= "cuetzalan";
$pass = "admin";
 
if($user == $usuario){
	if($pass == $password){ 
            $_SESSION["k_username"] = $usuario;
?>
        Has sido logueado correctamente<BR>
        <a href="home.php">Continuar</a>
<?php
    }else{
?>
		Password Incorrecto
        <a href="index.php">Regresar</a>
<?php
    }
	}else{
?>	
		Usuario incorrecto<br>
		<a href="index.php">Regresar</a>
<?php
	} 
?>

</body>
</html>
