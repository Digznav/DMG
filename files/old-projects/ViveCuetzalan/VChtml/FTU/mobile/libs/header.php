<?php
$navActive = 'navActive';
require_once("../libs/conexion.php");
?>
<header class="clearfix">
	<a href="Inicio" class="logo">Vive Cuetzalan HOY</a>
	<div class="showNavMobile"><a href="#" class="symb-icon icoList"></a></div>
	<?php include("clima.php"); ?>
	<nav class="mainNav">
		<ul class="navP1 clearfix">
			<li><a href="Como_es" class="noHover <?php if (isset($actMenu) && $actMenu == 'Como_es') { echo $navActive; } ?>">¿Cómo es?</a></li>
			<li><a href="Donde_hospedarse" class="noHover <?php if (isset($actMenu) && $actMenu == 'Donde_hospedarse') { echo $navActive; } ?>">¿Dónde hospedarse?</a></li>
			<li><a href="Donde_comer" class="noHover <?php if (isset($actMenu) && $actMenu == 'Donde_comer') { echo $navActive; } ?>">¿Dónde comer?</a></li>
			<li><a href="Que_hacer" class="noHover <?php if (isset($actMenu) && $actMenu == 'Que_hacer') { echo $navActive; } ?>">¿Qué hacer?</a></li>
			<li><a href="Donde_esta" class="noHover <?php if (isset($actMenu) && $actMenu == 'Donde_esta') { echo $navActive; } ?>">¿Dónde está?</a></li>
		</ul>
		<ul class="navP2 clearfix">
			<li><a href="Promociones" class="noHover <?php if (isset($actMenu) && $actMenu == 'Promociones') { echo $navActive; } ?>">Promociones</a></li>
			<li><a href="Arte_cultura" class="noHover <?php if (isset($actMenu) && $actMenu == 'Arte_cultura') { echo $navActive; } ?>">Arte y cultura</a></li>
			<li><a href="Danzas_ritos" class="noHover <?php if (isset($actMenu) && $actMenu == 'Danzas_ritos') { echo $navActive; } ?>">Danzas y ritos</a></li>
			<li><a href="Las_fiestas" class="noHover <?php if (isset($actMenu) && $actMenu == 'Las_fiestas') { echo $navActive; } ?>">Las fiestas</a></li>
			<li><a href="Gastronomia" class="noHover <?php if (isset($actMenu) && $actMenu == 'Gastronomia') { echo $navActive; } ?>">Gastronomía</a></li>
			<li><a href="La_aventura" class="noHover <?php if (isset($actMenu) && $actMenu == 'La_aventura') { echo $navActive; } ?>">La aventura</a></li>
			<li><a href="Contacto" class="noHover <?php if (isset($actMenu) && $actMenu == 'Contacto') { echo $navActive; } ?>">Contacto</a></li>
		</ul>
	</nav>
</header>