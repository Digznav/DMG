<?php
$navActive = 'navActive';
require_once("../libs/conexion.php");
?>
<header class="clearfix">
	<a href="Home" class="logo">Vive Cuetzalan HOY</a>
	<div class="showNavMobile"><a href="#" class="symb-icon icoList"></a></div>
	<?php include("clima.php"); ?>
	<nav class="mainNav">
		<ul class="navP1 clearfix">
			<li><a href="How_is_it" class="noHover <?php if (isset($actMenu) && $actMenu == 'Como_es') { echo $navActive; } ?>" >How is it?</a></li>
			<li><a href="Where_to_stay" class="noHover <?php if (isset($actMenu) && $actMenu == 'Donde_hospedarse') { echo $navActive; } ?>" >Where to stay?</a></li>
			<li><a href="Where_to_eat" class="noHover <?php if (isset($actMenu) && $actMenu == 'Donde_comer') { echo $navActive; } ?>" >Where to eat?</a></li>
			<li><a href="What_to_do" class="noHover <?php if (isset($actMenu) && $actMenu == 'Que_hacer') { echo $navActive; } ?>" >What to do?</a></li>
			<li><a href="Where_is_it" class="noHover <?php if (isset($actMenu) && $actMenu == 'Donde_esta') { echo $navActive; } ?>" >Where is it?</a></li>
		</ul>
		<ul class="navP2 clearfix">
			<li><a href="Promotion" class="noHover <?php if (isset($actMenu) && $actMenu == 'Promociones') { echo $navActive; } ?>" >Promotions</a></li>
			<li><a href="Art_culture" class="noHover <?php if (isset($actMenu) && $actMenu == 'Arte_cultura') { echo $navActive; } ?>" >Art and Culture</a></li>
			<li><a href="Dances_rites" class="noHover <?php if (isset($actMenu) && $actMenu == 'Danzas_ritos') { echo $navActive; } ?>" >Dances and rites</a></li>
			<li><a href="Festivities" class="noHover <?php if (isset($actMenu) && $actMenu == 'Las_fiestas') { echo $navActive; } ?>" >Festivities</a></li>
			<li><a href="Gastronomy" class="noHover <?php if (isset($actMenu) && $actMenu == 'Gastronomia') { echo $navActive; } ?>" >Gastronomy</a></li>
			<li><a href="Adventure" class="noHover <?php if (isset($actMenu) && $actMenu == 'La_aventura') { echo $navActive; } ?>" >Adventure</a></li>
			<li><a href="Contact" class="noHover <?php if (isset($actMenu) && $actMenu == 'Contacto') { echo $navActive; } ?>" >Contact us</a></li>
		</ul>
	</nav>
</header>