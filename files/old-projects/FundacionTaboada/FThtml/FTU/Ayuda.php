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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
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
					<ul><li><a href="Inicio">Inicio</a></li><li><a href="#">Acerca de la fundación</a><ul><li><a href="Historia">Historia</a></li><li><a href="Mision">Misión & Visión</a></li><li><a href="Noticias">Historial de Noticias</a></li><!-- li><a href="#">Nuestro equipo</a></li --><!-- li><a href="#">Junta Directiva</a></li --></ul></li><li><a href="Becas">Programa de becas</a><ul><li><a href="Preguntas">Preguntas frecuentes</a></li></ul></li><li><a href="#">Galería de eventos</a><ul><li><a href="Fotografias">Fotografías</a></li><li><a href="Videos">Videos</a></li></ul></li><li><a href="Ayuda" class="activeNav">¿Deseas ayudar?</a></li><li><a href="Contacto">Contacto</a></li></ul>
				</nav>
			</div>
		</header>
		<!-- Contenedor principal -->
		<div class="container">
			<!-- Contenido -->
			<div class="content">
				<span class="pageLocation"><!-- ¿Deseas ayudar? /  --><span class="actualPage">¿Deseas ayudar?</span></span><br>
				<span class="title">¿Deseas ayudar?</span>
				<div class="cont">
					<?php if (isset($_POST['submit'])) { ?>
						<div class="sendingMail"><p><strong>Enviando...</strong><br>Por favor espere un momento.</p><img src="imgs/loader2.gif" alt="enviando email"></div>
						<?php
						$email = 'multimedia2@vmasideas.com';
						$email2 = 'multimedia@vmasideas.com';
						/*$email3 = 'multimedia@vmasideas.com';
						$email4 = 'informes@destinopuebla.com';
						$email5 = 'creativo3@vmasideas.com';*/
						
						$emailadd = $_POST['email'];
						$subject = "Ayuda a Fundación Taboada - " . $_POST['nombre'];
						
						$message = "";
						$message .= '<b>Nombre:</b> ' . $_POST['nombre'] . '<br>';
						$message .= '<b>Teléfono:</b> ' . $_POST['tel'] . '<br>';
						$message .= '<b>e-mail:</b> ' . $_POST['email'] . '<br>';
						$message .= '<br><br>';
						
						if(isset($_POST['ayudaPersona']) && $_POST['ayudaPersona'] != '' ) { $message .= '<b>Persona:</b> ' . $_POST['ayudaPersona'] . '<br>'; };
						if(isset($_POST['carreraTecnica']) && $_POST['carreraTecnica'] != '' ) { $message .= '<b>Aportación a Carrera Técnica:</b> ' . $_POST['carreraTecnica'] . '<br>'; };
						if(isset($_POST['carreraProfesional']) && $_POST['carreraProfesional'] != '' ) { $message .= '<b>Aportación a Carrera Profesional:</b> ' . $_POST['carreraProfesional'] . '<br>'; };
						if(isset($_POST['becaCompleta']) && $_POST['becaCompleta'] != '' ) { $message .= '<b>Beca Completa:</b> ' . $_POST['becaCompleta'] . '<br>'; };
						
						$header = "From: " . strip_tags($emailadd) . "\r\n";
						/*$header .= "BCC: ". strip_tags($email2) . "\r\n";*/
						/*$header .= "BCC: ". strip_tags($email2) . ',' . strip_tags($email3) . ',' . strip_tags($email4) . ',' . strip_tags($email5) . "\r\n";*/
						$header .= "MIME-Version: 1.0\r\n";
						$header .= "Content-type: text/html; charset: utf-8\r\n";
						
						if (mail($email, $subject, $message, $header)){ ?>
							<script type="text/javascript">
								var loc = document.location.pathname;
								$(".sendingMail").hide();
								function redireccionar() { document.location.href=loc };
								setTimeout("redireccionar()", 3000);
							</script>
							<div class="successMail"><p><strong>Éxito</strong><br>Información enviada correctamente.</p><span>%</span></div>
						<?php } else { ?>
							<script type="text/javascript">
								var loc = document.location.pathname;
								$(".sendingMail").hide();
								function redireccionar() { document.location.href=loc };
								setTimeout("redireccionar()", 3000);
							</script>
							<div class="errorMail"><p><strong>Error</strong><br>Por favor intente de nuevo.</p><span>X</span></div>
							<?php return false;
						}
					}
					else { ?>
						<p>Si desea apoyar la educación de excelencia en México complete la siguiente información:</p>
						<form method="POST" action="" name="formAyuda" id="formAyuda" class="formAyuda">
							<fieldset>
								<legend>¿Eres Persona Física o Persona Moral?</legend>
								<input type="radio" name="ayudaPersona" id="personaFisica" value="Física"> <label for="personaFisica">Persona Física</label><br>
								<input type="radio" name="ayudaPersona" id="personaMoral" value="Moral"> <label for="personaMoral">Persona Moral</label><br>
								<div>
									<fieldset>
										<legend>Carreras Técnicas</legend>
										<label for="carreraTec">Tu aportación puede ser de:</label><br>
										<select id="carreraTec" name="carreraTecnica">
											<option value="">Seleccione una opción</option>
											<option value="$100.00 mensuales">$100.00 mensuales</option>
											<option value="$200.00 mensuales">$200.00 mensuales</option>
											<option value="$300.00 mensuales">$300.00 mensuales</option>
											<option value="$500.00 mensuales">$500.00 mensuales</option>
											<option value="Más de $500.00">Más de $500.00</option>
										</select>
									</fieldset>
								</div>
								<div>
									<fieldset>
										<legend>Carreras Profesionales</legend>
										<label for="carreraProf">Tu aportación puede ser de:</label><br>
										<select id="carreraProf" name="carreraProfesional">
											<option value="">Seleccione una opción</option>
											<option value="$1,000.00 mensuales">$1,000.00 mensuales</option>
											<option value="$2,000.00 mensuales">$2,000.00 mensuales</option>
											<option value="$3,000.00 mensuales">$3,000.00 mensuales</option>
											<option value="$5,000.00 mensuales">$5,000.00 mensuales</option>
											<option value="Más de $5,000.00">Más de $5,000.00</option>
										</select>
									</fieldset>
								</div>
							</fieldset>
							<fieldset>
								<legend>¿Deseas donar para una beca universitaria completa?</legend>
								<select name="becaCompleta">
									<option value="">Seleccione una opción</option>
									<option value="Completa - $10,000.00 mensuales durante 5 años">Completa - $10,000.00 mensuales durante 5 años</option>
									<option value="Media beca - $5,000.00 mensuales durante 5 años">Media beca - $5,000.00 mensuales durante 5 años</option>
									<option value="Cuarto de beca - $2,500.00 mensuales durante 5 años">Cuarto de beca - $2,500.00 mensuales durante 5 años</option>
									<option value="Octavo de beca - $1,250.00 mensuales durante 5 años">Octavo de beca - $1,250.00 mensuales durante 5 años</option>
								</select>
							</fieldset>
							<fieldset class="personales">
								<div>
									<legend>Datos Personales:</legend>
									<label for="nombre">Nombre: </label><input type="text" name="nombre" id="nombre" placeholder="Nombre"><br>
									<label for="tel">Teléfono: </label><input type="tel" name="tel" id="tel" placeholder="00 00 00 00"><br>
									<label for="email">E-mail: </label><input type="email" name="email" id="email" placeholder="ejemplo@ejemplo.com">
								</div>
								<div id="messageBox" class="messageBox"><ul></ul></div>
							</fieldset>
							<fieldset>
								<p><small>Se otorgan recibo deducible de impuestos.<br>Somos una Institución autorizada por el SAT (Servicio de Administración Tributaria) mediante publicación en el <strong>Diario Oficial de la Federación</strong> de fecha <strong>17 de junio de 2013</strong>.</small></p>
								<input type="submit" name="submit" value="Enviar">
							</fieldset>
						</form>
					<?php } ?>
				</div>
				<hr>
				<!-- Eventos -->
				<aside class="generalAside events"><?php include "lib/eventsFooter.php"; ?></aside>
			</div>
			<!-- Noticias -->
			<section class="news"><?php include "lib/News.php"; ?></section>
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
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/validation.min.js"></script>
		<script src="js/jquery.colorbox.js"></script>
		<script type="text/javascript">
			$(document).ready(function (){ $(".news article a").colorbox({inline:true, width:"640px"}); });
		</script>
		<script src="js/query.min.js"></script>
	</body>
</html>