<?php $navActive='ctvNv';
/*
Mapa.php
*/
?>
<header class="ftHeader">
	<div class="mnNvCnt">
		<nav class="pFNv mainNav clearfix">
			<a href="#" class="xpnd-Nv"></a>
			<a href="/2014/Inicio.php" class="logo">Puebla Centro - Despierta la magia del renacer</a>
			<div class="main-Itms">
				<a class="nstrs <?php echo $ctMn == 'Nosotros' ? $navActive : ''; ?>" href="/2014/Nosotros.php">Nosotros</a>
				<a class="evnts <?php echo $ctMn == 'Eventos' ? $navActive : ''; ?>" href="/2014/Eventos.php">Eventos</a>
				<a class="rcrrds <?php echo $ctMn == 'Recorridos' ? $navActive : ''; ?>" href="/2014/Recorridos.php">Recorridos</a>
				<a class="cm ln-2 <?php echo $ctMn == 'Como_Llegar' ? $navActive : ''; ?>" href="/2014/Como-Llegar.php">Cómo<br>Llegar</a>
				<a class="mp <?php echo $ctMn == 'Mapa' ? $navActive : ''; ?>" href="/2014/Mapa.php">Mapa</a>
				<a class="htls ln-2 <?php echo $ctMn == 'Hoteles_del_Centro' ? $navActive : ''; ?>" href="/2014/Hoteles-del-Centro.php">Hoteles<br>del&nbsp;Centro</a>
				<a class="rcnts <?php echo $ctMn == 'Recintos' ? $navActive : ''; ?>" href="/2014/Recintos.php">Recintos</a>
				<a class="trdcn <?php echo $ctMn == 'Tradicion' ? $navActive : ''; ?>" href="/2014/Tradicion.php">Tradición</a>
				<a class="dlcs <?php echo $ctMn == 'Delicias' ? $navActive : ''; ?>" href="/2014/Delicias.php">Delicias</a>
			</div>
			<div class="socialNav">
				<a href="/2014/" class="fb"><span></span>Facebook</a>
				<a href="/2014/" class="tw"><span></span>Twitter</a>
			</div>
		</nav>
	</div>
	<div class="pFH">
		<ul class="bxslider">
			<li><img src="/2014/imgs/slider/img1.jpg" /></li>
			<li><img src="/2014/imgs/slider/img2.jpg" /></li>
			<li><img src="/2014/imgs/slider/img3.jpg" /></li>
			<li><img src="/2014/imgs/slider/img4.jpg" /></li>
			<li><img src="/2014/imgs/slider/img5.jpg" /></li>
			<li><img src="/2014/imgs/slider/img6.jpg" /></li>
			<li><img src="/2014/imgs/slider/img7.jpg" /></li>
		</ul>
	</div>
</header>