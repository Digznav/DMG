<?php session_start();
require_once('../include_dao.php');
if (!isset($_SESSION['k_username'])) {
	header('Location:../index.php', true, 303);
	die();
}

$idHotel = $_GET['id'];
if( !empty($_POST) ) {
	$folderName = $_GET['fd'];

	foreach ($_POST['habitaciones'] as $value) {
		if ( !ctype_space($value['tipo']) && !ctype_space($value['tarifa']) ) {
			if ( $value['tipo'] != '' && $value['tarifa'] != '' ) {
				//echo 'tipo:'.$value['tipo'].'; Tarifa:'.$value['tarifa'].'<br>';
				$hab_Hotel = new Habitacione();
				$hab_Hotel->idHotel = $idHotel;
				$hab_Hotel->tipoHabitacion = $value['tipo'];
				$hab_Hotel->tarifa = $value['tarifa'];
				DAOFactory::getHabitacionesDAO()->insert( $hab_Hotel );
			}
		}
	}
	
	//echo '<script type="text/javascript">window.location.replace("paso4.php?id='.$hotel->id.'&fd='.$folderName.'");</script>';
	header('Location: paso4.php?id='.$idHotel.'&fd='.$folderName );
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
				<h2 class="sectionTitle">Añadir hotel - Habitaciones</h2>
				<form action="" method="POST">
					<p>Tipos de habitaciones que dispone el hotel:</p>
					<table class="tableFormat">
						<thead>
							<tr><th>&nbsp;</th><th>Tipo de habitación</th><th>Tarifa</th></tr>
						</thead>
						<tbody id="ObjectsList">
							<tr class="obj-li" data-num-obj="1">
								<td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td>
								<td><input type="text" name="habitaciones[hab1][tipo]" placeholder="Habitación"></td>
								<td>$<input type="text" name="habitaciones[hab1][tarifa]" placeholder="00.00"></td>
							</tr>
							<tr class="obj-li" data-num-obj="2">
								<td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td>
								<td><input type="text" name="habitaciones[hab2][tipo]" placeholder="Habitación"></td>
								<td>$<input type="text" name="habitaciones[hab2][tarifa]" placeholder="00.00"></td>
							</tr>
							<tr class="obj-li" data-num-obj="3">
								<td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td>
								<td><input type="text" name="habitaciones[hab3][tipo]" placeholder="Habitación"></td>
								<td>$<input type="text" name="habitaciones[hab3][tarifa]" placeholder="00.00"></td>
							</tr>
							<tr class="obj-li" data-num-obj="4">
								<td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td>
								<td><input type="text" name="habitaciones[hab4][tipo]" placeholder="Habitación"></td>
								<td>$<input type="text" name="habitaciones[hab4][tarifa]" placeholder="00.00"></td>
							</tr>
						</tbody>
						<tfoot><tr><td colspan="3"><button type="button" id="addHab" class="isButton symb-icon icoZoominfill">Añadir campo</button></td></tr></tfoot>
					</table>
					<a <?php echo 'href="borrar.php?id='.$idHotel.'&del1=true"'; ?> class="isButton symb-icon icoClosefill" onclick="return confirm('Se eliminarán los datos creados hasta el momento. ¿Desea cancelar de todos modos?')">Cancelar</a>
					<button type="submit" name="submit" class="isButton symb-icon icoForward">Siguiente</button>
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
				$('#addHab').click(function() {
					var lstNm = $('#ObjectsList .obj-li').last().data('num-obj') + 1;
					var htmlInput = '<tr class="obj-li" data-num-obj="'+lstNm+'"><td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td><td><input type="text" name="habitaciones[hab'+lstNm+'][tipo]" placeholder="Habitación"></td><td>$<input type="text" name="habitaciones[hab'+lstNm+'][tarifa]" placeholder="00.00"></td></tr>';
					$('#ObjectsList').append(htmlInput);
				});
			});
		</script>
	</body>
</html>