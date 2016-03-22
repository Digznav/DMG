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
						<div class="infoPrt-lgo"><img src="/2014/imgs/Recintos/Auditorio_Siglo_XXI/logo.jpg" alt="Auditorio Siglo XXI" height="140"><span>Auditorio Siglo XXI</span></div>
						<ul class="infoPrt-txt">
							<li>Calle Sirio, esquina con Pléyades.</li>
							<li>Reserva Territorial Atlixcáyotl. Puebla</li>
							<li>Tel: 01 (222) 223 64 15</li>
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
							<p class="fx-m">- Capacidad para 4912 personas.</p>
							<p class="fx-m">- Escenario 23 mts de largo, 16 mts de fondo y 10 mts de altura</p>
							<p class="fx-m">- Teatro al aire libre</p>
							<p class="fx-m">- 10 salidas de emergencia: 6 planta baja, 4 por escaleras</p>
							
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Auditorio_Siglo_XXI/info.jpg"></div>
					</div>
					<div id="Ubicacion" class="panel">
						<div class="clmn rst-clmn-2">
							<div class="fxd-Hdr">
								<h2>Ubicación</h2>
								<hr/>
							</div>
							<p>En una zona de amplio desarrollo comercia, educativa y habitacional, edificado sobre un terreno de cinco hectáreas dentro de la reserva Atlixcáyotl.</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Auditorio_Siglo_XXI/ubicacion.jpg"></div>
					</div>
					<div id="Servicios" class="panel">
						<div class="clmn">
							<h2>SERVICIOS</h2>
							<hr/>
							<p class="fx-m">- 10 camerinos individuales</p>
							<p class="fx-m">- 2 camerinos generales</p>
							<p class="fx-m">- 1 salón de ensayos</p>
							<p class="fx-m">- Talleres</p>
							<p class="fx-m">- Bodegas</p>
							<p class="fx-m">- Patio de maniobras</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Auditorio_Siglo_XXI/servicios.jpg"></div>
					</div>
				</div>
			</div>
			<?php include('../libs/footer.php'); ?>
		</div>
		<?php $jQueryUI=true; include('../libs/jquery-1.11.0.php'); ?>
		<script src="/2014/js/bxSlider.min.js"></script>
	</body>
</html>