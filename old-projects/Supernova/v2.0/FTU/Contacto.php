<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Supernova</title>
		<meta name="description" content="Supernova">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/design/favicon.ico">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/vegas.css">
		<link rel="stylesheet" href="css/TimeCircles.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Contenedor principal-->
		<div id="container">
			<?php include('libs/header.php'); ?>

			<div class="content">
				<nav class="innerNav clearfix">
					<ul>
						<li><a href="#Que_es" class="avoid">¿Qué es?</a></li>
						<li><a href="#Cuando">¿Cuando?</a></li>
						<li><a href="#Donde">¿Dónde es?</a></li>
					</ul>
				</nav>

				<div class="panel panelFormat" id="Que_es">
					<h2>¿Qué es?</h2>
					<p class="highlight">SUPERNOVA es la segunda edición del festival internacional de la cultura, el arte, la ciencia, la tecnología, la política, la economía y la vida.</p>
					<p>Se reunirán a 30 expertos de distintas áreas del conocimiento y la pragmática que propondrán y comunicarán distintas perspectivas sobre la ciencia, la economía, la sociedad, el deporte, el arte,  la cultura y los negocios para motivar e impulsar a los jóvenes analistas del presente y diseñadores del futuro con herramientas que nos permitan proponer y consolidar proyectos que cambien la vida de miles de comunidades.</p>
				</div>

				<div class="panel panelFormat" id="Cuando">
					<h2>¿Cuándo?</h2>
					<p class="highlight">20 y 21 de mayo 2014 de 9:00 A.M. a 8:00 P.M.</p>
					<!-- <div id="defaultCountdown"></div> -->
					<div id="defaultCountdown" class="Countdown" data-date="2014-05-20 09:00:00"></div>
				</div>

				<div class="panel panelFormat" id="Donde">
					<h2>¿Dónde?</h2>
					<p class="highlight">Teatro del Complejo Cultural Universitario</p>
					<div id="map_canvas"></div>
				</div>
			</div>

			<?php include('libs/socialNav.php'); ?>
			
		</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
		<script src="js/jquery.vegas.min.js"></script>
		<script src="js/TimeCircles.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">

			jQuery(function($) {
				$.vegas('slideshow', {
					backgrounds:[
						{ src:'imgs/design/bg1.jpg', fade:5000 },
						{ src:'imgs/design/bg2.jpg', fade:5000 },
						{ src:'imgs/design/bg3.jpg', fade:5000 },
						{ src:'imgs/design/bg4.jpg', fade:5000 },
						{ src:'imgs/design/bg5.jpg', fade:5000 }
					]
				})('overlay', { src:'css/overlays/06.png' });

				/*$.vegas({
					src:'imgs/design/bg3.jpg', fade:5000
				})('overlay', { src:'css/overlays/06.png' });*/

				$("#defaultCountdown").TimeCircles({
					count_past_zero: false,
					fg_width: 0.05, //  sets the width of the foreground circle. 
					time: { //  a group of options that allows you to control the options of each time unit independently.
						Days: { text: "Días", color: "#61C3D9" },
						Hours: { text: "Horas", color: "#8A6FE0" },
						Minutes: { text: "Minutos", color: "#FFE66E" },
						Seconds: { text: "Segundos", color: "#FFB66E" }
					}
				});
			});
		</script>
	</body>
</html>