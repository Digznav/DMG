<?php session_start();
require_once('../include_dao.php');
if (!isset($_SESSION['k_username'])) {
	header('Location:../index.php', true, 303);
	die();
}

$idActividad = $_GET['id'];
$folderName = $_GET['fd'];
if( !empty($_POST) && !empty($_FILES) ) {
	$allowedExts = array('jpg', 'jpeg', 'png');
	$max_file_size = 1024*100; //100 kb
	$count = 1;

	// Loop $_FILES to exeicute all files
	foreach ($_FILES['imagenes']['name'] as $f => $name) {
		$fileName = 'img'.$idActividad.'-'.$count;
		$path = '../../imgs/quehacer/'.$folderName.'/';
		$xt = explode( '.', $name );
		$ext = end($xt);

		if ($_FILES['imagenes']['error'][$f] == 4) {
			continue; // Skip file if any error found
		}
		if ($_FILES['imagenes']['error'][$f] == 0) {
			/*if ($_FILES['imagenes']['size'][$f] > $max_file_size) {
				$message[] = "$name is too large!.";
				continue; // Skip large files
			}*/
			if( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $allowedExts) ) {
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
			else{ // No error found! Move uploaded files
				$fileName.='.'.$ext;
				if(move_uploaded_file($_FILES['imagenes']['tmp_name'][$f], $path.$fileName)) {
					$count++; // Number of successfully uploaded file
					$fotos_Actividad = new FotosActiv();
					$fotos_Actividad->idActiv = $idActividad;
					$fotos_Actividad->foto = 'imgs/quehacer/'.$folderName.'/'.$fileName;
					DAOFactory::getFotosActivDAO()->insert($fotos_Actividad);
				}
			}
		}
	}

	//header("Location: paso4.php?id=".$hotel->id."&fd=".$folderName );
	header("Location: index.php" );
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
				<h2 class="sectionTitle">Añadir actividad - Imágenes de galería</h2>
				<form action="" method="POST" enctype="multipart/form-data">
					<p>Estas imágenes se mostraran en la galería del hotel.</p>
					<table class="tableFormat">
						<thead>
							<tr><th>&nbsp;</th><th>Imágenes</th></tr>
						</thead>
						<tbody id="ObjectsList">
							<tr class="obj-li" data-num-obj="1">
								<td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td>
								<td><input type="file" name="imagenes[]" accept="image/*"></td>
							</tr>
							<tr class="obj-li" data-num-obj="2">
								<td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td>
								<td><input type="file" name="imagenes[]" accept="image/*"></td>
							</tr>
							<tr class="obj-li" data-num-obj="3">
								<td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td>
								<td><input type="file" name="imagenes[]" accept="image/*"></td>
							</tr>
							<tr class="obj-li" data-num-obj="4">
								<td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td>
								<td><input type="file" name="imagenes[]" accept="image/*"></td>
							</tr>
						</tbody>
						<tfoot><tr><td><button type="button" id="addImg" class="isButton symb-icon icoZoominfill">Añadir imagen</button></td></tr></tfoot>
					</table>
					<a <?php echo 'href="borrar.php?id='.$idActividad.'&del1=true&del2=true"'; ?> class="isButton symb-icon icoClosefill" onclick="return confirm('Se eliminarán los datos creados hasta el momento. ¿Desea cancelar de todos modos?')">Cancelar</a>
					<button type="submit" name="submit" class="isButton symb-icon icoCloudup">Guardar y salir</button>
				</form>
			</div>
		</div>

		<script src="../../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../../js/jquery.placeholder.min.js"></script>
		<script src="../../js/jquery.validate.min.js"></script>
		<script src="../js/admin-validation.min.js"></script>
		<script src="../js/admin-query.min.js"></script>
		<script type="text/javascript">
			jQuery(function($){
				$('#addImg').click(function() {
					var lstNm = $('#ObjectsList .obj-li').last().data('num-obj') + 1;
					var htmlInput = '<tr class="obj-li" data-num-obj="'+lstNm+'"><td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td><td><input type="file" name="imagenes[]" accept="image/*"></td></tr>';
					$('#ObjectsList').append(htmlInput);
				});
			});
		</script>
	</body>
</html>