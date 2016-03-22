<?php require_once("admin/models/config.php"); ?>
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
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
		<script src="js/modernizr-2.6.2.min.js"></script>
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
						<a href="#" class="activeLang" data-lang="es">Español</a><a href="#" data-lang="en">English</a>
					</div>
					<?php include "publicLogin.php";?>
				</div>
				<div class="social clear">
					<span>Síguenos</span><a href="#" class="fb" target="_blank">Facebook</a><a href="#" class="tw" target="_blank">Twitter</a>
				</div>
				<nav class="mainNav clear">
					<ul><li><a href="Inicio">Inicio</a></li><li><a href="#">Acerca de la fundación</a><ul><li><a href="Historia">Historia</a></li><li><a href="Mision">Misión & Visión</a></li><li><a href="Noticias">Historial de Noticias</a></li><!-- li><a href="#">Nuestro equipo</a></li --><!-- li><a href="#">Junta Directiva</a></li --></ul></li><li><a href="Becas" class="activeNav">Programa de becas</a><ul><li><a href="Preguntas">Preguntas frecuentes</a></li></ul></li><li><a href="#">Galería de eventos</a><ul><li><a href="Fotografias">Fotografías</a></li><li><a href="Videos">Videos</a></li></ul></li><li><a href="Ayuda">¿Deseas ayudar?</a></li><li><a href="Contacto">Contacto</a></li></ul>
				</nav>
			</div>
		</header>
		<!-- Contenedor principal -->
		<div class="container">
			<!-- Contenido -->
			<div class="content">
				<span class="pageLocation">Programa de becas / <span class="actualPage">Preguntas frecuentes</span></span><br>
				<span class="title">Preguntas frecuentes</span>
				<div class="cont">
					<div id="accordion" class="accr">
						<h3>¿La Fundación a quién le otorga becas?</h3>
						<div><p>A estudiantes que estén terminando la Preparatoria o el Bachillerato y que hagan su solicitud en los primeros días de mayo.</p></div>
						<h3>¿Se dan becas cuando ya iniciaste la carrera?</h3>
						<div><p>No, sólo a estudiantes que inicien sus estudios.</p></div>
						<h3>¿Qué promedio de Preparatoria o Bachillerato requiero para solicitar una beca?</h3>
						<div><p>9 de promedio global</p></div>
						<h3>¿Dan becas a todas las Univesidades?</h3>
						<div><p>No, sólo a las Universidades privadas de excelencia que tengan convenio con la Fundación.</p></div>
						<h3>¿Dan becas a todas las carreras?</h3>
						<div><p>No, sólo a las relacionadas con Ciencia y Tecnología y Ciencias Económico-Administrativas. De Humanidades, sólo las relacionadas a Educación</p></div>
						<h3>¿Hay que hacer examen de conocimientos para obtener la beca?</h3>
						<div><p>Sí, un académico, un psicométrico y se hace un estudio socioeconómico.</p></div>
						<h3>¿Me pueden quitar la beca?</h3>
						<div><p>Sí, cuando el becario no alcanza el 9 de promedio por semestre.</p></div>
						<h3>¿La beca es para toda la carrera?</h3>
						<div><p>Sí, mientras se mantenga el promedio solicitado.</p></div>
						<h3>¿Son becas al 100%?</h3>
						<div><p>No, depende de muchos factores, el socioeconómico, el contar con otro porcentaje de beca y otros.</p></div>
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
					<ul><li><a href="Inicio">Inicio</a></li><li><a href="#">Acerca de la fundación</a><ul><li><a href="Historia">Historia</a></li><li><a href="Mision">Misión & Visión</a></li><li><a href="Noticias">Historial de Noticias</a></li><!-- li><a href="#">Nuestro equipo</a></li --><!-- li><a href="#">Junta Directiva</a></li --></ul></li><li><a href="Becas">Programa de becas</a><ul><li><a href="Preguntas">Preguntas frecuentes</a></li></ul></li><li><a href="#">Galería de eventos</a><ul><li><a href="Fotografias">Fotografías</a></li><li><a href="Videos">Videos</a></li></ul></li><li><a href="Ayuda">¿Deseas ayudar?</a></li><li><a href="Contacto">Contacto</a></li></ul>
				</nav>
				<div class="social">
					<span>Síguenos</span><a href="#" class="fb" target="_blank">Facebook</a><a href="#" class="tw" target="_blank">Twitter</a>
				</div>
			</div>
			<div><p>FUNDACIÓN TABOADA 2013 Todos los derechos reservados</p></div>
		</footer>
		<div class="noDisp"><?php echo $completeNews; ?></div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.colorbox.js"></script>
		<script type="text/javascript">
			$(function() {
				$("#accordion").accordion({ heightStyle: "content" });
				$(".news article a").colorbox({inline:true, width:"640px"});
			});
		</script>
		<script src="js/query.min.js"></script>
	</body>
</html>