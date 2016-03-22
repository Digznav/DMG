<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2013::.</title>
		<link rel="stylesheet" type="text/css" href="../css/demo.css">
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/logos/favicon.ico">
		
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script src="../js/jquery.validate.min.js"></script> 
		<script src="../js/jquery.pikachoose.js"></script>
		<script src="../js/jquery-ui-1.10.0.js"></script>
		<script src="../js/query.js"></script>
		<script src="js/validation.js"></script>
		
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<script type="text/javascript">
			$(document).ready(function() {
				$("#accordion").accordion({ heightStyle: "content" });
			});
		</script>
		<style type="text/css">
			.block { display: block; }
			form.entry_form label.invalid { display: none; }	
		</style>
	</head>
	<body>
		<div class="shadow"></div>
		<div class="bg-aside"></div>
		<div class="content">
			<header>
				<span class="bannerText">Después de este evento, el <strong>golf</strong> ya no será igual...</span>
				<div class="social">
					<a href="https://twitter.com/" target="_blank" class="twitter">t</a>
					<a href="https://www.facebook.com/unitingnationscup" target="_blank" class="face">f</a>
				</div>
			</header>
			
			<aside>
				<div class="lang"><a href="#">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="../entry.php">English</a></div>
				
				<div class="logo"><a href="index.php"><img src="../imgs/logos/main_logo.png" alt="logo"></a></div>
				
				<div class="sponsors">
					<span>Patrocinadores</span>
					<div class="spon_left">
						<a href="http://www.cemexmexico.com" target="_blank"><img src="../imgs/logos/logo_a1.png" alt="Logo_a1"></a><br>
						<a href="http://www1.bacardi.com" target="_blank"><img src="../imgs/logos/logo_a2.png" alt="Logo_a2"></a><br>
						<a href="http://www.coca-cola.com" target="_blank"><img src="../imgs/logos/logo_a3.png" alt="Logo_a3"></a><br>
						<a href="http://www.mayanpalace.com/" target="_blank"><img src="../imgs/logos/logo_a4.png" alt="Logo_a4"></a>
						<a href="http://www.chocalanwines.com/" target="_blank"><img src="../imgs/logos/logo_a5.jpg" alt="Logo_a5"></a>
						<a href="http://www.gp.com/index.html" target="_blank"><img src="../imgs/logos/logo_a6.png" alt="Logo_a6"></a>
						<a href="http://www.legendaryholdings.com/site/" target="_blank"><img src="../imgs/logos/logo_a7.png" alt="Logo_a7"></a>
						<a href="#" target="_blank"><img src="../imgs/logos/logo_a8.jpg" alt="Logo_a8"></a>
						<a href="http://alkilaeventos.com/" target="_blank"><img src="../imgs/logos/logo_a9.png" alt="Logo_a9"></a>
						<a href="#" target="_blank"><img src="../imgs/logos/logo_a10.jpg" alt="Logo_a10"></a>
					</div>
					<div class="spon_right">
						<a href="#" target="_blank"><img src="../imgs/logos/logo_b1.png" alt="Logo_b1"></a><br>
						<a href="http://www.corona.com" target="_blank"><img src="../imgs/logos/logo_b2.png" alt="Logo_b2"></a><br>
						<a href="http://www.grupovidanta.com/" target="_blank"><img src="../imgs/logos/logo_b3.jpg" alt="Logo_b3"></a><br>
						<a href="http://www.vidantagolf.com/" target="_blank"><img src="../imgs/logos/logo_b4.jpg" alt="Logo_b4"></a>
						<a href="http://www.antigua.com/" target="_blank"><img src="../imgs/logos/logo_b5.png" alt="Logo_b5"></a>
						<a href="http://www.comnor.com.mx/" target="_blank"><img src="../imgs/logos/logo_b6.png" alt="Logo_b6"></a>
						<a href="http://www.caffenio.com/" target="_blank"><img src="../imgs/logos/logo_b7.png" alt="Logo_b7"></a>
						<a href="http://www.sanimex.com.mx/" target="_blank"><img src="../imgs/logos/logo_b8.png" alt="Logo_b8"></a>
						<a href="http://www.jacovaproducciones.com/" target="_blank"><img src="../imgs/logos/logo_b9.png" alt="Logo_b9"></a>
						<a href="http://vmasideas.com//" target="_blank"><img src="../imgs/logos/logo_b10.png" alt="Logo_b10"></a>
					</div>
				</div>
			</aside>
			
			<nav class="nav">
				<a href="index.php">Inicio</a><a href="event.html">Evento</a><a href="teams.php">Equipos</a><!-- <a href="#">Patrocinadores</a> --><a href="gallery.html">Galería</a><a href="scoring.html">Puntuaciones</a><a href="news.html">Noticias</a><a href="arrive.html">Cómo llegar</a><a href="schedule.html">Calendario</a>
			</nav>
				
			<div class="carrousel">
				<ul id="pikame">
					<li><img src="../imgs/slide9.jpg" alt="slide9"></li>
					<li><img src="../imgs/slide1.jpg" alt="slide1"></li>
					<li><img src="../imgs/slide2.jpg" alt="slide2"></li>
					<li><img src="../imgs/slide3.jpg" alt="slide3"></li>
					<li><img src="../imgs/slide4.jpg" alt="slide4"></li>
					<li><img src="../imgs/slide5.jpg" alt="slide5"></li>
					<li><img src="../imgs/slide6.jpg" alt="slide6"></li>
					<li><img src="../imgs/slide7.jpg" alt="slide7"></li>
					<li><img src="../imgs/slide8.jpg" alt="slide8"></li>
				</ul>
			</div>

			<div class="cont">
				<span class="title_section">Formulario de registro</span>
				<section class="cont_sections"><img src="../imgs/teams.jpg" alt="side"></section>
				<section class="cont_sections cont_text">
					<?php
					if (isset($_POST['submit'])) {
						if (isset($_POST['eDate']) && $_POST['eDate'] != "" ){ $fecha = $_POST['eDate']; }
						else { $fecha = date("d") .'/'. date("m") .'/'. date("Y"); }
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
											/*$photo_name_crop = 'profile-dommy-crop.png';*/
											$photo_url_crop = '/imgs/players/p' . $var . '-crop.' . $extension;
										}
									}
									else {
										echo '<script>alert ("El archivo ya existe");</script>';
										$photo_name = 'p' . $var .'.'. $extension;
										$photo_url= '/imgs/players/p' . $var .'.'. $extension;
										$photo_name_crop = 'p' . $var . '-crop.' . $extension;
										/*$photo_name_crop = 'profile-dommy-crop.png';*/
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
						$escritura = "INSERT INTO members (NAME,AGE,CLUBNAME,CATEGORY,TIME_PLAY,ACHIV,REG_ASSOCIATION,HANDICAP,NUMBER,SHIRT_SIZE,EMAIL,PHONE,DATE,GUEST,PHOTO_URL,CROP_URL,PACKAGE,PACKAGE_COMP)";
						$escritura .= " VALUES( '" . $_POST['eName'] . "','" . $_POST['eAge'] . "','" . $_POST['eClubName'] . "','" . $_POST['eCategory'] . "','" . $_POST['eYears'] . "','" . $_POST['eAchiv'] . "','" . $_POST['eRegAssociation'] . "','" . $_POST['eHandicap'] . "','" . $GHINmember . "','" . $_POST['eShirt'] . "','" . $_POST['eEmail'] . "','" . $_POST['ePhone'] . "','" . $fecha . "','" . $invitado . "','" . $photo_name . "','" . $photo_name_crop . "','" . $package . "','" . $acompaniantes . "')";
						if (!mysql_query($escritura)) {
							die('Registro no válido' . mysql_error());}
						else {
							//Send email
							/*$email = 'golf2pp@mayanpalace.com.mx' . ', ';
							$email .= 'multimedia@vmasideas.com' . ', ';
							$email .= 'multimedia2@vmasideas.com';*/
							$email = 'multimedia2@vmasideas.com';
							$subject = "Inscripción";
							$mensaje= 'Nombre: ' . $_POST['eName'] . "\n";
							$mensaje.= 'Edad: ' . $_POST['eAge'] . "\n";
							$mensaje.= 'Nombre del Club: ' . $_POST['eClubName'] . "\n";
							$mensaje.= 'País: ' . $_POST['eCategory'] . "\n";
							$mensaje.= 'Años jugando Golf: ' . $_POST['eYears'] . "\n";
							$mensaje.= 'Logros en el golf: ' . $_POST['eAchiv'] . "\n";
							$mensaje.= 'Número de afiliación de FMG: ' . $_POST['eRegAssociation'] . "\n";
							$mensaje.= 'USGA Handicap index: ' . $_POST['eHandicap'] . "\n";
							$mensaje.= 'Miembro / GHIN #: ' . $GHINmember . "\n";
							$mensaje.= 'Talla de camisa: ' . $_POST['eShirt'] . "\n";
							$mensaje.= 'Correo: ' . $_POST['eEmail'] . "\n";
							$mensaje.= 'Número telefónico: ' . $_POST['ePhone'] . "\n";
							$mensaje.= 'Fecha: ' . $fecha . "\n";
							$mensaje.= 'Invitados: ' . $invitado . "\n";
							$mensaje.= 'Foto: ' . $photo_url . "\n";
							/*$mensaje.= 'Foto crop: ' . $photo_url_crop . "\n";*/
							$mensaje.= 'Paquete: ' . $package . "\n";
							$mensaje.= 'Paquete de acompañante: ' . $acompaniantes . "\n";
							/*echo $mensaje;*/
							$headers = 'From: '.$_POST['eName'];
							if (mail($email, $subject, $mensaje, $headers)) {
								echo '<script>function redireccionar() { document.location.href="'. $_SERVER['PHP_SELF'] .'" };';
								echo 'alert ("La información de '. $_POST['eName'] .' ha sido enviada.");';
								echo 'setTimeout ("redireccionar()", 100);</script>';
							}
							else {
								echo '<script>function redireccionar() { document.location.href="'. $_SERVER['PHP_SELF'] .'" };';
								echo 'alert ("El correo no pudo ser enviado");';
								echo 'setTimeout ("redireccionar()", 100);</script>';
								return false;
							}
						}
					}
					else {?>
					<form name="uniting_form" id="uniting_form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" class="entry_form">
						<div class="styleMe">
							<input type="text" name="eName" id="eName" placeholder="Nombre">
						</div>
						<div class="styleMe">
							<input type="number" name="eAge" id="eAge" placeholder="Edad" value="0">
						</div>
						<div class="styleMe">
							<input type="text" name="eClubName" id="eClubName" placeholder="Nombre del Club" value="N/A">
						</div>
						<div class="styleMe">
							<select name="eCategory" id="eCategory">
								<option value="">País</option>
								<option value="USA">United States of America</option>
								<option value="MEX" selected>México</option>
							</select>
						</div>
						<div class="styleMe">
							<input type="number" name="eYears" id="eYears" placeholder="Años jugnado Golf" value="0">
						</div>
						<div class="styleMe">
							<textarea name="eAchiv" rows="7">None</textarea>
						</div>
						<div class="styleMe">
							<input type="text" name="eRegAssociation" id="eRegAssociation" placeholder="Número de afiliación de FMG:" value="N/A">
						</div>
						<div class="styleMe">
							<input type="number" name="eHandicap" id="eHandicap" placeholder="USGA Handicap index">
						</div>
						<!-- <div class="styleMe">
							<input type="text" name="eMember" id="eMember" placeholder="Miembro / GHIN #">
						</div> -->
						<div class="styleMe">
							<select name="eShirt" id="eShirt">
								<option value="N/A">Talla de camisa</option>
								<option value="S">Chico</option>
								<option value="M">Mediano</option>
								<option value="L">Grande</option>
								<option value="XL">Extra Grande</option>
								<option value="XXL">Extra-Extra Grande</option>
							</select>
						</div>
						<div class="styleMe">
							<input type="email" name="eEmail" id="eEmail" placeholder="Correo">
						</div>
						<div class="styleMe">
							<input type="text" name="ePhone" id="ePhone" placeholder="Número telefónico">
						</div>
						<div class="styleMe">
							<input type="date" name="eDate" id="eDate" placeholder="Fecha">
						</div>
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
							<p>$599 usd por persona incluye: 3 noches, 3 desayunos, 4 comidas, 2 cenas, 1 Cóctel de Bienvenida, 4 rondas de Golf (1 ronda de práctica y 3 rondas oficiales), 1 kit de regalos y 3 uniformes oficiales del equipo México, premios en campo y rifa. IVA incluido.</p>
							<p>Noche adicional $69 usd + IVA.</p>

							<label for="paquete2"><input type="radio" name="ePackage" value="paquete2" id="paquete2" class="styleMeNot"><strong>Paquete 2: Amateur (ocupación sencilla) - Master Room</strong></label>
							<p>649 usd por persona incluye: 3 noches, 3 desayunos, 4 comidas, 2 cenas, 1 Cóctel de Bienvenida, 4 rondas de Golf (1 ronda de práctica y 3 rondas oficiales), 1 kit de regalos y 3 uniformes oficiales del equipo México, premios en campo y rifa. IVA incluido.</p>
							<p>Noche adicional $69 usd + IVA.</p>

							<label for="paquete3"><input type="radio" name="ePackage" value="paquete3" id="paquete3" class="styleMeNot"><strong>Paquete 3: Amateur (ocupación sencilla) - Suite</strong></label>
							<p>$719 usd por persona incluye: 3 noches, 3 desayunos, 4 comidas, 2 cenas, 1 Cóctel de Bienvenida, 4 rondas de Golf (1 ronda de práctica y 3 rondas oficiales), 1 kit de regalos y 3 uniformes oficiales del equipo México, premios en campo y rifa. IVA incluido.</p>
							<p>Noche adicional $69 usd + IVA.</p>
							<label for="ePackage" class="invalid">Please select one package</label>
							<p></p>
							<input type="checkbox" name="ePackage_companions" value="paquete_companion" id="paquete4" class="styleMeNot">
							<label for="paquete4"><i>Paquete 4: Paquete Acompañante en Master Room o Suite</i></label>
							<p>Paquete Spa para acompañantes (no golfistas): $ 299 usd por persona en Master Room o Suite, incluye: 3 noches, 3 desayunos buffets, 2 cenas buffets, invitación al Cóctel de Bienvenida; adicionalmente un masaje sueco 50 mins, facial 30 mins, manicure o pedicure, incluye IVA.</p>
						</div>
						
						<br>
						<button type="submit" name="submit" class="sec_boton">Enviar</button>
						<br><br>
						
						<span><strong>¡¡¡Premios con un valor mayor a $1,300,000 USD!!!</strong></span>
						<p><strong>Hole in One en los Par 3´s durante 1a y 2a ronda oficial para Amateurs incluye:</strong></p>
						<!-- <p>*1 Millón de Dólares, Grand Luxxe Membresía de Super Lujo en Mayan Palace Beach and Golf Resorts, autos y premios sorpresa.</p> -->
						<p><strong>O´Yeses* en todos los Par 3´s durante 1a y 2a ronda oficial para Amateurs incluye:</strong></p>
						<p>Estancias con Golf, Pantallas de TV, Laptops, iPods, Relojes, Drivers, Putters, Sets de Fierros y Rifa.</p>
						<p>*(Mejores O´Yeses de 2 días, no acumulables, en caso de ganar más de uno, se selecciona el mejor. Premios sujetos a cambios sin previo aviso).</p>
						<p><em>*(El tiro para el Hole in One del Millón de dólares será para los 12 mejores O´Yeses del torneo, acumulado de las 2 primeras rondas oficiales- limitado a un tiro por persona. Se llevará acabo en el tiro de práctica)</em></p>
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
						<p>Calvin Nielsen</p>
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
								<p>En el 2013, los jugadores de categoría A (Handicap 0-6) jugaran unos contra otros al igual que los jugadores de la categoría B (Handicap 7-12)</p>
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
									<li>Servicio de transporte cortesía estará disponible del Hotel/Campo de Golf/Hotel de 7:00 am – 7:00 pm Mayo 16-29.</li>
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

			<footer>
				<a href="http://www.mayanpalace.com/" target="_blank"><img src="../imgs/logos/mayan.png" alt="mayan"></a>
				<a href="http://www.vidantagolf.com/" target="_blank"><img src="../imgs/logos/peninsula.png" alt="peninsula"></a>
				<a href="http://www.azgolf.org/main/index.asp?CategoryID=0" target="_blank"><img src="../imgs/logos/arizona.png" alt="arizona"></a>
			</footer>
		</div>
	</body>
</html>