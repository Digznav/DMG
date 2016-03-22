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
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/design/favicon.ico">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/vegas.css">
		<script src="../js/modernizr-2.6.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/jquery-1.10.1.min.js"><\\/script>')</script>
		<script type="text/javascript" src="../js/jquery.vegas.min.js"></script> 
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<?php $urlEsp = "../Promociones"; $actMenu = 'Promociones'; include("libs/header.php");
			include("libs/reservation.php"); ?>

			<a href="#" id="openTxtLash" class="symb-icon icoRight"></a>
			<div class="cont onlyText clearfix">
				<a href="#" id="closeTxtLash" class="symb-icon icoClose"></a>
				<h2 class="sectionTitle">Promotions</h2>
				<div class="scrollCont">
					<!--<p>When the europeans left the town they also left an indelible mark in culture, architecture and beliefs on the native people.</p>
					<p>La Parroquia de San Francisco de Asis(church) has a renaissance touch of late XIX century, also has an exterior tower on which tip shows a "Quetzal's hat" called "Penacho". This church is distinguished for masses accompanied with regional dances.</p>
					<p>El Santuario de Nuestra Señora de Guadalupe(church) inspired in the Basilica of Lourdes (France), characterized for the rows of clay cups on the tip of the building its also known as "la Iglesia de los Jarritos".</p>
					<p>La Capilla de María Santísima de la Concepción(church) was built on September of 1880 on the way to San Andrés Tzicuilán, distinguished by the wall painting of Mr. Joaquín Galicia Castro who was born in Cuetzalan.</p>
					<p>El Palacio Municipal(city hall) distinguished by its neo-clasic style which is really attractive for tourists.</p>
					<p>El Parque Central (main park) The main source of social life, distinguished by its colonial style, has gardens, halls, stairs and a metallic kiosk.</p>-->
					<img src="../imgs/design/promo.jpg">
				</div>
			</div>

		</div>

		<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../js/jquery.zweatherfeed.min.js"></script>
		<script src="../js/jquery.ui.datepicker-es.min.js"></script>
		<script src="../js/jquery.placeholder.min.js"></script>
		<script src="../js/jquery.validate.min.js"></script>
		<script src="../js/validation.min.js"></script>
		<script src="../js/query.min.js"></script>
		<script type="text/javascript">
			var iniBackgrounds = [];
			(function($) {
				for (var i=1; i<=20; i++) {
					iniBackgrounds.push({ src: '../imgs/magestuidad/img'+i+'.jpg', fade: 1000 });
				};
				$.vegas('slideshow', { backgrounds:iniBackgrounds })('overlay', { src:'../css/overlays/06.png' });
				$('#test').weatherfeed(['MXPA1692']);
			})(jQuery);
		</script>
	</body>
</html>