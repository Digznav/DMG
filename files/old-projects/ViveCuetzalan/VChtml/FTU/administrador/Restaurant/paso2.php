<?php session_start();
require_once('../include_dao.php');
if (!isset($_SESSION['k_username'])) {
	header('Location:../index.php', true, 303);
	die();
}
$idRestaurant = $_GET['id'];
if( !empty($_POST) && !empty($_FILES)) {
	$restaurant = DAOFactory::getRestaurantesDAO()->load( $idRestaurant );
	if ($_FILES['imgHD']['name'] != "" ){
		$folderName = $_GET['fd'];
		$fileName = 'imgHD'.$restaurant->id.'-'.rand(1,99);
		$allowedExts = array('jpg', 'jpeg', 'png');
		$ext = explode( '.', $_FILES['imgHD']['name'] );
		$extension = end($ext);
		//Image validation
		if ((($_FILES['imgHD']['type'] == 'image/jpeg') || ($_FILES['imgHD']['type'] == 'image/png') || ($_FILES['imgHD']['type'] == 'image/pjpeg')) && in_array($extension, $allowedExts)) {
			if ( $_FILES['imgHD']['error'] == 0 ) {
				$dirURL = '../../imgs/dondecomer/'.$folderName.'/';
				$uploadFile = $dirURL.$fileName.'.'.$extension;
				if ( !file_exists($uploadFile) ) {
					$upload = move_uploaded_file( $_FILES['imgHD']['tmp_name'],$uploadFile);
					if ($upload) {
						$restaurant->fotoHd = 'imgs/dondecomer/'.$folderName.'/'.$fileName.'.'.$extension;
						DAOFactory::getRestaurantesDAO()->update($restaurant);
					}
				} else { echo '<script>alert ("The file already exists");</script>'; return false; };
			} else { echo 'Impossible to upload the image, try again'; return false; };
		} else { echo 'Invalid file, try again'; return false; };
	} else { echo "No file found"; };

	//echo '<script type="text/javascript">window.location.replace("paso3.php?id='.$restaurant->id.'&fd='.$folderName.'");</script>';
	header('Location: paso3.php?id='.$idRestaurant.'&fd='.$folderName );
	die();
}
?>
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
				<h2 class="sectionTitle">Añadir restaurant - Imagen de fondo</h2>
				<form action="" method="POST" enctype="multipart/form-data">
					<p>Esta imagen servirá para mostrarla en el fondo del sitio.</p>
					<table class="tableFormat">
						<tbody>
							<tr>
								<td><label for="imgHD">Imagen</label></td>
								<td><input type="file" name="imgHD" id="imgHD" accept="image/*"></td>
							</tr>
						</tbody>
					</table>
					<a <?php echo 'href="borrar.php?id='.$idRestaurant.'&del1=true"'; ?> class="isButton symb-icon icoClosefill" onclick="return confirm('Se eliminarán los datos creados hasta el momento. ¿Desea cancelar de todos modos?')">Cancelar</a>
					<button type="submit" name="submit" class="isButton symb-icon icoForward">Siguiente</button>
				</form>
			</div>
		</div>
		<script src="../../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../../js/jquery.placeholder.min.js"></script>
		<script src="../../js/jquery.validate.min.js"></script>
		<script src="../js/admin-validation.min.js"></script>
		<script src="../js/admin-query.min.js"></script>
	</body>
</html>