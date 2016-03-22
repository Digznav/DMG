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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/jquery-1.10.1.min.js"><\/script>')</script>
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
					<ul><li><a href="Inicio">Home</a></li><li><a href="#">About the foundation</a><ul><li><a href="Historia">History</a></li><li><a href="Mision">Mission & Vision</a></li><li><a href="Noticias">History News</a></li><!-- li><a href="#">Our team</a></li --><!-- li><a href="#">Board of directors</a></li --></ul></li><li><a href="Becas">Scholarship Program</a><ul><li><a href="Preguntas">FAQ</a></li></ul></li><li><a href="#">Events gallery</a><ul><li><a href="Fotografias">Photographs</a></li><li><a href="Videos">Videos</a></li></ul></li><li><a href="Ayuda" class="activeNav">Do you want to help?</a></li><li><a href="Contacto">Contact</a></li></ul>
				</nav>
			</div>
		</header>
		<!-- Contenedor principal -->
		<div class="container">
			<!-- Contenido -->
			<div class="content">
				<span class="pageLocation"><span class="actualPage">Do you want to help?</span></span><br>
				<span class="title">Do you want to help?</span>
				<div class="cont">
					<?php if (isset($_POST['submit'])) { ?>
						<div class="sendingMail"><p><strong>Sending...</strong><br>Please wait a moment.</p><img src="imgs/loader2.gif" alt="enviando email"></div>
						<?php
						$email = 'multimedia2@vmasideas.com';
						$email2 = 'multimedia@vmasideas.com';
						/*$email3 = 'multimedia@vmasideas.com';
						$email4 = 'informes@destinopuebla.com';
						$email5 = 'creativo3@vmasideas.com';*/
						$emailadd = $_POST['email'];
						$subject = "Ayuda a Fundación Taboada[EN] - " . $_POST['nombre'];
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
						$header .= "BCC: ". strip_tags($email2) . "\r\n";
						/*$header .= "BCC: ". strip_tags($email2) . ',' . strip_tags($email3) . ',' . strip_tags($email4) . ',' . strip_tags($email5) . "\r\n";*/
						$header .= "MIME-Version: 1.0\r\n";
						$header .= "Content-type: text/html; charset: utf-8\r\n";
						if (mail($email, $subject, $message, $header)){
							echo '<script type="text/javascript">$(".sendingMail").hide(); function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" };';
							echo 'setTimeout ("redireccionar()", 3000);</script>'; ?>
							<div class="successMail"><p><strong>Success</strong><br>Information sent successfully.</p><span>%</span></div>
						<?php }
						else {
							echo '<script type="text/javascript">$(".sendingMail").hide(); function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" };';
							echo 'setTimeout ("redireccionar()", 3000);</script>'; ?>
							<div class="errorMail"><p><strong>Error</strong><br>Please try again.</p><span>X</span></div>
							<?php return false;
						}
					}
					else { ?>
						<p>If you want to support excellence in education in Mexico, complete the following information:</p>
						<form method="POST" action="" name="formAyuda" id="formAyuda" class="formAyuda">
							<fieldset>
								<legend>Are you a Natural or Legal Person?</legend>
								<input type="radio" name="ayudaPersona" id="personaFisica" value="Física"> <label for="personaFisica">Natural Persona</label><br>
								<input type="radio" name="ayudaPersona" id="personaMoral" value="Moral"> <label for="personaMoral">Legal Person</label><br>
								<div>
									<fieldset>
										<legend>Technical Careers</legend>
										<label for="carreraTec">Your contribution can be of:</label><br>
										<select id="carreraTec" name="carreraTecnica">
											<option value="">Select an option</option>
											<option value="$100.00 per month">$100.00 per month</option>
											<option value="$200.00 per month">$200.00 per month</option>
											<option value="$300.00 per month">$300.00 per month</option>
											<option value="$500.00 per month">$500.00 per month</option>
											<option value="More than $500.00">More than $500.00</option>
										</select>
									</fieldset>
								</div>
								<div>
									<fieldset>
										<legend>Professional Careers</legend>
										<label for="carreraProf">Your contribution can be of:</label><br>
										<select id="carreraProf" name="carreraProfesional">
											<option value="">Select an option</option>
											<option value="$1,000.00 per month">$1,000.00 per month</option>
											<option value="$2,000.00 per month">$2,000.00 per month</option>
											<option value="$3,000.00 per month">$3,000.00 per month</option>
											<option value="$5,000.00 per month">$5,000.00 per month</option>
											<option value="More than $5,000.00">More than $5,000.00</option>
										</select>
									</fieldset>
								</div>
							</fieldset>
							<fieldset>
								<legend>Do you wish to donate for a full university scholarship?</legend>
								<select name="becaCompleta">
									<option value="">Select an option</option>
									<option value="Full - $10,000.00 per month for 5 years">Full - $10,000.00 per month for 5 years</option>
									<option value="Half a scholarship - $5,000.00 per month for 5 years">Half a scholarship - $5,000.00 per month for 5 years</option>
									<option value="A quarter of a scholarship - $2,500.00 per month for 5 years">A quarter of a scholarship - $2,500.00 per month for 5 years</option>
									<option value="An eighth of a scholarship - $1,250.00 per month for 5 years">An eighth of a scholarship - $1,250.00 per month for 5 years</option>
								</select>
							</fieldset>
							<fieldset class="personales">
								<div>
									<legend>Personal information:</legend>
									<label for="nombre">Name: </label><input type="text" name="nombre" id="nombre" placeholder="Name"><br>
									<label for="tel">Telephone: </label><input type="tel" name="tel" id="tel" placeholder="00 00 00 00"><br>
									<label for="email">E-mail: </label><input type="email" name="email" id="email" placeholder="example@example.com">
								</div>
								<div id="messageBox" class="messageBox"><ul></ul></div>
							</fieldset>
							<fieldset>
								<p><small>Tax deductible receipts are provided.<br>We are an Institution authorized by SAT (Tax Administration Service, by its acronym in Spanish) through the publication in the <strong>Official Gazette of the Federation</strong>, dated <strong>June 17, 2013</strong>.</small></p>
								<input type="submit" name="submit" value="Send">
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
					<ul><li><a href="Inicio">Home</a></li><li><a href="#">About the foundation</a><ul><li><a href="Historia">History</a></li><li><a href="Mision">Mission & Vision</a></li><li><a href="Noticias">History News</a></li><!-- li><a href="#">Our team</a></li --><!-- li><a href="#">Board of directors</a></li --></ul></li><li><a href="Becas">Scholarship Program</a><ul><li><a href="Preguntas">FAQ</a></li></ul></li><li><a href="#">Events gallery</a><ul><li><a href="Fotografias">Photographs</a></li><li><a href="Videos">Videos</a></li></ul></li><li><a href="Ayuda">Do you want to help?</a></li><li><a href="Contacto">Contact</a></li></ul>
				</nav>
				<div class="social">
					<span>Follow us</span><a href="#" class="fb" target="_blank">Facebook</a><a href="#" class="tw" target="_blank">Twitter</a>
				</div>
			</div>
			<div><p>FUNDACIÓN TABOADA 2013 All rights reserved</p></div>
		</footer>
		<div class="noDisp"><?php echo $completeNews; ?></div>
		<script src="../js/jquery.placeholder.min.js"></script>
		<script src="../js/jquery.validate.min.js"></script>
		<script src="../js/validation.min.js"></script>
		<script src="../js/jquery.colorbox.js"></script>
		<script type="text/javascript">
			$(document).ready(function (){ $(".news article a").colorbox({inline:true, width:"640px"}); });
		</script>
		<script src="../js/query.min.js"></script>
	</body>
</html>