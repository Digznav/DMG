<?php $navActive = 'activeNav'; ?>
<header class="headUSEM clearfix">
	<div class="logo"><a href="Inicio.php"><img src="imgs/logo.png" alt="Unión Social de Empresarios de México A.C."></a></div>
	<nav class="mainNav">
		<ul>
			<li class="<?php echo $ctMn == 'Inicio' ? $navActive : ''; ?> wd-In"><a href="Inicio.php"><strong>Inicio</strong></a>
			<li class="<?php echo $ctMn == 'Formacion' ? $navActive : ''; ?> highlight"><a href="#"><strong>Formación</strong></a>
				<ul>
					<li><a class="<?php echo $ctSbMn == 'Seminarios' ? $navActive : ''; ?>" href="Seminarios.php">Seminarios</a></li>
					<li><a class="<?php echo $ctSbMn == 'CUFOSO' ? $navActive : ''; ?>" href="CUFOSO.php">CUFOSO</a></li>
					<li><a class="<?php echo $ctSbMn == 'CIS' ? $navActive : ''; ?>" href="CIS.php">CIS</a></li>
					<li><a class="<?php echo $ctSbMn == 'Talleres' ? $navActive : ''; ?>" href="Talleres.php">Talleres</a></li>
					<li><a class="<?php echo $ctSbMn == 'Conferencias' ? $navActive : ''; ?>" href="#">Conferencias</a></li>
					<li><a class="<?php echo $ctSbMn == 'Calendario' ? $navActive : ''; ?>" href="Calendario.php">Calendario</a></li>
				</ul>
			</li>
			<li class="<?php echo $ctMn == 'Quienes_somos' ? $navActive : ''; ?> wd-QS"><a href="Quienes_somos.php">Quiénes somos</a>
				<ul>
					<li><a class="<?php echo $ctSbMn == 'Nuestros_principios' ? $navActive : ''; ?>" href="Nuestros_principios.php">Nuestros principios</a></li>
					<li><a class="<?php echo $ctSbMn == 'USEM_Joven' ? $navActive : ''; ?>" href="USEM_Joven.php">USEM Joven</a></li>
				</ul>
			</li>
			<li class="<?php echo $ctMn == 'Galeria' ? $navActive : ''; ?> wd-Gl"><a href="Galeria.php">Galería</a></li>
			<li class="<?php echo $ctMn == 'Membresia' ? $navActive : ''; ?>"><a href="Membresia.php">Membresía</a></li>
			<li class="<?php echo $ctMn == 'Registro' ? $navActive : ''; ?>"><a href="Registro.php">Registro</a></li>
			<li class="<?php echo $ctMn == 'Contacto' ? $navActive : ''; ?>"><a href="Contacto.php">Contacto</a></li>
		</ul>
	</nav>
</header>