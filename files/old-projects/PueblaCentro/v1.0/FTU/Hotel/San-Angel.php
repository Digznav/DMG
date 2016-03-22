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
			<?php $ctMn='Hoteles_del_Centro';
			include('../libs/header.php');
			include('../libs/contact.php');
			?>
			<div class="Wrapper">
				<div class="pFWrppr clearfix">
					<div class="info-Hotel clearfix">
						<div class="infoPrt-lgo"><!-- <img src="/2014/imgs/Hoteles/Hotel_Sn_Angel/logo.jpg" alt="Hotel Señorial"> --></div>
						<ul class="infoPrt-txt">
							<li>Hotel San Ángel</li>
							<li>4 Poniente.</li>
							<li>Col. Centro</li>
							<li>C.P. 72000.</li>
							<li>Tel: 01 (222) 232 2766</li>
							<li>01 (222) 409 0570 al 74</li>
							<li><a href="mailto:hotelesenpuebla@hotmail.com" target="_blank">hotelesenpuebla@hotmail.com</a><br><a href="mailto:ventashotelesenpuebla@yahooo.com.mx" target="_blank">ventashotelesenpuebla@yahooo.com.mx</a></li>
							<li><a href="www.hotelesenpuebla.com" target="_blank">www.hotelesenpuebla.com</a></li>
						</ul>
					</div>
					<nav id="Info-tab" class="frmt-Nv itm-2 clearfix">
						<a href="#Informacion" class="crrnt">Información</a>
						<a href="#Ubicacion">Ubicación</a>
						<a href="#Servicios">Servicios</a>
						<a href="#Salones">Salones</a>
					</nav>
					<div id="Informacion" class="panel">
						<div class="clmn">
							<h2>INFORMACIÓN GENERAL</h2>
							<hr/>
							<p class="fx-m">- A solo 5 minutos de la Plaza de Armas (Zócalo).</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Hoteles/Hotel_Sn_Angel/info.jpg"></div>
					</div>
					<div id="Ubicacion" class="panel">
						<div class="clmn rst-clmn-2">
							<div class="fxd-Hdr">
								<h2>Ubicación</h2>
								<hr/>
							</div>
							<p>Ubicado en uno de los edificios coloniales más hermosos del Centro Histórico de Puebla, cuenta con habitaciones coloniales decoradas finamente, con pisos de madera y vista al jardín o exteriores del hotel. Pensando en usted, familiares, compañeros de trabajo y amigos, Hotel San Ángel, le brinda un servicio con calidez, asegurándole una experiencia inigualable, haciéndole sentir como si estuviera en su casa.</p>
							<p class="highlight-bx">RESERVACIONES:<br>Lada sin costo 01 800 849 2793<br>mail: <a href="mailto:hotelesenpuebla@hotmail.com" target="_blank">hotelesenpuebla@hotmail.com</a><br><a href="mailto:ventashotelesenpuebla@yahooo.com.mx" target="_blank">ventashotelesenpuebla@yahooo.com.mx</a><br>web: <a href="www.hotelesenpuebla.com" target="_blank">www.hotelesenpuebla.com</a></p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Hoteles/Hotel_Sn_Angel/ubicacion.jpg"></div>
					</div>
					<div id="Servicios" class="panel">
						<div class="clmn">
							<h2>SERVICIOS</h2>
							<hr/>
							<p>Proximamente</p>
						</div>
						<div class="clmn"><img src="/2014/imgs/Hoteles/Hotel_Sn_Angel/servicios.jpg"></div>
					</div>
					<div id="Salones" class="panel">
						<div class="clearfix">
							<div class="clmn c1-3">
								<table class="salon-tbl">
									<thead>
										<tr class="tpSpc"><th>SAN ÁNGEL</th><th></th></tr>
										<tr class="dscrp"><th>Montaje</th><th>Personas</th></tr>
									</thead>
									<tbody>
										<tr><td>Herradura</td><td>20</td></tr>
										<tr><td>Auditorio</td><td>30</td></tr>
										<tr><td>Banquete</td><td>20</td></tr>
									</tbody>
								</table>
							</div>
							<div class="clmn c2-3"><img src="/2014/imgs/Hoteles/Hotel_Sn_Angel/salon-1.jpg"></div>
						</div>
						<div class="clearfix">
							<div class="clmn c1-3">
								<table class="salon-tbl">
									<thead>
										<tr class="tpSpc"><th>LA TERRAZA</th><th></th></tr>
										<tr class="dscrp"><th>Montaje</th><th>Personas</th></tr>
									</thead>
									<tbody>
										<tr><td>Herradura</td><td>50</td></tr>
										<tr><td>Auditorio</td><td>180</td></tr>
										<tr><td>Banquete</td><td>150</td></tr>
									</tbody>
								</table>
							</div>
							<div class="clmn c2-3"><img src="/2014/imgs/Hoteles/Hotel_Sn_Angel/salon-2.jpg"></div>
						</div>
					</div>
				</div>
			</div>
			<?php include('../libs/footer.php'); ?>
		</div>
		<?php $jQueryUI=true; include('../libs/jquery-1.11.0.php'); ?>
		<script src="/2014/js/bxSlider.min.js"></script>
	</body>
</html>