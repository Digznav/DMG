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
			<?php $ctMn='Registro'; include('libs/header.php'); ?>
			<div class="sectionTitle"><span class="symb-icon icoRight"></span> <strong>Registro</strong></div>
			<div class="content">
				<div class="text">
					<span class="title moveToLeft"><strong>Registro</strong></span><br>
					<?php if (isset($_POST['submit'])) {
						$email = 'digznav@hotmail.com';
						$emailadd = $_POST['email'];
						$subject = "Registro ";
						$message = 'NOMBRE: ' . $_POST['nombre'] . "\n";
						$message .= 'APELLIDO(S): ' . $_POST['apellido'] . "\n";
						$message .= 'EMAIL: ' . $_POST['email'] . "\n";
						$message .= 'EMPRESA: ' . $_POST['empresa'] . "\n";
						$message .= 'GÉNERO: ' . $_POST['generoFemMas'] . "\n";
						$message .= 'FECHA DE NACIMIENTO: ' . $_POST['diaNacimiento'] . ' de ' . $_POST['mesNacimiento'] . ' de ' . $_POST['anioNacimiento'];
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
					<form name="registerForm" id="registerForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="usemForm">
						<fieldset>
							<label for="idNombre">Nombre:</label>
								<input type="text" name="nombre" id="idNombre" required="required"><br>
								<label for="idNombre" class="invalid">Por favor introduce tu nombre.<br></label>
							<label for="idApellido">Apellido(s):</label>
								<input type="text" name="apellido" id="idApellido"><br>
								<label for="idApellido" class="invalid">Por favor introduce tu(s) apellido(s).<br></label>
							<label for="idEmail">E-mail:</label>
								<input type="email" name="email" id="idEmail" placeholder="ejemplo@ejemplo.com"><br>
								<label for="idEmail" class="invalid">Por favor introduce tu e-mail.<br></label>
							<label for="idEmpresa">Empresa:</label>
								<input type="text" name="empresa" id="idEmpresa"><br>
								<label for="idEmpresa" class="invalid">Por favor introduce tu empresa.<br></label>
							<fieldset>
								<legend>Género:</legend>
									<input type="radio" name="generoFemMas" id="idGenero" value="m">
									<label>Masculino</label>
									<input type="radio" name="generoFemMas" id="idGenero" value="f">
									<label>Femenino</label><br>
									<label for="generoFemMas" class="invalid">Por favor seleccione su género.<br></label>
							</fieldset>
							<fieldset>
								<legend>Fecha de nacimiento:</legend>
								<br>
								<select name="diaNacimiento" id="idNacimiento">
									<option value="">Día</option>
									<?php for ($i=1;$i<=31;$i++) { ?>
										<option value="<?php echo $i; ?>"><?php echo "$i"; ?></option>
									<?php } ?>
								</select>
								<select name="mesNacimiento" id="idNacimiento">
									<option value="">Mes</option>
									<option value="1">Enero</option>
									<option value="2">Febrero</option>
									<option value="3">Marzo</option>
									<option value="4">Abril</option>
									<option value="5">Mayo</option>
									<option value="6">Junio</option>
									<option value="7">Julio</option>
									<option value="8">Agosto</option>
									<option value="9">Septiembre</option>
									<option value="10">Octubre</option>
									<option value="11">Noviembre</option>
									<option value="12">Diciembre</option>
								</select>
								<select name="anioNacimiento" id="idNacimiento">
									<option value="">Año</option>
									<?php for ($j=1900;$j<=2013;$j++) { ?>
										<option value="<?php echo $i; ?>"><?php echo "$j"; ?></option>
									<?php } ?>
								</select>
								<br>
								<label for="idNacimiento" class="invalid">Por favor introduzca su fecha de nacimiento.<br></label>
							</fieldset>
						</fieldset>
						<input type="submit" class="submit" name="submit" value="Registrarte">
						<p>Al hacer clic en "Registrate" muestras tu conformidad con <a href="#" target="_blank"><strong>nuestras condiciones</strong></a> y aceptas haber leído y comprendido nuestra <a href="#" target="_blank"><strong>política de uso de datos</strong></a>.</p>
					</form>
					<?php } ?>
				</div>
				<div class="sideImage"><img src="imgs/img4.jpg" alt="Registro"></div>
			</div>
			<a href="https://www.facebook.com/USEMPuebla?ref=hl" target="_blank" class="fbUSEM"><img src="imgs/fbUsem.png" alt="facebook.usempuebla"></a>
		</div>
		<?php include('libs/footer.php'); ?>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/query.min.js"></script>
		<script src="js/validation.min.js"></script>
	</body>
</html>