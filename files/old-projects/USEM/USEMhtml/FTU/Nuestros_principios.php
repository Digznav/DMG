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
			<?php $ctMn='Quienes_somos'; $ctSbMn='Nuestros_principios'; include('libs/header.php'); ?>
			<div class="sectionTitle"><span class="symb-icon icoRight"></span><a href="index.html">Quiénes somos</a> <span class="symb-icon icoRight"></span> <strong>Nuestros principios</strong></div>
			<div class="content">
				<div class="text">
					<span class="title"><strong>Nuestros principios</strong></span><br>
					<p><strong>USEM</strong> no es un organismo político ni tiene relación con partido alguno, ni depende de ninguna jerarquía eclesiástica. Nuestros 6 principios del Pensamiento Social Cristiano (PSC) son:</p>
					<ul>
						<li><strong><em>DIGNIDAD DE LA PERSONA</em></strong>: para reconocer que ninguna organización se desarrolla si no lo hacen las personas que la integran.</li>
						<li><strong><em>BIEN COMÚN</em></strong>: para favorecer el mejoramiento de todas las personas en la sociedad.</li>
						<li><strong><em>DESTINO UNIVERSAL DE LOS BIENES</em></strong>: para usar responsablemente los recursos que administramos.</li>
						<li><strong><em>SUBSIDIARIDAD</em></strong>: para ejercer una ayuda que empodere a las personas.</li>
						<li><strong><em>PARTICIPACIÓN</em></strong>: para contribuir en forma responsable e informada, al desarrollo de la vida cultural, económica, política y social de la comunidad a la que pertenecemos.</li>
						<li><strong><em>SOLIDARIDAD</em></strong>: para hacer nuestras, las causas justas de los demás.</li>
					</ul>
				</div>
				<div class="sideImage"><img src="imgs/img1.jpg" alt="Quiénes somos"></div>
			</div>
			<a href="https://www.facebook.com/USEMPuebla?ref=hl" target="_blank" class="fbUSEM"><img src="imgs/fbUsem.png" alt="facebook.usempuebla"></a>
		</div>
		<?php include('libs/footer.php'); ?>
		<script src="js/query.min.js"></script>
	</body>
</html>