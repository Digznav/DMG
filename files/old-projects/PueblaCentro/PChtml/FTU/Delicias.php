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
			<?php $ctMn='Delicias';
			include('libs/header.php');
			include('libs/contact.php');
			?>
			<div class="Wrapper">
				<div class="pFWrppr clearfix">
					<h1 class="ttl-Section"><span class="ttl-lgo l-dlcs"></span><span class="ttl-txt">Delicias</span></h1>
					<div class="clmn"><img src="/2014/imgs/design/mole-grande.jpg" alt="Delicias - Pollo con mole"></div>
					<div class="clmn">
						<hr/>
						<p class="highlight">Los sabores poblanos son uno de los motivadores más destacados para quienes visitan nuestra ciudad.</p>
						<p>En el Centro Histórico de Puebla, encontrará una nutrida variedad de restaurantes y mercados típicos donde deleitarse a gusto a toda hora. Entre los platillos típicos poblanos, son dignos de mención los típicos Chiles en Nogada, un platillo orgullosamente poblano, y el Mole poblano, un plato fuerte que complementa carnes, pollo o cerdo.</p>
						<p>También son muy recomendables, el Pipián, de salsas mestizas, los Mixiotes, que consisten en carne enchilada cocida al vapor, además de infinidad de comidas típicas regionales cuyo repertorio gastronómico también está muy bien representado en nuestro Centro Histórico.</p>
						<p>Un capítulo aparte merecen los llamados Antojitos Poblanos, cuyo nombre se debe a que “se antojan” solo con verlos y porque no llegan a la categoría de plato fuerte y son considerados una comida ligera. Los Antojitos se encuentran en restaurantes, mercados y hasta en puestos ambulantes del Centro Histórico. Entre los más solicitados se destacan: las chalupas, los molotes, las chanclas, las quesadillas, las memelas, las gorditas, las tostadas, los tlacoyos, tamales y las clásicas Cemitas poblanas de pollo, pata de res o milanesa.</p>
					</div>
				</div>
			</div>
			<?php include('libs/footer.php'); ?>
		</div>
		<?php $jQueryUI=true; include('libs/jquery-1.11.0.php'); ?>
		<script src="/2014/js/bxSlider.min.js"></script>
	</body>
</html>