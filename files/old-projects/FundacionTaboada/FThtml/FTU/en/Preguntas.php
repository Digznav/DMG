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
					<ul><li><a href="Inicio">Home</a></li><li><a href="#">About the foundation</a><ul><li><a href="Historia">History</a></li><li><a href="Mision">Mission & Vision</a></li><li><a href="Noticias">History News</a></li><!-- li><a href="#">Our team</a></li --><!-- li><a href="#">Board of directors</a></li --></ul></li><li><a href="Becas" class="activeNav">Scholarship Program</a><ul><li><a href="Preguntas">FAQ</a></li></ul></li><li><a href="#">Events gallery</a><ul><li><a href="Fotografias">Photographs</a></li><li><a href="Videos">Videos</a></li></ul></li><li><a href="Ayuda">Do you want to help?</a></li><li><a href="Contacto">Contact</a></li></ul>
				</nav>
			</div>
		</header>
		<!-- Contenedor principal -->
		<div class="container">
			<!-- Contenido -->
			<div class="content">
				<span class="pageLocation">Scholarship program / <span class="actualPage">FAQ</span></span><br>
				<span class="title">FAQ</span>
				<div class="cont">
					<div id="accordion" class="accr">
						<h3>Who is elegible to receive a scholarship?</h3>
						<div><p>Students who are completing High School and make its request the first days of May.</p></div>
						<h3>Dos the Foundation give scholarships when a student already started the degree?</h3>
						<div><p>No, the scholarships are only given before the student begins to study the degree.</p></div>
						<h3>What is the required average a High School student requires to apply for a scholarship?</h3>
						<div><p>9 global average</p></div>
						<h3>Does the Foundation gives scholarships to enroll to any university?</h3>
						<div><p>No, only private universities that have an agreement of excellence with the Foundation.</p></div>
						<h3>Does the Foundation gives scholarships to all study areas?</h3>
						<div><p>No, only those related to Science and Technology,  Economic-Administrative Sciences, Humanities and those related to Education.</p></div>
						<h3>Do I have to present a test to obtain a scholarship?</h3>
						<div><p>Yes, an academic and a psychometric tests must be presented, also a socio economic study is required.</p></div>
						<h3>Can the scholarship be suspended?</h3>
						<div><p>Yes, when the grantee does not reach the average 9 per semester.</p></div>
						<h3>Does the scholarship applies during all my studies at the university?</h3>
						<div><p>Yes, while maintaining the average requested.</p></div>
						<h3>Does the scholarship covers the 100% of my university fee?</h3>
						<div><p>No, depends on many factors, socioeconomic, having other scholarships and others.</p></div>
					</div>
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
		<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../js/jquery.colorbox.js"></script>
		<script type="text/javascript">
			$(function() {
				$("#accordion").accordion({ heightStyle: "content" });
				$(".news article a").colorbox({inline:true, width:"640px"});
			});
		</script>
		<script src="../js/query.min.js"></script>
	</body>
</html>