<?php include 'libs/conexion.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2014::.</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/logos/favicon.ico">
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/jquery.pikachoose.min.js"></script>
		<script src="js/jquery-ui-1.10.0.min.js"></script>
		<script src="js/query.min.js"></script>
		<script src="js/validation.min.js"></script>
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
			<?php require("libs/headerUNC.php"); ?>
			<aside>
				<div class="lang"><a href="es/entry.php">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">English</a></div>
				<?php require("libs/sponsors.php"); ?>
			</aside>
			<?php
			require("libs/mainNavigation.php");
			$firstCarrItem = 9;
			require("libs/carrousel.php");
			?>
			<div class="cont">
				<span class="title_section">Registration Form</span>
				<section class="cont_sections"><img src="imgs/teams.jpg" alt="side"></section>
				<section class="cont_sections cont_text">
					<?php
					if (isset($_POST['submit'])) { ?>
						<div class="sendingMail"><p><strong>Saving...</strong><br>Please wait a moment.</p><img src="imgs/loader2.gif" alt="enviando email"></div>
						<?php
						$fechaNacimiento = $_POST['eDayBirthday'] . "/" . $_POST['eMonthBirthday'] . "/" . $_POST['eYearBirthday'];
						$fecha = date("j/n/Y");
						/*if (isset($_POST['eDate']) && $_POST['eDate'] != "" ){ $fecha = $_POST['eDate']; } else { $fecha = date("j/n/Y"); }*/
						
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
						$escritura = "INSERT INTO members (NAME,BIRTHDAY,AGE,CLUBNAME,CATEGORY,TIME_PLAY,ACHIV,REG_ASSOCIATION,HANDICAP,NUMBER,SHIRT_SIZE,EMAIL,PHONE,DATE,GUEST,PHOTO_URL,CROP_URL,PACKAGE,PACKAGE_COMP)";
						$escritura .= " VALUES( '" . $_POST['eName'] . "','" . $_POST['eAge'] . "','" . $fechaNacimiento  . "','" . $_POST['eClubName'] . "','" . $_POST['eCategory'] . "','" . $_POST['eYears'] . "','" . $_POST['eAchiv'] . "','" . $_POST['eRegAssociation'] . "','" . $_POST['eHandicap'] . "','" . $_POST['eMember'] . "','" . $_POST['eShirt'] . "','" . $_POST['eEmail'] . "','" . $_POST['ePhone'] . "','" . $fecha . "','" . $invitado . "','" . $photo_name . "','" . $photo_name_crop . "','" . $package . "','" . $acompaniantes . "')";
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
							$subject = 'Uniting Nations CUP - Registration';
							$message = '<b>Name:</b> ' . $_POST['eName'] . '<br>';
							$message.= '<b>Age:</b> ' . $_POST['eAge'] . '<br>';
							$message.= '<b>Birthday:</b> ' . $fechaNacimiento . '<br>';
							$message.= '<b>Club name:</b> ' . $_POST['eClubName'] . '<br>';
							$message.= '<b>Category:</b> ' . $_POST['eCategory'] . '<br>';
							$message.= '<b>Years playing Golf:</b> ' . $_POST['eYears'] . '<br>';
							$message.= '<b>Achievements in golf:</b> ' . $_POST['eAchiv'] . '<br>';
							$message.= '<b>State or Regional Golf Association:</b> ' . $_POST['eRegAssociation'] . '<br>';
							$message.= '<b>USGA Handicap index:</b> ' . $_POST['eHandicap'] . '<br>';
							$message.= '<b>Member / GHIN #:</b> ' . $_POST['eMember'] . '<br>';
							$message.= '<b>Shirt size:</b> ' . $_POST['eShirt'] . '<br>';
							$message.= '<b>Email:</b> ' . $_POST['eEmail'] . '<br>';
							$message.= '<b>Phone number:</b> ' . $_POST['ePhone'] . '<br>';
							$message.= '<b>Date:</b> ' . $fecha . '<br>';
							$message.= '<b>Guest:</b> ' . $invitado . '<br>';
							$message.= '<b>Photo:</b><br><img src="http://www.unitingnationscup.com/' . $photo_url . '"><br>';
							/*$message.= '<b>Photo crop:</b> ' . $photo_url_crop . '<br>';*/
							$message.= '<b>Package:</b> ' . $package . '<br>';
							$message.= '<b>Package companions:</b> ' . $acompaniantes . '<br>';
							
							$header = "From: " . strip_tags($emailadd) . "\r\n";
							/*$header .= "BCC: ". strip_tags($email2) . "\r\n";*/
							$header .= "BCC: ". strip_tags($email2) . ',' . strip_tags($email3) . "\r\n";
							$header .= "MIME-Version: 1.0\r\n";
							$header .= "Content-type: text/html; charset: utf-8\r\n";
							if (mail($email, $subject, $message, $header)){
								echo '<script type="text/javascript">$(".sendingMail").hide(); function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" };';
								echo 'setTimeout ("redireccionar()", 3000);</script>'; ?>
								<div class="successMail"><p><strong>Success</strong><br>Information sent successfully.</p><span>%</span></div>
							<?php } else {
								echo '<script type="text/javascript">$(".sendingMail").hide(); function redireccionar() { document.location.href="'.  $_SERVER['PHP_SELF'] .'" };';
								echo 'setTimeout ("redireccionar()", 3000);</script>'; ?>
								<div class="errorMail"><p><strong>Error</strong><br>Please try again.</p><span>X</span></div>
								<?php return false;
							}
						}
					}
					else {?>
					<form name="uniting_form" id="uniting_form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" class="entry_form">
						<div class="styleMe"><input type="text" name="eName" id="eName" placeholder="Name"></div>
						<div class="styleMe"><input type="number" name="eAge" id="eAge" placeholder="Age"></div>
						<div class="styleMe">
							<?php date_default_timezone_set('UTC'); ?>
							<label>Birthday:</label><br>
							<select class="eBirthday birthDay" name="eDayBirthday" id="eDayBirthday">
								<option value="">Day</option>
								<?php for ($i=1; $i<=31; $i++) { ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?>&nbsp;&nbsp;</option>
								<?php } ?>
							</select><select class="eBirthday birthMonth" name="eMonthBirthday" id="eMonthBirthday">
								<option value="">Month</option>
								<?php $months = array (1=>'January','February','March','April','May','June','July','August','September','October','November','December');
								for ($i=1; $i<=12; $i++) { ?>
								<option value="<?php echo $i; ?>"><?php echo $months[$i]; ?>&nbsp;&nbsp;</option>
								<?php } ?>
							</select><select class="eBirthday birthYear" name="eYearBirthday" id="eYearBirthday">
								<option value="">Year</option>
								<?php  for ($i = 1900; $i <= date('Y'); $i++) { ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?>&nbsp;&nbsp;</option>
								<?php } ?>
							</select>
						</div>
						<div class="styleMe"><input type="text" name="eClubName" id="eClubName" placeholder="Club name"></div>
						<div class="styleMe">
							<select name="eCategory" id="eCategory">
								<option value="">Country</option>
								<option value="USA" selected>United States of America</option>
								<option value="MEX">México</option>
							</select>
						</div>
						<div class="styleMe"><input type="number" name="eYears" id="eYears" placeholder="Years playing Golf"></div>
						<div class="styleMe"><textarea name="eAchiv" rows="7" placeholder="Achievements in golf"></textarea></div>
						<div class="styleMe"><input type="text" name="eRegAssociation" id="eRegAssociation" placeholder="State or Regional Golf Association"></div>
						<div class="styleMe"><input type="number" name="eHandicap" id="eHandicap" placeholder="USGA Handicap index"></div>
						<div class="styleMe"><input type="text" name="eMember" id="eMember" placeholder="Member / GHIN #"></div>
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
						<div class="styleMe"><input type="email" name="eEmail" id="eEmail" placeholder="Email: example@domain.com"></div>
						<div class="styleMe"><input type="number" name="ePhone" id="ePhone" placeholder="Phone number"></div>
						<div class="styleMe"><label>Date: <?php echo date("j/n/Y"); ?></label></div>
						<!-- <div class="styleMe"><input type="date" name="eDate" id="eDate" placeholder="Date: DD/MM/YYYY" value="< ?php echo date("j/n/Y"); ?>"></div> -->
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
							<p>$629 usd per person includes: 3 nights, 3 breakfasts, 4 lunches, 2 dinners, 1 Welcome cocktail, 4 rounds of Golf (1 practice round + 3 official rounds), 1 gift bag y 3 official Team uniforms, on course prizes and prize drawing. TAX included.</p>
							<p>Additional room night $69 usd + TAX.</p>

							<label for="paquete2"><input type="radio" name="ePackage" value="paquete2" id="paquete2" class="styleMeNot"><strong>Package 2: Amateur (single occupancy) - Master Room</strong></label>
							<p>$679 usd per person includes: 3 nights, 3 breakfasts, 4 lunches, 2 dinners, 1 welcome cocktail, 4 rounds of Golf (1 practice round + 3 official rounds), 1 gift bag y 3 official Team uniforms, on course prizes and prize drawing. TAX included.</p>
							<p>Additional room night $69 usd + TAX.</p>

							<label for="paquete3"><input type="radio" name="ePackage" value="paquete3" id="paquete3" class="styleMeNot"><strong>Package 3: Amateur (single occupancy) - Suite</strong></label>
							<p>$749 usd per person includes: 3 nights, 3 breakfasts, 4 lunches, 2 dinners, 1 welcome cocktail, 4 rounds of Golf (1 practice round + 3 official rounds), 1 gift bag y 3 official Team uniforms, on course prizes and prize drawing. TAX included.</p>
							<p>Additional room night $69 usd + TAX.</p>
							<label for="ePackage" class="invalid">Please select one package</label>
							<p></p>
							<input type="checkbox" name="ePackage_companions" value="paquete_companion" id="paquete4" class="styleMeNot">
							<label for="paquete4"><i>Package 4: Package for companions in Master Room or Suite</i></label>
							<p>Spa Package for companions (non golfers): $313 usd per person in Master Room or Suite, includes: 3 nights, 3 buffet breakfasts, 2 buffet dinners, invitation to the welcome cocktail; additionally a 50 mins. Swedish massage, 30 mins. facial, manicure or pedicure, Tax included.</p>
						</div>
						
						<br>
						<button type="submit" name="submit" class="sec_boton">Send</button>
						<br><br>
						
						<span><strong>Prizes valued at $300,000 USD!!!!!!!</strong></span>
						<!-- <p><strong>Hole in One prizes on all Par 3's during 1st , 2nd and 3rd official rounds include:</strong></p>
						<p>Grand Luxxe membership at Mayan Palace Beach and Golf Resorts, and other surprise gifts.</p> -->
						<p><strong>Nearest the Hole Prizes* on all Par 3's during 1st and 2nd official rounds include</strong></p>
						<p>Stay and Play Golf packages, Flat screen TV's, Laptops, iPods, Watches, Drivers, Putters, Sets of Irons plus Prize Drawing.</p>
						<p>(* Best Nearest the Hole of 2 days, not cumulative, should the player win more than one, the best is selected.</p>
						<p>Prizes subject to change without notice ).</p>
						<p><strong>Please contact:</strong></p>
						<!-- <p>Calvin Nielsen</p> -->
						<p>Lic. Luis Antonio Torres</p>
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
								<p>In 2014 the A players (Handicap 0-6) will play against each other as will the B category players (7-12)</p>
								<p>There will be two flights of 25 determined by handicap index. Matches will be played at gross within the flights:</p>
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
									<li>Courtesy shuttle service will be provided from Hotel/Golf course/Hotel from 7:00 am- 7:00pm - May 15-18.</li>
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

			<?php require("libs/footerUNC.php"); ?>
		</div>
	</body>
</html>