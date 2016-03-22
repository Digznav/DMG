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
			<?php $ctMn='Nosotros';
			include('libs/header.php');
			include('libs/contact.php');
			?>
			<div class="Wrapper">
				<div class="pFWrppr clearfix">
					<h1 class="ttl-Section"><span class="ttl-lgo l-nsts"></span><span class="ttl-txt">Nosotros</span></h1>
					<div class="clmn"><img src="/2014/imgs/design/centro-grande.jpg" alt="Centro Puebla"></div>
					<div class="clmn">
						<hr>
						<p>Somos un grupo empresarial hotelero poblano, unido por una misma propuesta filosófica de calidad de estadía para nuestros clientes. Una apuesta a la alta sensibilidad humana y de cara a las exigencias del presente. </p>
						<p>Un esfuerzo que prioriza la convivencia entre la conservación de la riqueza cultural de esta parte del mundo protegiendo los valores arquitectónico- conceptuales de la historia de la Ciudad, y su armonía con los avances de la modernidad en todo su esplendor.</p>
					</div>
				</div>
			</div>
			<?php include('libs/footer.php'); ?>
		</div>
		<?php $jQueryUI=true; include('libs/jquery-1.11.0.php'); ?>
		<script src="/2014/js/bxSlider.min.js"></script>
	</body>
</html>