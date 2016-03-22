<?php include('../libs/init.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Puebla Centro::.</title>
		<meta name="description" content="Puebla Centro">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="/2014/imgs/design/favicon.ico">
		<link rel="stylesheet" href="/2014/css/style.css">
		<link rel="stylesheet" href="/2014/css/bxslider.css">
		<script src="/2014/js/modernizr.2.7.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="background-image"></div>
		<div id="container">
			<?php $ctMn='Recintos';
			include('../libs/header.php');
			include('../libs/contact.php');
			?>
			<div class="Wrapper">
				<div class="pFWrppr clearfix">
					<div class="info-Hotel clearfix">
						<div class="infoPrt-lgo"><img src="/2014/imgs/Recintos/Complejo_Cultural_Universitario/logo.jpg" alt="Complejo Cultural Universitario" height="140"><span>Complejo Cultural Universitario</span></div>
						<ul class="infoPrt-txt">
							<li>Calle Pléyades, esquina Sirio s/n.</li>
							<li>Colonia Rinconada Sur Oriente.</li>
						</ul>
					</div>
					<nav id="Info-tab" class="frmt-Nv clearfix">
						<a href="#Informacion" class="crrnt">Información</a>
						<a href="#Ubicacion">Ubicación</a>
						<a href="#Servicios">Servicios</a>
					</nav>
					<div id="Informacion" class="panel">
						<div class="clmn">
							<h2>INFORMACIÓN GENERAL</h2>
							<hr/>
							<p class="fx-m">- Áreas generales</p>
							<p class="fx-m">- Áreas de exposición</p>
							<p class="fx-m">- Áreas abiertas</p>
							<p class="fx-m">- Estacionamiento general</p>
							<p class="fx-m">- Estacionamiento de servicio</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Complejo_Cultural_Universitario/info.jpg"></div>
					</div>
					<div id="Ubicacion" class="panel">
						<div class="clmn rst-clmn-2">
							<div class="fxd-Hdr">
								<h2>Ubicación</h2>
								<hr/>
							</div>
							<p>En una zona de amplio desarrollo comercial, educativo y habitacional la zona sur-oriente de la Ciudad de Puebla. El complejo fue edificado sobre un terreno de cinco hectáreas, dentro de la Reserva Atlixcayotl-Quetzalcóatl.</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Complejo_Cultural_Universitario/ubicacion.jpg"></div>
					</div>
					<div id="Servicios" class="panel">
						<div class="clmn">
							<h2>SERVICIOS</h2>
							<hr/>
							<p class="fx-m">Proximamente</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Complejo_Cultural_Universitario/servicios.jpg"></div>
					</div>
				</div>
			</div>
			<?php include('../libs/footer.php'); ?>
		</div>
		<?php $jQueryUI=true; include('../libs/jquery-1.11.0.php'); ?>
		<script src="/2014/js/bxSlider.min.js"></script>
	</body>
</html>