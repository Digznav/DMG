<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2013::.</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/logos/favicon.ico">
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script> 
		<script src="js/jquery.pikachoose.min.js"></script>
		<script src="js/jquery-ui-1.10.0.min.js"></script>
		<script src="js/query.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript">
			$(document).ready(function() {
				$("#accordion").accordion({ heightStyle: "content" });
			});
		</script>
	</head>
	<body>
		<div class="shadow"></div>
		<div class="bg-aside"></div>
		<div class="content">
			<?php require("libs/headerUNC.php"); ?>
			<aside>
				<div class="lang"><a href="es/schedule.php">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">English</a></div>
				<?php require("libs/sponsors.php"); ?>
			</aside>
			<?php
			require("libs/mainNavigation.php");
			$firstCarrItem = 8;
			require("libs/carrousel.php");
			?>
			<div class="cont">
				<span class="title_section">Schedule</span>
        <div class="soon"><p>Coming back in 2014</p></div>
			<!--	<section class="cont_sections"><img src="imgs/teams.jpg" alt="side"></section>
				<section class="cont_sections cont_text">
					<span class="subtitle">Uniting Nations Cup 2013</span>
					<p>You are part of the history, now we want you to become a legend in the Unitng Natios Cup 2013</p>
					<span class="subtitle">Date</span>
					<p>May 16-19, 2013</p>
					<span class="subtitle">Location</span>
					<p>Mayan Palace, Puerto Peñasco, Sonora</p>
					<span class="subtitle">Schedule</span>
					<p>Field of 96 Amateurs / 48 U.S.A amateurs vs 48 Mexican Amateurs</p>
					
					<div id="accordion">
						<h3 class="title_accordion">Thursday, May 16 2013</h3>
						<div>
							<ul>
								<li>Registration and Breakfast – Club House</li>
								<li>Practice Round , please make tee times by sending an email to: <a href="mailto:golfpuertopenasco@grupovidanta.com" target="_blank">golfpuertopenasco@grupovidanta.com</a> (Box lunch included)</li>
								<li>6:00 pm - 8:00 pm: Welcome Cocktail in Club House – Meet and greet team players, please be on time. Dress code: Golf attire. Shuttle service available from 5:00 - 8:30 pm Hotel/Golf Course/Hotel</li>
							</ul>
						</div>
						<h3 class="title_accordion">Friday, May 17 2013</h3>
						<div>
							<ul>
								<li>6:30 am: Breakfast  buffet served in Bakal Restaurant</li>
								<li>7:00 am – 9:00 am: Shuttle service hotel – golf course</li>
								<li>7:00 am - 5:00 pm: Driving range open.</li>
								<li>8:30 am: National anthems</li>
								<li>9:00 am: First Official Round , Shotgun start. Fourball Matchplay. On course prizes</li>
								<li>2:00 pm: Lunch buffet in Club house.  (Golf course closed after play)</li>
								<li>6:30 pm – 10:30 pm: Dinner buffet at leisure in Bakal Restaurant</li>
							</ul>
						</div>
						<h3 class="title_accordion">Saturday, May 18 2013</h3>
						<div>
							<ul>
								<li>6:30 am: Breakfast served in Bakal Restaurant</li>
								<li>7:00 am – 9:00 am: Shuttle service hotel – golf course</li>
								<li>7:00 am - 5:00 pm: Driving range open.</li>
								<li>9:00 am: Second Official Round - Shotgun start. Foursomes Matchplay. On course prizes.</li>
								<li>2:00 pm: Awards Ceremony Lunch in Club house. (Golf Course closed after play)</li>
								<li>6:30 pm – 10:30 pm: Dinner buffet at leisure in Bakal Restaurant</li>
								<li>Hotel bill verification and check-out optional</li>
							</ul>
						</div>
						<h3 class="title_accordion">Sunday, May 19 2013</h3>
						<div>
							<ul>
								<li>6:30 am: Breakfast served in Bakal Restaurant</li>
								<li>6:30 am - 8:00 am: Shuttle service hotel – golf course</li>
								<li>6:30 am: Driving range open.</li>
								<li>9:00 am: Third Official Round - Shotgun start. Singles Matchplay.</li>
								<li>2:00 pm: Closing Ceremony Lunch and Trophy presentation</li>
								<li>Late check out available for your comfort</li>
							</ul>
						</div>
					</div>
					<span class="subtitle">For more information please download this documents:</span>
					<p>
						<!-- <a href="#" class="sec_boton">Player information</a> --><br><br><!-- <a href="#" class="sec_boton">Pairings UNC 2013</a> --></p>
				</section>
			</div>
			<?php require("libs/footerUNC.php"); ?>
		</div>
	</body>
</html>