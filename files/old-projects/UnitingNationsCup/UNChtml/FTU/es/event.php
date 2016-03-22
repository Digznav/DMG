<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2013::.</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/logos/favicon.ico">
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script> 
		<script src="../js/jquery.pikachoose.min.js"></script>
		<script src="../js/query.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="shadow"></div>
		<div class="bg-aside"></div>
		<div class="content">
			<?php require("libs/encabezadoUNC.php"); ?>
			<aside>
				<div class="lang"><a href="#">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="../event.php">English</a></div>
				<?php require("libs/patrocinadores.php"); ?>
			</aside>
			<?php
			require("libs/navegacionPrincipal.php");
			$firstCarrItem = 2;
			require("libs/carrucel.php");
			?>
			<div class="cont">
				<span class="title_section">Evento</span>
				<section class="cont_sections"><img src="../imgs/teams.jpg" alt="side"></section>
				<section class="cont_sections cont_text">
					<span class="subtitle">Concepto</span>
					<p>Este es un evento de tres días de juego y de competencia en el mejor espíritu deportivo, primero en su tipo en la historia del Golf en México."Esta es una oportunidad para enfatizar la importancia de nuestra relación como naciones vecinas y permitirnos el hacer nuevos amigos utilizando al Golf como nuestro Embajador". (Lic. Luis Antonio Torres, Director de Golf, Península de Cortés Golf Course).</p>
					<span class="subtitle">Fecha</span>
					<p>Estar al pendiente de la convocatoria UNC 2014</p>
					<!--<span class="subtitle">Lugar</span>
					<p>Campo de Golf Peninsula de Cortes en el Mayan Palace, Puerto Peñasco.</p>
					<span class="subtitle">Equipos</span>
					<p>40 amateurs</p>
						<ul>
							<li>20 con handicap desde 0 to 6 (GROSS)</li>
							<li>20 con handicap desde 7 to 12 (GROSS)</li>
						</ul>
					<span class="subtitle">Formato</span>
					<p>Matchplay</p>
						<ul>
							<li>Día 1: Fourball Matchplay</li>
							<li>Día 2: Foursomes Matchplay</li>
							<li>Día 3: Singles Matchplay</li>
						</ul>
					<span class="subtitle">Premios</span>
					<p>¡El premio definitivo es ganar la Copa!<!-- <br>Profesionales de la PGA: Juegan por un premio monetario (a ser determinado) --><!--<br>Amateurs:<br>Juegan por premios de hoyo en uno el Viernes y Sábado, y premios a los más cercanos al hoyo en cada par 3 y sorteo de premios.</p>
					<span class="subtitle">Equipo ganador</span>
					<p>La puntuación total de los partidos del Equipo de Amateurs.</p>
					<p><a href="#popup-box" class="normal_pop sec_boton">Prizes</a></p>-->-->
				</section>
			</div>
			<?php require("libs/pieUNC.php"); ?>
		</div>
		<div id="popup-box" class="popup">
			<a href="#" class="close"><img src="../imgs/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a>
			<div class="cont_text prizes_pop">
				<span class="bigtitle">¡¡¡ Premios valorados en $1,300,000 USD !!!</span>
				<p>Los premios de Hoyo en Uno en todos los Par 3 durante la 1ra y 2da rondas oficiales para Amateurs incluyen:</p>
				<p><strong>1 Millón de dólares*</strong>, Membresía Grand Luxxe Super Luxury en el Mayan Palace Resorts de Playa y Golf con Golf Gratis de por Vida, carros y otros premios sorpresa.</p>
				<p><strong>Premios de cercanía al asta**</strong> en todos los Par 3 durante la primer y segunda ronda oficial para Amateurs incluye:</p>
				<ul>
					<li>Paquete Stay and Play Golf</li>
					<li>Televisores de pantalla plana</li>
					<li>Laptops</li>
					<li>iPods</li>
					<li>Relojes</li>
					<li>Drivers</li>
					<li>Putters</li>
					<li>Sets de Irons más Sorteo de Premios</li>
				</ul>
				<span class="petit_letters">* El Millón de Dólares para en Hoyo En Uno será para los 12 más cercanos al hasta del torneo- limitado a un tiro por persona. A llevarse a cabo en el Driving Range después de la 2da ronda<br>** Los premios de cercanía al asta están basados en 2 días de juego, los ganadores deben elegir solo UN premio.</span>
			</div>
		</div>
	</body>
</html>