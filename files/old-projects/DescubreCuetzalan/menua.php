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
            <div id="logo"><a href="index.php"><img src="imgs/logo.jpg" width="200" height="100" border="0" /></a></div>
            <!--<div id="sociales"><a href="http://www.youtube.com/" target="_blank"><img src="imgs/3social.png" width="32" height="32" border="0" /></a></div>-->
            <div id="sociales"><a href="http://www.facebook.com/pages/Descubre-Cuetzalan/233072616760802" target="_blank"><img src="imgs/1social.png" width="32" height="32" border="0" /></a></div>
            <!--<div id="sociales"><a href="http://twitter.com/" target="_blank"><img src="imgs/2social.png" width="32" height="32" border="0" /></a></div>-->
            <!-- Menu Pirncipal -->
            <div id="menuPrin">
                <div class="menu">
                    <ul>
                        <li class="ajusteTamaño"><a href="#">Descubre Cuetzalan</a>
                            <ul>
                                <li><a href="quienes.php">Quienes somos</a></li>
                                <li><a href="mision.php">Misión</a></li>
                                <li><a href="equipo.php">Nuestro equipo</a></li>
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
                                        <li><a href="hotel01Yohu.php">Mesón Yohualichan</a></li>
                                        <li><a href="hotel02Molina.php">Posada Molina</a></li>
                                        <li><a href="hotel03Taselotzin.php">Taselotzin</a></li>
                                        <li><a href="hotel04Mixti.php">Mixti</a></li>
                                        <li><a href="hotel05Kali.php">Tosepan Kali</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Cabañas</a>
                                    <ul>
                                        <li><a href="caba01Kali.php">Tosepan Kali</a></li>
                                        <li><a href="caba02Azul.php">Reserva Azul</a></li>
                                        <li><a href="caba03Metzinli.php">Metzintli</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Campamentos</a>
                                    <ul>
                                        <li><a href="camp01Azul.php">Palafitos Reserva Azul</a></li>
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

