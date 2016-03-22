<?php include('libs/init.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>USEM PUEBLA::.</title>
		<link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<?php include('libs/jquery-1.11.0.php'); ?>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<style type="text/css">
			.block { display: block; }
			form.usemForm label.invalid { display: none; }
		</style>
	</head>
	<body>
		<div class="greenBar"></div>
		<div class="container clearfix">
			<?php $ctMn='Contacto'; include('libs/header.php'); ?>
			<div class="sectionTitle"><span class="symb-icon icoRight"></span> <strong>Contacto</strong></div>
			<div class="content">
				<div class="text">
					<span class="title moveToLeft"><strong>Contacto</strong></span><br>
					<?php if (isset($_POST['submit'])) {
						$email = 'digznav@hotmail.com';
						$emailadd = $_POST['email'];
						$subject = "Contacto";
						$message = 'NOMBRE: ' . $_POST['nombre'] . "\n";
						$message .= 'EMAIL: ' . $_POST['email'] . "\n";
						$message .= 'MENSAJE: ' . $_POST['mensaje'] . "\n";
						$header = "From: ". strip_tags($emailadd) . "\r\n";
						$header .= "Content-Type: text/plain; charset = \"UTF-8\";\n";
						$header .= "Content-Transfer-Encoding: 8bit\n";
						$header .= "\n";
						if (mail($email, $subject, $message, $header)){
							echo '<script>function redireccionar() { document.location.href="' . $_SERVER['PHP_SELF'] . '" };';
							echo 'alert ("La información ha sido enviada, nos comunicaremos con usted en breve, gracias.");';
							echo 'setTimeout ("redireccionar()", 100);</script>';
						}
						else {
							echo '<script>function redireccionar() { document.location.href="' . $_SERVER['PHP_SELF'] . '" };';
							echo 'alert ("El mensaje no pudo enviarse, intente de nuevo.");';
							echo 'setTimeout ("redireccionar()", 100);</script>';
							return false;
						}
					}
					else { ?>
					<form name="contactForm" id="contactForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="usemForm">
						<fieldset>
							<label for="idNombre"><strong>Nombre:</strong></label>
								<input type="text" name="nombre" id="idNombre" required="required"><br>
								<label for="idNombre" class="invalid">Por favor introduce tu nombre.<br></label>
							<label for="idEmail"><strong>E-mail:</strong></label>
								<input type="email" name="email" id="idEmail" placeholder="ejemplo@ejemplo.com"><br>
								<label for="idEmail" class="invalid">Por favor introduce tu e-mail.<br></label>
							<label for="idEmpresa"><strong>Mensaje:</strong></label>
								<textarea name="mensaje" id="idMensaje" rows="4"></textarea><br>
								<label for="idMensaje" class="invalid">Por favor introduce tu mensaje.<br></label>
							<br>
						</fieldset>
						<input type="submit" class="submit" name="submit" value="Enviar">
						<p>16 Sur No. 3114, 2° Piso. Col. El Mirador C.P. 72530. Puebla, Pue. México. Tel (222) 244 78 34. puebla@usempuebla.org</p>
					</form>
					<?php } ?>
				</div>
				<div class="sideImage"><img src="imgs/img5.jpg" alt="Registro"></div>
			</div>
			<a href="https://www.facebook.com/USEMPuebla?ref=hl" target="_blank" class="fbUSEM"><img src="imgs/fbUsem.png" alt="facebook.usempuebla"></a>
		</div>
		<?php include('libs/footer.php'); ?>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/query.min.js"></script>
		<script src="js/validation.min.js"></script>
	</body>
</html>