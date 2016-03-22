<?php include('libs/init.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>USEM PUEBLA::.</title>
		<meta name="author" content="Vmasideas">
		<meta name="subject" content="USEM PUEBLA">
		<meta name="Description" content="La Unión Social de Empresarios de México, Puebla, A.C. -USEM- es una organización no lucrativa que desde 1957 realiza un trabajo pionero en la formación social de l@s empresari@s para lograr empresas altamente productivas y plenamente humanas en beneficio de México. ">
		<meta name="Keywords" content="Unión social de empresarios, empresarios de puebla, empresarios poblanos, formación social, cufoso, cufoso Puebla, doctrina social cristiana, UNIAPAC, UNIAPAC Puebla, empresarios sociales, empresario socialmente responsable, empresa socialmente responsable ">
		<meta name="Geography" content="Mexico, Puebla">
		<meta name="Language" content="Spanish">
		<meta http-equiv="Expires" content="never">
		<meta name="Copyright" content="Vmasideas">
		<meta name="Designer" content="Diego Miguel">
		<meta name="Publisher" content="Vmasideas">
		<meta name="Revisit-After" content="10 days">
		<meta name="distribution" content="Global">
		<meta name="Robots" content="INDEX, FOLOW">
		<meta name="city" content="Puebla">
		<meta name="country" content="Mexico">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/bxslider.css">
		<?php include('libs/jquery-1.11.0.php'); ?>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=694089907321026";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class="greenBar"></div>
		<div class="container clearfix">
			<?php $ctMn='Inicio'; include('libs/header.php'); ?>
			<div class="ndx-Carousel">
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
					<li><img src="imgs/Inicio/img1.jpg" alt="carucel"></li>
					<li><img src="imgs/Inicio/img1.jpg" alt="carucel"></li>
					<li><img src="imgs/Inicio/img1.jpg" alt="carucel"></li>
					<li><img src="imgs/Inicio/img1.jpg" alt="carucel"></li>
					<li><img src="imgs/Inicio/img1.jpg" alt="carucel"></li>
				</ul>
			</div>
			<div class="text ndx-Txt">
				<p>La Unión Social de Empresarios de México, Puebla, A.C. -<strong>USEM</strong>- es una organización no lucrativa que desde 1957 realiza un trabajo pionero en la formación social de l@s empresari@s para lograr empresas altamente productivas y plenamente humanas en beneficio de México.</p>
				<p>Le invitamos a conocer más sobre la USEM Puebla en nuestro sitio web.</p>
				<br><br>
				<p>16 Sur No. 3114, 2° Piso. Col. El Mirador C.P. 72530. Puebla, Pue. México. Tel (222) 244 78 34. puebla@usempuebla.org</p>
			</div>
			<div class="fbPlugin-Cnt"><div class="fb-like-box" data-href="https://www.facebook.com/USEMPuebla?ref=hl" data-width="400" data-height="500" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div></div>
		</div>
		<?php include('libs/footer.php'); ?>
		<script src="js/jquery.bxslider.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			var imageSlider = null;
			$(document).ready(function() {
				imageSlider = $('.bxslider').bxSlider({mode:'fade',controls:false,auto:true, onSliderLoad: function(){
					$('.sliderLoader').fadeOut(function() {
						$(this).empty().remove();
					});
				}});
			});
		</script>
	</body>
</html>