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
				<span class="pageLocation">About the foundation / <span class="actualPage">Mission & Vision</span></span><br>
				<span class="title">Mission & Vision</span>
				<div class="cont imageTextFormat">
					<img src="../imgs/mision.jpg" alt="Mision Vision">
					<p><span class="subtitle">Mission</span><br>To grant scholarships for private University Bachelors of renowned prestige to Young Mexicans with academic excellence and whose parents do not count with the economic resources to afford the cost of the tuitions, and also to grant scholarships on a technical level so that young people of very low resources have training that assures their insertion to the labor market.</p>
					<p><span class="subtitle">Vision</span><br>To persevere and update ourselves constantly as a Private Charity Institution  that promotes Excellence in Education to achieve a Mexico with values, with culture and Social Responsibility, in such a way that future generations are qualified to deal with the challenges of the current global world.</p>
				</div>
				<hr>
				<!-- Eventos -->
				<aside class="generalAside events"><?php include "lib/eventsFooter.php"; ?></aside>
			</div>
			<!-- Noticias -->
			<section class="news"><?php include "lib/News.php"; ?></section>
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
		<script>window.jQuery || document.write('<script src="../js/jquery-1.10.1.min.js"><\/script>')</script>
		<script src="../js/jquery.placeholder.min.js"></script>
		<script src="../js/jquery.colorbox.js"></script>
		<script type="text/javascript">
			$(document).ready(function (){ $(".news article a").colorbox({inline:true, width:"640px"}); });
		</script>
		<script src="../js/query.min.js"></script>
	</body>
</html>