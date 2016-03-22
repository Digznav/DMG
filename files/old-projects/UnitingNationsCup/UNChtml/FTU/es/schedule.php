<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2013::.</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/logos/favicon.ico">
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script src="../js/jquery.pikachoose.min.js"></script>
		<script src="../js/jquery-ui-1.10.0.min.js"></script>
		<script src="../js/query.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript">
			$(document).ready(function() { $("#accordion").accordion(); });
		</script>
	</head>
	<body>
		<div class="shadow"></div>
		<div class="bg-aside"></div>
		<div class="content">
			<?php require("libs/encabezadoUNC.php"); ?>
			<aside>
				<div class="lang"><a href="#">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="../schedule.php">English</a></div>
				<?php require("libs/patrocinadores.php"); ?>
			</aside>
			<?php
			require("libs/navegacionPrincipal.php");
			$firstCarrItem = 8;
			require("libs/carrucel.php");
			?>
			<div class="cont">
				<span class="title_section">Calendario</span>
        <div class="soon"><p>De regreso en 2014</p></div>
				<!--<section class="cont_sections"><img src="../imgs/teams.jpg" alt="side"></section>
				<section class="cont_sections cont_text">
					<span class="subtitle">Uniting Nations Cup 2013</span>
					<p>Eres parte de la historia, ahora queremos que te conviertas en una leyenda en la Unitng Natios Cup 2013</p>
					<span class="subtitle">Fecha</span>
					<p>Mayo 16-19, 2013</p>
					<span class="subtitle">Lugar</span>
					<p>Mayan Palace, Puerto Peñasco, Sonora</p>
					<span class="subtitle">Calendario</span>
					<p>Total de 80 Amateurs / 40 amateurs de U.S.A vs 40Amateurs Mexicanos</p>
					
					<div id="accordion">
						<h3 class="title_accordion">Jueves Mayo 16, 2013</h3>
						<div>
							<ul>
								<li>Registro y Desayuno - Club House</li>
								<li>Ronda de práctica, favor de hacer reservaciones por correo a: <a href="mailto:golfpuertopenasco@grupovidanta.com" target="_blank">golfpuertopenasco@grupovidanta.com</a> para tee time. (Box lunch incluido)</li>
								<li>6:00 pm - 8:00 pm: Cocktail de bienvenida en Lobby Bar – Presentación de equipos, favor de ser puntual. Código de vestimenta: Vestuario de Golf.</li>
								<li>Servicio de transporte cortesía disponible desde las 5:00 - 8:30 pm Hotel/Campo de Golf /Hotel</li>
							</ul>
						</div>
						<h3 class="title_accordion">Viernes Mayo 17, 2013</h3>
						<div>
							<ul>
								<li>6:30 am: Desayuno buffet en Bakal </li>
								<li>7:00 am - 9:00 am: Servicio de transporte cortesía Hotel – Campo de Golf</li>
								<li>7:00 am: 5:00 pm: Tiro de práctica</li>
								<li>8:30 am: Himnos nacionales</li>
								<li>9:00 am: 1a Ronda Oficial, Escopetazo. Fourball Matchplay. Premios en campo</li>
								<li>2:00 pm: Comida buffet en Club house. (Campo cerrado después de juego)</li>
								<li>6:30 pm – 10:30 pm: Cena buffet en Bakal </li>
							</ul>
						</div>
						<h3 class="title_accordion">Sábado Mayo 18, 2013</h3>
						<div>
							<ul>
								<li>6:30 am: Desayuno buffet en Bakal </li>
								<li>7:00 am – 9:00 am: Servicio de transporte cortesía Hotel – Campo de Golf</li>
								<li>7:00 am - 5:00 pm: Tiro de práctica</li>
								<li>9:00 am: 2a Ronda Oficial, Escopetazo. Foursomes Matchplay. Premios en campo</li>
								<li>2:00 pm: Comida buffet en Club house. Entrega de premios y rifa (Campo cerrado después de juego)</li>
								<li>6:30 pm – 10:30 pm: Cena buffet en Bakal </li>
								<li>Verificación de cuenta y Check-out opcional</li>
							</ul>
						</div>
						<h3 class="title_accordion">Domingo Mayo 19, 2013</h3>
						<div>
							<ul>
								<li>6:30 am: Desayuno buffet en Bakal</li>
								<li>6:30 - 8:00 am: Servicio de transporte cortesía Hotel – Campo de Golf</li>
								<li>7:00 am: Tiro de prácitca</li>
								<li>9:00 am: 3er Ronda Oficial, Escopetazo. Singles Matchplay.</li>
								<li>2:00 pm: Comida de Clausura y presentación de trofeo</li>
								<li>Check-out extendido para su comodidad.</li>
							</ul>
						</div>
					</div>
					<span class="subtitle">Para más información por favor descarga estos documentos:</span>
					<p><!-- <a href="#" class="sec_boton">Información del jugador</a> --><br><br><!-- <a href="#" class="sec_boton">Pairings UNC 2013</a> --></p>
				</section>
			</div>
			<?php require("libs/pieUNC.php"); ?>
		</div>
	</body>
</html>