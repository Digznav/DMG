<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2013::.</title>
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/logos/favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/demo.css">
		
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script> 
		<script src="../js/jquery.pikachoose.js"></script>
		<script src="../js/jquery-ui-1.10.0.js"></script>
		<script src="../js/query.js"></script>
		
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript">
			$(document).ready(function() {
				$("#accordion").accordion({ heightStyle: "content" });
			});
		</script>
	</head>
	<body>
		<div class="shadow"></div>

		<div class="bg-aside"></div>

		<div class="content">

			<header>
				<span class="bannerText">Después de este evento, el <strong>golf</strong> ya no será igual...</span>
				<div class="social">
					<a href="https://twitter.com/" target="_blank" class="twitter">t</a>
					<a href="https://www.facebook.com/unitingnationscup" target="_blank" class="face">f</a>
				</div>
			</header>
			
			<aside>
				<div class="lang"><a href="#">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="../teams.php">English</a></div>
				
				<div class="logo"><a href="index.php"><img src="../imgs/logos/main_logo.png" alt="logo"></a></div>
				
				<div class="sponsors">
					<span>Patrocinadores</span>
					<div class="spon_left">
						<a href="http://www.cemexmexico.com" target="_blank"><img src="../imgs/logos/logo_a1.png" alt="Logo_a1"></a><br>
						<a href="http://www1.bacardi.com" target="_blank"><img src="../imgs/logos/logo_a2.png" alt="Logo_a2"></a><br>
						<a href="http://www.coca-cola.com" target="_blank"><img src="../imgs/logos/logo_a3.png" alt="Logo_a3"></a><br>
						<a href="http://www.mayanpalace.com/" target="_blank"><img src="../imgs/logos/logo_a4.png" alt="Logo_a4"></a>
						<a href="http://www.chocalanwines.com/" target="_blank"><img src="../imgs/logos/logo_a5.jpg" alt="Logo_a5"></a>
						<a href="http://www.gp.com/index.html" target="_blank"><img src="../imgs/logos/logo_a6.png" alt="Logo_a6"></a>
						<a href="http://www.legendaryholdings.com/site/" target="_blank"><img src="../imgs/logos/logo_a7.png" alt="Logo_a7"></a>
						<a href="#" target="_blank"><img src="../imgs/logos/logo_a8.jpg" alt="Logo_a8"></a>
						<a href="http://alkilaeventos.com/" target="_blank"><img src="../imgs/logos/logo_a9.png" alt="Logo_a9"></a>
						<a href="#" target="_blank"><img src="../imgs/logos/logo_a10.jpg" alt="Logo_a10"></a>
					</div>
					<div class="spon_right">
						<a href="#" target="_blank"><img src="../imgs/logos/logo_b1.png" alt="Logo_b1"></a><br>
						<a href="http://www.corona.com" target="_blank"><img src="../imgs/logos/logo_b2.png" alt="Logo_b2"></a><br>
						<a href="http://www.grupovidanta.com/" target="_blank"><img src="../imgs/logos/logo_b3.jpg" alt="Logo_b3"></a><br>
						<a href="http://www.vidantagolf.com/" target="_blank"><img src="../imgs/logos/logo_b4.jpg" alt="Logo_b4"></a>
						<a href="http://www.antigua.com/" target="_blank"><img src="../imgs/logos/logo_b5.png" alt="Logo_b5"></a>
						<a href="http://www.comnor.com.mx/" target="_blank"><img src="../imgs/logos/logo_b6.png" alt="Logo_b6"></a>
						<a href="http://www.caffenio.com/" target="_blank"><img src="../imgs/logos/logo_b7.png" alt="Logo_b7"></a>
						<a href="http://www.sanimex.com.mx/" target="_blank"><img src="../imgs/logos/logo_b8.png" alt="Logo_b8"></a>
						<a href="http://www.jacovaproducciones.com/" target="_blank"><img src="../imgs/logos/logo_b9.png" alt="Logo_b9"></a>
						<a href="http://vmasideas.com//" target="_blank"><img src="../imgs/logos/logo_b10.png" alt="Logo_b10"></a>
					</div>
				</div>
			</aside>
			
			<nav class="nav">
				<a href="index.php">Inicio</a><a href="event.html">Evento</a><a href="#">Equipos</a><!-- <a href="#">Patrocinadores</a> --><a href="gallery.html">Galería</a><a href="scoring.html">Puntuaciones</a><a href="news.html">Noticias</a><a href="arrive.html">Cómo llegar</a><a href="schedule.html">Calendario</a>
			</nav>
				
			<div class="carrousel">
				<ul id="pikame">
					<li><img src="../imgs/slide3.jpg" alt="slide3"></li>
					<li><img src="../imgs/slide4.jpg" alt="slide4"></li>
					<li><img src="../imgs/slide5.jpg" alt="slide5"></li>
					<li><img src="../imgs/slide6.jpg" alt="slide6"></li>
					<li><img src="../imgs/slide7.jpg" alt="slide7"></li>
					<li><img src="../imgs/slide8.jpg" alt="slide8"></li>
					<li><img src="../imgs/slide1.jpg" alt="slide1"></li>
					<li><img src="../imgs/slide2.jpg" alt="slide2"></li>
				</ul>
			</div>

			<div class="cont">
				<span class="title_section">Equipos - Jugadores UNC 2012</span>
				<section class="cont_sections"><img src="../imgs/teams.jpg" alt="side"></section>
				<section class="cont_sections">
					<div id="accordion">
						<h3 class="title_list_mex">México / Perfiles</h3>
						<div class="team_list">
							<?php
								$resultado = mysql_query ('SELECT * FROM members WHERE CATEGORY="MEX"');
								if (!$resultado) { die('Consulta no válida' . mysql_error()); }
								else {
									while ($lista = mysql_fetch_assoc($resultado)) {
										$name_pieces = explode(" ", $lista['NAME']);
										echo '<a href="#popup-box" data-popup="' . $lista['ID'] . '" class="ajax_pop">'.$name_pieces[0] .' '.end($name_pieces).'</a>';
									}
								}
							?>
						</div>
						<h3 class="title_list_usa">U.S.A / Perfiles</h3>
						<div class="team_list">
							<?php
								$resultado = mysql_query ('SELECT * FROM members WHERE CATEGORY="USA"');
								if (!$resultado) { die('Consulta no válida' . mysql_error()); }
								else {
									while ($lista = mysql_fetch_assoc($resultado)) {
										$name_pieces = explode(" ", $lista['NAME']);
										echo '<a href="#popup-box" data-popup="' . $lista['ID'] . '" class="ajax_pop">'.$name_pieces[0] .' '.end($name_pieces).'</a>';
									}
								}
							?>
						</div>
					</div>
				</section>
			</div>

			<footer>
				<a href="http://www.mayanpalace.com/" target="_blank"><img src="../imgs/logos/mayan.png" alt="mayan"></a>
				<a href="http://www.vidantagolf.com/" target="_blank"><img src="../imgs/logos/peninsula.png" alt="peninsula"></a>
				<a href="http://www.azgolf.org/main/index.asp?CategoryID=0" target="_blank"><img src="../imgs/logos/arizona.png" alt="arizona"></a>
			</footer>
		</div>
		<div id="popup-box" class="popup">
			<a href="#" class="close"><img src="../imgs/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a>
			<div class="progress"></div>
			<div class="resultado"></div>
		</div>
	</body>
</html>