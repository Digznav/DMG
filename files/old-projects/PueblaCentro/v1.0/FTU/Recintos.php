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
			<?php $ctMn='Recintos';
			include('libs/header.php');
			include('libs/contact.php');
			?>
			<div class="Wrapper">
				<div class="pFWrppr clearfix">
					<h1 class="ttl-Section"><span class="ttl-lgo l-rcnt"></span><span class="ttl-txt">Recintos</span></h1>
					<div class="clmn">
						<ul class="lst-plcs">
							<li><a href="/2014/Recinto/Auditorio-Siglo-XXI.php">– Auditorio Siglo XXI</a></li>
							<li><a href="/2014/Recinto/Centro-de-Convenciones.php">– Centro de Convenciones</a></li>
							<li><a href="/2014/Recinto/Centro-Mexicano-Libanes.php">– Centro Mexicano Libanés</a></li>
							<li><a href="/2014/Recinto/Complejo-Cultural-Universitario.php">– Comp. Cultural Universitario</a></li>
							<li><a href="/2014/Recinto/Nuevo-Centro-Expositor.php">– Nuevo Centro Expositor</a></li>
						</ul>
					</div>
					<div class="clmn"><img src="/2014/imgs/design/hotel-centro.jpg" alt="Recintos"></div>
				</div>
			</div>
			<?php include('libs/footer.php'); ?>
		</div>
		<?php $jQueryUI=true; include('libs/jquery-1.11.0.php'); ?>
		<script src="/2014/js/bxSlider.min.js"></script>
	</body>
</html>