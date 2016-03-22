<?php session_start();
require_once('../include_dao.php');
if (!isset($_SESSION['k_username'])) {
	header('Location:../index.php', true, 303);
	die();
}
if( !empty($_POST) && !empty($_FILES) ) {
	function clean($string) {
		$string = str_replace(' ', '-', $string);
		return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
	}
	$actividad = new Actividade();
	$actividad->nombre = $_POST['nombre'];
	$actividad->descripcion = $_POST['descripcion'];
	$actividad->correo = $_POST['correo'];
	$actividad->fotoHd = 'empty';
	if ($_FILES['logo']['name'] != "" ){
		$folderName = clean($actividad->nombre);
		$fileName = 'logo'.$actividad->id.'-'.rand(1,99);
		$allowedExts = array('jpg', 'jpeg', 'gif', 'png');
		$ext = explode( '.', $_FILES['logo']['name'] );
		$extension = end($ext);
		//Image validation
		if ((($_FILES['logo']['type'] == 'image/gif') || ($_FILES['logo']['type'] == 'image/jpeg') || ($_FILES['logo']['type'] == 'image/png') || ($_FILES['logo']['type'] == 'image/pjpeg')) && in_array($extension, $allowedExts)) {
			if ( $_FILES['logo']['error'] == 0 ) {
				$dirURL = '../../imgs/quehacer/'.$folderName.'/';
				$uploadFile = $dirURL.$fileName.'.'.$extension;
				if ( !file_exists($uploadFile) ) {
					//Verifico si ya existe el directorio, sino creo uno especial para el hotel
					if(!is_dir($dirURL)) {
						mkdir($dirURL, 0755, true);
					}
					$upload = move_uploaded_file( $_FILES['logo']['tmp_name'],$uploadFile);
					if ($upload) {
						$actividad->logo = 'imgs/quehacer/'.$folderName.'/'.$fileName.'.'.$extension;
						DAOFactory::getActividadesDAO()->insert( $actividad );
					}
				} else { echo '<script>alert("The file already exists");</script>'; return false; };
			} else { echo 'Impossible to upload the image, try again'; return false; };
		} else { echo 'Invalid file, try again'; return false; };
	} else { echo "No file found"; };
	
	//echo '<script type="text/javascript">window.location.replace("paso2.php?id='.$actividad->id.'&fd='.$folderName.'");</script>';
	header('Location: paso2.php?id='.$actividad->id.'&fd='.$folderName );
	die();
} ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Vive Cuetzalan::.</title>
		<meta name="description" content="Vive Cuetzalan">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="../../imgs/design/favicon.ico">
		<link rel="stylesheet" href="../css/admin.css">
		<script src="../../js/modernizr-2.6.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\\/script>')</script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	</head>
	<body>
		<div id="container">
			<?php include('libs/header.php'); ?>
			<div class="cont onlyText clearfix">
				<h2 class="sectionTitle">Añadir actividad - Datos generales</h2>
				<form action="" method="POST" enctype="multipart/form-data">
					<table class="tableFormat">
						<tbody>
							<tr>
								<td><label for="nombre">Nombre</label></td>
								<td><input type="text" name="nombre" id="nombre" placeholder="Nombre"></td>
							</tr>
							<tr>
								<td><label for="descripcion">Descripción</label></td>
								<td>
									<?php include('libs/toolbar.php'); ?>
									<textarea name="descripcion" id="descripcion" placeholder="Introduzca el texto..."></textarea>
									<small>powered by <a href="https://github.com/xing/wysihtml5" target="_blank">wysihtml5</a>.</small>
								</td>
							</tr>
							<tr>
								<td><label for="correo">Correo:</label></td>
								<td><input type="mail" name="correo" id="correo" placeholder="ejemplo@dominio.com"></td>
							</tr>
							<tr>
								<td><label for="logo">Logo</label></td>
								<td><input type="file" name="logo" id="logo" accept="image/*"></td>
							</tr>
						</tbody>
					</table>
					<a href="index.php" class="isButton symb-icon icoClosefill">Cancelar</a>
					<button type="submit" name="submit" class="isButton symb-icon icoForward">Siguiente</button>
				</form>
			</div>
		</div>
		<script src="../../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../../js/jquery.placeholder.min.js"></script>
		<script src="../../js/jquery.validate.min.js"></script>
		<script src="../js/advanced.min.js"></script>
		<script src="../js/wysihtml5-0.4.0pre.min.js"></script>
		<script src="../js/admin-validation.min.js"></script>
		<script src="../js/admin-query.min.js"></script>
		<script type="text/javascript">
			var editor = new wysihtml5.Editor("descripcion", {
				toolbar:				"toolbar",
				stylesheets:		"../css/wysiwyg.css",
				parserRules:		wysihtml5ParserRules
			});
		</script>
	</body>
</html>