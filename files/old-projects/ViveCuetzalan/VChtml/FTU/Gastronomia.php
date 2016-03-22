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
			<?php $urlEng = "en/Gastronomy"; $actMenu = 'Gastronomia'; include("libs/header.php");
			include("libs/reservation.php"); ?>

			<a href="#" id="openTxtLash" class="symb-icon icoRight"></a>
			<div class="cont onlyText clearfix">
				<a href="#" id="closeTxtLash" class="symb-icon icoClose"></a>
				<h2 class="sectionTitle">Herencia Gastronómica Ancestral.</h2>
				<div class="scrollCont">
					<p>Uno de los grandes secretos que celosamente guarda el pueblo mágico de Cuetzalan, es el de su gastronomía, que sin perder su esencia mística tradicional, ha sabido superarse con el tiempo. Entre los platillos más representativos del lugar, encontramos: Las Acamayas, el Chilpozole,  los Tayoyos (rellenos de alverjón con hoja de aguacate), el Tasajo de res o puerco (cecina), los Guisados con Quelite (planta), el Chayotestle (raíz), el ejote, el frijol gordo o xoyema y los hongos, siendo el más representativo de ellos, el totolcozcatl.</p>
				</div>
			</div>

		</div>

		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.ui.datepicker-es.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/validation.min.js"></script>
		<script src="js/query.min.js"></script>
		<script src="js/jquery.zweatherfeed.min.js"></script>
		<script type="text/javascript">
			var iniBackgrounds = [];
			(function($) {
				for (var i=1; i<=9; i++) {
					iniBackgrounds.push({ src: 'imgs/gastronomia/img'+i+'.jpg', fade: 1000 });
				};
				$.vegas('slideshow', { backgrounds:iniBackgrounds })('overlay', { src:'css/overlays/06.png' });

				$('#test').weatherfeed(['MXPA1692']);
			})(jQuery);
		</script>
	</body>
</html>