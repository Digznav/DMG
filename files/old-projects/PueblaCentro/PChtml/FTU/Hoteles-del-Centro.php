<?php include('libs/init.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Puebla Centro::.</title>
		<meta name="description" content="Puebla Centro">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="/2014/imgs/design/favicon.ico">
		<link rel="stylesheet" href="/2014/css/style.css">
		<link rel="stylesheet" href="/2014/css/bxslider.css">
		<script src="/2014/js/modernizr.2.7.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="background-image"></div>
		<div id="container">
			<?php $ctMn='Hoteles_del_Centro';
			include('libs/header.php');
			include('libs/contact.php');
			?>
			<div class="Wrapper">
				<div class="pFWrppr clearfix">
					<h1 class="ttl-Section"><span class="ttl-lgo l-htls"></span><span class="ttl-txt">Hoteles del Centro</span></h1>
					<div class="clmn">
						<ul class="lst-plcs">
							<li><a href="/2014/Hotel/Posada-San-Pedro.php">- Hotel Posada San Pedro</a></li>
							<li><a href="/2014/Hotel/La-Alhondiga.php">- Hotel La Alhóndiga</a></li>
							<li><a href="/2014/Hotel/Gilfer-Hotel.php">- Gilfer Hotel</a></li>
							<li><a href="/2014/Hotel/Loa-Inn-Hoteles.php">- Loa Inn Hoteles</a></li>
							<li><a href="/2014/Hotel/Plaza-Poblana.php">- Hotel Plaza Poblana</a></li>
							<li><a href="/2014/Hotel/Hotel-del-Portal.php">- Hotel del Portal</a></li>
							<li><a href="/2014/Hotel/Royalty-Puebla.php">- Hotel Royalty Puebla</a></li>
							<li><a href="/2014/Hotel/Senorial.php">- Hotel Señorial</a></li>
							<li><a href="/2014/Hotel/Condesa-Americana.php">- Hotel Condesa Americana</a></li>
							<li><a href="/2014/Hotel/Imperial.php">- Hotel Imperial</a></li>
							<li><a href="/2014/Hotel/Palace.php">- Hotel Palace</a></li>
							<li><a href="/2014/Hotel/San-Angel.php">- Hotel San Ángel</a></li>
						</ul>
					</div>
					<div class="clmn"><img src="/2014/imgs/design/hotel-centro.jpg" alt="Hoteles del Centro"></div>
				</div>
			</div>
			<?php include('libs/footer.php'); ?>
		</div>
		<?php $jQueryUI=true; include('libs/jquery-1.11.0.php'); ?>
		<script src="/2014/js/bxSlider.min.js"></script>
	</body>
</html>