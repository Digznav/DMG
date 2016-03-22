<?php include '../libs/conexion.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2014::.</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/logos/favicon.ico">		
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script src="../js/jquery.validate.min.js"></script> 
		<script src="../js/jquery.placeholder.min.js"></script>
		<script src="../js/jquery.pikachoose.min.js"></script>
		<script src="../js/jquery-ui-1.10.0.min.js"></script>
		<script src="../js/query.min.js"></script>
		<script src="js/es.validation.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript">
			$(document).ready(function() {
				$("#accordion").accordion({ heightStyle: "content" });
			});
			$(function() {
				$('input, textarea').placeholder();
				if ($.fn.placeholder.input && $.fn.placeholder.textarea) { console.log('Placeholder: input and textarea.'); }
				else if ($.fn.placeholder.input) { console.log('Placeholder: input yes, textarea no.'); }
			});
		</script>
		<style type="text/css">
			.block { display:block; }
			form.entry_form label.invalid { display:none; }
		</style>
	</head>
	<body>
		<div class="shadow"></div>
		<div class="bg-aside"></div>
		<div class="content">
			<?php require("libs/encabezadoUNC.php"); ?>
			<aside>
				<div class="lang"><a href="#">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="../entry.php">English</a></div>
				<?php require("libs/patrocinadores.php"); ?>
			</aside>
			<?php
			require("libs/navegacionPrincipal.php");
			$firstCarrItem = 9;
			require("libs/carrucel.php");
			?>
			<div class="cont">
				<span class="title_section">Formulario de registro</span>
				<section class="cont_sections"><img src="../imgs/teams.jpg" alt="side"></section>
				<section class="cont_sections cont_text">
					<?php
					if (isset($_POST['submit'])) { ?>
						<div class="sendingMail"><p><strong>Guardando...</strong><br>Por favor espere un momento.</p><img src="imgs/loader2.gif" alt="enviando email"></div>
						<?php
						$fechaNacimiento = $_POST['eDayBirthday'] . "/" . $_POST['eMonthBirthday'] . "/" . $_POST['eYearBirthday'];
						$fecha = date("j/n/Y");
						/*if (isset($_POST['eDate']) && $_POST['eDate'] != "" ){ $fecha = $_POST['eDate']; } else { $fecha = date("j/n/Y"); }*/

						if (isset($_POST['eGuest'])){ $invitado = $_POST['eGuest']; }
						else { $invitado = 0; }
						if (isset($_POST['eMember'])){ $GHINmember = $_POST['eMember']; }
						else { $GHINmember = '0'; }
						if (isset($_POST['ePackage'])){ $package = $_POST['ePackage']; }
						else { $package = 'ninguno'; }
						if (isset($_POST['ePackage_companions'])){ $acompaniantes = $_POST['ePackage_companions']; }
						else { $acompaniantes = 'ninguno'; }
						//upload photo
						if ($_FILES['ePhoto']['name'] != "" ){
							$var = rand(1,10) . date('d') . rand(1,10) . date('m') . rand(1,10) . $_FILES['ePhoto']['size'] . date('yis');
							$allowedExts = array('jpg', 'jpeg', 'gif', 'png');
							$ext = explode( '.', $_FILES['ePhoto']['name'] );
							$extension = end($ext);
							//Image validation
							if ((($_FILES['ePhoto']['type'] == 'image/gif') || ($_FILES['ePhoto']['type'] == 'image/jpeg') || ($_FILES['ePhoto']['type'] == 'image/png') || ($_FILES['ePhoto']['type'] == 'image/pjpeg')) && in_array($extension, $allowedExts)) {
								if ( $_FILES['ePhoto']['error'] == 0 ) {
									$uploadfile = '../imgs/players/p' . $var .'.'. $extension;
									if ( !file_exists($uploadfile) ) {
										$upload = move_uploaded_file( $_FILES['ePhoto']['tmp_name'] , $uploadfile );
										if ($upload) {
											$photo_name = 'p' . $var .'.'. $extension;
											$photo_url = '/imgs/players/p' . $var .'.'. $extension;
											$photo_name_crop = 'p' . $var . '-crop.' . $extension;
											$photo_url_crop = '/imgs/players/p' . $var . '-crop.' . $extension;
										}
									}
									else {
										echo '<script>alert ("El archivo ya existe");</script>';
										$photo_name = 'p' . $var .'.'. $extension;
										$photo_url= '/imgs/players/p' . $var .'.'. $extension;
										$photo_name_crop = 'p' . $var . '-crop.' . $extension;
										$photo_url_crop = '/imgs/players/p' . $var . '-crop.' . $extension;
									}
								}
								else {
									echo '<script>function redireccionar() { document.location.href="entry.php" }; alert ("Imposible subir la imagen, intente de nuevo"); setTimeout ("redireccionar()", 100);</script>';
									return false;
								}
							}
							else {
								echo '<script>function redireccionar() { document.location.href="entry.php" }; alert ("Archivo invalido, intente de nuevo"); setTimeout ("redireccionar()", 100);</script>';
								return false;
							}
						}
						else {
							$photo_name = 'profile-dommy.png';
							$photo_url= '/imgs/players/profile-dommy.png';
							$photo_name_crop = 'profile-dommy-crop.png';
							$photo_url_crop= '/imgs/players/profile-dommy-crop.png';
						}
						//Save data in database
						$escritura = "INSERT INTO members (NAME,AGE,BIRTHDAY,CLUBNAME,CATEGORY,TIME_PLAY,ACHIV,REG_ASSOCIATION,HANDICAP,NUMBER,SHIRT_SIZE,EMAIL,PHONE,DATE,GUEST,PHOTO_URL,CROP_URL,PACKAGE,PACKAGE_COMP)";
						$escritura .= " VALUES( '" . $_POST['eName'] . "','" . $_POST['eAge'] . "','" . $fechaNacimiento  . "','" . $_POST['eClubName'] . "','" . $_POST['eCategory'] . "','" . $_POST['eYears'] . "','" . $_POST['eAchiv'] . "','" . $_POST['eRegAssociation'] . "','" . $_POST['eHandicap'] . "','" . $_POST['eMember'] . "','" . $_POST['eShirt'] . "','" . $_POST['eEmail'] . "','" . $_POST['ePhone'] . "','" . $fecha . "','" . $invitado . "','" . $photo_name . "','" . $photo_name_crop . "','" . $package . "','" . $acompaniantes . "')";
						/*$escritura .= " VALUES( '" . $_POST['eName'] . "','" . $_POST['eAge'] . "','" . $_POST['eClubName'] . "','" . $_POST['eCategory'] . "','" . $_POST['eYears'] . "','" . $_POST['eAchiv'] . "','" . $_POST['eRegAssociation'] . "','" . $_POST['eHandicap'] . "','" . $GHINmember . "','" . $_POST['eShirt'] . "','" . $_POST['eEmail'] . "','" . $_POST['ePhone'] . "','" . $fecha . "','" . $invitado . "','" . $photo_name . "','" . $photo_name_crop . "','" . $package . "','" . $acompaniantes . "')";*/
						$result = mysql_query($escritura);
						if (!$result) {
							die('Invalid query:' . mysql_error());
						}
						else {
							//Send email
							$email = 'golf2pp@mayanpalace.com.mx';
							$email2 = 'multimedia2@vmasideas.com';
							$email3 = 'multimedia@vmasideas.com';
							/*$email = 'multimedia2@vmasideas.com';
							$email2 = 'digznav@hotmail.com';
							$email3 = 'multimedia@vmasideas.com';*/
							$emailadd = $_POST['eEmail'];
							/*$email = 'multimedia2@vmasideas.com';*/
							$subject = "Uniting Nations CUP - Inscripción";
							$message = '<b>Nombre:</b> ' . $_POST['eName'] . '<br>';
							$message.= '<b>Edad:</b> ' . $_POST['eAge'] . '<br>';
							$message.= '<b>Cumpleaños:</b> ' . $fechaNacimiento . '<br>';
							$message.= '<b>Nombre del Club:</b> ' . $_POST['eClubName'] . '<br>';
							$message.= '<b>País:</b> ' . $_POST['eCategory'] . '<br>';
							$message.= '<b>Años jugando Golf:</b> ' . $_POST['eYears'] . '<br>';
							$message.= '<b>Logros en el golf:</b> ' . $_POST['eAchiv'] . '<br>';
							$message.= '<b>Número de afiliación de FMG:</b> ' . $_POST['eRegAssociation'] . '<br>';
							$message.= '<b>USGA Handicap index:</b> ' . $_POST['eHandicap'] . '<br>';
							$message.= '<b>Miembro / GHIN #:</b> ' . $GHINmember . '<br>';
							$message.= '<b>Talla de camisa:</b> ' . $_POST['eShirt'] . '<br>';
							$message.= '<b>Correo:</b> ' . $_POST['eEmail'] . '<br>';
							$message.= '<b>Número telefónico:</b> ' . $_POST['ePhone'] . '<br>';
							$message.= '<b>Fecha:</b> ' . $fecha . '<br>';
							$message.= '<b>Invitados:</b> ' . $invitado . '<br>';
							$message.= '<b>Foto:</b><br><img src="http://www.unitingnationscup.com/' . $photo_url . '"><br>';
							/*$message.= '<b>Foto crop:</b> ' . $photo_url_crop . '<br>';*/
							$message.= '<b>Paquete:</b> ' . $package . '<br>';
							$message.= '<b>Paquete de acompañante:</b> ' . $acompaniantes . '<br>';
							
							$header = "From: " . strip_tags($emailadd) . "\r\n";
							/*$header .= "BCC: ". strip_tags($email2) . "\r\n";*/
							$header .= "BCC: ". strip_tags($email2) . ',' . strip_tags($email3) . "\r\n";
							$header .= "MIME-Version: 1.0\r\n";
							$header .= "Content-type: text/html; charset: utf-8\r\n";
							if (mail($email, $subject, $message, $header)){
								echo '<script type="text/javascript">$(".sendingMail").hide(); function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" };';
								echo 'setTimeout ("redireccionar()", 3000);</script>'; ?>
								<div class="successMail"><p><strong>Éxito</strong><br>Información enviada correctamente.</p><span>%</span></div>
							<?php } else {
								echo '<script type="text/javascript">$(".sendingMail").hide(); function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" };';
								echo 'setTimeout ("redireccionar()", 3000);</script>'; ?>
								<div class="errorMail"><p><strong>Error</strong><br>Por favor intente de nuevo.</p><span>X</span></div>
								<?php return false;
							}
						}
					}
					else {?>
					<form name="uniting_form" id="uniting_form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" class="entry_form">
						<div class="styleMe"><input type="text" name="eName" id="eName" placeholder="Nombre"></div>
						<div class="styleMe"><input type="number" name="eAge" id="eAge" placeholder="Edad"></div>
						<div class="styleMe">
							<?php date_default_timezone_set('UTC'); ?>
							<label>Cumpleaños:</label><br>
							<select class="eBirthday birthDay" name="eDayBirthday" id="eDayBirthday">
								<option value="">Día</option>
								<?php for ($i=1; $i<=31; $i++) { ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?>&nbsp;&nbsp;</option>
								<?php } ?>
							</select><select class="eBirthday birthMonth" name="eMonthBirthday" id="eMonthBirthday">
								<option value="">Mes</option>
								<?php $meses = array (1=>'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
								for ($i=1; $i<=12; $i++) { ?>
								<option value="<?php echo $i; ?>"><?php echo $meses[$i]; ?>&nbsp;&nbsp;</option>
								<?php } ?>
							</select><select class="eBirthday birthYear" name="eYearBirthday" id="eYearBirthday">
								<option value="">Año</option>
								<?php  for ($i = 1900; $i <= date('Y'); $i++) { ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?>&nbsp;&nbsp;</option>
								<?php } ?>
							</select>
						</div>
						<div class="styleMe"><input type="text" name="eClubName" id="eClubName" placeholder="Nombre del Club"></div>
						<div class="styleMe">
							<select name="eCategory" id="eCategory">
								<option value="">País</option>
								<option value="USA">United States of America</option>
								<option value="MEX" selected>México</option>
							</select>
						</div>
						<div class="styleMe"><input type="number" name="eYears" id="eYears" placeholder="Años jugnado Golf"></div>
						<div class="styleMe"><textarea name="eAchiv" rows="7" placeholder="Logros en el golf"></textarea></div>
						<div class="styleMe"><input type="text" name="eRegAssociation" id="eRegAssociation" placeholder="Número de afiliación de FMG:"></div>
						<div class="styleMe"><input type="number" name="eHandicap" id="eHandicap" placeholder="USGA Handicap index"></div>
						<!-- <div class="styleMe"><input type="text" name="eMember" id="eMember" placeholder="Miembro / GHIN #"></div> -->
						<div class="styleMe">
							<select name="eShirt" id="eShirt">
								<option value="">Talla de camisa</option>
								<option value="S">Chico</option>
								<option value="M">Mediano</option>
								<option value="L">Grande</option>
								<option value="XL">Extra Grande</option>
								<option value="XXL">Extra-Extra Grande</option>
							</select>
						</div>
						<div class="styleMe"><input type="email" name="eEmail" id="eEmail" placeholder="Correo: ejemplo@dominio.com"></div>
						<div class="styleMe"><input type="number" name="ePhone" id="ePhone" placeholder="Número telefónico"></div>
						<div class="styleMe"><label>Fecha: <?php echo date("j/n/Y"); ?></label></div>
						<!-- <div class="styleMe"><input type="date" name="eDate" id="eDate" placeholder="Fecha: DD/MM/YYYY" value="< ?php echo date("j/n/Y"); ?>"></div> -->
						<div class="styleMe">
							<label>¿Irán otros con usted al torneo (no jugadores)?</label>
							<label for="yes">Sí</label>
							<input type="checkbox" name="eYes" id="eYes" value="yes" class="styleMeNot">
							<input type="number" name="eGuest" id="eGuest" value="0" disabled="disabled" class="styleMeNot numGuest">
						</div>
						<div class="styleMe">
							<label for="ePhoto">Foto</label>
							<input name="ePhoto" id="ePhoto" type="file" placeholder="Photo">
							<span class="petit_letters">Si no puede enviar su foto al cargar este formulario, por favor envienosla por correo.</span>
						</div>

						<div class="styleMe">
							<label><strong>Sí estaré asistiendo al Uniting Nations Cup y requiero del siguiente paquete/s:</strong></label><br>
							<br>
							<label for="paquete1"><input type="radio" name="ePackage" value="paquete1" id="paquete1" class="styleMeNot"><strong>Paquete 1: Amateur (ocupación doble) - Master Room (2 camas dobles)</strong></label>
							<p>$629 usd por persona incluye: 3 noches, 3 desayunos, 4 comidas, 2 cenas, 1 Cóctel de Bienvenida, 4 rondas de Golf (1 ronda de práctica y 3 rondas oficiales), 1 kit de regalos y 3 uniformes oficiales del equipo México, premios en campo y rifa. IVA incluido.</p>
							<p>Noche adicional $69 usd + IVA.</p>

							<label for="paquete2"><input type="radio" name="ePackage" value="paquete2" id="paquete2" class="styleMeNot"><strong>Paquete 2: Amateur (ocupación sencilla) - Master Room</strong></label>
							<p>679 usd por persona incluye: 3 noches, 3 desayunos, 4 comidas, 2 cenas, 1 Cóctel de Bienvenida, 4 rondas de Golf (1 ronda de práctica y 3 rondas oficiales), 1 kit de regalos y 3 uniformes oficiales del equipo México, premios en campo y rifa. IVA incluido.</p>
							<p>Noche adicional $69 usd + IVA.</p>

							<label for="paquete3"><input type="radio" name="ePackage" value="paquete3" id="paquete3" class="styleMeNot"><strong>Paquete 3: Amateur (ocupación sencilla) - Suite</strong></label>
							<p>$749 usd por persona incluye: 3 noches, 3 desayunos, 4 comidas, 2 cenas, 1 Cóctel de Bienvenida, 4 rondas de Golf (1 ronda de práctica y 3 rondas oficiales), 1 kit de regalos y 3 uniformes oficiales del equipo México, premios en campo y rifa. IVA incluido.</p>
							<p>Noche adicional $69 usd + IVA.</p>
							<label for="ePackage" class="invalid">Please select one package</label>
							<p></p>
							<input type="checkbox" name="ePackage_companions" value="paquete_companion" id="paquete4" class="styleMeNot">
							<label for="paquete4"><i>Paquete 4: Paquete Acompañante en Master Room o Suite</i></label>
							<p>Paquete Spa para acompañantes (no golfistas): $313 usd por persona en Master Room o Suite, incluye: 3 noches, 3 desayunos buffets, 2 cenas buffets, invitación al Cóctel de Bienvenida; adicionalmente un masaje sueco 50 mins, facial 30 mins, manicure o pedicure, incluye IVA.</p>
						</div>
						
						<br>
						<button type="submit" name="submit" class="sec_boton">Enviar</button>
						<br><br>
						
						<span><strong>¡¡¡Premios con un valor mayor a $1,300,000 USD!!!</strong></span>
						<!-- <p><strong>Hole in One en los Par 3's durante 1a y 2a ronda oficial para Amateurs.</strong></p> -->
						<!-- <p>*1 Millón de Dólares, Grand Luxxe Membresía de Super Lujo en Mayan Palace Beach and Golf Resorts, autos y premios sorpresa.</p> -->
						<p><strong>O'Yeses* en todos los Par 3's durante 1a y 2a ronda oficial para Amateurs incluye:</strong></p>
						<p>Estancias con Golf, Pantallas de TV, Laptops, iPods, Relojes, Drivers, Putters, Sets de Fierros y Rifa.</p>
						<p>*(Mejores O'Yeses de 2 días, no acumulables, en caso de ganar más de uno, se selecciona el mejor. Premios sujetos a cambios sin previo aviso).</p> <p>*(Mejores O'Yeses de 2 días, no acumulables, en caso de ganar más de uno, se selecciona el mejor. Premios sujetos a cambios sin previo aviso).</p>
						<p><em>Torneo de Approach</em></p>
						<p>Torneo Drive de Distancia Hoyo 1</p>
<p>Cobros con tarjeta de Crédito es necesario un correo soporte donde el cliente da autorización a MAYAN PALACE a realizar cargo a su tarjeta, el cual debe indicar el Número completo de la Tarjeta y vencimiento de la misma, así como también una identificación Oficial del Titular.</p>

						<p>Depósitos deben ser a nombre de:</p>
						<p><strong>OPERADORA TURISTICA HOTELERA, S.A. DE C.V.</strong></p>
						<p><strong>Cuentas en Moneda Nacional (Pesos Mexicanos)</strong></p>
						<p><strong><u>BANCO SANTANDER</u></strong></p>
						<ul>
							<li>Número de Cuenta: 65-50308536-0 SUCURSAL 4491</li>
							<li>Cuenta Clabe: 014779655030853601</li>
						</ul> 
						<p><strong>Mandar ficha de depósito escaneada por correo electrónico con atención a:</strong></p>
						<p>Lic. Luis Antonio Torres </p>
						<ul>
							<li>Gerente de Campo de Golf</li>
							<li>Mayan Palace, Puerto Peñasco</li>
							<li>Km. 24 Carr. Peñasco- Caborca</li>
							<li>Sonora, 83550.</li>
							<li>Oficina: (638) 383-0443</li>
							<li>Celular: (638) 105-8889.</li>
						</ul>
						<p><a href="mailto:golfpuertopenasco@grupovidanta.com" class="sec_boton">golfpuertopenasco@grupovidanta.com</a></p>
						
						<!-- <p><strong>Por favor contacte a:</strong></p>
						<p>Calvin Nielsen</p>
						<ul>
							<li>Golf Course Manager</li>
							<li>Mayan Palace, Puerto Peñasco</li>
							<li>Km. 24 Carr. Peñasco- Caborca</li>
							<li>Sonora, 83550.</li>
							<li>Office: (638) 383-0443</li>
							<li>Mobile: (638) 105-8889</li>
						</ul>
						<p><a href="mailto:golfpuertopenasco@grupovidanta.com" class="sec_boton">golfpuertopenasco@grupovidanta.com</a></p>
						<p><strong>En los Estados Unidos</strong></p>
						<p>Vito Berlingeri</p>
						<ul>
							<li>Arizona Golf Association</li>
							<li>7226 N. 16th St. Ste 200</li>
							<li>Phoenix, AZ 85020</li>
							<li>Office: (602) 944-3035</li>
						</ul>
						<p><a href="mailto:vberlingeri@cox.net" class="sec_boton">vberlingeri@cox.net</a></p> -->
							
						<div id="accordion">
							<h3 class="title_accordion">Elegibilidad</h3>
							<div>
								<p>En el 2014, los jugadores de categoría A (Handicap 0-6) jugaran unos contra otros al igual que los jugadores de la categoría B (Handicap 7-12)</p>
								<p>Habrá dos Categorias determinadas por el Handicap Index. Los partidos se jugarán en bruto de la siguiente manera:</p>
								<ul>
									<li>Categoria #1: Handicap Index arriba de 6.9</li>
									<li>Categoria #2: USGA Handicap Index desde 7.0 a 12.9</li>
								</ul>
								<p>El Comité se reserva el derecho de verificar el Handicap Index de los amateurs y de rechazar cualquier persona que no cumpla con los requisitos.</p>
							</div>
							<h3 class="title_accordion">Reglas del Golf</h3>
							<div>
								<p>Juego será gobernado por las Reglas de Golf de la USGA y modificado de acuerdo a Reglas Locales y Condiciones de Competencia con un suplemento de Notificación a los jugadores. Preguntas o disputas serán atendidas por el Comité de Reglas.</p>
							</div>
							<h3 class="title_accordion">Política de Spike</h3>
							<div>
								<p>El uso de metal, o tradicionalmente designado como spikes, durante el evento está prohibido. Los jugadores que no cumplan con esta política se le pedirá que cambien de zapatos/spikes antes de comenzar el juego. El incumplimiento dará lugar a que el jugador sea retirado del evento. Esta política se aplica a los caddies también. En el caso de un que caddie se niegue a cumplir, el jugador puede ser retirado del evento.</p>
							</div>
							<h3 class="title_accordion">Dispositivos de medición de distancia</h3>
							<div>
								<p>Los jugadores están autorizados a usar dispositivos medidores de distancia únicamente. Véase el Apéndice I, las Reglas de Golf.</p>
							</div>
							<h3 class="title_accordion">Transporte</h3>
							<div>
								<ul>
									<li>Servicio de transporte cortesía estará disponible del Hotel/Campo de Golf/Hotel de 7:00 am – 7:00 pm Mayo 15-18.</li>
									<li>Servicio de transporte cortesía estará disponible del Hotel/Cena de Gala/Hotel de 6:30 pm- 9:30 pm el jueves, 16 de Mayo.</li>
								</ul>
							</div>
							<h3 class="title_accordion">Código de vestimenta</h3>
							<div>
								<p>Jugadores: Durante la estancia en las instalaciones del hotel, los jugadores deberán presentar un aspecto limpio, tanto en prendas de vestir y aseo personal. <strong>Short de Golf son permitidos.</strong><br>No se permite el uso de mezclilla, shorts ni playeras sin cuello en el campo de Golf o en el Cóctel de Bienvenida.</p>
								<p>Caddies: Pantalones de mezclilla, cortes, pantalones cortos, camisetas o camisas sin cuello no debe ser usado. Zapatos con suela de goma son obligatorios. Sandalias, zapatos abiertos, y los zapatos de golf de metal tradicional o Spikes están prohibidos. <strong>La camisa del uniforme debe ser usada solamente durante el juego.</strong></p>
							</div>
							<h3 class="title_accordion">Conduct</h3>
							<div>
								<p>Durante la estancia en las instalaciones del hotel incluyendo la ronda de práctica, los jugadores y caddies se comportarán de manera profesional. El Comité Organizacional se reserva el derecho de retirar a cualquier jugador por falta de competitividad y/o falta de buena conducta profesional por parte de un jugador o caddie.</p>
							</div>
							<h3 class="title_accordion">Cancelación</h3>
							<div>
								<p>En caso que el torneo se cancele sin que el jugador haya jugado un solo partido, todas las cuotas de inscripción serán reembolsadas. En caso de que el torneo se cancele después del inicio de juego, ninguna de las cuotas de inscripción serán reembolsadas. Si un jugador se retira del evento, las cuotas de inscripción no serán devueltas a menos que la persona o jugador sea sustituido. De acuerdo al juicio del Comité de Reglas, cuya decisión es final, si las condiciones para comenzar o continuar con el juego no son aconsejables, el juego se pospondrá hasta que el Comité de Reglas determine que las condiciones climatológicas u otras ocurrencias hayan mejorado lo suficiente para reanudar el juego. En situaciones de condiciones climáticas adversas o alguna otra ocurrencia, nuestra primera prioridad es de completar la competencia. Todo esfuerzo se realizará para lograr este objetivo para el final del día de competencia. En caso que no se pueda completar la competencia para el último día del evento, el juego se extenderá un día adicional. El Comité Organizador se reserva el derecho de cambiar el formato, sede (s) y otros criterios como se contempla actualmente.</p>
							</div>
						</div>
					</form>
					<?php } ?>
				</section>
			</div>
			<?php require("libs/pieUNC.php"); ?>
		</div>
	</body>
</html>