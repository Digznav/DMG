<?php include('libs/init.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>USEM PUEBLA::.</title>
		<link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/colorbox.css">
		<?php include('libs/jquery-1.11.0.php'); ?>
		<script src="js/jquery.colorbox.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="greenBar"></div>
		<div class="container clearfix">
			<?php $ctMn='Galeria'; include('libs/header.php'); ?>
			<div class="sectionTitle"><span class="symb-icon icoRight"></span> <strong>Galería</strong></div>
			<div class="contentGallery">
				<div class="albumDiv">
					<span class="titleAlbum"><strong>Álbumes</strong></span>
					<ul class="albumList">
						<li><a href="#" data-album="albumSeminario"><img src="imgs/galeria/albumSeminario/albumFace.jpg" alt="Seminario de Liderazgo"><span>Seminario de Liderazgo, Comunicación y Coaching</span></a></li>
						<li><a href="#" data-album="albumJunta"><img src="imgs/galeria/albumJunta/albumFace.jpg" alt="Junta del consejo"><span>Junta del consejo</span></a></li>
						<li><a href="#" data-album="albumConvenio"><img src="imgs/galeria/albumConvenio/albumFace.jpg" alt="Firma de convenio"><span>Firma de Convenio Confederación USEM - UPAEP</span></a></li>
						<li><a href="#" data-album="albumDesayuno"><img src="imgs/galeria/albumDesayuno/albumFace.jpg" alt="Desayuno Conferencia"><span>Desayuno Conferencia 16 de Abril</span></a></li>
						
						<li><a href="#" data-album="albumComisionEje"><img src="imgs/galeria/albumComisionEje/albumFace.jpg" alt="Comisión Ejecutiva"><span>Comisión Ejecutiva</span></a></li>
						<li><a href="#" data-album="albumTomaProtesta"><img src="imgs/galeria/albumTomaProtesta/albumFace.jpg" alt="Toma de protesta CCE"><span>Toma de protesta CCE</span></a></li>
						<li><a href="#" data-album="albumJuntaConsejoDirectivo"><img src="imgs/galeria/albumJuntaConsejoDirectivo/albumFace.jpg" alt="Junta de Consejo Directivo"><span>Junta de Consejo Directivo</span></a></li>
						<li><a href="#" data-album="albumComisionEje2"><img src="imgs/galeria/albumComisionEje2/albumFace.jpg" alt="Comisión Ejecutiva"><span>Comisión Ejecutiva del 04 de Marzo del 2013</span></a></li>
						<li><a href="#" data-album="videos"><img src="imgs/galeria/videos/albumFace.jpg" alt="videos"><span>Videos</span></a></li>

					</ul>
				</div>
				<div class="imagesDiv">
					<span class="titleGallery"><strong>Álbum:</strong> <span></span></span>
					<div class="galleryAdvice"><span>=</span><br><strong>Por favor seleccione algún álbum.</strong></div>
					<div class="galleryLoading"><img src="imgs/galeria/loader.gif" alt="loader"><br><strong>Obteniendo imágenes...</strong><br>Por favor espere</div>
					<div class="galleryError"><span>&#0092;</span><br><strong>Lo sentimos, la búsqueda no se pudo realizar adecuadamente.</strong><br>Por favor intenta de nuevo.</div>
					<ul class="imagesList"></ul>
				</div>
			</div>
			<a href="https://www.facebook.com/USEMPuebla?ref=hl" target="_blank" class="fbUSEM"><img src="imgs/fbUsem.png" alt="facebook.usempuebla"></a>
		</div>
		<?php include('libs/footer.php'); ?>
		<script src="js/query.min.js"></script>
	</body>
</html>