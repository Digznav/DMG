<?php
function clean($string) {
	$string = str_replace(' ', '-', $string);
	return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}
$messageSend = false;
$listaEstados = array( 'Aguascalientes','Baja California','Baja California Sur','Campeche','Coahuila de Zaragoza','Colima','Chiapas','Chihuahua','Distrito Federal','Durango','Guanajuato','Guerrero','Hidalgo','Jalisco','México','Michoacán de Ocampo','Morelos','Nayarit','Nuevo León','Oaxaca','Puebla','Querétaro','Quintana Roo','San Luis Potosí','Sinaloa','Sonora','Tabasco','Tamaulipas','Tlaxcala','Veracruz de Ignacio de la Llave','Yucatán','Zacatecas' );
require ('libs/class.phpmailer.php');

if(isset($_POST['submit']) && $_POST['submit'] == "Enviar") {
	
	$mail = new PHPMailer();
	
	$mail->setLanguage('es', '/optional/path/to/language/directory/'); //Set who the message is to be sent from

	$mail->setFrom($_POST['correo'], $_POST['nombre']);
	//$mail->addReplyTo('replyto@example.com', 'First Last');
	//$mail->addAddress('desarrollador@supernova.mx', 'Diego Miguel');
	$mail->addAddress('abayuba.duche@supernova.mx', 'Abayuba Duche');
	$mail->addAddress('abahi.gonzalez@supernova.mx', 'Anahi González');
	$mail->addAddress('adalid.bringas@supernova.mx', 'Adalid Bringas');

	//Attach an image file
	if (isset($_POST['proyecto']) && $_POST['proyecto'] == 'si') {
		//$mail->addAttachment('imgs/grid.png');
		$allowedExts = array('doc', 'docx', 'pdf', 'zip');
		

		if ($_FILES['adjunto']['name'] != "" ) {
			$name = $_FILES['adjunto']['name'];
			$path = 'fileUpload/';
			$provName = explode( '.', $name );
			$ext = end($provName);
			$fileName = $ext.'-'.clean($provName[0]).'-'.rand(1,99);
			if ($_FILES['adjunto']['error'] == 4) {
				continue; // Skip file if any error found
			};
			if ($_FILES['adjunto']['error'] == 0) {
				//echo $_FILES['adjunto']['error'].'<br>';
				if( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $allowedExts) ) {
					$errors[] = "$name is not a valid format";
					//echo $errors.'<br>';
					continue; // Skip invalid file formats
				}
				else{ // No error found! Move uploaded files
					$fileName.='.'.$ext;
					//echo $fileName;
					if(move_uploaded_file($_FILES['adjunto']['tmp_name'], $path.$fileName)) {
						$mail->AddAttachment($path.$fileName);
						//echo $path.$fileName;
					}
				}
			}
		}

	}
	$mail->isHTML(true);

	//Set the subject line
	$mail->Subject = 'Supernova - Registro';
	$message ='<b>Nombre:</b> '.$_POST['nombre'].'<br> ';
	$message.='<b>Edad:</b> '.$_POST['edad'].'<br>';
	$message.='<b>Correo:</b> '.$_POST['correo'].'<br>';
	$message.='<b>Estado:</b> '.$_POST['estado'].'<br>';
	$message.='<b>Tel:</b> '.$_POST['tel'].'<br>';
	$message.='<b>Escuela:</b> '.$_POST['escuela'].'<br>';
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
		echo '<script>function redireccionar(){document.location.href="Registro" }; alert ("Mensaje enviado"); setTimeout ("redireccionar()", 10);</script>';
		//header('Location:Registro.php', true, 303);
		/*header('Location:Registro', true, 303);
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
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Contenedor principal-->
		<div id="container">
			<?php $avoidNav = "Registro"; include('libs/header.php'); ?>

			<div class="content panelFormat">
				<h2>Registro</h2>
				<p class="highlight">Formato de registro para ingresar en el evento:</p>
				<!-- <form method="POST" action="< ?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" name="registroForm" id="registroForm"> -->
				<form method="POST" action="" enctype="multipart/form-data" name="registroForm" id="registroForm">
					<table class="tableFormat">
						<tr><td colspan="2" class="full"><label for="cNombre">Nombre</label><input type="text" name="nombre" id="cNombre"></td></tr>
						<tr>
							<td class="half"><label for="cEdad">Edad</label><input type="number" name="edad" id="cEdad"></td>
							<td class="half">
								<label for="cEstado">Estado</label><select name="estado" id="cEstado">
									<option value="">Seleccione un estado</option>
									<?php foreach ($listaEstados as $estado) { ?>
									<option value="<?php echo $estado ?>"><?php echo $estado ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td class="half"><label for="cCorreo">Correo</label><input type="email" name="correo" id="cCorreo" placeholder="ejemplo@dominio.com"></td>
							<td class="half"><label for="tel">Teléfono</label><input type="number" name="tel" id="tel"></td>
						</tr>
						<tr><td colspan="2" class="full"><label for="cEscuela">Escuela de procedencia</label><input type="text" name="escuela" id="cEscuela"></td></tr>
						<tr>
							<td colspan="2" class="full">
								<label for="cComentario">¿Por qué quieres participar como asistente al festival? Dilo en 600 palabras. <span id="counter"></span> restantes.</label>
								<textarea name="comentario" id="cComentario" placeholder="Dilo en 600 palabras..." rows="6"></textarea>
							</td>
						</tr>
					</table>

					<table class="tableFormat">
						<tr>
							<td class="uploadDoc half">
								<div class="docBackColor clearfix">
									<div class="selfCheck clearfix">
										<input type="checkbox" name="proyecto" id="proyecto" value="si">
										<a href="#" id="checkBut">
											<div class="checkMask"></div>
											<span>¿Quieres registrar tu proyecto?</span>
										</a>
									</div>
									<div class="upButCont">
										<label for="adjunto" class="disabled">Seleccione el documento (PDF o Word) que desee</label>
										<input type="file" name="adjunto" id="adjunto" disabled accept="application/pdf,application/msword,application/zip">
									</div>
								</div>
							</td>
							<td class="half"><input type="submit" name="submit" id="submit" value="Enviar" class="buttonSend"></td>
						</tr>
					</table>
				</form>
			</div>
			
		</div>

		<?php include('libs/jquery-1.11.0.php'); ?>
		<script src="js/jquery.simplyCountable.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.vegas.min.js"></script>
		<script src="js/validate.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">

			jQuery(function($) {
				$('#cComentario').simplyCountable({
					counter:'#counter',
					countType:'words',
					maxCount:600,
					countDirection:'down'
				});
				$('#checkBut').click(function(e) {
					e.preventDefault();
					if( $('#proyecto').is( ":checked" ) ) {
						$('#proyecto').prop('checked',false);
						$('#adjunto').prop('disabled', true);
						$('.upButCont').slideToggle('fast');
						$('.checkMask').toggleClass('activeCheck');
					} else {
						$('#proyecto').prop('checked',true);
						$('#adjunto').prop('disabled', false);
						$('.upButCont').slideToggle('fast');
						$('.checkMask').toggleClass('activeCheck');
					};
				});

				$.vegas({
					src:'imgs/design/bg3.jpg', fade:5000
				})('overlay', { src:'css/overlays/06.png' });
			});
		</script>
	</body>
</html>