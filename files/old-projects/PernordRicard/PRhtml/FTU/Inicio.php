<?php include('libs/functions.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Pernod Ricard México::.</title>
		<meta name="description" content="Pernod Ricard México">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="/imgs/design/favicon.ico">
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/bxslider.css">
		<script src="/js/modernizr-2.6.2.min.js"></script>
		<?php include('libs/jquery-1.11.0.php'); ?>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body class="contColor">
		<?php include('libs/header.php'); ?>
		<div id="container" class="generalBack clearfix">
			<div class="panel">
				<div class="content">
					<div class="sliderCont">
						<div class="sliderLoader">
							<span class="symb-icon icoLoader" id="loaderPop"></span>
							<script type="text/javascript">
								var i = 0;
								function loading() { i++; i = i < 8 ? i : 0; $('#loaderPop').text(i); }
								setInterval(loading, 100);
							</script>
							<p>Cargando imágenes...</p>
						</div>
						<ul class="bxslider">
							<li><img src="/imgs/banner/prm_banner01.jpg" alt="Absolut Vodka"></li>
							<li><img src="/imgs/banner/prm_banner02.jpg" alt="Ballantine's"></li>
							<li><img src="/imgs/banner/prm_banner03.jpg" alt="Chivas Regal"></li>
							<li><img src="/imgs/banner/prm_banner04.jpg" alt="Passport Socth"></li>
							<li><img src="/imgs/banner/prm_banner05.jpg" alt="Azteca de Oro"></li>
							<li><img src="/imgs/banner/prm_banner06.jpg" alt="Olmeca Altos"></li>
							<li><img src="/imgs/banner/prm_banner07.jpg" alt="Caribe Cooler"></li>
							<li><img src="/imgs/banner/prm_banner08.jpg" alt="La mezcla perfecta"></li>
							<!--<li><img src="/imgs/banner/prm_banner09.jpg" alt="Pernod Ricard México"></li>-->
						</ul>
					</div>
					<div class="contIndex clearfix">
						<div class="navPart marcas">
							<a href="/Nuestras-marcas/Absolut">
								<h3>Nuestras marcas</h3>
								<p>Pernod Ricard tiene un extenso<br>portafolio de marcas premium<br>locales e internacionales,<br>nombres de prestigio en los<br>que el Grupo invierte fuerte-<br>mente y sobre los cuales basa<br>su desarrollo.</p>
								<span class="spanGo">Marcas</span>
							</a>
						</div>
						<div class="navPart gente">
							<a href="/Nuestra-gente/Creadores-de-Convivialidad"  class="doItSlide">
								<h3>Nuestra gente</h3>
								<p>Es nuestra más grande fuente<br>de orgullo. El fuerte<br>compromiso de los empleados<br>de Pernod Ricard, quienes son<br>leales a la compañía que los<br>motiva y les brinda la<br>oportunidad de desarrollarse.</p>
								<span class="spanGo">Creadores<br>de convivialidad</span>
							</a>
						</div>
						<div class="navPart fundacion">
							<a href="/RSC/Modelo-de-RSC">
								<h3>Fundación PRM</h3>
								<p>En el mundo entero<br>compartimos de manera<br>responsable y actuamos de<br>manera sostenible.</p>
								<span class="spanGo">Conoce nuestra<br>Modelo de RSC.<br>Sitio Oficial</span>
							</a>
						</div>
						<section class="navPart noticias">
							<h3>Noticias</h3>
							<article>
								<p>Pernod Ricard México<br>presenta:<br>Boutique D’Hiver: una<br>experiencia de lujo</p>
								<a href="/PRM/Sala-de-Prensa">Ver más</a>
							</article>
						<!--	<article>
								<p>Absolut, marca icónica<br>en innovación mundial,<bR>presenta su nueva cam-<br>paña "Transform Today".</p>
								<a href="#">Ver más</a>
							</article>-->
						</section>
						<div class="navPart centros">
							<a href="/A-donde-ir" class="doItSlide">
								<h3>A dónde ir</h3>
								<p>¿Quieres saber dónde puedes<br>vivir momentos de<br>convivialidad?</p>
								<span class="spanGo">Ver más</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('libs/footer.php'); ?>
		<script src="/js/jquery.bxslider.min.js"></script>
		<script src="/js/query.min.js"></script>
		<script type="text/javascript">
			var imageSlider = null;
			var startTime = (new Date()).getTime();
			imageSlider = $('.bxslider').bxSlider({mode:'fade',controls:false,auto:true, onSliderLoad: function(){
				$('.sliderLoader').empty().remove();
			}});
		</script>
	</body>
</html>