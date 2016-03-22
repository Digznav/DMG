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
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/design/favicon.ico">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/style.mobile.css">
		<link rel="stylesheet" href="../css/orientation.fix.css">
		<script src="../js/modernizr-2.6.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\\/script>')</script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<?php $urlEng = "../en/mobile/How_is_it"; $actMenu = 'Como_es'; include("libs/header.php"); ?>
			<div class="cont onlyText clearfix">
				<h2 class="sectionTitle">Tips del viajero</h2>
				<p>El clima predominante es húmedo y semi-cálido con neblinas y lluvias abundantes en verano.</p>
				<p>41% de días despejados aproximadamente al año, con una temperatura media anual entre los 18° y 24° centígrados, los meses más calurosos de mayo y junio.</p>
				<p>El único Banco de Cuetzalan, (Banamex) cuenta con ventanillas de atención y cajero automático ATM.</p>
				<p>En general, los servicios en Cuetzalan se pagan en efectivo, pregunte con anticipación sobre pagos con tarjeta de crédito.</p>
				<p>Es recomendable que siempre lleve consigo ropa impermeable y en época invernal procure ropa abrigada.</p>
				<p>En los transportes locales se puede llegar a varias poblaciones cercanas a Cuetzalan y a la zona arqueológica de Yohualichan.</p>
				<p>La mejor manera de conocer Cuetzalan es caminando, le recomendamos usar calzado cómodo.</p>
				<p>El servicio de telefonía celular es completo, no hay servicio aún de Nextel.</p>
				<p>Los cibercafés, hoteles, restaurantes y establecimientos, cuentan con conexión a Internet.</p>
			</div>
			<?php include("libs/reservation.php"); ?>
		</div>
		<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../js/jquery.zweatherfeed.min.js"></script>
		<script src="../js/jquery.ui.datepicker-es.min.js"></script>
		<script src="../js/jquery.placeholder.min.js"></script>
		<script src="../js/jquery.validate.min.js"></script>
		<script src="../js/query.mobile.min.js"></script>
		<script>$('#test').weatherfeed(['MXPA1692']);</script>
	</body>
</html>