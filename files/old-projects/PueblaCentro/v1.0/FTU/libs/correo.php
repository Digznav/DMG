<?php
	require_once('class.phpmailer.php');
	$ht_id = $_POST['hotel'];
	$hotel_name = array(
		1 => "Hotel Posada San Pedro",
		2 => "Hotel La Alhóndiga",
		3 => "Gilfer Hotel",
		4 => "Loa Inn Hoteles",
		5 => "Hotel Plaza Poblana",
		6 => "Hotel del Portal",
		7 => "Hotel Royalty Puebla",
		8 => "Hotel Señorial",
		9 => "Hotel Condesa Americana",
		10 => "Hotel Imperial",
		11 => "Hotel Palace",
		12 => "Hotel San Ángel"
	);
	$hotel_mail = array(
		1 => "ventas@hotelposadasanpedro.com.mx",
		2 => "gerencia@hotellalahondiga.com",
		3 => "reservaciones@gilferhotel.com.mx",
		4 => "gerenciaventas@loainnhoteles.com.mx",
		5 => "reservaciones@hotelplazapoblana.com",
		6 => "reservaciones@hdelportal.com.mx",
		7 => "reservaciones@hotelroyalty.mx",
		8 => "reservaciones@senorialpuebla.com",
		9 => "info@hotelcondesaamericana.com",
		10 => "reservaciones@hotelimperialpuebla.mx",
		11 => "hotel_palace_puebla@hotmail.com",
		12 => "ventashotelesenpuebla@yahooo.com.mx"
	);

	$hotelName = $hotel_name[$ht_id];
	$hotelMail = $hotel_mail[$ht_id];
	$mail = new PHPMailer();
	$mail->setLanguage('es', 'phpmailer.lang-es.php'); //Set who the message is to be sent from
	
	$mail->setFrom($_POST['correo'], htmlentities($_POST['nombre']) );
	//$mail->addReplyTo('replyto@example.com', 'First Last');
	//$mail->addAddress('desarrollador@supernova.mx', 'Diego Miguel');
	$mail->addAddress($hotelMail, $hotelName);

	$mail->isHTML(true);

	//Set the subject line
	$mail->Subject = 'Puebla Centro - Informes';
	$message = '<b>Hotel: </b>'.htmlentities( $hotelName ).'<br>';
	$message.= '<b>D&iacute;a de llegada: </b>'.$_POST['llegada'].'<br>';
	$message.= '<b>D&iacute;a de salida: </b>'.$_POST['salida'].'<br>';
	$message.= '<b>No. de habitaciones: </b>'.$_POST['hab'].'<br>';
	$message.= '<b>Adultos: </b>'.$_POST['adultos'].'<br>';
	if(isset($_POST['ninhos']) && $_POST['ninhos'] != '' ) { $message.= '<b>Niños: </b>'.$_POST['ninhos'].'<br>'; };
	if(isset($_POST['comentarios']) && $_POST['comentarios'] != '' ) { $message.= '<b>Comentarios: </b>'.htmlentities( $_POST['comentarios'] ).'<br>'; };
	$message.= '<hr><br>';
	$message.= '<b>Nombre: </b>'.htmlentities( $_POST['nombre'] ).'<br>';
	$message.= '<b>Correo: </b>'.$_POST['correo'].'<br>';
	$message.= '<b>Pa&iacute;s: </b>'.htmlentities( $_POST['pais'] ).'<br>';
	if(isset($_POST['estado']) && $_POST['estado'] != '' ) { $message.= '<b>Estado: </b>'.htmlentities( $_POST['estado'] ).'<br>'; };
	$message.= '<b>Tel&eacute;fono: </b>'.$_POST['tel'].'<br>';

	$mail->Body = $message;

	$mensajeAlt = "";
	$mensajeAlt.= 'Hotel: '.htmlentities( $hotelName )."\n";
	$mensajeAlt.= 'D&iacute;a de llegada: '.$_POST['llegada']."\n";
	$mensajeAlt.= 'D&iacute;a de salida: '.$_POST['salida']."\n";
	$mensajeAlt.= 'No. de habitaciones: '.$_POST['hab']."\n";
	$mensajeAlt.= 'Adultos: '.$_POST['adultos']."\n";
	if(isset($_POST['ninhos']) && $_POST['ninhos'] != '' ) { $mensajeAlt.= 'Ni&ntilde;os: '.$_POST['ninhos']."\n"; };
	if(isset($_POST['comentarios']) && $_POST['comentarios'] != '' ) { $mensajeAlt.= 'Comentarios: '.htmlentities( $_POST['comentarios'] )."\n"; };
	$mensajeAlt.= "\n\n";
	$mensajeAlt.= 'Nombre: '.htmlentities( $_POST['nombre'] )."\n";
	$mensajeAlt.= 'Correo: '.$_POST['correo']."\n";
	$mensajeAlt.= 'Pa&iacute;s: '.htmlentities( $_POST['pais'] )."\n";
	if(isset($_POST['estado']) && $_POST['estado'] != '' ) { $mensajeAlt.= 'Estado: '.htmlentities( $_POST['estado'] )."\n"; };
	$mensajeAlt.= 'Tel&eacute;fono: '.$_POST['tel']."\n";

	//Replace the plain text body with one created manually
	$mail->AltBody = $mensajeAlt;
	//send the message, check for errors

	if(!$mail->send()) {
		$status = 'error';
		echo $status;
	} else {
		$status = 'success';
		echo $status;
	}
?>