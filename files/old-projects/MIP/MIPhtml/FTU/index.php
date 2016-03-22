<?php
include ("login.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::MIP::.</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	</head>
	<body>
		<header class="curve imgFront">
			<div>
				<a href="#">MIP - Manejo Integrado de Plagas</a>
				<p>Responsabilidad en<br>el manejo integral de plagas</p>
			</div>
		</header>

		<div class="backContent"></div>
		<div class="container">
			<aside>
				<nav class="mainNav">
					<ul>
						<li><a href="empresa.html">Nuestra empresa</a></li>
						<li><a href="cobertura.html">Área de cobertura</a></li>
						<li><a href="compromiso.html">Compromiso con la calidad</a></li>
						<li><a href="servicios.html">Nuestros servicios</a></li>
						<li><a href="programas.html">Programas de trabajo</a></li>
						<li><a href="clientes.html">Atención a clientes</a></li>
						<li><a href="direcciones.html">Direcciones y teléfonos</a></li>
					</ul>
				</nav>
				<form class="lgIn" method="post">
					<fieldset>
						<legend>Inicia sesión</legend>
						<input type="text" name="mipUser" placeholder="Usuario"><br>
						<input type="password" name="mipPass" placeholder="Contraseña">
						<button type="submit" class="login"><span></span></button>
						<!--input type="checkbox" name="mipRemember" id="mipRemember"> <label for="mipRemember">Recuérdame</label-->
					</fieldset>
					<!--a href="#" class="forgotPass">¿Olvidó su contraseña?</a><br>
					<a href="#" class="signUp">Registrese aquí</a-->
				</form>
				<div class="certifs">
					<a href="http://www.ancpuac.org/" target="_blank">ANCPUAC</a>
					<a href="http://www.npmapestworld.org/" target="_blank">NPMA</a>
				</div>
				<div class="social">
					<ul>
						<li><a href="#" target="_blank" class="wordpress">wordpress</a></li><li><a href="#" target="_blank" class="rss">rss</a></li><li><a href="#" target="_blank" class="youtube">youtube</a></li><li><a href="#" target="_blank" class="facebook">facebook</a></li><li><a href="#" target="_blank" class="twitter">twitter</a></li>
					</ul>
				</div>
			</aside>
			
			<div class="content">
				<div class="imageIndex"><img src="imgs/img.png" alt="nosotros MIP" usemap="#Map"></div>
				<div class="textIndex">
					<span class="title">Bienvenido</span>
					<p>Estamos de su lado. Con más de 15 años de experiencia, nuestro compromiso es con la calidad, asegurándole satisfacción total en el control de plagas a nivel industrial, comercial, residencial, logística y distribución.</p>
				</div>
				<div class="bannerIndex">
					<p><strong>NUESTRO PROGRAMA DE CALIDAD:</strong><br>ÉTICA, RESPONSABILIDAD Y RAPIDEZ en el Control de Plagas.</p>
				</div>
			</div>
			
			<footer>
				<a href="empresa.html">Nuestra empresa</a> - <a href="cobertura.html">Área de cobertura</a> - <a href="compromiso.html">Compromiso con la calidad</a> - <a href="servicios.html">Nuestros servicios</a> - <a href="programas.html">Programas de trabajo</a> - <a href="clientes.html">Atención a clientes</a> - <a href="direcciones.html">Direcciones y teléfonos</a><br>
				<p>MIP de Oriente 2013 Derechos reservados</p>
			</footer>
		</div>

		<map name="Map">
			<area class="person" data-area="dPerson" shape="poly" coords="70,102,74,157,90,196,63,239,49,300,39,397,170,418,293,402,287,324,250,251,197,240,160,200,182,155,186,106,161,59,106,57" href="#" alt="person">
			<area class="plant" data-area="dPlant" shape="poly" coords="307,252,308,280,335,272,369,285,423,266,387,252,405,227,385,209,367,220,371,250,337,247" href="#" alt="plant">
			<area class="time" data-area="dTime" shape="poly" coords="178,175,212,169,259,183,301,238,306,286,286,311,252,248,198,236,164,199" href="#" alt="time">
			<area class="dove" data-area="dDove" shape="poly" coords="268,188,289,214,347,186,383,154,380,134,420,92,413,83,398,94,405,34,377,35,359,86,323,44,318,88,348,118,323,134,296,180" href="#" alt="dove">
			<area class="light" data-area="dLight" shape="poly" coords="236,172,258,109,298,77,271,72,275,19,249,16,245,73,189,68,190,113,187,156,178,172,209,165" href="#" alt="light">
		</map>
		<script src="js/query.js"></script>

	</body>
</html>