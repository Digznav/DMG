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
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDvBqhrt4C-lJqpN3OFHoP12eTsJCbRXcg&sensor=false"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Contenedor principal-->
		<div id="container">
			<?php $avoidNav = "Inicio"; include('libs/header.php'); ?>

			<div class="content bigContent mask">
				<nav class="innerNav clearfix">
					<ul>
						<li><a href="#Que_es" data-w-mask="440" class="avoid active">Qué es</a></li>
						<li><a href="#Cuando" data-w-mask="420">Cuándo es</a></li>
						<li><a href="#Donde" data-w-mask="590">Dónde es</a></li>
					</ul>
				</nav>

				<div class="panel panelFormat" id="Que_es">
					<!-- <h2>Qué es</h2> -->
					<p class="highlight">SUPERNOVA es la segunda edición del festival internacional de la cultura, el arte, la ciencia, la tecnología, la política, la economía y la vida.</p>
					<p>Se reunirán a 30 expertos de distintas áreas del conocimiento y la pragmática que propondrán y comunicarán distintas perspectivas sobre la ciencia, la economía, la sociedad, el deporte, el arte,  la cultura y los negocios para motivar e impulsar a los jóvenes analistas del presente y diseñadores del futuro con herramientas que nos permitan proponer y consolidar proyectos que cambien la vida de miles de comunidades.</p>
				</div>

				<div class="panel panelFormat" id="Cuando">
					<!-- <h2>Cuándo es</h2> -->
					<p class="highlight">20 y 21 de mayo 2014 de 9:00 A.M. a 8:00 P.M.</p>
					<div id="defaultCountdown" class="Countdown" data-date="2014-05-20 09:00:00"></div>
				</div>

				<div class="panel panelFormat" id="Donde">
					<!-- <h2>Dónde es</h2> -->
					<p class="highlight">Teatro del Complejo Cultural Universitario</p>
					<div class="mapCont">
						<div id="mapCanvas"></div>
						<!-- <p class="mapLeyend">Teatro del Complejo Cultural Universitario</p> -->
					</div>
				</div>
			</div>

			<div class="content patrocinadores">
				<div class="panelFormat">
					<p class="highlight">Patrocinadores</p>
					<ul class="patroList clearfix">
						<li><a target="_blank" href="http://cmas.siu.buap.mx/portal_pprd/wb/BBUAP/inicio"><img src="imgs/Patrocinadores/BUAP.png" alt="BUAP"></a></li>
						<li><a target="_blank" href="https://www.facebook.com/pages/BUAP-FCC-Facultad-de-Ciencias-de-la-Comunicaci%C3%B3n/316234501743541"><img src="imgs/Patrocinadores/facu.png" alt="Facultad de Ciencias de la Comunicación BUAP"></a></li>
						<li><a target="_blank" href="http://www.inaoep.mx/"><img src="imgs/Patrocinadores/inaoe.png" alt="Instituto Nacional de Astrofísica, Óptica y Electrónica"></a></li>
						<li><a target="_blank" href="https://www.facebook.com/pages/Instituto-Poblano-de-la-Juventud/124501954324222"><img src="imgs/Patrocinadores/IPJ.png" alt="Instituto Poblano de la Juventud"></a></li>
						<li><a href="#"><img src="imgs/Patrocinadores/mavels.png" alt="Mavels"></a></li>
						<li><a target="_blank" href="http://www.turismo.puebla.gob.mx/"><img src="imgs/Patrocinadores/sectur.png" alt="Secretaria de Turismo"></a></li>
						<li><a target="_blank" href="http://squareit.com.mx/"><img src="imgs/Patrocinadores/SquareIt.png" alt="Square it! inmobiliaria"></a></li>
						<li><a target="_blank" href="http://liunicor.webcindario.com/"><img src="imgs/Patrocinadores/unicarnio.png" alt="Librería Unicornio"></a></li>
						<li><a target="_blank" href="https://www.facebook.com/beercitypuebla"><img src="imgs/Patrocinadores/beer_city.png" alt="Beer City"></a></li>
						<li><a target="_blank" href="http://148.228.54.15/web/direccion_de_desarrollo_e_integracion_estudiantil.html"><img src="imgs/Patrocinadores/DDIE.png" alt="Dirección de Desarrollo e Integración Estudiantil"></a></li>
						<li><a target="_blank" href="http://www.hondaangelopolis.com.mx/"><img src="imgs/Patrocinadores/honda.png" alt="HONDA"></a></li>
					</ul>
				</div>
			</div>
			
		</div>

		<?php include('libs/jquery-1.11.0.php'); ?>
		<script src="js/jquery.vegas.min.js"></script>
		<script src="js/TimeCircles.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			function initialize() {
				var map_canvas = document.getElementById('mapCanvas');
				var map_options = {
					center: new google.maps.LatLng(19.019898, -98.240879),
					zoom: 15,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(map_canvas, map_options)
				var populationOptions = {
					strokeColor: '#20788D',
					strokeOpacity: 0.8,
					strokeWeight: 1,
					fillColor: '#8AD9EC',
					fillOpacity: 0.35,
					map: map,
					center: map_options.center,
					radius: 130
				};
				// Add the circle for this city to the map.
				cityCircle = new google.maps.Circle(populationOptions);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			jQuery(function($) {
				/*$.vegas('slideshow', {
					backgrounds:[
						{ src:'imgs/design/bg1.jpg', fade:5000 },
						{ src:'imgs/design/bg2.jpg', fade:5000 },
						{ src:'imgs/design/bg3.jpg', fade:5000 },
						{ src:'imgs/design/bg4.jpg', fade:5000 },
						{ src:'imgs/design/bg5.jpg', fade:5000 }
					]
				})('overlay', { src:'css/overlays/06.png' });*/

				$.vegas({
					src:'imgs/design/bg3.jpg', fade:2000
				})('overlay', { src:'css/overlays/06.png' });

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