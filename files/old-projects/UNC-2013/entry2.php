<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2013::.</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/logos/favicon.ico">
		
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script src="js/jquery.validate.min.js"></script> 
		<script src="js/jquery.pikachoose.js"></script>
		<script src="js/jquery-ui-1.10.0.js"></script>
		<script src="js/query.js"></script>
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
				<span class="bannerText">After this event, the <strong>Golf</strong> will no longer be the same ...</span>
				<div class="social">
					<a href="https://twitter.com/" target="_blank" class="twitter">t</a>
					<a href="https://www.facebook.com/unitingnationscup" target="_blank" class="face">f</a>
				</div>
			</header>
			
			<aside>
				<div class="lang"><a href="es/entry.php">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">English</a></div>
				
				<div class="logo"><a href="index.php"><img src="imgs/logos/main_logo.png" alt="logo"></a></div>
				
				<div class="sponsors">
					<span>Sponsors</span><div class="clr"></div>
					<div class="spon_left">
						<a href="http://www.cemexmexico.com" target="_blank"><img src="imgs/logos/logo_a1.png" alt="Logo_a1"></a><br>
						<a href="http://www1.bacardi.com" target="_blank"><img src="imgs/logos/logo_a2.png" alt="Logo_a2"></a><br>
						<a href="http://www.coca-cola.com" target="_blank"><img src="imgs/logos/logo_a3.png" alt="Logo_a3"></a><br>
						<a href="http://www.mayanpalace.com/" target="_blank"><img src="imgs/logos/logo_a4.png" alt="Logo_a4"></a>
						<a href="http://www.chocalanwines.com/" target="_blank"><img src="imgs/logos/logo_a5.jpg" alt="Logo_a5"></a>
						<a href="http://www.gp.com/index.html" target="_blank"><img src="imgs/logos/logo_a6.png" alt="Logo_a6"></a>
						<a href="http://www.legendaryholdings.com/site/" target="_blank"><img src="imgs/logos/logo_a7.png" alt="Logo_a7"></a>
						<a href="#" target="_blank"><img src="imgs/logos/logo_a8.jpg" alt="Logo_a8"></a>
						<a href="http://alkilaeventos.com/" target="_blank"><img src="imgs/logos/logo_a9.png" alt="Logo_a9"></a>
						<a href="#" target="_blank"><img src="imgs/logos/logo_a10.jpg" alt="Logo_a10"></a>
					</div>
					<div class="spon_right">
						<a href="#" target="_blank"><img src="imgs/logos/logo_b1.png" alt="Logo_b1"></a><br>
						<a href="http://www.corona.com" target="_blank"><img src="imgs/logos/logo_b2.png" alt="Logo_b2"></a><br>
						<a href="http://www.grupovidanta.com/" target="_blank"><img src="imgs/logos/logo_b3.jpg" alt="Logo_b3"></a><br>
						<a href="http://www.vidantagolf.com/" target="_blank"><img src="imgs/logos/logo_b4.jpg" alt="Logo_b4"></a>
						<a href="http://www.antigua.com/" target="_blank"><img src="imgs/logos/logo_b5.png" alt="Logo_b5"></a>
						<a href="http://www.comnor.com.mx/" target="_blank"><img src="imgs/logos/logo_b6.png" alt="Logo_b6"></a>
						<a href="http://www.caffenio.com/" target="_blank"><img src="imgs/logos/logo_b7.png" alt="Logo_b7"></a>
						<a href="http://www.sanimex.com.mx/" target="_blank"><img src="imgs/logos/logo_b8.png" alt="Logo_b8"></a>
						<a href="http://www.jacovaproducciones.com/" target="_blank"><img src="imgs/logos/logo_b9.png" alt="Logo_b9"></a>
						<a href="http://vmasideas.com/" target="_blank"><img src="imgs/logos/logo_b10.png" alt="Logo_b10"></a>
					</div>
				</div>
			</aside>
			
			<nav class="nav">
				<a href="index.php">Home</a><a href="event.html">Event</a><a href="teams.php">Teams</a><!-- <a href="#">Sponsors</a> --><a href="gallery.html">Gallery</a><a href="scoring.html">Score</a><a href="news.html">News</a><a href="arrive.html">How to arrive</a><a href="schedule.html">Schedule</a>
			</nav>
				
			<div class="carrousel">
				<ul id="pikame">
					<li><img src="imgs/slide9.jpg" alt="slide9"></li>
					<li><img src="imgs/slide1.jpg" alt="slide1"></li>
					<li><img src="imgs/slide2.jpg" alt="slide2"></li>
					<li><img src="imgs/slide3.jpg" alt="slide3"></li>
					<li><img src="imgs/slide4.jpg" alt="slide4"></li>
					<li><img src="imgs/slide5.jpg" alt="slide5"></li>
					<li><img src="imgs/slide6.jpg" alt="slide6"></li>
					<li><img src="imgs/slide7.jpg" alt="slide7"></li>
					<li><img src="imgs/slide8.jpg" alt="slide8"></li>
				</ul>
			</div>

			<div class="cont">
				<span class="title_section">Registration Form</span>
				<section class="cont_sections"><img src="imgs/teams.jpg" alt="side"></section>
				<section class="cont_sections cont_text">
					<?php
					if (isset($_POST['submit'])) {
						if (isset($_POST['eDate']) && $_POST['eDate'] != "" ){ $fecha = $_POST['eDate']; }
						else { $fecha = date("d") .'/'. date("m") .'/'. date("Y"); }
						if (isset($_POST['eGuest'])){ $invitado = $_POST['eGuest']; }
						else { $invitado = 0; }
						if (isset($_POST['ePackage'])){ $package = $_POST['ePackage']; }
						else { $package = 'none'; }
						if (isset($_POST['ePackage_companions'])){ $acompaniantes = $_POST['ePackage_companions']; }
						else { $acompaniantes = 'none'; }
						//upload photo
						if ($_FILES['ePhoto']['name'] != "" ){
							$var = rand(1,10) . date('d') . rand(1,10) . $_FILES['ePhoto']['size'] . date('is');
							$allowedExts = array('jpg', 'jpeg', 'gif', 'png');
							$ext = explode( '.', $_FILES['ePhoto']['name'] );
							$extension = end($ext);
							//Image validation
							if ((($_FILES['ePhoto']['type'] == 'image/gif') || ($_FILES['ePhoto']['type'] == 'image/jpeg') || ($_FILES['ePhoto']['type'] == 'image/png') || ($_FILES['ePhoto']['type'] == 'image/pjpeg')) && in_array($extension, $allowedExts)) {
								if ( $_FILES['ePhoto']['error'] == 0 ) {
									$uploadfile = 'imgs/players/p' . $var .'.'. $extension;
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
										echo '<script>alert ("The file already exists");</script>';
										$photo_name = 'p' . $var .'.'. $extension;
										$photo_url= '/imgs/players/p' . $var .'.'. $extension;
										$photo_name_crop = 'p' . $var . '-crop.' . $extension;
										$photo_url_crop = '/imgs/players/p' . $var . '-crop.' . $extension;
									}
								}
								else {
									echo '<script>function redireccionar() { document.location.href="entry.php" }; alert ("Impossible to upload the image, try again"); setTimeout ("redireccionar()", 100);</script>';
									return false;
								}
							}
							else {
								echo '<script>function redireccionar() { document.location.href="entry.php" }; alert ("Invalid file, try again"); setTimeout ("redireccionar()", 100);</script>';
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
						$escritura .= " VALUES( '" . $_POST['eName'] . "','" . $_POST['eAge'] . "','" . $_POST['eClubName'] . "','" . $_POST['eCategory'] . "','" . $_POST['eYears'] . "','" . $_POST['eAchiv'] . "','" . $_POST['eRegAssociation'] . "','" . $_POST['eHandicap'] . "','" . $_POST['eMember'] . "','" . $_POST['eShirt'] . "','" . $_POST['eEmail'] . "','" . $_POST['ePhone'] . "','" . $fecha . "','" . $invitado . "','" . $photo_name . "','" . $photo_name_crop . "','" . $package . "','" . $acompaniantes . "')";
						if (!mysql_query($escritura)) {
							die('Registro no válido' . mysql_error());}
						else {
							//Send email
							/*$email = 'golf2pp@mayanpalace.com.mx' . ', ';
							$email .= 'multimedia@vmasideas.com' . ', ';
							$email .= 'multimedia2@vmasideas.com';*/
							$email = 'multimedia2@vmasideas.com';
							$subject = "Registration";
							$mensaje= 'Name: ' . $_POST['eName'] . "\n";
							$mensaje.= 'Age: ' . $_POST['eAge'] . "\n";
							$mensaje.= 'Club name: ' . $_POST['eClubName'] . "\n";
							$mensaje.= 'Category: ' . $_POST['eCategory'] . "\n";
							$mensaje.= 'Years playing Golf: ' . $_POST['eYears'] . "\n";
							$mensaje.= 'Achievements in golf: ' . $_POST['eAchiv'] . "\n";
							$mensaje.= 'State or Regional Golf Association: ' . $_POST['eRegAssociation'] . "\n";
							$mensaje.= 'USGA Handicap index: ' . $_POST['eHandicap'] . "\n";
							$mensaje.= 'Member / GHIN #: ' . $_POST['eMember'] . "\n";
							$mensaje.= 'Shirt size: ' . $_POST['eShirt'] . "\n";
							$mensaje.= 'Email: ' . $_POST['eEmail'] . "\n";
							$mensaje.= 'Phone number: ' . $_POST['ePhone'] . "\n";
							$mensaje.= 'Date: ' . $fecha . "\n";
							$mensaje.= 'Guest: ' . $invitado . "\n";
							$mensaje.= 'Photo: ' . $photo_url . "\n";
							$mensaje.= 'Photo crop: ' . $photo_url_crop . "\n";
							$mensaje.= 'Package: ' . $package . "\n";
							$mensaje.= 'Package companions: ' . $acompaniantes . "\n";
							/*echo $mensaje;*/
							$headers = 'From: '.$_POST['eName'];
							if (mail($email, $subject, $mensaje, $headers)) {
								echo '<script>function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" };';
								echo 'alert ("The info of '. $_POST['eName'] .' was sent.");';
								echo 'setTimeout ("redireccionar()", 100);</script>';
							}
							else {
								echo '<script>function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" };';
								echo 'alert ("The email could not be sent");';
								echo 'setTimeout ("redireccionar()", 100);</script>';
								return false;
							}
						}
					}
					else {?>
					<form name="uniting_form" id="uniting_form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" class="entry_form">
						<div class="styleMe">
							<input type="text" name="eName" id="eName" placeholder="Name">
						</div>
						<div class="styleMe">
							<input type="number" name="eAge" id="eAge" placeholder="Age" value="0">
						</div>
						<div class="styleMe">
							<input type="text" name="eClubName" id="eClubName" placeholder="Club name" value="N/A">
						</div>
						<div class="styleMe">
							<select name="eCategory" id="eCategory">
								<option value="">Country</option>
								<option value="USA" selected>United States of America</option>
								<option value="MEX">México</option>
							</select>
						</div>
						<div class="styleMe">
							<input type="number" name="eYears" id="eYears" placeholder="Years playing Golf" value="0">
						</div>
						<div class="styleMe">
							<textarea name="eAchiv" rows="7">None</textarea>
						</div>
						<div class="styleMe">
							<input type="text" name="eRegAssociation" id="eRegAssociation" placeholder="State or Regional Golf Association" value="N/A">
						</div>
						<div class="styleMe">
							<input type="number" name="eHandicap" id="eHandicap" placeholder="USGA Handicap index">
						</div>
						<div class="styleMe">
							<input type="text" name="eMember" id="eMember" placeholder="Member / GHIN #">
						</div>
						<div class="styleMe">
							<select name="eShirt" id="eShirt">
								<option value="">Shirt size</option>
								<option value="S">Small</option>
								<option value="M">Medium</option>
								<option value="L">Large</option>
								<option value="XL">Extra Large</option>
								<option value="XXL">Extra-Extra Large</option>
							</select>
						</div>
						<div class="styleMe">
							<input type="email" name="eEmail" id="eEmail" placeholder="Email">
						</div>
						<div class="styleMe">
							<input type="number" name="ePhone" id="ePhone" placeholder="Phone number">
						</div>
						<div class="styleMe">
							<input type="date" name="eDate" id="eDate" placeholder="Date">
						</div>
						<div class="styleMe">
							<label>Will others be joining you for the tournament (non player)?</label>
							<label for="yes">Yes</label>
							<input type="checkbox" name="eYes" id="eYes" value="yes" class="styleMeNot">
							<input type="number" name="eGuest" id="eGuest" value="0" disabled="disabled" class="styleMeNot numGuest">
						</div>
						<div class="styleMe">
							<label for="ePhoto">Photo</label>
							<input name="ePhoto" id="ePhoto" type="file" placeholder="Photo">
							<span class="petit_letters">If you cannot send a photo when submitting this form, please send us your photo by email.</span>
						</div>

						<div class="styleMe">
							<label><strong>I / We will be attending Uniting Nations Cup and requesting the following package/ s:</strong></label><br>
							<br>
							<label for="paquete1"><input type="radio" name="ePackage" value="paquete1" id="paquete1" class="styleMeNot"><strong>Package 1: Amateur (double occupancy) - Master Room (2 double beds)</strong></label>
							<p>$599 usd per person includes: 3 nights, 3 breakfasts, 4 lunches, 2 dinners, 1 Welcome cocktail, 4 rounds of Golf (1 practice round + 3 official rounds), 1 gift bag y 3 official Team uniforms, on course prizes and prize drawing. TAX included.</p>
							<p>Additional room night $69 usd + TAX.</p>

							<label for="paquete2"><input type="radio" name="ePackage" value="paquete2" id="paquete2" class="styleMeNot"><strong>Package 2: Amateur (single occupancy) - Master Room</strong></label>
							<p>$649 usd per person includes: 3 nights, 3 breakfasts, 4 lunches, 2 dinners, 1 welcome cocktail, 4 rounds of Golf (1 practice round + 3 official rounds), 1 gift bag y 3 official Team uniforms, on course prizes and prize drawing. TAX included.</p>
							<p>Additional room night $69 usd + TAX.</p>

							<label for="paquete3"><input type="radio" name="ePackage" value="paquete3" id="paquete3" class="styleMeNot"><strong>Package 3: Amateur (single occupancy) - Suite</strong></label>
							<p>$719 usd per person includes: 3 nights, 3 breakfasts, 4 lunches, 2 dinners, 1 welcome cocktail, 4 rounds of Golf (1 practice round + 3 official rounds), 1 gift bag y 3 official Team uniforms, on course prizes and prize drawing. TAX included.</p>
							<p>Additional room night $69 usd + TAX.</p>
							<label for="ePackage" class="invalid">Please select one package</label>
							<p></p>
							<input type="checkbox" name="ePackage_companions" value="paquete_companion" id="paquete4" class="styleMeNot">
							<label for="paquete4"><i>Package 4: Package for companions in Master Room or Suite</i></label>
							<p>Spa Package for companions (non golfers): $ 299 usd per person in Master Room or Suite, includes: 3 nights, 3 buffet breakfasts, 2 buffet dinners, invitation to the welcome cocktail; additionally a 50 mins. Swedish massage, 30 mins. facial, manicure or pedicure, Tax included.</p>
						</div>
						
						<br>
						<button type="submit" name="submit" class="sec_boton">Send</button>
						<br><br>
						
						<span><strong>Prizes valued at $300,000 USD!!!!!!!</strong></span>
						<p><strong>Hole in One prizes on all Par 3´s during 1st , 2nd and 3rd official rounds include:</strong></p>
						<p>Grand Luxxe membership at Mayan Palace Beach and Golf Resorts, and other surprise gifts.</p>
						<p><strong>Nearest the Hole Prizes* on all Par 3´s during 1st and 2nd official rounds include</strong></p>
						<p>Stay and Play Golf packages, Flat screen TV´s, Laptops, iPods, Watches, Drivers, Putters, Sets of Irons plus Prize Drawing.</p>
						<p>(* Best Nearest the Hole of 2 days, not cumulative, should the player win more than one, the best is selected.</p>
						<p>Prizes subject to change without notice ).</p>
						<p><strong>Please contact:</strong></p>
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
						<p><strong>In the United States</strong></p>
						<p>Vito Berlingeri</p>
						<ul>
							<li>Arizona Golf Association</li>
							<li>7226 N. 16th St. Ste 200</li>
							<li>Phoenix, AZ 85020</li>
							<li>Office: (602) 944-3035</li>
						</ul>
						<p><a href="mailto:vberlingeri@cox.net" class="sec_boton">vberlingeri@cox.net</a></p>
							
						<div id="accordion">
							<h3 class="title_accordion">Eligibility</h3>
							<div>
								<p>In 2013 the A players (Handicap 0-6) will play against each other as will the B category players (7-12)</p>
								<p>There will be two flights of 24 determined by handicap index. Matches will be played at gross within the flights:</p>
								<ul>
									<li>Flight #1: Handicap Index up to 6.9</li>
									<li>Flight #2: USGA Handicap Index from 7.0 to 12.9</li>
								</ul>
								<p>The Committee reserves the right to verify the Handicap Index of amateurs and to refuse anyone not meeting the requirements.</p>
							</div>
							<h3 class="title_accordion">Rules of Golf</h3>
							<div>
								<p>Play shall be governed in accordance with the Rules of Golf of the United States Golf Association, as modified by the Local Rules and Conditions of Competition card and supplemented by the Notice to Competitors. Questions or disputes shall be settled by the on site Rules Committee.</p>
							</div>
							<h3 class="title_accordion">Spike Policy</h3>
							<div>
								<p>The use of metal or traditionally designed spikes during the event is prohibited. Players not complying with this policy will be asked to change shoes/spikes prior to starting play. Failure to comply will result in the player being withdrawn from the event. This policy is in effect for caddies as well. In the case of a caddie refusing to comply, the player may be withdrawn from the event.</p>
							</div>
							<h3 class="title_accordion">Distance Measuring Devices </h3>
							<div>
								<p>Players are permitted to use distance-only measuring devices. See Appendix I, the Rules of Golf.</p>
							</div>
							<h3 class="title_accordion">Transportation</h3>
							<div>
								<ul>
									<li>Courtesy shuttle service will be provided from Hotel/Golf course/Hotel from 7:00 am- 7:00pm - May 16-29.</li>
									<li>Courtesy shuttle service will be provided from Hotel/Gala Dinner/Hotel from 6:30 pm- 9:30 pm on Thursday May 16.</li>
								</ul>
							</div>
							<h3 class="title_accordion">Appearance</h3>
							<div>
								<p>Players: While on the host facility property, players shall present a neat appearance in both clothing and personal grooming.<strong>Golf Shorts are allowed.</strong><br>Blue jeans, cutoffs, T-shirts or shirts with no collar shall not be worn at Golf course or Pairings Party.</p>
								<p>Caddies: Blue jeans, cutoffs, shorts, T-shirts or shirts with no collar shall not be worn. Smooth rubber sole shoes are required. Sandals, open toe shoes, and golf shoes with traditional metal or soft spikes are prohibited. <strong>Uniform shirts should be worn only during championship play.</strong></p>
							</div>
							<h3 class="title_accordion">Conduct</h3>
							<div>
								<p>While on host facility property during qualifying rounds; players and caddies shall conduct themselves in a professional manner. The Organizing Committee reserves the right to remove a player from the qualifying competition for; non competitiveness; conduct unbecoming a professional by the player; conduct unbecoming a professional by the players' caddie.</p>
							</div>
							<h3 class="title_accordion">Cancellation</h3>
							<div>
								<p>In the event that the competition is canceled without any player having been able to play, all entry fees will be refunded. In the event the competition is canceled after play has begun, all entry fees will not be refunded. If a player withdraws from the event, all entry fees will not be refunded unless person or player is replaced. If in the judgment of the on-site Rules Official or designee, whose decision shall be final, conditions render commencement or continuation of tournament play inadvisable, play shall be postponed until such time as the Rules Official or designee determines that such weather conditions or other occurrences or conditions have improved sufficiently for play to commence or resume. In situations involving adverse weather conditions or any other occurrence or condition, our first priority is the completion of the qualifying competition. Every effort will be made to achieve this objective by the end of the scheduled competition day. In the event the qualifying competition cannot be completed by the end of the last scheduled competitive day, play will be extended one additional day. The Organizing Committee reserves the right to change the format, venue(s) and other criteria as presently contemplated.</p>
							</div>
						</div>
					</form>
					<?php } ?>
				</section>
			</div>

			<footer>
				<a href="http://www.mayanpalace.com/" target="_blank"><img src="imgs/logos/mayan.png" alt="mayan"></a>
				<a href="http://www.vidantagolf.com/" target="_blank"><img src="imgs/logos/peninsula.png" alt="peninsula"></a>
				<a href="http://www.azgolf.org/main/index.asp?CategoryID=0" target="_blank"><img src="imgs/logos/arizona.png" alt="arizona"></a>
			</footer>
		</div>
	</body>
</html>