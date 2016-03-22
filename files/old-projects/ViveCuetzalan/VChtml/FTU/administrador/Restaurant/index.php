<?php session_start();
require_once('../include_dao.php');
if (!isset($_SESSION['k_username'])) {
	header('Location:../index.php', true, 303);
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
				<h2 class="sectionTitle">Restaurantes</h2>
				<p><a href="paso1.php" class="isButton">Añadir restaurant</a></p>
				<table class="tableFormat">
					<thead>
						<tr><th>Id</th><th>Nombre</th><th>Acciones</th></tr>
					</thead>
					<tbody>
						<?php
						//$transaction = new Transaction();
						$restaurantes = DAOFactory::getRestaurantesDAO()->queryAll();
						for ( $i=0; count( $restaurantes ) > $i ; $i++ ) {
						$restaurant = $restaurantes[$i]; ?>
						<tr>
							<td><a href="editar.php?id=<?php echo $restaurant->id; ?>"><?php echo $restaurant->id; ?></a></td>
							<td><a href="editar.php?id=<?php echo $restaurant->id; ?>"><?php echo $restaurant->nombre; ?></a></td>
							<td>
								<a href="editar.php?id=<?php echo $restaurant->id; ?>" class="isButton symb-icon icoEdit"></a>
								<a <?php echo 'href="borrar.php?id='.$restaurant->id.'&deleteAll=true"'; ?> class="isButton symb-icon icoClosefill" onclick="return confirm('Se borraran todos los datos, incluidas fotos y carpetas creadas. ¿Desea continuar?')"></a>
							</td>
						</tr>
						<?php }
						//$transaction->commit(); ?>
					</tbody>
				</table>
			</div>
		</div>

		<script src="../../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../../js/jquery.placeholder.min.js"></script>
		<script src="../../js/jquery.validate.min.js"></script>
		<script src="../js/admin-validation.min.js"></script>
		<script src="../js/admin-query.min.js"></script>
	</body>
</html>