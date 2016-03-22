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
		<link rel="shortcut icon" type="image/x-icon" href="/imgs/design/favicon.ico">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bxslider.css">
		<script src="js/modernizr.2.7.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="background-image"></div>
		<div id="container" class="clearfix">
			<?php
			include('libs/header.php');
			include('libs/contact.php');
			?>
			<div class="Wrapper">
				<div class="pFWrppr clearfix">
					<!-- <img src="/ /imgs/banner/banner.jpg" alt="banner" class="ndxBanner"> -->
					<div class="clmn">
						<h2>PUEBLA CENTRO</h2>
						<h3>Despierta a la magia del renacer.</h3>
						<hr/>
						<img src="/imgs/parque_lineal.jpg" alt="Parque Lineal">
						<p>Patrimonio Cultural de la Humanidad, la Ciudad de Puebla es sinónimo de espiritualidad y tradición por la perfección de su trazo, y monumentalidad de su arquitectura colonial construida en fina piedra, ónix, mármol e inimitable talavera. </p>
						<p class="highlight">En ella habitan en total armonía, el espíritu renacentista, y la constante adaptación a la modernidad.</p>
						<p>Su propuesta hotelera enfocada al factor humano y  la excelencia en atención y servicio, hacen de Puebla un punto ideal para la confluencia del turismo cultural y de negocios.</p>
						<p>Venir a Puebla es asistir al encuentro con la tradición, expresiones artísticas y gastronómicas únicas, pero es ante todo, despertar a la magia del renacer...</p>
					</div>
					<div class="clmn spcl-Bx">
						<div class="spcls-Bxs bxs-1">
							<div class="lts"><img src="/ /imgs/catedral_rotoscopia.jpg" alt="Catedral de Puebla"></div>
							<h3>MEETING<br>PLANNER</h3>
							<a href="#" target="_blank">Descarga</a>
						</div>
						<div class="spcls-Bxs bxs-2">
							<div class="lts"><p>Si desea recibir información acerca de la organización de congresos o convenciones en los hoteles del centro, favor de contactar con:</p></div>
							<p><strong>LAT Guadalupe Gallegos C.<br>Asistente de Presidencia<br>Cel: 22 24 25 80 04</strong></p>
						</div>
					</div>
					<section class="clmn nws-Bx">
						<h2>Noticias</h2>
						<hr/>
						<article class="rtcls-Min clearfix">
							<img src="/imgs/mole-mini.jpg" class="prt-Img">
							<div class="prt-Txt">
								<h2>Noticia 1</h2>
								<h3>Subtítulo de tres palabras.</h3>
								<p>Si desea recibir información acerca de la organización de congresos o convenciones en los hoteles del centro, favor de contactar con:</p>
							</div>
						</article>
						<article class="rtcls-Min clearfix">
							<img src="/imgs/centro-mini.jpg" class="prt-Img">
							<div class="prt-Txt">
								<h2>Noticia 1</h2>
								<h3>Subtítulo de tres palabras.</h3>
								<p>Si desea recibir información acerca de la organización de congresos o convenciones en los hoteles del centro, favor de contactar con:</p>
							</div>
						</article>
					</section>
				</div>
			</div>
			<?php include('libs/footer.php'); ?>
		</div>
		<div id="debug"></div>
		<?php $jQueryUI=true; include('libs/jquery-1.11.0.php'); ?>
		<script type="text/javascript">
			jQuery(function($) {
				$('.bxslider').bxSlider({
					mode:'fade',
					pager:false,
					controls:false,
					auto:true
				});
			});
		</script>
	</body>
</html>