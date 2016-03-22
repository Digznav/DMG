<?php
$gtURL = getUrl();
$pu = explode('/', $gtURL);
$currentPage = array_slice($pu, -2);
?>
<header class="headerPRM clearfix">
	<div class="pFH clearfix">
		<div class="searchBox">
			<!-- <div class="lineDiv"><input type="search" id="fieldSearch"><button type="button" id="buttonSearch">Buscador</button></div> -->
			<a href="http://pernod-ricard.com" target="_blank" id="outsideLink">Grupo Pernod Ricard</a>
		</div>
		<nav class="mainNav">
			<ul>
				<li class="section PernodLogo"><a href="/Inicio" class="doItSlide <?php echo ($currentPage[1] == 'Inicio') ? 'activeNav' : '' ?>"><h2 class="logo">Pernod Ricard</h2></a></li>
				<li class="section GrupoPR"><h2 class="<?php echo ($currentPage[0] == 'GPR') ? 'activeNav' : '' ?>">Grupo Pernod Ricard</h2>
					<ul class="mainSubNav">
						<li><a href="/GPR/Acerca-de" class="doItSlide <?php echo ($currentPage[1] == 'Acerca-de') ? 'activeNav' : '' ?>">Acerca de</a></li>
						<li><a href="/GPR/Historia" class="doItSlide <?php echo ($currentPage[1] == 'Historia') ? 'activeNav' : '' ?>">Historia</a></li>
						<li><a href="/GPR/Pilares-estrategicos" class="doItSlide <?php echo ($currentPage[1] == 'Pilares-estrategicos') ? 'activeNav' : '' ?>">Pilares estratégicos</a></li>
						<li><a href="/GPR/Presencia-mundial" class="doItSlide <?php echo ($currentPage[1] == 'Presencia-mundial') ? 'activeNav' : '' ?>">Presencia mundial</a></li>
						<li><a href="http://pernod-ricard.com/99/brands/see-all-brands" target="_blank">Íconos globales</a></li>
					</ul>
				</li>
				<li class="section PRMexico"><h2 class="<?php echo ($currentPage[0] == 'PRM') ? 'activeNav' : '' ?>">Pernod Ricard México</h2>
					<ul class="mainSubNav">
						<li><a href="/PRM/Acerca-de-Pernod-Mexico" class="doItSlide <?php echo ($currentPage[1] == 'Acerca-de-Pernod-Mexico') ? 'activeNav' : '' ?>">Acerca de</a></li>
						<li><a href="/PRM/Nuestro-Negocio-Internacional" class="doItSlide <?php echo ($currentPage[1] == 'Nuestro-Negocio-Internacional') ? 'activeNav' : '' ?>">Nuestro negocio internacional</a></li>
						<li><a href="/PRM/Sala-de-Prensa" class="doItSlide <?php echo ($currentPage[1] == 'Sala-de-Prensa') ? 'activeNav' : '' ?>">Sala de prensa</a></li>
						<li><a href="/PRM/Contacto" class="doItSlide <?php echo ($currentPage[1] == 'Contacto') ? 'activeNav' : '' ?>">Contacto</a></li>
						<!-- <li><a href="< ?php echo $absolteURL; ?>PRM/#">Aviso de privacidad</a></li> -->
					</ul>
				</li>
				<li class="section NMarcas"><h2 class="<?php echo ($currentPage[0] == 'Nuestras-marcas') ? 'activeNav' : '' ?>">Nuestras marcas</h2>
					<ul class="mainSubNav">
						<li><a href="/Nuestras-marcas/Absolut" class="doItSlide <?php echo ($currentPage[1] == 'Absolut') ? 'activeNav' : '' ?>">Absolut</a></li>
						<li><a href="/Nuestras-marcas/Ballantines" class="doItSlide <?php echo ($currentPage[1] == 'Ballantines') ? 'activeNav' : '' ?>">Ballantine’s</a></li>
						<li><a href="/Nuestras-marcas/Chivas-Regal" class="doItSlide <?php echo ($currentPage[1] == 'Chivas-Regal') ? 'activeNav' : '' ?>">Chivas Regal</a></li>
						<li><a href="/Nuestras-marcas/Passport-Scotch" class="doItSlide <?php echo ($currentPage[1] == 'Passport-Scotch') ? 'activeNav' : '' ?>">Passport Scotch</a></li>
						<li><a href="/Nuestras-marcas/Azteca-de-Oro" class="doItSlide <?php echo ($currentPage[1] == 'Azteca-de-Oro') ? 'activeNav' : '' ?>">Azteca de Oro</a></li>
						<li><a href="/Nuestras-marcas/Caribe-Cooler" class="doItSlide <?php echo ($currentPage[1] == 'Caribe-Cooler') ? 'activeNav' : '' ?>">Caribe Cooler</a></li>
						<li><a href="/Nuestras-marcas/Altos-Plata" class="doItSlide <?php echo ($currentPage[1] == 'Altos-Plata') ? 'activeNav' : '' ?>">Altos Plata</a></li>
					</ul>
				</li>
				<li class="section NGente"><h2 class="<?php echo ($currentPage[0] == 'Nuestra-gente') ? 'activeNav' : '' ?>">Nuestra gente</h2>
					<ul class="mainSubNav">
						<li><a href="/Nuestra-gente/Creadores-de-Convivialidad" class="doItSlide <?php echo ($currentPage[1] == 'Creadores-de-Convivialidad') ? 'activeNav' : '' ?>">Creadores de convivialidad</a></li>
						<li><a href="/Nuestra-gente/La-Mezcla-Perfecta" class="doItSlide <?php echo ($currentPage[1] == 'La-Mezcla-Perfecta') ? 'activeNav' : '' ?>">La mezcla perfecta</a></li>
					</ul>
				</li>
				<li class="section RSocial"><h2 class="<?php echo ($currentPage[0] == 'RSC') ? 'activeNav' : '' ?>">Responsabilidad social corporativa</h2>
					<ul class="mainSubNav sfNvMrgn">
						<li><a href="/RSC/Compromisos-de-la-industria" class="doItSlide <?php echo ($currentPage[1] == 'Compromisos-de-la-industria') ? 'activeNav' : '' ?>">Compromisos de la industria</a></li>
						<li><a href="/RSC/Modelo-de-RSC" class="doItSlide <?php echo ($currentPage[1] == 'Modelo-de-RSC') ? 'activeNav' : '' ?>">Modelo de RSC</a></li>
						<li><a href="/RSC/Fundacion-Pernod-Ricard-Mexico" class="doItSlide <?php echo ($currentPage[1] == 'Fundacion-Pernod-Ricard-Mexico') ? 'activeNav' : '' ?>">Fundación Pernod Ricard México</a></li>
						<li><a href="/RSC/ResponsibAll-Day" class="doItSlide <?php echo ($currentPage[1] == 'ResponsibAll-Day') ? 'activeNav' : '' ?>">Responsib'All Day</a></li>
					</ul>
				</li>
				<li class="section Unete"><h2 class="<?php echo ($currentPage[0] == 'Unete-a-nuestro-equipo') ? 'activeNav' : '' ?>">Únete a nuestro equipo</h2>
					<ul class="mainSubNav">
						<li><a href="/Unete-a-nuestro-equipo/Oportunidades-de-carrera" class="doItSlide <?php echo ($currentPage[1] == 'Oportunidades-de-carrera') ? 'activeNav' : '' ?>">Oportunidades de carrera</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</header>