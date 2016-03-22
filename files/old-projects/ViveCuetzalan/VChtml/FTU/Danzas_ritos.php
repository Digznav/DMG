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
			<?php $urlEng = "en/Dances_rites"; $actMenu = 'Danzas_ritos'; include("libs/header.php");
			include("libs/reservation.php"); ?>

			<a href="#" id="openTxtLash" class="symb-icon icoRight"></a>
			<div class="cont onlyText clearfix">
				<a href="#" id="closeTxtLash" class="symb-icon icoClose"></a>
				<h2 class="sectionTitle">Pasado y presente en danza constante. </h2>
				<div class="scrollCont">
					<p>Las coloniales calles del pueblo mágico de Cuetzalan, están llenas de atractivos para el visitante. </p>
					<p>La danza y la música forman parte de la mayoría de sus rituales culturales. Los lugareños han mantenido sus raíces ancestrales pero las han hecho evolucionar, incorporando a sus danzas, matices modernos. La comunidad se expresa por medio de máscaras y vestimentas de alto colorido, y practicando representaciones escénicas del pasado histórico de la región, llenas de significado mágico, religioso y astronómico. </p>
					<p>Los Quetzales o Cuerzaltines, danzan de oriente a poniente formando la cruz católica. Los Santiagos rememoran el enfrentamiento entre moros y cristianos, recordando al apóstol Santiago en su blanco corcel. La Danza de los Negritos, mantiene el pensamiento mágico venido con los africanos, liderados por su “marigunilla, (hombre vestido de mujer) que con su serpiente de palo indica la presencia de la sagrada Madre Tierra. </p>
					<p>La Danza de los voladores (originaria de Totonacapan), dedicada al Astro Rey, comienza con el sacerdote mirando al sol y señalando los cuatro puntos cardinales, dando paso a “los voladores” que pendientes de cuerdas y protegidos por las divinidades, se lanzan al vacío. </p>
					<p>En Cuetzalan existen varios lugares incluyendo el atrio de la Iglesia de San Francisco, donde usted podrá disfrutar y admirar esta milenaria tradición.</p>
				</div>
			</div>

		</div>

		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.ui.datepicker-es.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/jquery.zweatherfeed.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/validation.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			var iniBackgrounds = [];
			(function($) {
				for (var i=1; i<=15; i++) {
					iniBackgrounds.push({ src: 'imgs/danzasyritos/img'+i+'.jpg', fade: 1000 });
				};
				$.vegas('slideshow', { backgrounds:iniBackgrounds })('overlay', { src:'css/overlays/06.png' });
				$('#test').weatherfeed(['MXPA1692']);
			})(jQuery);
		</script>
	</body>
</html>