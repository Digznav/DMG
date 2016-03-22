<?php $twitURL = 'https://twitter.com/fest_supernova'; ?>
<header class="snHeader clearfix">
	<div class="pFH clearfix">
		<a href="Inicio" id="logo" tabindex="-1">Supernova</a>
		<nav class="socialNav clearfix">
			<ul>
				<li><a href="https://www.facebook.com/pages/Festival-Internacional-Supernova/597839460303653?fref=ts" target="_blank" class="symb-icon icoFacebook"></a></li>
				<li><a href="https://twitter.com/fest_supernova" target="_blank" class="fancyTwit fancybox.iframe symb-icon icoTwitter"></a></li>
				<li><a href="http://instagram.com/grupomavels" target="_blank" class="symb-icon icoInstagram"></a></li>
			</ul>
		</nav>
		<nav class="mainNav clearfix">
			<ul>
				<li><a <?php if ($avoidNav == "Inicio") { echo 'href="#" class="active"'; } else { echo 'href="Inicio"'; } ?> >Inicio</a></li>
				<li><a <?php if ($avoidNav == "Ponentes") { echo 'href="#" class="active"'; } else { echo 'href="Ponentes"'; } ?> >Ponentes</a></li>
				<li><a <?php if ($avoidNav == "Memorias") { echo 'href="#" class="active"'; } else { echo 'href="Memorias"'; } ?> >Memorias</a></li>
				<li><a <?php if ($avoidNav == "Registro") { echo 'href="#" class="active"'; } else { echo 'href="Registro"'; } ?> >Registro</a></li>
				<li><a <?php if ($avoidNav == "Contacto") { echo 'href="#" class="active"'; } else { echo 'href="Contacto"'; } ?> >Contacto</a></li>
				<li><a <?php if ($avoidNav == "Noticias") { echo 'href="#" class="active"'; } else { echo 'href="Noticias"'; } ?> >Noticias</a></li>
			</ul>
		</nav>
	</div>
</header>