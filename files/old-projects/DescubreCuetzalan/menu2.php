		<?php
		$menuurl = "xml/menu/menu.xml";  
		$contenido_menuxml = "";  
		if($menud = fopen($menuurl, "r"))
		{  
		while ($menuaux= fgets($menud, 1024)){  
		$contenido_menuxml .= $menuaux;  
		}  
		fclose($menud);  
		}else
		{  
		echo "No se pudo abrir el XML";  
		}  
		$menuxml = simplexml_load_string($contenido_menuxml);  
		?>
		<div id="header">
			<!-- Logo y Sociales -->
			<div id="logo"><a href="index.php"><img src="imgs/logo.jpg" width="200" height="100" border="0" alt="image"></a></div>
           
            
            
			<div id="sociales"><a href="http://www.youtube.com/channel/UC9Lwx5Wtxa4qyaT0_rNAwkQ?feature=watch" target="_blank"><img src="imgs/3social.png" width="32" height="32" border="0" alt="image"></a></div>
			<div id="sociales"><a href="http://www.facebook.com/pages/Descubre-Cuetzalan/233072616760802" target="_blank"><img src="imgs/1social.png" width="32" height="32" border="0" alt="image"></a></div>
   			<!-- Menu Pirncipal -->
			<div id="menuPrin">
				<div class="menu">
					<ul>
						<li class="ajusteTamaño"><a href="#">Descubre Cuetzalan</a>
							<ul>
								<li><a href="quienes.php">Quienes somos</a></li>
								<li><a href="mision.php">Misión</a></li>
								<li><a href="equipo.php">Equipo Operativo</a></li>
								<li><a href="historiaDeCuetzalan.php">Historia de Cuetzalan</a></li>
								<li><a href="servicios.php">Servicios de apoyo</a></li>
								<li><a href="preguntas.php">Preguntas frecuentes</a></li>
							</ul>
						</li>
						<li class="ajusteTamaño"><a href="#">Paquetes</a>
							<ul>
								<li><a href="#">Aventura</a>
									<ul>
										<li><a href="aventura01.php"><?php echo $menuxml->aventura1;?></a></li>
										<li><a href="aventura02.php"><?php echo $menuxml->aventura2;?></a></li>
									</ul>
								</li>
								<li><a href="#">Naturaleza y cultura</a>
									<ul>
										<li><a href="naturaleza01.php"><?php echo $menuxml->naturaleza1;?></a></li>
										<li><a href="naturaleza02.php"><?php echo $menuxml->naturaleza2;?></a></li>
										<li><a href="naturaleza03.php"><?php echo $menuxml->naturaleza3;?></a></li>
										<li><a href="naturaleza04.php"><?php echo $menuxml->naturaleza4;?></a></li>
										<li><a href="naturaleza05.php"><?php echo $menuxml->naturaleza5;?></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#">Rutas</a>
							<ul>
								<li><a href="ruta01.php"><?php echo $menuxml->ruta1;?></a></li>
								<li><a href="ruta02.php"><?php echo $menuxml->ruta2;?></a></li>
								<li><a href="ruta03.php"><?php echo $menuxml->ruta3;?></a></li>
								<li><a href="ruta04.php"><?php echo $menuxml->ruta4;?></a></li>
							</ul>
						</li>
						<li><a href="#">Elije tu recorrido</a>
							<ul>
								<li><a href="actividades01.php">Cabalgata a Cascada Corazón del bosque</a></li>
								<li><a href="actividades02.php">Gruta Atepolihui</a></li>
								<li><a href="actividades03.php">Gruta de Chichicazapan</a></li>
								<li><a href="actividades04.php">Rapel en Cascada el Salto</a></li>
								<li><a href="actividades05.php">Rapel en Cascada las Golondrinas</a></li>
								<li><a href="actividades06.php">Rapel en Cañon</a></li>
								<li><a href="actividades07.php">Ruta del Café</a></li>
								<li><a href="actividades08.php">Tirolesa</a></li>
								<li><a href="actividades09.php">Jardín Botánico</a></li>
								<li><a href="actividades10.php">Zona Arqueológica de Yohualichan</a></li>
								<li><a href="actividades11.php">Recorrido Histórico por Cuetzalan</a></li>
							</ul>
						</li>
						<li class="ajusteTamaño"><a href="#">Hospedaje</a>
							<ul>
								<li><a href="#">Hoteles</a>
									<ul>
										<?php
										if($menuxml->hotel1 != ""){
										?>
											<li><a href="hotel1.php"><?php echo $menuxml->hotel1; ?></a></li>
										<?php
										}
										?>
										<?php
										if($menuxml->hotel2 != ""){
										?>
											<li><a href="hotel2.php"><?php echo $menuxml->hotel2; ?></a></li>
										<?php
										}
										?>                                                                             
										<?php
										if($menuxml->hotel3 != ""){
										?>
											<li><a href="hotel3.php"><?php echo $menuxml->hotel3;?></a></li>
										<?php
										}
										?>
										<?php
										if($menuxml->hotel4 != ""){
										?>
											<li><a href="hotel4.php"><?php echo $menuxml->hotel4;?></a></li>
										<?php
										}
										?>
										<?php
										if($menuxml->hotel5 != ""){
										?>
											<li><a href="hotel5.php"><?php echo $menuxml->hotel5;?></a></li>
										<?php
										}
										?>
										<?php
										if($menuxml->hotel6 != ""){
										?>
											<li><a href="hotel6.php"><?php echo $menuxml->hotel6;?></a></li>
										<?php
										}
										?>
										<?php
										if($menuxml->hotel7 != ""){
										?>
											<li><a href="hotel7.php"><?php echo $menuxml->hotel7;?></a></li>
										<?php
										}
										?>
										<?php
										if($menuxml->hotel8 != ""){
										?>
											<li><a href="hotel8.php"><?php echo $menuxml->hotel8;?></a></li>
										<?php
										}
										?>                                
									</ul>
								</li>
								<li><a href="#">Cabañas</a>
									<ul>
										<?php
										 if($menuxml->cabana1 != ""){
										 ?>
											<li><a href="cabana1.php"><?php echo $menuxml->cabana1; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->cabana2 != ""){
										 ?>
											<li><a href="cabana2.php"><?php echo $menuxml->cabana2; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->cabana3 != ""){
										 ?>
											<li><a href="cabana3.php"><?php echo $menuxml->cabana3; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->cabana4 != ""){
										 ?>
											<li><a href="cabana4.php"><?php echo $menuxml->cabana4; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->cabana5 != ""){
										 ?>
											<li><a href="cabana5.php"><?php echo $menuxml->cabana5; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->cabana6 != ""){
										 ?>
											<li><a href="cabana6.php"><?php echo $menuxml->cabana6; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->cabana7 != ""){
										 ?>
											<li><a href="cabana7.php"><?php echo $menuxml->cabana7; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->cabana8 != ""){
										 ?>
											<li><a href="cabana8.php"><?php echo $menuxml->cabana8; ?></a></li>
										<?php
										}
										?>                                        
									</ul>
								</li>
								<li><a href="#">Posadas</a>
									<ul>
										<?php
										 if($menuxml->campamento1 != ""){
										 ?>
											<li><a href="campamento1.php"><?php echo $menuxml->campamento1; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->campamento2 != ""){
										 ?>
											<li><a href="campamento2.php"><?php echo $menuxml->campamento2; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->campamento3 != ""){
										 ?>
											<li><a href="campamento3.php"><?php echo $menuxml->campamento3; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->campamento4 != ""){
										 ?>
											<li><a href="campamento4.php"><?php echo $menuxml->campamento4; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->campamento5 != ""){
										 ?>
											<li><a href="campamento5.php"><?php echo $menuxml->campamento5; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->campamento6 != ""){
										 ?>
											<li><a href="campamento6.php"><?php echo $menuxml->campamento6; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->campamento7 != ""){
										 ?>
											<li><a href="campamento7.php"><?php echo $menuxml->campamento7; ?></a></li>
										<?php
										}
										?>                                        
										<?php
										 if($menuxml->campamento8 != ""){
										 ?>
											<li><a href="campamento8.php"><?php echo $menuxml->campamento8; ?></a></li>
										<?php
										}
										?>                                  
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="promociones.php">Eventos</a></li>
						<li><a href="galeria.php">Galería</a></li>
						<li><a href="comollegar.php">Cómo llegar</a></li>
						<li class="ajusteTamaño"><a href="contacto.php">Contacto</a></li>
					</ul>
				</div>
			</div>
		</div>
