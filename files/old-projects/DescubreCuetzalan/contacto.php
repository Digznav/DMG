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

	$menuurl = "xml/menu/menu.xml";  
	$contenido_menuxml = "";
	if($menud = fopen($menuurl, "r")) {
		while ($menuaux= fgets($menud, 1024)) {
			$contenido_menuxml .= $menuaux;
		}
		fclose($menud);
	} else {
		echo "No se pudo abrir el XML";
	}
	$menuxml = simplexml_load_string($contenido_menuxml);

	require_once('administrador/phpdao-2.7/generated/include_dao.php');
	$recorridos = DAOFactory::getRecorridoDAO()->queryAll();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Vmasideas">
		<meta name="keywords" content="Agencia">
		<meta name="description" content="Bienvenido al mejor sitio en cuanto a la organización de viajes en la Sierra Norte de Puebla. Descubre Cuetzalan tiene la plena certeza que hará de su visita una mágica experiencia pues un equipo de profesionales en el área nos respaldan.">
		<meta name="keywords" content="Cuetzalan, Descubre Cuetzalan, hoteles en Cuetzalan, Guias en Cuetzalan, recorridos en Cuetzalan, rutas en Cuetzalan, grutas en Cuetzalan, ruinas en Cuetzalan, zona arqueológica en Cuetzalan, Yohualichan, cabalgata en Cuetzalan, campamentos en Cuetzalan">
		<meta name="keywords" content="Hospedaje en Cuetzalan, cultura en Cuetzalan, naturaleza en Cuetzalan, ecoturismo, ecoturismo en Cuetzalan, grutas, cavernas, espeleología, cascadas en Cuetzalan, rapel en Cuetzalan, rapel, rappel, rappel en Cuetzalan">
		<meta name="keywords" content="Camping en Cuetzalan, visitar Cuetzalan, visitar Jonotla, grutas en Cuetzalan, aventura en Cuetzalan, caballos en cuetzalan, renta de caballos, guia turistico en Cuetzalan ">
		<meta name="keywords" content="Mexico, Puebla, Cuetzalan">
		<meta name="keywords" content="Spanish">
		<meta name="author" content="Vmasideas, Equipo Vmasideas">
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
		<script type="text/javascript">
			$(document).ready(function (){
				$('#form_tabs').tabs();
				$('#id_llegada').datepicker({
					showOn: "button",
					buttonImage:"imgs/calendar.gif",
					buttonImageOnly:true,
					dateFormat: "dd-mm-yy"
				});
				$('#id_salida').datepicker({
					showOn: "button",
					buttonImage:"imgs/calendar.gif",
					buttonImageOnly:true,
					dateFormat: "dd-mm-yy"
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
							$email .= 'misael@descubrecuetzalan.com' . ',';
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
							$message .= 'CELULAR: ' . $_POST['cel'] . "\n";
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
							<form name="descubre_form" id="descubre_form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" class="contact_form">
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
												<?php
												$cont = 7;
												$ct = 1;
												$mid = ceil( $cont/2 );
												for ($i=1; $i <= 2; $i++) {
													$sd = "aventura".$i ?>
													<input type="checkbox" name="paquetes_opciones[]" value="<?php echo $menuxml->$sd; ?>" id="paquetes_opcion_<?php echo $ct; ?>">
													<label for="paquetes_opcion_<?php echo $ct; ?>"><?php echo $menuxml->$sd; ?></label><br>
													<?php
													$ct++;
												}
												for ($i=1; $i <= 5; $i++) {
													$sd = "naturaleza".$i ?>
													<input type="checkbox" name="paquetes_opciones[]" value="<?php echo $menuxml->$sd; ?>" id="paquetes_opcion_<?php echo $ct; ?>">
													<label for="paquetes_opcion_<?php echo $ct; ?>"><?php echo $menuxml->$sd; ?></label><br>
													<?php
													if ($mid == ($ct) ) { echo '</div><div class="form_column">'; }
													$ct++;
												}
												?>
											</div>
											
										</fieldset>
										<label for="paquetes_opciones[]" class="invalid">Por favor selecciona alguna opción.</label>
									</div>
									<div id="form_tabs-2">
										<fieldset>
											<legend class="titulo_seccion">Opciones de Rutas</legend>
											<?php
											$ct = 1;
											for ($i=1; $i <= 4; $i++) {
												$sd = "ruta".$i ?>
												<input type="checkbox" name="rutas_opciones[]" value="<?php echo $menuxml->$sd; ?>" id="rutas_opcion_<?php echo $ct; ?>">
												<label for="rutas_opcion_<?php echo $ct; ?>"><?php echo $menuxml->$sd; ?></label><br>
												<?php
												$ct++;
											} ?>
										</fieldset>
										<label for="rutas_opciones[]" class="invalid">Por favor selecciona alguna opción.</label>
									</div>
									<div id="form_tabs-3">
										<fieldset>
											<legend class="titulo_seccion">Opciones de Hospedaje</legend>
											<div class="form_column">

												<?php
												//$cont = 15;
												$ct = 1;
												$mid = 8;
												for ($i=1; $i <= 8; $i++) {
													$sd = "hotel".$i;
													if($menuxml->$sd != "") { ?>
														<input type="checkbox" name="hospedaje_opciones[]" value="<?php echo $menuxml->$sd; ?>" id="hospedaje_opcion_<?php echo $ct; ?>">
														<label for="hospedaje_opcion_<?php echo $ct; ?>"><?php echo $menuxml->$sd; ?></label><br>
														<?php if ($mid == $ct) { echo '</div><div class="form_column">'; }
														$ct++;
													}
												}

												for ($i=1; $i <= 8; $i++) {
													$sd = "cabana".$i;
													if($menuxml->$sd != "") { ?>
														<input type="checkbox" name="hospedaje_opciones[]" value="<?php echo $menuxml->$sd; ?>" id="hospedaje_opcion_<?php echo $ct; ?>">
														<label for="hospedaje_opcion_<?php echo $ct; ?>"><?php echo $menuxml->$sd; ?></label><br>
														<?php if ($mid == $ct) { echo '</div><div class="form_column">'; }
														$ct++;
													}
												}

												for ($i=1; $i <= 8; $i++) {
													$sd = "campamento".$i;
													if($menuxml->$sd != "") { ?>
														<input type="checkbox" name="hospedaje_opciones[]" value="<?php echo $menuxml->$sd; ?>" id="hospedaje_opcion_<?php echo $ct; ?>">
														<label for="hospedaje_opcion_<?php echo $ct; ?>"><?php echo $menuxml->$sd; ?></label><br>
														<?php if ($mid == ($ct) ) { echo '</div><div class="form_column">'; }
														$ct++;
													}
												} ?>
											</div>
										</fieldset>
										<label for="hospedaje_opciones[]" class="invalid">Por favor selecciona alguna opción.</label>
									</div>
									<div id="form_tabs-4">
										<fieldset>
											<legend class="titulo_seccion">Opciones de Recorridos</legend>
											<div class="form_column">
												<?php
												$cont = count( $recorridos );
												$mid = ceil( $cont/2 );
												for ( $i=0; $cont > $i ; $i++ ) {
												$reco = $recorridos[$i]; ?>
												<input type="checkbox" name="recorridos_opciones[]" value="<?php echo $reco->nombre; ?>" id="<?php echo $reco->id; ?>">
												<label for="<?php echo $reco->id; ?>"><?php echo $reco->nombre; ?></label><br>
												<?php

												if ($mid == ($ct) ) { echo '</div><div class="form_column">'; }
												$ct++;

												if ($mid == ($i+1) ) {
												echo '</div><div class="form_column">';
												}
												} ?>
											</div>
										<label for="recorridos_opciones[]" class="invalid">Por favor selecciona alguna opción.</label>
										</fieldset>
									</div>
								</div>
								<fieldset class="form_campos">
									<div class="form_column">
										<label for="id_nombre">* Nombre:</label>
											<input type="text" name="nombre" id="id_nombre" required><br>
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
                                         <label for="id_cel">Celular:.</label>
                                           <input type="cel" name="cel" id="id_cel"></label>
                                            
                                            
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
									<span class="obligatorios">* Campos obligatorios</span><br><br>
									<span class="obligatorios">Nuestro compromiso es de darle respuesta a su solicitud de informes en menos de 24 hrs. Si en ese plazo no ha recibido respuesta, le solicitamos por favor revisar en bandeja de correo no deseado (SPAM) por nuestro correo electrónico, gracias.</span><br>
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