<?php session_start();
require_once('../include_dao.php');
if (!isset($_SESSION['k_username'])) {
	header('Location:../index.php', true, 303);
	die();
}
$idRestaurant = $_GET['id'];
$restaurant = DAOFactory::getRestaurantesDAO()->load( $idRestaurant );
$vc = explode('/',$restaurant->logo);
$imgFolder = $vc[2];
$allowedExts = array('jpg', 'jpeg', 'gif', 'png');
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
				<?php
				if ( isset($_GET['action']) && $_GET['action']=='modGeneral' ) {
					include('libs/editar-Generales.php');
				}
				elseif ( isset($_GET['action']) && $_GET['action']=='modHD' ) {
					include('libs/editar-fotoHD.php');
				}
				elseif ( isset($_GET['action']) && $_GET['action']=='modServ' ) {
					include('libs/editar-Servicios.php');
				}
				elseif ( isset($_GET['action']) && $_GET['action']=='modGallery' ) {
					include('libs/editar-Galeria.php');
				}
				else { ?>
				<h2 class="sectionTitle"><?php echo $restaurant->nombre; ?> - Edición</h2>
				<p>Seleccione la opción que desee modificar</p>
				<ul class="edit-Options">
					<li><a href="editar.php?id=<?php echo $idRestaurant; ?>&action=modGeneral">Datos generales</a></li>
					<li><a href="editar.php?id=<?php echo $idRestaurant; ?>&action=modHD">Imagen de fondo</a></li>
					<li><a href="editar.php?id=<?php echo $idRestaurant; ?>&action=modServ">Servicios generales</a></li>
					<li><a href="editar.php?id=<?php echo $idRestaurant; ?>&action=modGallery">Galería de imágenes</a></li>
				</ul>
				<a href="index.php" class="isButton symb-icon icoReply">Regresar</a>
				<?php } ?>
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