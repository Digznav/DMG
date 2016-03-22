<?php
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->setLanguage('es', 'phpmailer.lang-es.php'); //Set who the message is to be sent from

	/*$mail->IsSMTP();
	$mail->Host = "188.40.227.34";*/

	/*$mail->isSMTP();
	$mail->Host = 'smtp1.example.com;smtp2.example.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'user@example.com';
	$mail->Password = 'secret';
	$mail->SMTPSecure = 'tls';*/
	$correo = $_POST['correo'];
	$nombre = htmlentities($_POST['nombre'].' '.$_POST['apellido']);
	$mail->From = $correo;
	$mail->FromName = $nombre;
	$mail->addAddress( $correo, $_POST['nombre'].' '.$_POST['apellido'] );
	/*if (isset($_POST['categories'])) {
		if (isset($_POST['allCategories'])) {
			$file = $_POST['allCategories'];
			//echo $file;
			$mail->addAttachment("../Catalogos/$file");
		} else {
			foreach ($_POST['categories'] as $value) {
				//echo $value.'<br>';
				$mail->addAttachment("../Catalogos/$value");
			}
		}
	}*/
	$mail->isHTML(true);
	//Set the subject line
	$mail->Subject = '[Pernod Ricard] Nuestras Marcas';
	$message = '<b>Nombre: </b>'.$nombre.'<br>';
	$mensajeAlt = 'Nombre: '.$_POST['nombre'].' '.$_POST['apellido']."\n";
	if ( isset($_POST['comment']) ) {
		$message.= '<b>Comentario: </b>'.htmlentities( $_POST['comment'] );
		$mensajeAlt.= 'Comentario: '.$_POST['comment']."\n";
	}
	$mail->Body = $message;
	$mail->AltBody = $mensajeAlt;
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'success';
	}
?>