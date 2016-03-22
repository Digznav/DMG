<?php require_once("admin/models/config.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>.::Fundación Taboada::.</title>
		<meta name="description" content="Fundación Taboada">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Encabezado -->
		<header>
			<div>
				<a href="Inicio" class="logo">Fundación Taboada</a>
				<div class="contFormLang">
					<div class="langEngEsp">
						<a href="#" class="activeLang" data-lang="es">Español</a><a href="#" data-lang="en">English</a>
					</div>
					<?php include "publicLogin.php";?>
				</div>
				<div class="social clear">
					<span>Síguenos</span><a href="#" class="fb" target="_blank">Facebook</a><a href="#" class="tw" target="_blank">Twitter</a>
				</div>
				<nav class="mainNav clear">
					<ul><li><a href="Inicio">Inicio</a></li><li><a href="#">Acerca de la fundación</a><ul><li><a href="Historia">Historia</a></li><li><a href="Mision">Misión & Visión</a></li><li><a href="Noticias">Historial de Noticias</a></li><!-- li><a href="#">Nuestro equipo</a></li --><!-- li><a href="#">Junta Directiva</a></li --></ul></li><li><a href="Becas" class="activeNav">Programa de becas</a><ul><li><a href="Preguntas">Preguntas frecuentes</a></li></ul></li><li><a href="#">Galería de eventos</a><ul><li><a href="Fotografias">Fotografías</a></li><li><a href="Videos">Videos</a></li></ul></li><li><a href="Ayuda">¿Deseas ayudar?</a></li><li><a href="Contacto">Contacto</a></li></ul>
				</nav>
			</div>
		</header>
		<!-- Contenedor principal -->
		<div class="container">
			<!-- Contenido -->
			<div class="content">
				<span class="pageLocation"><span class="actualPage">Programa de becas</span></span><br>
				<span class="title">Programa de becas</span>
				<div class="cont">
					<div id="accordion" class="accr">
						<h3>Programas de estudio aceptados</h3>
						<div>
							<ul>
								<li><span class="subtitle">TECNOLÓGICAS</span>
									<ul>
										<li>Ing. en Sistemas Computacionales</li>
										<li>Ing. Química</li>
										<li>Ing. Mecánica</li>
										<li>Ing. Eléctrica y Electrónica</li>
										<li>Ing. Civil</li>
										<li>Ing. en Alimentos</li>
										<li>Ing. Industrial y Textil</li>
										<li>Ing. Mecatrónica</li>
										<li>Ing. Ambiental y Ecología</li>
									</ul>
								</li>
								<li><span class="subtitle">CIENCIAS</span>
									<ul>
										<li>Biología</li>
										<li>Física</li>
										<li>Química</li>
										<li>Matemáticas</li>
										<li>Químico Farmacobiólogo</li>
										<li>Nutrición</li>
									</ul>
								</li>
								<li><span class="subtitle">CIENCIAS ECONÓMICO ADMINISTRATIVAS</span>
									<ul>
										<li>Contador Público y Auditor</li>
										<li>Administración de Empresas</li>
										<li>Economía</li>
										<li>Relaciones Industriales</li>
										<li>Mercadotecnia</li>
										<li>Actuaría</li>
										<li>Relaciones Internacionales</li>
									</ul>
								</li>
								<li><span class="subtitle">HUMANIDADES</span>
									<ul>
										<li>Psicología</li>
										<li>Ciencias de la Comunicación</li>
										<li>Educación</li>
										<li>Administración de Instituciones Educativas</li>
									</ul>
								</li>
							</ul>
						</div>
						<h3>Perfil del solicitante</h3>
						<div>
							<ul>
								<li>Ser de nacionalidad mexicana.</li>
								<li>Haber <strong>terminado completa y satisfactoriamente</strong> los de <strong>bachillerato</strong> en alguna <strong>preparatoria o vocacional del país</strong>, habiendo obtenido un <strong>promedio total de nueve</strong>.</li>
								<li>Que la situación económica actual del solicitante amerite la concesión de la beca.</li>
								<li>Aprobar satisfactoriamente a criterio del Departamento Educativo de la Fundación, el examen de conocimientos, que realiza esta misma.</li>
								<li>Realizar los exámenes psicológicos requeridos por esta Institución.</li>
								<li>Aprobar el examen de admisión de la Universidad o Institución de enseñanza superior en la que se desea ingresar y cumplir con los requisitos de admisión de la misma.</li>
								<li>No ser casado.</li>
								<li>Entregar la documentación solicitada por esta Fundación.</li>
								<li>Hacer todos los trámites personalmente.</li>
							</ul>
						</div>
						<h3>Beneficios</h3>
						<div>
							<p>El Departamento de becas, proporciona la oportunidad de estudiar una licenciatura en las siguientes Universidades del País: </p>
							<ul>
								<li>Universidad Anáhuac. *</li>
								<li>Universidad Popular Autónoma del Estado de Puebla.</li>
								<li>Universidad Iberoamericana Plantel Golfo Centro.</li>
								<li>Instituto Tecnológico y de Estudios Superiores de Monterey (en cualquiera de sus campus). *</li>
								<li>Fundación Universidad de las Américas de Puebla. *</li>
								<li>ITAM. *</li>
							</ul>
							<small>* Condiciones especiales para consultar con el Patronato.</small>
						</div>
						<h3>Requisitos</h3>
						<div>
							<ul>
								<li>6 fotografías tamaño mignón recientes.</li>
								<li>Una copia fotostática del certificado de preparatoria (provisionalmente se puede entregar una constancia de calificaciones).</li>
								<li>Una copia fotostática del certificado de secundaria.</li>
								<li>Una carta dirigida a la Fundación, exponiendo los motivos por los cuales se solicita la beca.</li>
								<li>Dos cartas de recomendación académicas.</li>
								<li>Una copia fotostática del acta de nacimiento.</li>
								<li>Certificado de salud.</li>
								<li>Ficha tórax-pulmonar de la S.S.A.</li>
								<li>V.D.R.L. del Hospital UPAEP.</li>
								<li>Comprobante de Ingresos Familiares.</li>
								<li>Copia fotostática del último pago predial o recibo de renta.</li>
							</ul>
							<p><strong>NOTA:</strong> <em>Estos documentos deberán ser entregados junto con la solicitud de beca que se proporciona en las oficinas de esta Fundación, en la fecha que sea estipulada.</em></p>
						</div>
						<h3>Condiciones para conservar la beca</h3>
						<div>
							<ol>
								<li>Ser alumno regular.</li>
								<li>Conservar un promedio de nueve cada semestre de la carrera.</li>
								<li>No casarse durante la carrera. En caso de hacerlo y dejar la carrera, deberá reembolsar la totalidad de lo otorgado.</li>
								<li>Realizar el Servicio Social de 480 horas en los programas de la Fundación.</li>
								<li>En caso de enfermedad, dar aviso inmediatamente a la Fundación y a la Universidad.</li>
								<li>El becario no puede trabajar durante la Carrera.</li>
							</ol>
							<p>Los datos contenidos en la información proporcionada por los solicitantes, son de carácter confidencial y serán verificados, por lo que el solicitante se compromete respecto a la estricta veracidad de los mismos, de tal forma que cualquier omisión o inexactitud en éstos, es motivo suficiente para no considerar la solicitud válida para esta Fundación.</p>
							<p><strong>NOTA:</strong> <em>El alumno que sin justificación válida abandone los estudios, estará obligado a pagar el importe de las colegiaturas que la Fundación haya cubierto a la Universidad hasta ese momento.</em></p>
						</div>
						<h3>Calendario de convocatorias</h3>
						<div>
							<!-- <p><span class="subtitle">10 DE MAYO</span><br>In hac habitasse platea dictumst. Quisque posuere porttitor nibh feugiat molestie. Cras vel viverra nisl. Cras sodales mi vel tincidunt tempor. Sed eget bibendum risus. Donec et consectetur massa. Aliquam erat volutpat.</p> -->
							<p><strong>SIN DATOS POR EL MOMENTO...</strong></p>
						</div>
					</div>
				</div>
				<hr>
				<!-- Eventos -->
				<aside class="generalAside events"><?php include "lib/eventsFooter.php"; ?></aside>
			</div>
			
			<!-- Noticias -->
			<section class="news"><?php include "lib/News.php"; ?></section>
			
			<!-- Mini ayuda -->
			<aside class="generalAside miniHelp"><?php include "lib/miniHelp.php"; ?></aside>
		</div>
		
		<!-- Píe de página -->
		<footer>
			<div>
				<nav>
					<ul><li><a href="Inicio">Inicio</a></li><li><a href="#">Acerca de la fundación</a><ul><li><a href="Historia">Historia</a></li><li><a href="Mision">Misión & Visión</a></li><li><a href="Noticias">Historial de Noticias</a></li><!-- li><a href="#">Nuestro equipo</a></li --><!-- li><a href="#">Junta Directiva</a></li --></ul></li><li><a href="Becas">Programa de becas</a><ul><li><a href="Preguntas">Preguntas frecuentes</a></li></ul></li><li><a href="#">Galería de eventos</a><ul><li><a href="Fotografias">Fotografías</a></li><li><a href="Videos">Videos</a></li></ul></li><li><a href="Ayuda">¿Deseas ayudar?</a></li><li><a href="Contacto">Contacto</a></li></ul>
				</nav>
				<div class="social">
					<span>Síguenos</span><a href="#" class="fb" target="_blank">Facebook</a><a href="#" class="tw" target="_blank">Twitter</a>
				</div>
			</div>
			<div><p>FUNDACIÓN TABOADA 2013 Todos los derechos reservados</p></div>
		</footer>
		<div class="noDisp"><?php echo $completeNews; ?></div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.colorbox.js"></script>
		<script type="text/javascript">
			$(document).ready(function (){
				$("#accordion").accordion({ heightStyle: "content" });
				$(".news article a").colorbox({inline:true, width:"640px"});
			});
		</script>
		<script src="js/query.min.js"></script>
	</body>
</html>