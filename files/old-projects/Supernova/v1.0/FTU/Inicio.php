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
		<link rel="stylesheet" href="css/countdown.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Encabezado-->
		<!-- < ?php include('libs/header.php'); ?> -->
		
		<!-- Contenedor principal-->
		<div id="container">
			<header class="clearfix"><a href="#" id="logo">Supernova</a></header>

			<div class="navCont">
				<nav class="mainNav clearfix">
					<ul class="stLvl">
						<li><a href="#">Inicio ></a>
							<ul class="ndLvl">
								<li><a href="#Que_es">¿Qué es?</a></li>
								<li><a href="#Cuando">¿Cuando?</a></li>
								<li><a href="#Donde">¿Dónde es?</a></li>
							</ul>
						</li>
						<li><a href="#">Ponente</a></li>
						<li><a href="#">Memorias</a></li>
						<li><a href="#">Contacto</a></li>
						<li><a href="#">Noticias</a></li>
					</ul>
				</nav>
				<nav class="socialNav clearfix">
					<ul>
						<li><a href="#" class="symb-icon icoFacebook"></a></li>
						<li><a href="#" class="symb-icon icoTwitter"></a></li>
						<li><a href="#" class="symb-icon icoInstagram"></a></li>
					</ul>
				</nav>
			</div>

			<div class="content">
				<div class="panel panelFormat" id="Que_es">
					<h2>¿Qué es?</h2>
					<p class="highlight">SUPERNOVA es la segunda edición del festival internacional de la cultura, el arte, la ciencia, la tecnología, la política, la economía y la vida.</p>
					<p>Se reunirán a 30 expertos de distintas áreas del conocimiento y la pragmática que propondrán y comunicarán distintas perspectivas sobre la ciencia, la economía, la sociedad, el deporte, el arte,  la cultura y los negocios para motivar e impulsar a los jóvenes analistas del presente y diseñadores del futuro con herramientas que nos permitan proponer y consolidar proyectos que cambien la vida de miles de comunidades.</p>
				</div>
				<div class="panel panelFormat" id="Cuando">
					<h2>¿Cuándo?</h2>
					<p class="highlight">20 y 21 de mayo 2014 de 9:00 A.M. a 8:00 P.M.</p>
					<div id="defaultCountdown"></div>
				</div>
				<div class="panel panelFormat" id="Donde">
					<h2>¿Dónde?</h2>
					<p>Teatro del Complejo Cultural Universitario</p>
					<div id="mapa"></div>
				</div>
			</div>
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
		<script src="js/jquery.plugin.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/jquery.vegas.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$.vegas({ src:'imgs/design/bg1.jpg' })('overlay', { src:'css/overlays/06.png' });

				var austDay = new Date(2014, 4, 20, 9);
				console.log(austDay);
				//austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
				$('#defaultCountdown').countdown({until: austDay});
			});
		</script>
	</body>
</html>