<?php include('libs/init.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>USEM PUEBLA::.</title>
		<link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<?php include('libs/jquery-1.11.0.php'); ?>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="greenBar"></div>
		<div class="container clearfix">
			<?php $ctMn='Formacion'; $ctSbMn='Calendario'; include('libs/header.php'); ?>
			<div class="sectionTitle"><span class="symb-icon icoRight"></span>Formación <span class="symb-icon icoRight"></span> <strong>Calendario</strong></div>
			<div class="content">
				<div class="tooltip"><span><strong>Haz clic para descargar el calendario en PDF.</strong></span></div>
				<div class="text">
					<span class="title"><strong>Calendario</strong></span><br>
					<a href="docs/calendario.pdf" type="application/pdf" target="_blank" class="downCalendar"><img src="imgs/calendar.png" alt="calendario" class="imgFull"></a>
				</div>
				<div class="sideImage"><img src="imgs/img8.jpg" alt="Quiénes somos"></div>
			</div>
			<a href="https://www.facebook.com/USEMPuebla?ref=hl" target="_blank" class="fbUSEM"><img src="imgs/fbUsem.png" alt="facebook.usempuebla"></a>
		</div>
		<?php include('libs/footer.php'); ?>
		<script src="js/query.min.js"></script>
	</body>
</html>