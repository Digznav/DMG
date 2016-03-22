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
						<div class="infoPrt-lgo"><img src="/2014/imgs/Recintos/Centro_Mexicano_Libanes/logo.jpg" alt="Centro Mexicano Libanés" height="140"><span>Centro Mexicano Libanés</span></div>
						<ul class="infoPrt-txt">
							<li>Bvd. Hermanos Serdán.</li>
							<li>Colonia Real del Monte, No 222.</li>
							<li>Puebla. Pue. C.P. 72060</li>
							<li>Tel: 52(222) 274 03 11 / 12 / 13</li>
							<li><a href="www.centromexicanolibenes.org" target="_blank">www.centromexicanolibenes.org</a></li>
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
							<p class="fx-m">- Atención personalizada</p>
							<p class="fx-m">- Excelencia Gastronómica</p>
							<p class="fx-m">- Presupuestos a la medida de sus necesidades</p>
							<p class="fx-m">- Equipo Profesional a su servicio</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Centro_Mexicano_Libanes/info.jpg"></div>
					</div>
					<div id="Ubicacion" class="panel">
						<div class="clmn rst-clmn-2">
							<div class="fxd-Hdr">
								<h2>Ubicación</h2>
								<hr/>
							</div>
							<p>En la principal avenida de acceso a Puebla, idónea para desplazarse a cualquier lado de la ciudad y a tan solo 10 minutos del Centro. Con estacionamiento y valet parking.</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Centro_Mexicano_Libanes/ubicacion.jpg"></div>
					</div>
					<div id="Servicios" class="panel">
						<div class="clmn">
							<h2>SERVICIOS</h2>
							<hr/>
							<p class="fx-m">- Eventos Sociales</p>
							<p class="fx-m">- Eventos Empresariales</p>
							<p class="fx-m">- Congresos y Convenciones</p>
							<p class="fx-m">- Banquetes</p>
							<p class="fx-m">- Servicios de Catering</p>
							<p class="fx-m">- Ambientación</p>
							<p class="fx-m">- Restaurante-Bar de 13:00 a 18:00 hrs.</p>
							<p class="fx-m">- Internet Inalámbrico</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Centro_Mexicano_Libanes/servicios.jpg"></div>
					</div>
				</div>
			</div>
			<?php include('../libs/footer.php'); ?>
		</div>
		<?php $jQueryUI=true; include('../libs/jquery-1.11.0.php'); ?>
		<script src="/2014/js/bxSlider.min.js"></script>
	</body>
</html>