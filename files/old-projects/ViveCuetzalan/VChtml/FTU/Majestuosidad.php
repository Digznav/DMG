<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Vive Cuetzalan::.</title>
		<meta name="description" content="Vive Cuetzalan">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/design/favicon.ico">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/vegas.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\\/script>')</script>
		<script type="text/javascript" src="js/jquery.vegas.min.js"></script> 
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<?php $actMenu = 'Majestuosidad'; include("libs/header.php");
			include("libs/reservation.php"); ?>

			<a href="#" id="openTxtLash" class="symb-icon icoRight"></a>
			<div class="cont onlyText clearfix">
				<a href="#" id="closeTxtLash" class="symb-icon icoClose"></a>
				<h2 class="sectionTitle">Magestuosidad en medio de la naturaleza.</h2>
				<div class="scrollCont">
					<p>La llegada de los europeos, dejó una huella imborrable no solo en la cultura y creencias de los aborígenes sino también en la arquitectura del lugar.</p>
					<p>La Parroquia de San Francisco de Asis, de inspiración renacentista y tintes romántico-góticos, que data de fines del siglo XIX, luce una alta torre exterior de remate cónico y una planta basilical de excelente acabado en relieves destacándose por el penacho de quetzal que forma el aura de la imagen de San Francisco de Asis. Son destacables sus misas acompañadas de danzas autóctonas y  arreglos florales de raíz mestiza.</p>
					<p>El Santuario de Nuestra Señora de Guadalupe, inspirado en la Basílica de Lourdes (Francia), se caracteriza por sus nutridas hiladas de jarritos de barro exteriores, razón por la que además, se le conoce como "la Iglesia de los Jarritos".</p>
					<p>La Capilla de María Santísima de la Concepción, edificada en Septiembre de 1880 y ubicada en la antigua salida del camino que conducía al Pueblo de San Andrés Tzicuilán, destaca por la exquisita pintura mural que realizara el destacado pintor cuetzalteco Don Joaquín Galicia Castro, en sus muros.</p>
					<p>El Palacio Municipal, cuyas obras culminaron en 1941, es una semi-réplica del Templo de Letrán de Roma, y su estilo neo-clásico rústico, convoca la atención de todos los turistas.</p>
					<p>El Parque Central, de tipo colonial, con sus jardines, bancas, terrazas, escalinatas y andadores así como su sobresaliente kiosco metálico, es el epicentro de la actividad pública de Cuetzalan.</p>
				</div>
			</div>

		</div>

		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.ui.datepicker-es.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/validation.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			var iniBackgrounds = [];
			(function($) {
				for (var i=1; i<=20; i++) {
					iniBackgrounds.push({ src: 'imgs/magestuidad/img'+i+'.jpg', fade: 1000 });
				};
				$.vegas('slideshow', { backgrounds:iniBackgrounds })('overlay', { src:'css/overlays/06.png' });
			})(jQuery);
		</script>
	</body>
</html>