<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2013::.</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/logos/favicon.ico">
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script> 
		<script src="js/jquery.pikachoose.min.js"></script>
		<script src="js/query.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="shadow"></div>
		<div class="bg-aside"></div>
		<div class="content">
			<?php require("libs/headerUNC.php"); ?>
			<aside>
				<div class="lang"><a href="es/event.php">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">English</a></div>
				<?php require("libs/sponsors.php"); ?>
			</aside>
			<?php
			require("libs/mainNavigation.php");
			$firstCarrItem = 2;
			require("libs/carrousel.php");
			?>
			<div class="cont">
				<span class="title_section">Event</span>
				<section class="cont_sections"><img src="imgs/teams.jpg" alt="side"></section>
				<section class="cont_sections cont_text"> <span class="subtitle">The concept</span>
					<p>This event is a three day team match play goodwill competition, first of its kind in the history of Golf in Mexico. "This is an opportunity to emphasize the importance of our relationship as neighboring nations and allow ourselves to make new friendships with Golf as our Ambassador". (Lic. Luis Antonio Torres, Director of Golf, Peninsula de Cortes Golf Course).</p>
					<span class="subtitle">Date</span>
					<p>Be pendent for the UNC 2014.</p>
					<span class="subtitle">Location</span>
					<p>Peninsula de Cortes Golf Course at the Mayan Palace, Puerto Peñasco.</p>
					<p>&nbsp;</p>
					<!-- <p><a href="#popup-box" class="normal_pop sec_boton">Prizes</a></p> -->
				</section>
			</div>
			<?php require("libs/footerUNC.php"); ?>
		</div>
		<div id="popup-box" class="popup">
			<a href="#" class="close"><img src="imgs/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a>
			<div class="cont_text prizes_pop">
				<span class="bigtitle">Prizes valued at $1,300,000 USD !!!!!!</span>
				<p>Hole in One prizes on all Par 3´s during 1st and 2nd official rounds for Amateurs include:</p>
				<p><strong>1 Million dollars*</strong>, Grand Luxxe Super Luxury Membership at Mayan Palace Beach and Golf Resorts with Free Golf for Life, cars and other surprise gifts.</p>
				<p><strong>Nearest the pin prizes**</strong> on all Par 3´s during 1st and 2nd official rounds for Amateurs include:</p>
				<ul>
					<li>Stay and Play Golf packages</li>
					<li>Flat screen TV´s</li>
					<li>Laptops</li>
					<li>iPods</li>
					<li>Watches</li>
					<li>Drivers</li>
					<li>Putters</li>
					<li>Sets of Irons plus Prize Drawing</li>
				</ul>
				<span class="petit_letters">* Million Dollar Hole in One shot will be for the 12 best nearest the pins of the tournament- limited to one shot per person. To be held on the driving range after the 2nd round<br>** Nearest the pin prizes are based on 2 days of play, winners must choose ONE prize only.</span>
			</div>
		</div>
	</body>
</html>