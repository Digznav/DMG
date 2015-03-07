<?php
require ('libs/class.phpmailer.php');

if(isset($_POST['submit']) && $_POST['submit'] == "Enviar") {
	
	$mail = new PHPMailer();
	
	$mail->setLanguage('es', '/optional/path/to/language/directory/'); //Set who the message is to be sent from

	$mail->setFrom($_POST['correo'], $_POST['nombre']);
	//$mail->addReplyTo('replyto@example.com', 'First Last');
	//$mail->addAddress('desarrollador@supernova.mx', 'Diego Miguel');
	$mail->addAddress($_POST['correoPersonal'], htmlentities($_POST['nombrePersonal']));

	$mail->isHTML(true);

	//Set the subject line
	$mail->Subject = 'Supernova - Contacto';
	$message ='<b>Nombre:</b> '.$_POST['nombre'].'<br> ';
	$message.='<b>Correo:</b> '.$_POST['correo'].'<br>';
	$message.='<b>Comentario:</b> '.$_POST['comentario'].'<br>';
	$mail->Body = $message;
	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';
	//send the message, check for errors

	if(!$mail->send()) {
		$messageError = true;
		$messageErrorLog = $mail->ErrorInfo; ?>
		<script type="text/javascript">alert('Ha ocurrido un error al enviar el mensaje, por favor intente de nuevo.')</script>
		<?php
		exit;
	} else {
		//$messageSend = true;
		echo '<script>function redireccionar(){document.location.href="Contacto" }; alert ("Mensaje enviado"); setTimeout ("redireccionar()", 10);</script>';
		//header('Location:Registro.php', true, 303);
		/*header('Location:Contacto', true, 303);
		die();*/
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Supernova</title>
		<meta name="description" content="Supernova">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/design/favicon.ico">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/vegas.css">
		<link rel="stylesheet" href="css/fancybox.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Contenedor principal-->
		<div id="container">
			<?php $avoidNav = "Contacto"; include('libs/header.php'); ?>
			
			<div class="content">
				<div class="panelFormat">
					<h2>Contacto</h2>
					<ul class="contactList clearfix">
						<li>
							<a class="fancyContactos" href="#" data-correo="abayuba.duche@supernova.mx">
								<div class="phMsk"><img src="imgs/Contactos/abayuba_duche.jpg" class="imgPro"><span class="sndMail">Contactar</span></div>
								<p><span class="nm">Abayubá Duché</span><br><span class="chrg">Director General</span></p>
							</a>
						</li>
						<li>
							<a class="fancyContactos" href="#" data-correo="adalid.bringas@supernova.mx">
								<div class="phMsk"><img src="imgs/Contactos/adalid_bringas.jpg" class="imgPro"><span class="sndMail">Contactar</span></div>
								<p><span class="nm">Adalid Bringas</span><br><span class="chrg">Directora de Producción</span></p>
							</a>
						</li>
						<li>
							<a class="fancyContactos" href="#" data-correo="luis.delpino@supernova.mx">
								<div class="phMsk"><img src="imgs/Contactos/luis_delpino.jpg" class="imgPro"><span class="sndMail">Contactar</span></div>
								<p><span class="nm">Luis del Pino</span><br><span class="chrg">Director de logística</span></p>
							</a>
						</li>
						<li>
							<a class="fancyContactos" href="#" data-correo="angelica.nhicona@supernova.mx">
								<div class="phMsk"><img src="imgs/Contactos/angelica_licona.jpg" class="imgPro"><span class="sndMail">Contactar</span></div>
								<p><span class="nm">Angélica Licona</span><br><span class="chrg">Directora de TI y Redes Sociales</span></p>
							</a>
						</li>
					</ul>
					<ul class="contactList clearfix">
						<li>
							<a class="fancyContactos" href="#" data-correo="miguel.leonor@supernova.mx">
								<div class="phMsk"><img src="imgs/Contactos/miguel_leonor.jpg" class="imgPro"><span class="sndMail">Contactar</span></div>
								<p><span class="nm">Miguel Ángel Leonor</span><br><span class="chrg">Director de Marketing</span></p>
							</a>
						</li>
						<li>
							<a class="fancyContactos" href="#" data-correo="abahi.gonzalez@supernova.mx">
								<div class="phMsk"><img src="imgs/Contactos/anahi_gonzalez.jpg" class="imgPro"><span class="sndMail">Contactar</span></div>
								<p><span class="nm">Anahí González</span><br><span class="chrg">Directora de Relaciones Públicas, Relaciones Interinstitucionales</span></p>
							</a>
						</li>
						<li>
							<a class="fancyContactos" href="#" data-correo="fernanda.leon@supernova.mx">
								<div class="phMsk"><img src="imgs/Contactos/fernanda_leon.jpg" class="imgPro"><span class="sndMail">Contactar</span></div>
								<p><span class="nm">Fernanda León</span><br><span class="chrg">Directora de patrocinios</span></p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div id="contactoForm" class="popupFormat">
				<p>Ponte en contacto con <span class="gtName"></span>, <span class="gtChrg"></span>:</p>
				<form method="POST" action="" name="contactoForm" id="contactoForm">
					<input type="hidden" value="" name="correoPersonal" id="mailPer">
					<input type="hidden" value="" name="nombrePersonal" id="namePer">
					<table class="tableFormat smallFormat">
						<tr><td class="full"><label for="cNombre">Nombre</label><input type="text" name="nombre" id="cNombre"></td></tr>
						<tr><td class="full"><label for="cCorreo">Correo</label><input type="email" name="correo" id="cCorreo" placeholder="ejemplo@dominio.com"></td></tr>
						<tr>
							<td class="full">
								<label for="cComentario">Comentario</label>
								<textarea name="comentario" id="cComentario" rows="2"></textarea>
							</td>
						</tr>
						<tr><td><input type="submit" name="submit" id="submit" class="buttonSend" value="Enviar"></td></tr>
					</table>
				</form>
			</div>

		</div>
		<?php include('libs/jquery-1.11.0.php'); ?>
		<script src="js/jquery.fancybox.js?v=2.1.5"></script>
		<script src="js/jquery.vegas.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$('.fancyContactos').click(function(e) {
					e.preventDefault();
					var $infoProf = $(this).find('.imgPro'),
							nmProf = $(this).find('.nm').html(),
							chrgProf = $(this).find('.chrg').html();

					$('#contactoForm #namePer').val( nmProf );
					$('#contactoForm #mailPer').val( $(this).data('correo') );
					$('#contactoForm .gtName').html( nmProf );
					$('#contactoForm .gtChrg').html( chrgProf );
					$.fancybox.open('#contactoForm');
				}).hover(function(){
					$(this).find('.sndMail').stop().slideToggle('fast');
				}, function(){
					$(this).find('.sndMail').stop().slideToggle('fast');
				});
				/*$.vegas('slideshow', {
					backgrounds:[
						{ src:'imgs/design/bg1.jpg', fade:5000 },
						{ src:'imgs/design/bg2.jpg', fade:5000 },
						{ src:'imgs/design/bg3.jpg', fade:5000 },
						{ src:'imgs/design/bg4.jpg', fade:5000 },
						{ src:'imgs/design/bg5.jpg', fade:5000 }
					]
				})('overlay', { src:'css/overlays/06.png' });*/

				$.vegas({
					src:'imgs/design/bg3.jpg', fade:5000
				})('overlay', { src:'css/overlays/06.png' });
			});
		</script>
	</body>
</html>