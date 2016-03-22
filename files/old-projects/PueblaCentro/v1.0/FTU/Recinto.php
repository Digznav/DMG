<?php include('libs/init.php'); ?>
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
			<?php $ctMn='Hoteles_del_Centro';
			include('libs/header.php');
			include('libs/contact.php');
			?>
			<div class="Wrapper">
				<div class="pFWrppr clearfix">
					<div class="info-Hotel clearfix">
						<div class="infoPrt-lgo"><img src="/2014/imgs/Recintos/Centro_de_Convenciones/logo.png" alt="Centro de Convenciones"><span>Centro de Convenciones</span></div>
						<ul class="infoPrt-txt">
							<li>Hotel Señorial</li>
							<li>4 Norte No. 602</li>
							<li>Col. Centro, Puebla, Pue.</li>
							<li>C.P. 72000</li>
							<li>Teléfono: 01 (222) 246 21 20</li>
							<li>Fax: 246 21 20</li>
							<li>reservaciones@senorialpuebla.com</li>
							<li>www.senorialpuebla.com</li>
						</ul>
					</div>
					<nav id="Info-tab" class="frmt-Nv clearfix">
						<a href="#Informacion" class="crrnt">Información</a>
						<a href="#Ubicacion">Ubicación</a>
						<a href="#Servicios">Servicios</a>
						<a href="#Salones" class="avoid">Salones</a>
					</nav>
					<div id="Informacion" class="panel">
						<div class="clmn">
							<h2>INFORMACIÓN GENERAL</h2>
							<hr/>
							<p class="fx-m">14 Salones</p>
							<p class="fx-m">1 Auditorio</p>
							<p class="fx-m">2 Áreas abiertas</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Centro_de_Convenciones/info.jpg"></div>
					</div>
					<div id="Ubicacion" class="panel">
						<div class="clmn rst-clmn-2">
							<div class="fxd-Hdr">
								<h2>Ubicación</h2>
								<hr/>
							</div>
							<p>Único en América por estar ubicado en pleno Centro Histórico. Construido en donde fuera antiguamente fábricas textiles un entorno donde confluyen el pasado y el presente.</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Centro_de_Convenciones/ubicacion.jpg"></div>
					</div>
					<div id="Servicios" class="panel">
						<div class="clmn">
							<h2>SERVICIOS</h2>
							<hr/>
							<p class="fx-m">- Salones para Convenciones</p>
							<p class="fx-m">- Salas de Juntas</p>
							<p class="fx-m">- Salas de exposición</p>
							<p class="fx-m">- Renta de equipo y mobiliario</p>
							<p class="fx-m">- Alfombrado</p>
							<p class="fx-m">- Aire acondicionado</p>
							<p class="fx-m">- Iluminación controlada</p>
							<p class="fx-m">- Gradas móviles</p>
							<p class="fx-m">- 380 cajones para estacionamiento techado</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Recintos/Centro_de_Convenciones/servicios.jpg"></div>
					</div>
					<div id="Salones" class="panel">
						<div class="clearfix">
							<div class="clmn c1-3">
								<table class="salon-tbl">
									<thead>
										<tr class="tpSpc"><th>Señorial</th><th>138 m<span class="spr">2</span></th></tr>
										<tr class="dscrp"><th>Montaje</th><th>Personas</th></tr>
									</thead>
									<tbody>
										<tr><td>Tipo U</td><td>55</td></tr>
										<tr><td>Auditorio</td><td>170</td></tr>
										<tr><td>Escuela</td><td>60</td></tr>
										<tr><td>Imperial</td><td>60</td></tr>
										<tr><td>Cocktail<small>(sentados)</small></td><td>N/A</td></tr>
										<tr><td>Cocktail<small>(parados)</small></td><td>N/A</td></tr>
										<tr><td>Ruso</td><td>60</td></tr>
										<tr><td>Banquete<small>(sin pista)</small></td><td>100</td></tr>
										<tr><td>Banquete</td><td>100</td></tr>
										<tr><td>Boda</td><td>140</td></tr>
									</tbody>
								</table>
							</div>
							<div class="clmn c2-3"><img src="/2014/imgs/Recintos/Centro_de_Convenciones/salon-1.jpg"></div>
						</div>
					</div>
				</div>
			</div>
			<?php include('libs/footer.php'); ?>
		</div>
		<?php $jQueryUI=true; include('libs/jquery-1.11.0.php'); ?>
		<script src="/2014/js/bxSlider.min.js"></script>
	</body>
</html>