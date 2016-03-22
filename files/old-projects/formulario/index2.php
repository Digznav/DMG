<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Destino Puebla, Bienvenidos::.</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="contBack"></div>
		<div class="container">
			<header>
				<a href="http://destinopuebla.com/" class="logo"><img src="imgs/logo.png" alt="Destino Puebla"></a>
				<span class="fecha"></span>
			</header>
			<div class="content">
				<h2>Estimado(a) director de ventas.</h2>
				<p>Ponemos a su disposición el siguiente formato digital para el envío de la información concerniente al nuevo diseño del Meeting Planner 2013 para Destino Puebla.</p>
				<p>En particular la sección de SALONES encontrarán una tabla dinámica que les permite llenar el Nombre del Salón, en las columnas pueden activar o desactivar las opciones que sean las más adecuadas para las características de sus instalaciones, en caso de que los renglones no sean suficientes pueden aumentar el número de salones (renglones) con el signo de +. De igual forma si desean eliminar un renglón lo pueden hacer dando clic en la X al final del renglón.</p>
				<p>Al final encontrarán un espacio para subir sus archivos de imagen que serán utilizadas en el espacio de su marca dentro del Meeting Planner 2013.</p>
				<p>Si tiene alguna duda por favor contáctenos en <a href="mailto:multimedia@vmasideas.com" target="_blank">multimedia@vmasideas.com</a></p>
				<?php
				if (isset($_POST['submit'])) {
					$arrayTitulos = array( "nombre" => "Nombre del Salón", "mts2" => "Mts. 2", "tipou" => "Tipo U", "auditorio" => "Auditorio", "escuela" => "Escuela", "imperial" => "Imperial", "cocktailsentados" => "Cocktail Sentados", "cocktailparados" => "Cocktail Parados", "ruso" => "Ruso", "banquetesinpista" => "Banquete sin pista", "banquetebuffet" => "Banquete Buffet", "banquete" => "Banquete", "herradura" => "Herradura", "oficina" => "Oficina", "mesaredonda" => "Mesa redonda con pista", "boda" => "Boda", "teatro" => "Teatro" );
					$email = 'multimedia2@vmasideas.com';
					/*$email = 'medios@vmasideas.com';
					$email2 = 'karyn@vmasideas.com';
					$email3 = 'multimedia@vmasideas.com';
					$email4 = 'informes@destinopuebla.com';
					$email5 = 'creativo3@vmasideas.com';*/
					$emailadd = $_POST['email'];

					$subject = "Formato de registro DP - " . $_POST['nombreHotel'];
					?>
					<div class="divAlert sendingMail"><p><strong>Enviando la información...</strong></p><p>Por favor espere un momento.</p><img src="imgs/loader.gif" alt="enviando email"></div>
					<?php
					$message = 'Nombre del hotel: ' . $_POST['nombreHotel'] . '<br>';
					$message .= 'Calle: ' . $_POST['calle'] . '<br>';
					$message .= 'Colonia: ' . $_POST['colonia'] . '<br>';
					$message .= 'Municipio: ' . $_POST['municipio'] . '<br>';
					$message .= 'Ciudad: ' . $_POST['ciudad'] . '<br>';
					$message .= 'CP: ' . $_POST['codigopostal'] . '<br>';
					$message .= 'Telefono: ' . $_POST['telefono'] . '<br>';
					$message .= 'Fax: ' . $_POST['fax'] . '<br>';
					$message .= 'Ubicacion: ' . $_POST['ubicacion'] . '<br>';
					$message .= 'Reservaciones: ' . $_POST['reservaciones'] . '<br>';
					$message .= 'email: ' . $_POST['email'] . '<br>';
					$message .= 'Pagina web: ' . $_POST['paginaweb'] . '<br>';
					$message .= 'Servicios:<ul>';
					if(isset($_POST['servicio1']) && $_POST['servicio1'] != '' ) { $message .= '<li>' . $_POST['servicio1'] . '</li>'; };
					if(isset($_POST['servicio2']) && $_POST['servicio2'] != '' ) { $message .= '<li>' . $_POST['servicio2'] . '</li>'; };
					if(isset($_POST['servicio3']) && $_POST['servicio3'] != '' ) { $message .= '<li>' . $_POST['servicio3'] . '</li>'; };
					if(isset($_POST['servicio4']) && $_POST['servicio4'] != '' ) { $message .= '<li>' . $_POST['servicio4'] . '</li>'; };
					if(isset($_POST['servicio5']) && $_POST['servicio5'] != '' ) { $message .= '<li>' . $_POST['servicio5'] . '</li>'; };
					if(isset($_POST['servicio6']) && $_POST['servicio6'] != '' ) { $message .= '<li>' . $_POST['servicio6'] . '</li>'; };
					if(isset($_POST['servicio7']) && $_POST['servicio7'] != '' ) { $message .= '<li>' . $_POST['servicio7'] . '</li>'; };
					if(isset($_POST['servicio8']) && $_POST['servicio8'] != '' ) { $message .= '<li>' . $_POST['servicio8'] . '</li>'; };
					if(isset($_POST['servicio9']) && $_POST['servicio9'] != '' ) { $message .= '<li>' . $_POST['servicio9'] . '</li>'; };
					$message .= '</ul>Datos Gerenales:<ul>';
					if(isset($_POST['datosgenerales1']) && $_POST['datosgenerales1'] != '' ) { $message .= '<li>' . $_POST['datosgenerales1'] . '</li>'; };
					if(isset($_POST['datosgenerales2']) && $_POST['datosgenerales2'] != '' ) { $message .= '<li>' . $_POST['datosgenerales2'] . '</li>'; };
					if(isset($_POST['datosgenerales3']) && $_POST['datosgenerales3'] != '' ) { $message .= '<li>' . $_POST['datosgenerales3'] . '</li>'; };
					if(isset($_POST['datosgenerales4']) && $_POST['datosgenerales4'] != '' ) { $message .= '<li>' . $_POST['datosgenerales4'] . '</li>'; };
					if(isset($_POST['datosgenerales5']) && $_POST['datosgenerales5'] != '' ) { $message .= '<li>' . $_POST['datosgenerales5'] . '</li>'; };
					if(isset($_POST['datosgenerales6']) && $_POST['datosgenerales6'] != '' ) { $message .= '<li>' . $_POST['datosgenerales6'] . '</li>'; };
					if(isset($_POST['datosgenerales7']) && $_POST['datosgenerales7'] != '' ) { $message .= '<li>' . $_POST['datosgenerales7'] . '</li>'; };
					if(isset($_POST['datosgenerales8']) && $_POST['datosgenerales8'] != '' ) { $message .= '<li>' . $_POST['datosgenerales8'] . '</li>'; };
					$message .= '</ul>';
					$message .= 'Salones: <br>';
					$message .= '<table border="1"><tr>';
					$previousNumber = 1;
					foreach ($_POST['salon'] as $key => $value) {
						$currentNumber = substr($key, -1);
						$columnName = substr($key, 0, -1);
						if($currentNumber == $previousNumber) { $message .= '<td>' . $arrayTitulos[$columnName] . '</td>'; }
					}
					$message .= '</tr><tr>';
					foreach ($_POST['salon'] as $key => $value) {
						$currentNumber = substr($key, -1);
						if($currentNumber == $previousNumber) {
							if ($value == '0') { $message .= "<td>N/A</td>"; }
							else {$message .= "<td>$value</td>";}
						}
						else {
							$message .= "</tr><tr><td>$value</td>";
							$previousNumber = $currentNumber;
						}
					}
					$message .= '</tr></table><br>';
					$message .= 'Distancias: ';
					if (isset( $_POST['distancia']['convenciones']) ) { $message.= '<li>Centro de Convenciones: '. $_POST['distancia']['convenciones'] . ' km.'; }
					if (isset( $_POST['distancia']['expo']) ) { $message.= '<li>Centro Expositor: '. $_POST['distancia']['expo'] . ' km.'; }
					if (isset( $_POST['distancia']['siglo']) ) { $message.= '<li>Complejo Cultural Siglo XXI: '. $_POST['distancia']['siglo'] . ' km.'; }
					if (isset( $_POST['distancia']['buap']) ) { $message.= '<li>Complejo Cultural BUAP: '. $_POST['distancia']['buap'] . ' km.'; }
					$rutaAbsoluta = 'http://destinopuebla.com/formulario';
					foreach ($_FILES as $key => $value) {
						$var = rand(1,10) . date('d') . rand(1,10) . $_FILES[$key]['size'] . rand(1,10);
						$allowedExts = array('jpg', 'jpeg', 'gif', 'png', 'ai');
						$ext = explode( '.', $_FILES[$key]['name'] );
						$extension = end($ext);
						if ((($_FILES[$key]['type'] == 'image/gif') || ($_FILES[$key]['type'] == 'image/jpeg') || ($_FILES[$key]['type'] == 'image/png') || ($_FILES[$key]['type'] == 'image/pjpeg')) || in_array($extension, $allowedExts)) {
							if ( $_FILES[$key]['error'] == 0 ) {
								$uploadfile = 'imgs/upload/h' . $var .'.'. $extension;
								if ( !file_exists($uploadfile) ) {
									$upload = move_uploaded_file( $_FILES[$key]['tmp_name'] , $uploadfile );
									if ($upload) {
										$message .= substr($key, 3) . ':<ul>';
										$message .= '<li>'. 'h' . $var .'.'. $extension . '</li>';
										$message .= "<li>$rutaAbsoluta/imgs/upload/h$var.$extension</li></ul>";
									}
								}
								else {
									echo '<script>alert ("¡El archivo ya existe!");</script>';
									$message .= substr($key, 3) . ':<ul>';
									$message .= '<li>'. 'h' . $var .'.'. $extension . '</li>';
									$message .= "<li>$rutaAbsoluta/imgs/upload/h$var.$extension</li>";
									$message .= '</ul>';
								}
							}
							else {
								echo '<script>function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" }; alert ("Imposible de guardar la imagen, por favor intente de nuevo"); setTimeout ("redireccionar()", 100);</script>';
								return false;
							}
						}
						else {
							echo '<script>function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" }; alert ("Archivo invalido, por favor intente de nuevo"); setTimeout ("redireccionar()", 100);</script>';
							return false;
						}
					}
					$header = "From: " . strip_tags($emailadd) . "\r\n";
					/*$header .= "BCC: ". strip_tags($email2) . ',' . strip_tags($email3) . ',' . strip_tags($email4) . ',' . strip_tags($email5) . "\r\n";*/
					$header .= "MIME-Version: 1.0\r\n";
					$header .= "Content-type: text/html; charset: utf-8\r\n";
					
					if (mail($email, $subject, $message, $header)){
						echo '<script type="text/javascript">$(".sendingMail").hide(); function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" };';
						echo 'setTimeout ("redireccionar()", 5000);</script>'; ?>
						<div class="divAlert successMail"><p><strong>La información ha sido enviada con éxito a <?php echo $mail; ?>.</strong></p><p>Gracias.</p><span>%</span></div>
					<?php }
					else {
						echo '<script type="text/javascript">$(".sendingMail").hide(); function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" };';
						echo 'setTimeout ("redireccionar()", 5000);</script>'; ?>
						<div class="divAlert errorMail"><p><strong>La información no se ha podido enviar correctamente.</strong></p><p>Por favor intente de nuevo.</p><span>X</span></div>
						<?php return false;
					}
				}
				else { ?>
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="destinoForm" id="destinoForm" class="destinoForm" enctype="multipart/form-data">
						<fieldset class="direccion">
							<legend>Dirección</legend>
							<label for="nombreHotel">Nombre del Hotel:</label> <input type="text" name="nombreHotel" id="nombreHotel"><br>
							<label for="calle">Calle:</label> <input type="text" name="calle" id="calle"><br>
							<label for="colonia">Colonia:</label> <input type="text" name="colonia" id="colonia"><br>
							<label for="municipio">Municipio:</label> <input type="text" name="municipio" id="municipio"><br>
							<label for="ciudad">Ciudad:</label> <input type="text" name="ciudad" id="ciudad"><br>
							<label for="codigopostal">C.P.:</label> <input type="number" name="codigopostal" id="codigopostal"><br>
							<label for="telefono">Tel: <em>52(222)</em></label> <input type="tel" name="telefono" id="telefono"><br>
							<label for="fax">Fax: <em>52(222)</em></label> <input type="tel" name="fax" id="fax"><br>
						</fieldset>
						<fieldset class="seccionUbicacion">
							<legend>Ubicación</legend>
							<p>Breve descripción del hotel y/o recinto resaltando las ventajas por ubicación a lugares de interés en Puebla y/o características específicas.</p>
							<textarea rows="6" name="ubicacion"></textarea>
						</fieldset>
						<fieldset class="seccionReservaciones">
							<legend>Reservaciones</legend>
							<div class="divColumna">
								<textarea rows="4" name="reservaciones"></textarea><br>
								<label>e-mail:</label> <input type="text" name="email" placeholder="ejemplo@ejemplo.com"><br>
								<label>Página web:</label> <input type="text" name="paginaweb" placeholder="http://www.ejemplo.com"><br>
							</div>
							<div class="divColumna divEjemplo">
								<span>Ejemplo:</span><br><br>
								<p><strong>Reservaciones:</strong><br>Puebla: 01 (222) 211 70 00<br>En la Ciudad de México: (55) 52 49 80 80<br>Lada sin costo: 01800 248 93 97</p>
							</div>
						</fieldset>
						<fieldset class="seccionServicios">
							<legend>Servicios</legend>
							<div class="divColumna inputGrandes">
								<input type="text" name="servicio1"><br>
								<input type="text" name="servicio2"><br>
								<input type="text" name="servicio3"><br>
								<input type="text" name="servicio4"><br>
								<input type="text" name="servicio5"><br>
							</div>
							<div class="divColumna inputGrandes">
								<input type="text" name="servicio6"><br>
								<input type="text" name="servicio7"><br>
								<input type="text" name="servicio8"><br>
								<input type="text" name="servicio9"><br>
							</div>
						</fieldset>
						<fieldset class="seccionDatosGen">
							<legend>Datos Generales</legend>
							<div class="divColumna inputGrandes">
								<input type="text" name="datosgenerales1"><br>
								<input type="text" name="datosgenerales2"><br>
								<input type="text" name="datosgenerales3"><br>
								<input type="text" name="datosgenerales4"><br>
							</div>
							<div class="divColumna inputGrandes">
								<input type="text" name="datosgenerales5"><br>
								<input type="text" name="datosgenerales6"><br>
								<input type="text" name="datosgenerales7"><br>
								<input type="text" name="datosgenerales8"><br>
							</div>
						</fieldset>
						<fieldset class="seccionSalones">
							<legend>Salones</legend>
							<p>Seleccione las columnas necesarias y agregue las filas que requiera. En caso de que algún campo <strong><em>no aplique (N/A)</em></strong> solamente dejelo en cero.</p>
							<div class="salones" id="salones">
								<table class="salonList">
									<thead><tr><th></th></tr></thead>
									<tbody>
									</tbody>
									<tfoot>
										<tr><td><span id="addSalon" class="dBoton addSalon">+</span></td></tr>
									</tfoot>
								</table>
							</div>
						</fieldset>
						<fieldset class="seccionDistancias labelGrandes">
							<legend>Distancias</legend>
							<p>En caso de que algún campo <strong><em>no aplique (N/A)</em></strong> solamente dejelo en cero.</p>
							<label for="distancia1">Centro de Convenciones</label> <input type="number" name="distancia[convenciones]" value="0" id="distancia1"> km.<br>
							<label for="distancia2">Centro Expositor</label> <input type="number" name="distancia[expo]" value="0" id="distancia2"> km.<br>
							<label for="distancia3">Complejo Cultural Siglo XXI</label> <input type="number" name="distancia[siglo]" value="0" id="distancia3"> km.<br>
							<label for="distancia4">Complejo Cultural BUAP</label> <input type="number" name="distancia[buap]" value="0" id="distancia4"> km.<br>
						</fieldset>
						<fieldset class="seccionFotos">
							<legend>Archivos de Imagen</legend>
							<p>Logotipo en alta resolución (imagen en 300 dpi o archivo de illustrator con logo en vectores)</p>
								<input type="file" name="picLogo" id="picLogo"><br><br>
							<p>Fotografía de fachada en alta resolución (imagen en 300 dpi)</p>
							<input type="file" accept="image/*" name="picFachada" id="picFachada"><br><br>
							<div class="fotosHotel">
								<p>Fotografías del hotel o recito en alta resolución (imagen en 300 dpi).<br><strong>Seleccione como mínimo tres imágenes.</strong></p>
								<!-- <p><input type="file" accept="image/*" name="picFoto[]" id="picFoto" multiple></p> -->
							</div>
							<span id="addFoto" class="dBoton addFoto">+</span>
						</fieldset>
						<input type="submit" name="submit" value="Enviar información" class="submit">
						<div id="messageBox" class="messageBox"><ul></ul></div>
					</form>
				<?php } ?>
			</div>
		</div>
		<script src="js/query.js"></script>
		<script src="js/validation.js"></script>
	</body>
</html>
