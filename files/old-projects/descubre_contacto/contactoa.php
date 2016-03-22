<?php
	function agregarSeparador($a_array, $separador) {
		$pos = 0;
		$conc = '';
		foreach ($a_array as $value)
		{
			$conc = $conc . $value;
			$pos++;
			if ($pos != count($a_array)) {
				$conc = $conc . $separador;
			}
		}
		return $conc;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<META NAME="author" CONTENT="Vmasideas">
		<META NAME="subject" CONTENT="Agencia">
		<META NAME="Description" CONTENT="Bienvenido al mejor sitio en cuanto a la organización de viajes en la Sierra Norte de Puebla. Descubre Cuetzalan tiene la plena certeza que hará de su visita una mágica experiencia pues un equipo de profesionales en el área nos respaldan.  ">
		<META NAME="Keywords" CONTENT="Cuetzalan, Descubre Cuetzalan, hoteles en Cuetzalan, Guias en Cuetzalan, recorridos en Cuetzalan, rutas en Cuetzalan, grutas en Cuetzalan, ruinas en Cuetzalan, zona arqueológica en Cuetzalan, Yohualichan, cabalgata en Cuetzalan, campamentos en Cuetzalan">
		<META NAME="Keywords" CONTENT="Hospedaje en Cuetzalan, cultura en Cuetzalan, naturaleza en Cuetzalan, ecoturismo, ecoturismo en Cuetzalan, grutas, cavernas, espeleología, cascadas en Cuetzalan, rapel en Cuetzalan, rapel, rappel, rappel en Cuetzalan">
		<META NAME="Keywords" CONTENT="Camping en Cuetzalan, visitar Cuetzalan, visitar Jonotla, grutas en Cuetzalan, aventura en Cuetzalan, caballos en cuetzalan, renta de caballos, guia turistico en Cuetzalan ">
		<META NAME="Geography" CONTENT="Mexico, Puebla, Cuetzalan">
		<META NAME="Language" CONTENT="Spanish">
		<META HTTP-EQUIV="Expires" CONTENT="never">
		<META NAME="Copyright" CONTENT="Vmasideas">
		<META NAME="Designer" CONTENT="Equipo Vmasideas">
		<META NAME="Publisher" CONTENT="Vmasideas">
		<META NAME="Revisit-After" CONTENT="10 days">
		<META NAME="distribution" CONTENT="Global">
		<META NAME="Robots" CONTENT="INDEX, FOLOW">
		<META NAME="city" CONTENT="Puebla">
		<META NAME="country" CONTENT="Mexico">
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Shanti" type="text/css" rel="stylesheet">
		<link href="css/custom-theme/jquery-ui-1.10.1.custom.min.css" type="text/css" rel="stylesheet">
		<link href="css/menu_style.css" type="text/css" rel="stylesheet">
		<link href="css/form_style.css" type="text/css" rel="stylesheet">
		<!-- <link href="css/pikachoose750.css" type="text/css" rel="stylesheet"> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.1.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/validation.js"></script>
		<script language="javascript">
			$(document).ready(function (){
				$('#form_tabs').tabs();
				$('#id_llegada').datepicker({
					showOn: "button",
					buttonImage:"imgs/calendar.gif",
					buttonImageOnly:true
				});
				$('#id_salida').datepicker({
					showOn: "button",
					buttonImage:"imgs/calendar.gif",
					buttonImageOnly:true
				});
			});
		</script>
		<style type="text/css">
			.block { display: block; }
			form.contact_form label.invalid { display: none; }
		</style>
		<title>Descubre Cuetzalan</title>
	</head>
	<body>
		<div id="god">
			<?php include("menu.php"); ?>
			<div id="container">
				<div id="contFila1">
					<div id="tRojo"><a href="#">CONTÁCTENOS</a></div>
					<div id="contenidoCrema">
						<?php
						if (isset($_POST['submit'])) {
							/*print_r($_POST['paquetes_opciones'][2]);*/
							if (isset($_POST['paquetes_opciones']) && $_POST['paquetes_opciones'] != ''){ $paquetes_seleccion = agregarSeparador ($_POST['paquetes_opciones'],"\n"); }
							else { $paquetes_seleccion = 'Ninguno'; }
							if (isset($_POST['rutas_opciones']) && $_POST['rutas_opciones'] != '') { $rutas_seleccion = agregarSeparador ($_POST['rutas_opciones'], "\n"); }
							else { $rutas_seleccion = 'Ninguno'; }
							if (isset($_POST['hospedaje_opciones']) && $_POST['hospedaje_opciones'] != '') { $hospedaje_seleccion = agregarSeparador ($_POST['hospedaje_opciones'], "\n"); }
							else { $hospedaje_seleccion = 'Ninguno'; }
							if (isset($_POST['recorridos_opciones']) && $_POST['recorridos_opciones'] != '') { $recorridos_seleccion = agregarSeparador ($_POST['recorridos_opciones'], "\n"); }
							else { $recorridos_seleccion = 'Ninguno'; }
							if (isset($_POST['pais']) && $_POST['pais'] != '') { $pais_txt = $_POST['pais']; }
							else { $pais_txt = ''; }
							if (isset($_POST['ocupacion']) && $_POST['ocupacion'] != '') { $ocupacion_txt = $_POST['ocupacion']; }
							else { $ocupacion_txt = ''; }
							if (isset($_POST['comentarios']) && $_POST['comentarios'] != '') { $comentarios_txt = $_POST['comentarios']; }
							else { $comentarios_txt = ''; }

							/*$email = 'informes@descubrecuetzalan.com';*/
							$email = 'informes@descubrecuetzalan.com' . ',';
							$email .= 'descubrecuetzalan@hotmail.com' . ',';
							$email .= 'lorena@descubrecuetzalan.com';
							/*$email = 'multimedia2@vmasideas.com' .',';
							$email .= 'multimedia@vmasideas.com';*/

							$emailadd = $_POST["email"];
							$subject = "Cotizacion enviada desde el sitio Descubre Cuetzalan";
							$message = "PAQUETE SELECCIONADO: \n";
							$message .= "$paquetes_seleccion \n\n";
							$message .= "RUTA SELECCIONADA: \n";
							$message .= "$rutas_seleccion \n\n";
							$message .= "HOTEL SELECCIONADO: \n";
							$message .= "$hospedaje_seleccion \n\n";
							$message .= "RECORRIDO SELECCIONADO: \n";
							$message .= "$recorridos_seleccion \n\n";
							$message .= 'NOMBRE: ' . $_POST['nombre'] . "\n";
							$message .= 'CIUDAD: ' . $_POST['ciudad'] . "\n";
							$message .= 'ESTADO: ' . $_POST['estado'] . "\n";
							$message .= 'PAIS: ' . $pais_txt . "\n";
							$message .= 'NUMERO DE PERSONAS: ' . $_POST['personas'] . "\n";
							$message .= 'TELEFONO: ' . $_POST['tel'] . "\n";
							$message .= 'OCUPACION: ' . $ocupacion_txt . "\n";
							$message .= 'EMAIL: ' . $_POST['email'] . "\n";
							$message .= 'FECHA DE LLEGADA: ' . $_POST['llegada'] . "\n";
							$message .= 'FECHA DE SALIDA: ' . $_POST['salida'] . "\n";
							$message .= 'COMENTARIOS: ' . $comentarios_txt ;
							$header = "From: $emailadd\r\n";
							$header .= "Content-Type: text/plain; charset = \"UTF-8\";\n";
							$header .= "Content-Transfer-Encoding: 8bit\n";
							$header .= "\n";
							/*$header .= 'BCC: multimedia@vmasideas.com' . "\r\n";*/

							if (mail($email, $subject, $message, $header)){
								echo '<script>function redireccionar() { document.location.href="' . $_SERVER['PHP_SELF'] . '" };';
								echo 'alert ("La información ha sido enviada, nos comunicaremos con usted en breve, gracias");';
								echo 'setTimeout ("redireccionar()", 100);</script>';
							}
							else {
								echo '<script>function redireccionar() { document.location.href="' . $_SERVER['PHP_SELF'] . '" };';
								echo 'alert ("El mensaje no pudo enviarse, intente de nuevo");';
								echo 'setTimeout ("redireccionar()", 100);</script>';
								return false;
							}
						}
						else { ?>
							<form name="descubre_form" id="descubre_form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" class="contact_form">
								<div class="form_title">Te ofrecemos paquetes, recorridos, rutas y opciones de hospedaje, elije la(s) opcion(es) que desees en tu próxima visita a Cuetzalan y prepárate a vivir una mágica experiencia. <br> Al terminar de seleccionar tus opciones no olvides llenar la forma con tus datos completos.</div>
								<div class="form_tabs" id="form_tabs">
									<ul>
										<li><a href="#form_tabs-1">Paquetes</a></li>
										<li><a href="#form_tabs-2">Rutas</a></li>
										<li><a href="#form_tabs-3">Hospedaje</a></li>
										<li><a href="#form_tabs-4">Recorrido</a></li>
									</ul>
									<div id="form_tabs-1">
										<fieldset>
											<legend class="titulo_seccion">Opciones de Paquetes</legend>
											<div class="form_column">
												<input type="checkbox" name="paquetes_opciones[]" value="Aventúrate por Cuetzalan" id="paquetes_opcion_1">
												<label for="paquetes_opcion_1">Aventúrate por Cuetzalan</label><br>
												<input type="checkbox" name="paquetes_opciones[]" value="Cuetzalan al Máximo" id="paquetes_opcion_2">
												<label for="paquetes_opcion_2">Cuetzalan al Máximo</label><br>
												<input type="checkbox" name="paquetes_opciones[]" value="Disfruta de Cuetzalan" id="paquetes_opcion_3">
												<label for="paquetes_opcion_3">Disfruta de Cuetzalan</label><br>
												<input type="checkbox" name="paquetes_opciones[]" value="Cultura y Naturaleza" id="paquetes_opcion_4">
												<label for="paquetes_opcion_4">Cultura y Naturaleza</label>
											</div>
											<div class="form_column">
												<input type="checkbox" name="paquetes_opciones[]" value="Entre Cascadas y Helechos" id="paquetes_opcion_5">
												<label for="paquetes_opcion_5">Entre Cascadas y Helechos</label><br>
												<input type="checkbox" name="paquetes_opciones[]" value="Lluvia de Cascadas" id="paquetes_opcion_6">
												<label for="paquetes_opcion_6">Lluvia de Cascadas</label><br>
												<input type="checkbox" name="paquetes_opciones[]" value="Mágica Experiencia" id="paquetes_opcion_7">
												<label for="paquetes_opcion_7">Mágica Experiencia</label>
											</div>
										</fieldset>
										<label for="paquetes_opciones[]" class="invalid">Por favor selecciona alguna opción.</label>
									</div>
									<div id="form_tabs-2">
										<fieldset>
											<legend class="titulo_seccion">Opciones de Rutas</legend>
											<input type="checkbox" name="rutas_opciones[]" value="Cuetzalan - Jonotla 1" id="rutas_opcion_1">
											<label for="rutas_opcion_1">Cuetzalan - Jonotla 1</label><br>
											<input type="checkbox" name="rutas_opciones[]" value="Cuetzalan - Jonotla - Zapotitlán 1" id="rutas_opcion_2">
											<label for="rutas_opcion_2">Cuetzalan - Jonotla - Zapotitlán 1</label><br>
											<input type="checkbox" name="rutas_opciones[]" value="Cuetzalan - Jonotla 2" id="rutas_opcion_3">
											<label for="rutas_opcion_3">Cuetzalan - Jonotla 2</label><br>
											<input type="checkbox" name="rutas_opciones[]" value="Cuetzalan - Jonotla - Zapotitlán 2" id="rutas_opcion_4">
											<label for="rutas_opcion_4">Cuetzalan - Jonotla - Zapotitlán 2</label>
										</fieldset>
										<label for="rutas_opciones[]" class="invalid">Por favor selecciona alguna opción.</label>
									</div>
									<div id="form_tabs-3">
										<fieldset>
											<legend class="titulo_seccion">Opciones de Hospedaje</legend>
											<div class="form_column">
												<input type="checkbox" name="hospedaje_opciones[]" value="Hotel Mesón Yohualichan" id="hospedaje_opcion_1">
												<label for="hospedaje_opcion_1">Hotel Mesón Yohualichan</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Hotel Posada Molina" id="hospedaje_opcion_2">
												<label for="hospedaje_opcion_2">Hotel Posada Molina</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Hotel Mixti" id="hospedaje_opcion_3">
												<label for="hospedaje_opcion_3">Hotel Mixti</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Hotel Tazelotzin" id="hospedaje_opcion_4">
												<label for="hospedaje_opcion_4">Hotel Tazelotzin</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Hotel Tosepan Kali" id="hospedaje_opcion_5">
												<label for="hospedaje_opcion_5">Hotel Tosepan Kali</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Hotel Posada Cuetzalan" id="hospedaje_opcion_6">
												<label for="hospedaje_opcion_6">Hotel Posada Cuetzalan</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Hotel El Encuentro" id="hospedaje_opcion_7">
												<label for="hospedaje_opcion_7">Hotel El Encuentro</label>
											</div>
											<div class="form_column">
												<input type="checkbox" name="hospedaje_opciones[]" value="Hotel Posada la Plazuela" id="hospedaje_opcion_8">
												<label for="hospedaje_opcion_8">Hotel Posada la Plazuela</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Cabañas Tosepan Kali" id="hospedaje_opcion_9">
												<label for="hospedaje_opcion_9">Cabañas Tosepan Kali</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Cabañas Reserva Azul" id="hospedaje_opcion_10">
												<label for="hospedaje_opcion_10">Cabañas Reserva Azul</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Cabañas Los Cedros" id="hospedaje_opcion_11">
												<label for="hospedaje_opcion_11">Cabañas Los Cedros</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Cabañas Ecoturismo Quinta Real" id="hospedaje_opcion_12">
												<label for="hospedaje_opcion_12">Cabañas Ecoturismo Quinta Real</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Cabañas Villas Tenextepec" id="hospedaje_opcion_13">
												<label for="hospedaje_opcion_13">Cabañas Villas Tenextepec</label><br>
												<input type="checkbox" name="hospedaje_opciones[]" value="Palafitos Reserva Azul" id="hospedaje_opcion_14">
												<label for="hospedaje_opcion_14">Palafitos Reserva Azul</label>
											</div>
										</fieldset>
										<label for="hospedaje_opciones[]" class="invalid">Por favor selecciona alguna opción.</label>
									</div>
									<div id="form_tabs-4">
										<fieldset>
											<legend class="titulo_seccion">Opciones de Recorridos</legend>
											<div class="form_column">
												<input type="checkbox" name="recorridos_opciones[]" value="Cabalgata a cascada Corazón del Bosque" id="recorridos_opcion_1">
												<label for="recorridos_opcion_1">Cabalgata a cascada Corazón del Bosque</label><br>
												<input type="checkbox" name="recorridos_opciones[]" value="Gruta Atepohuili" id="recorridos_opcion_2">
												<label for="recorridos_opcion_2">Gruta Atepohuili</label><br>
												<input type="checkbox" name="recorridos_opciones[]" value="Gruta Chichicazapan" id="recorridos_opcion_3">
												<label for="recorridos_opcion_3">Gruta Chichicazapan</label><br>
												<input type="checkbox" name="recorridos_opciones[]" value="Rapel en cascada el Salto" id="recorridos_opcion_4">
												<label for="recorridos_opcion_4">Rapel en cascada el Salto</label><br>
												<input type="checkbox" name="recorridos_opciones[]" value="Rapel en cascada las Golondrinas" id="recorridos_opcion_5">
												<label for="recorridos_opcion_5">Rapel en cascada las Golondrinas</label><br>
												<input type="checkbox" name="recorridos_opciones[]" value="Rapel en Cañón" id="recorridos_opcion_6">
												<label for="recorridos_opcion_6">Rapel en Cañón</label>
											</div>
											<div class="form_column">
												<input type="checkbox" name="recorridos_opciones[]" value="Tirolesa" id="recorridos_opcion_7">
												<label for="recorridos_opcion_7">Tirolesa</label><br>
												<input type="checkbox" name="recorridos_opciones[]" value="Jardín Botánico" id="recorridos_opcion_8">
												<label for="recorridos_opcion_8">Jardín Botánico</label><br>
												<input type="checkbox" name="recorridos_opciones[]" value="Zona Arqueológica Yohualichan" id="recorridos_opcion_9">
												<label for="recorridos_opcion_9">Zona Arqueológica Yohualichan</label><br>
												<input type="checkbox" name="recorridos_opciones[]" value="Recorrido por Cuetzalan" id="recorridos_opcion_10">
												<label for="recorridos_opcion_10">Recorrido por Cuetzalan</label><br>
												<input type="checkbox" name="recorridos_opciones[]" value="Ruta del Café" id="recorridos_opcion_11">
												<label for="recorridos_opcion_11">Ruta del Café</label>
											</div>
										<label for="recorridos_opciones[]" class="invalid">Por favor selecciona alguna opción.</label>
										</fieldset>
									</div>
								</div>
								<fieldset class="form_campos">
									<div class="form_column">
										<label for="id_nombre">* Nombre:</label>
											<input type="text" name="nombre" id="id_nombre" required="required"><br>
											<label for="id_nombre" class="invalid">Por favor introduce tu nombre.<br></label>
										<label for="id_ciudad">* Ciudad:</label>
											<input type="text" name="ciudad" id="id_ciudad"><br>
											<label for="id_ciudad" class="invalid">Por favor introduce tu ciudad.<br></label>
										<label for="id_estado">* Estado:</label>
											<input type="text" name="estado" id="id_estado"><br>
											<label for="id_estado" class="invalid">Por favor introduce tu estado.<br></label>
										<label for="id_pais">País:</label>
											<input type="text" name="pais" id="id_pais"><br>
										<label for="id_email">* E-mail:</label>
											<input type="email" name="email" id="id_email" placeholder="ejemplo@ejemplo.com"><br>
											<label for="id_email" class="invalid">Por favor introduce tu e-mail.<br></label>
										<label for="id_personas">* No. de Personas:</label>
											<input type="number" name="personas" id="id_personas" min="1"><br>
											<label for="id_personas" class="invalid">Por favor introduce el número de personas que irán.<br></label>
										<label for="id_tel">* Lada/Tel:.</label>
											<input type="tel" name="tel" id="id_tel"><br>
											<label for="id_tel" class="invalid">Por favor introduce tu número telefónico.<br></label>
									</div>
									<div class="form_column">
										<label for="id_ocupacion">Ocupación:</label>
											<input type="text" name="ocupacion" id="id_ocupacion"><br>
										<label for="id_comentario">Comentarios:</label><br>
											<textarea rows="4" wrap="hard" name="comentarios" id="id_comentario"></textarea><br>
										<label for="id_llegada">* Fecha de llegada:</label>
											<input type="text" name="llegada" id="id_llegada"><br>
											<label for="id_llegada" class="invalid">Por favor introduce la fecha de llegada.<br></label>
										<label for="id_salida">* Fecha de salida:</label>
											<input type="text" name="salida" id="id_salida">
											<label for="id_salida" class="invalid">Por favor introduce la fecha de salida.<br></label>
									</div>
								</fieldset>
								<input type="submit" class="submit" name="submit" value="Enviar información">
								<fieldset>
									<span class="obligatorios">* Campos obligatorios</span><br>
									<p><strong>Descubre Cuetzalan</strong><br><strong>Km. 2 Carretera Cuetzalan-Zacapoaxtla junto a la gasolinería</strong><br><strong>Teléfono 01 (233) 33 1 12 34</strong></p>
									<div class="form_column">
										<p><strong>Misael Morales Baltazar</strong><br><strong><i>Relaciones publícas</i></strong><br>Tel: 01 (233) 33 1 12 34<br>Cel: 045 (233) 102 6074<br>e-mail: <strong><a href="mailto:informes@descubrecuetzalan.com" target="_blank">informes@descubrecuetzalan</a></strong><br>Messenger: <i><a href="mailto:guia_rural@hotmail.com" target="_blank">guia_rural@hotmail.com</a></i></p>
									</div>
									<div class="form_column">
										<p><strong>Lorena Guerrero Limón</strong><br><strong><i>Área de ventas</i></strong><br>Tel: 01 (233) 33 1 12 34<br>Cel: 045 (233) 759 67 14<br>e-mail: <strong><a href="mailto:lorena@descubrecuetzalan.com" target="_blank">lorena@descubrecuetzalan</a></strong><br>Messenger: <i><a href="mailto:descubrecuetzalan@hotmail.com" target="_blank">descubrecuetzalan@hotmail.com</a></i></p>
									</div>
								</fieldset>
							</form>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php include("pie_pagina.php"); ?>
		</div>
	</body>
</html>