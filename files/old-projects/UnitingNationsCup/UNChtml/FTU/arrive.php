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
				<div class="lang"><a href="es/arrive.php">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">English</a></div>
				<?php require("libs/sponsors.php"); ?>
			</aside>
			<?php
			require("libs/mainNavigation.php");
			$firstCarrItem = 7;
			require("libs/carrousel.php");
			?>
			<div class="cont">
				<span class="title_section">How to arrive</span>
				<iframe class="arrive_map" src="https://maps.google.com/maps/ms?msa=0&amp;msid=207401953941367207557.0004d47199ace10ac4e37&amp;hl=es&amp;ie=UTF8&amp;t=h&amp;ll=31.278551,-113.278656&amp;spn=0.41079,0.583649&amp;z=10&amp;output=embed"></iframe>
			</div>
			<?php require("libs/footerUNC.php"); ?>
		</div>
	</body>
</html>