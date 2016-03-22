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
    	<td class="seccion" colspan="2" valign="middle">Recorridos <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Imágenes <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Selección <img src="../../imgs/hover_sub.png" width="5" height="10" alt="pert" /> Edición 
        </td>
    </tr>
    <tr>
    	<td class="titulo" colspan="2" valign="middle">IMÁGENES</td>
    </tr>
</table> 

<?php 
if (isset($_SESSION['k_username'])) {
	set_time_limit(600);
	ini_set('memory_limit','128M');
	$elementos = $_POST['elementos'];
	$ruta = $_POST['ruta'];
	$nombre_archivos[] = array();
	$tipo_archivos[] = array();
	$tamano_archivos[] = array();
	$titulos[] = array();
	for($i=1;$i<$elementos+1;$i++)	
	{
		$nombre_archivos[$i] = "../../imgs/Recorridos/".$ruta."/imag".$i.".jpg";
		$tipo_archivos[$i] = $_FILES ['userfile'.$i]['type'];
		$tamano_archivos[$i] = $_FILES ['userfile'.$i]['size'];
	}

	//compruebo si las características del archivo son las que deseo
	include('SimpleImage.php');
	require_once('../phpdao-2.7/generated/include_dao.php');
	$image = new SimpleImage();
	for($i=1;$i<$elementos+1;$i++)
	{
		if (move_uploaded_file($_FILES['userfile'.$i]['tmp_name'],$nombre_archivos[$i])){
			$image->load('../../imgs/Recorridos/'.$ruta.'/imag'.$i.'.jpg');
			$image->resize(716,305);
			$image->save('../../imgs/Recorridos/'.$ruta.'/imag'.$i.'.jpg');

			$img_recorrido = new Imagene();
			$img_recorrido->idRecorrido=$ruta;
			$img_recorrido->urlImagen='imgs/Recorridos/'.$ruta.'/imag'.$i.'.jpg';

			$transaction = new Transaction();
			DAOFactory::getImagenesDAO()->insert($img_recorrido);
			$transaction->commit();

			echo "Imagen imag".$i.".jpg cargada correctamente<br>";
		} 
	}
?>
<a href="index.php">Regresar</a><BR>
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
