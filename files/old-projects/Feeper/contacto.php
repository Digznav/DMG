<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Feeper::.</title>
		<link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true'></script>
		<script src="js/jquery.validate.min.js"></script>
		<script type='text/javascript' src='js/map.js'></script>
		<script src="js/validation.js"></script>
		
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<style type="text/css">
			.block { display: block; }
			form.contact_form label.invalid { display: none; }
		</style>
	</head>
	<body>
		<div class="content">
			<header><strong>Lo ideal</strong> para tu vehículo</header>
			<div class="garantia"></div>
			
			<div class="contenedor_nav">
				<div class="imagen_nav">
					<div class="logo"><a href="index.html"><img src="imgs/logo.png" alt="logo"></a></div>
					<div class="base_logo"><a href="http://www.facebook.com/pages/Feeper/119384721405748?fref=ts" target="_blank">f</a></div>
				</div>
				<nav class="button_navigation">
					<ul>
						<li><a class="but_nav" id="tienda" href="tienda.html"><strong>Tienda</strong></a></li>
						<li><a class="but_nav" id="empresa" href="empresa.html">Empresa</a></li>
						<li><a class="but_nav" id="materiales" href="materiales.html">Materiales</a></li>
						<li><a class="but_nav but_contacto" id="contacto" href="#Formulario">Contacto</a></li>
						<li><a class="but_nav" id="ayuda" href="ayuda.html">Ayuda</a></li>
					</ul>
				</nav>
				<div class="hover_button_navigation"></div>
			</div>
			
			<nav class="sub_nav">
				<ul>
					<li><a class="but_subnav" href="#Maps">Nuestras tiendas</a></li><li><a class="but_subnav" href="#Formulario">Formulario</a></li>
				</ul>
			</nav>
			<div class="general_cont">
				<div id="Maps" class="panel">
					<ul id="locations" class="locations">
						<li data-geo-lat="19.027119" data-geo-long="-98.21993">
							<h3>Puebla</h3>
							<p class="longdesc">Circuito Juan Pablo II, esquina 11 B Sur No. 4933 – C<br>Col. Prados Agua Azul<br>Puebla, Puebla. C.P. 72430<br>Tel.: [222] 240.75.33</p>
						</li>
						<li data-geo-lat="19.398683" data-geo-long="-99.155892">
							<h3>México D.F.</h3>
							<p class="longdesc">Av. Cuauhtémoc No. 551<br>Col. Narvarte C.P. 03020<br>Delegación Benito Juárez<br>Tel.: [55] 5639.7916</p>
						</li>
						<!-- <li data-geo-lat="19.304248" data-geo-long="-99.131806">
							<h3>México D.F. (COAPA)</h3>
							<p class="longdesc">Prolongación División del Norte No. 4158, local 13 entre Calzada del Hueso y Acoxpa<br>Col. Floresta Coyoacán. Delegación Tlalpan. C.P. 14310<br>Tel.: [55] 5677.6480</p>
						</li> -->
						<li data-geo-lat="20.650633" data-geo-long="-103.423109">
							<h3>Guadalajara</h3>
							<p class="longdesc">Av. Patria No. 1570-A<br>Col. Mirador del Sol C.P. 45054<br>Zapopan, Jalisco.<br>Tel.: [33] 363.283.14</p>
						</li>
						<li data-geo-lat="25.642513" data-geo-long="-100.27859">
							<h3>Monterrey</h3>
							<p class="longdesc">Av. Alfonso Reyes 279-C, Col. Contry. Monterrey. NL. Av.<br>Entre Av. Revolución y Av. Garza Sada Sur.<br>Tel.: [81] 1100 1578</p>
						</li>
					</ul>
					<div id="map_canvas" class="map_canvas"></div>
					<div id="more-info" class="more-info"><p></p></div>
				</div>
				<div id="Formulario" class="panel">
					<span class="title">Formulario de contacto</span>
					<?php
						if (isset($_POST['submit'])) {
							/*print_r($_POST['paquetes_opciones'][2]);*/
							if (isset($_POST['paquetes_opciones']) && $_POST['paquetes_opciones'] != ''){ $paquetes_seleccion = agregarSeparador ($_POST['paquetes_opciones'],"\n"); }
							else { $paquetes_seleccion = 'Ninguno'; }
							
							/*$email = 'informes@descubrecuetzalan.com' . ',';
							$email .= 'descubrecuetzalan@hotmail.com';*/
							$email = 'pedidos@feeper.com';
						
							
							$emailadd = $_POST["email"];
							
							$subject = "Contacto - Feeper";
							
							$message = 'NOMBRE: ' . $_POST['nombre'] . "\n";
							$message .= 'APELLIDO(S): ' . $_POST['apellido'] . "\n";
							$message .= 'EMAIL: ' . $_POST['email'] . "\n";
							$message .= 'COMENTARIOS: ' . $_POST['comentarios'] . "\n";
							
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
							<form name="feeper_form" id="feeper_form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="contact_form">
							<!-- <form name="feeper_form" id="feeper_form" method="POST" action="contacto.php" class="contact_form"> -->
								<fieldset>
									<label for="id_nombre">* Nombre:</label>
										<input type="text" name="nombre" id="id_nombre" required><br>
										<label for="id_nombre" class="invalid">Por favor introduce tu nombre.<br></label>
									
									<label for="id_apellido">* Apellido(s):</label>
										<input type="text" name="apellido" id="id_apellido"><br>
										<label for="id_apellido" class="invalid">Por favor introduce tu(s) apellido(s).<br></label>
									
									<label for="id_email">* E-mail:</label>
										<input type="email" name="email" id="id_email" placeholder="ejemplo@ejemplo.com"><br>
										<label for="id_email" class="invalid">Por favor introduce tu e-mail.<br></label>
									
									<label for="id_comentario">Comentarios:</label><br>
										<textarea rows="4" wrap="hard" name="comentarios" id="id_comentario"></textarea><br>
										<label for="id_comentario" class="invalid">Por favor incluya su mensaje.<br></label>
								</fieldset>
								
								<p class="obligatorios">* Campos obligatorios</p>
								<input type="submit" class="submit" name="submit" value="Enviar información">
							</form>
						<?php } ?>
				</div>
			</div>

			<div class="fondo"></div>
			
			<div class="corte"><span></span></div>
			
			<footer>
				<p>Feeper fundas para auto, empresa Mexicana, proveedor de la industria automotríz de fundas para autos con los mejores materiales Du Pont, Tyvek. Feeper protegiendo los mejores autos del mundo.<br>Feeper 2009 Derechos reservados.</p>
			</footer>
		</div>
		<script src="js/query.js"></script>
	</body>
</html>