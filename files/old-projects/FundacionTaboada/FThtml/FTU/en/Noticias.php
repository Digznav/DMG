<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>.::Fundación Taboada::.</title>
		<meta name="description" content="Fundación Taboada">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/favicon.ico">
		<script src="../js/modernizr-2.6.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Encabezado -->
		<header>
			<div>
				<a href="Inicio" class="logo">Fundación Taboada</a>
				<div class="contFormLang">
					<div class="langEngEsp">
						<a href="#" data-lang="es">Español</a><a href="#" class="activeLang" data-lang="en">English</a>
					</div>
					<form class="exAlumnos">
						<fieldset>
							<legend>Welcome, former grantees</legend>
							<input type="text" placeholder="User"><input type="password" placeholder="Password"><input type="submit" value=".">
						</fieldset>
					</form>
				</div>
				<div class="social clear">
					<span>Follow us</span><a href="#" class="fb" target="_blank">Facebook</a><a href="#" class="tw" target="_blank">Twitter</a>
				</div>
				<nav class="mainNav clear">
					<ul><li><a href="Inicio">Home</a></li><li><a href="#" class="activeNav">About the foundation</a><ul><li><a href="Historia">History</a></li><li><a href="Mision">Mission & Vision</a></li><li><a href="Noticias">History News</a></li><!-- li><a href="#">Our team</a></li --><!-- li><a href="#">Board of directors</a></li --></ul></li><li><a href="Becas">Scholarship Program</a><ul><li><a href="Preguntas">FAQ</a></li></ul></li><li><a href="#">Events gallery</a><ul><li><a href="Fotografias">Photographs</a></li><li><a href="Videos">Videos</a></li></ul></li><li><a href="Ayuda">Do you want to help?</a></li><li><a href="Contacto">Contact</a></li></ul>
				</nav>
			</div>
		</header>
		<!-- Contenedor principal -->
		<div class="container">
			<!-- Contenido -->
			<div class="content">
				<span class="pageLocation">About the foundation / <span class="actualPage">History News</span></span><br>
				<span class="title">News</span>
				<div class="cont">
					<div class="newsHistory">
						<?php
						$file = '../lib/news.json';
						$jsonNews = json_decode(file_get_contents($file), true);
						$miniNews = '';
						$completeNews = '';
						foreach ($jsonNews['news'] as $key) {
							$miniNews .= '<li class="dNews">';
								$miniNews .= '<a href="#cNews' . $key['id'] . '">';
									$miniNews .= '<h2>' . $key['Header'] . '</h2>';
									$miniNews .= '<h3>' . $key['Date'] . '</h3>';
									$miniNews .= '<p>' . $key['Summary'] . '</p>';
								$miniNews .= '</a>';
							$miniNews .= '</li>';
							$completeNews .= '<div class="completeNew" id="cNews' . $key['id'] . '">';
								$completeNews .= '<h2>' . $key['Header'] . '</h2>';
								$completeNews .= '<h3>' . $key['Date'] . '</h3>';
								$completeNews .= '<p>' . $key['Content'] . '</p>';
							$completeNews .= '</div>';
						}
						?>
						<div id="pagingNews" class="contPajinate">
							<div class="page_navigation clearfix"></div>
							<ul class="contentPag"><?php echo $miniNews; ?></ul>
						</div>
					</div>
				</div>
				<hr>
				<!-- Eventos -->
				<aside class="generalAside events"><?php include "lib/eventsFooter.php"; ?></aside>
			</div>
			<!-- Mini ayuda -->
			<aside class="generalAside miniHelp"><?php include "lib/miniHelp.php"; ?></aside>
		</div>
		<!-- Píe de página -->
		<footer>
			<div>
				<nav>
					<ul><li><a href="Inicio">Home</a></li><li><a href="#">About the foundation</a><ul><li><a href="Historia">History</a></li><li><a href="Mision">Mission & Vision</a></li><li><a href="Noticias">History News</a></li><!-- li><a href="#">Our team</a></li --><!-- li><a href="#">Board of directors</a></li --></ul></li><li><a href="Becas">Scholarship Program</a><ul><li><a href="Preguntas">FAQ</a></li></ul></li><li><a href="#">Events gallery</a><ul><li><a href="Fotografias">Photographs</a></li><li><a href="Videos">Videos</a></li></ul></li><li><a href="Ayuda">Do you want to help?</a></li><li><a href="Contacto">Contact</a></li></ul>
				</nav>
				<div class="social">
					<span>Follow us</span><a href="#" class="fb" target="_blank">Facebook</a><a href="#" class="tw" target="_blank">Twitter</a>
				</div>
			</div>
			<div><p>FUNDACIÓN TABOADA 2013 All rights reserved</p></div>
		</footer>
		<div class="noDisp"><?php echo $completeNews; ?></div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
		<script src="../js/jquery.placeholder.min.js"></script>
		<script src="../js/jquery.colorbox.js"></script>
		<script src="../js/jquery.pajinate.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".dNews a").colorbox({ inline:true, width:"640px" });
				$('#pagingNews').pajinate({
					item_container_id:'.contentPag',
					items_per_page:6,
					num_page_links_to_display:4,
					nav_label_first:'<<',
					nav_label_last:'>>',
					nav_label_prev:'<',
					nav_label_next:'>',
					abort_on_small_lists:true
				});
			});
		</script>
		<script src="../js/query.min.js"></script>
	</body>
</html>