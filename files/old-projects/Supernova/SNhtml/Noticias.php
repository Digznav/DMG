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
		<link rel="stylesheet" href="css/anythingslider.css">
		<link rel="stylesheet" href="css/theme-metallic.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
		<style type="text/css">
			#slider { width:500px; }
		</style>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Contenedor principal-->
		<div id="container">
			<?php $avoidNav = "Noticias"; include('libs/header.php'); ?>
			<div class="content">
				<div class="panelFormat">
					<h2>Noticias</h2>
					<p class="highlight">Conferencia de prensa al Grupo Mavels</p>
					<p class="medium">Así se vió el Grupo Mavels en la rueda de prensa efectuada el pasado miércoles 30 de abril en el kiosko de la Feria de Puebla 2014, donde comentaron acerca del evento organizado por ellos llamado Supernova, el cual se llevará a cabo el 20 y 21 de mayo en el Teatro del Complejo Cultural Universitario.</p>
					<ul id="slider">
						<?php for ($i=1; $i <= 15; $i++) { ?>
						<li><img src="imgs/noticias/img<?php echo $i; ?>.jpg"></li>
						<?php } ?>
					</ul>
					<hr>
					<p class="highlight">Mensaje de Roger Pardo para el público</p>
					<iframe width="700" height="394" src="//www.youtube.com/embed/BBenB2g46WA?rel=0" frameborder="0" allowfullscreen></iframe>
					<hr>
				</div>
			</div>
		</div>
		<?php include('libs/jquery-1.11.0.php'); ?>
		<script src="js/jquery.anythingslider.min.js"></script>
		<script src="js/jquery.vegas.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				
				$('#slider').anythingSlider({
					theme: 'metallic',
					mode: 'f',
					resizeContents: false,
					navigationSize: 8
				});
				$.vegas({
					src:'imgs/design/bg3.jpg', fade:5000
				})('overlay', { src:'css/overlays/06.png' });
			});
		</script>
	</body>
</html>