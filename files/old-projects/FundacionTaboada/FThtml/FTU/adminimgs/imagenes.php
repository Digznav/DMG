<?php 
// echo "Si esta logeado se queda aquí sino se manda a login.php";
session_start();

//if ( !isset( $_SESSION['Ok'] ) )
//{
//	echo '[' . $_SESSION['Ok'] . ']';
//	Header('location: login.php');

//}

include_once('config.php');
include_once(FS_SIMPL . 'simpl.php');
include_once( FS_WIDEIMAGE . 'WideImage.php');

$db = new DB;
$db->Connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

define('PAGE_TITLE', 'Im&aacute;genes - Tu informaci&oacute;n');

//include_once('inc/header.php');
define('MENU_OPTION','imagenes');
//include_once('inc/menu.php');


$imagen_tamanos = array(
			'grande' => array( 'ancho' => 590, 'alto' => 300 ),
			'mediano' => array( 'ancho' => 320, 'alto' => 235 ),
			'chico' => array( 'ancho' => 210, 'alto' => 240 ),
			'thumb' => array( 'ancho' => 100, 'alto' => 100 )
);

$accion = isset($_GET['action']) ? $_GET['action'] : null;
$imagen_id = isset($_GET['imagen_id']) ? $_GET['imagen_id'] : null;

if (isset($accion) && $accion == 'edit') {
	$descr = $_POST['descripcion'];
	$leyenda = $_POST['leyenda'];
	$tipos_aceptados = array('image/jpeg','image/gif','image/png','image/pjpeg');
	# Subir imagen principal
	if (isset($_FILES["imagen"]['name']) && $_FILES["imagen"]['name'] != '' && in_array( $_FILES["imagen"]['type'], $tipos_aceptados)){
		$upload_imagen = new Upload( $_FILES["imagen"] , IMAGES_DIR );
		$imagen_principal_nombre = $_FILES["imagen"]['name'];

		# Subir archivo
		$upload_correcto = $upload_imagen->UploadFile2( $imagen_principal_nombre );

		# Si se subió generar diferentes tamaños y guardar en base de datos
		if( $upload_correcto ) {
			$imagen_principal_nombrebase = substr($imagen_principal_nombre , 0, strripos($imagen_principal_nombre, '.')); // elimna extension
			$imagen_principal_ext = substr($imagen_principal_nombre, strripos($imagen_principal_nombre, '.')); // elimina nombre

			$imagen = WideImage::load( IMAGES_DIR . $imagen_principal_nombre );

			# Tamaño -> GRANDE
			$imagen_resize = $imagen->resize( $imagen_tamanos['grande']['ancho'] , $imagen_tamanos['grande']['alto'], 'fill', 'any' );
			$imagen_resize->saveToFile( IMAGES_DIR . $imagen_principal_nombrebase . '_grande' . $imagen_principal_ext );

			# Tamaño -> MEDIANO
			$imagen_resize = $imagen->resize( $imagen_tamanos['mediano']['ancho'] , $imagen_tamanos['mediano']['alto'], 'fill', 'any' );
			$imagen_resize->saveToFile( IMAGES_DIR . $imagen_principal_nombrebase . '_mediano' . $imagen_principal_ext );

			# Tamaño -> CHICO
			$imagen_resize = $imagen->resize( $imagen_tamanos['chico']['ancho'] , null , 'fill', 'any' );
			$imagen_resize->saveToFile( IMAGES_DIR . $imagen_principal_nombrebase . '_chico' . $imagen_principal_ext );

			# Tamaño -> THUMB
			$imagen_resize = $imagen->resize( $imagen_tamanos['thumb']['ancho'] , $imagen_tamanos['thumb']['alto'] , 'fill', 'any' );
			$imagen_resize->saveToFile( IMAGES_DIR . $imagen_principal_nombrebase . '_thumb' . $imagen_principal_ext );
				
			//echo $imagen_principal_nombre;
			$params = 'imagen_id = ' . $imagen_id;

			$imagen_principal_result = $db->Perform('imagen', array(
								'leyenda' => $leyenda,
								'descripcion' => $descr,
								'fecha' => 'now()',
								'guid' => $imagen_principal_nombre ),
								'update', $params
			);

			$imagen_principal_id = $db->InsertID();
		}
	}
}

if( isset($_POST['save']) ){
	$descr = $_POST['descripcion'];
	$leyenda = $_POST['leyenda'];
	$tipos_aceptados = array('image/jpeg','image/gif','image/png','image/pjpeg');
	# Subir imagen principal
	if( isset($_FILES["imagen"]['name']) && $_FILES["imagen"]['name'] != '' && in_array( $_FILES["imagen"]['type'] , $tipos_aceptados )){
		$upload_imagen = new Upload( $_FILES["imagen"] , IMAGES_DIR );
		$imagen_principal_nombre = $_FILES["imagen"]['name'];

		# Si el archivo existe, se renombra
		if( file_exists( IMAGES_DIR . $imagen_principal_nombre ) ) {
			$imagen_principal_nombrebase = substr($imagen_principal_nombre , 0, strripos($imagen_principal_nombre, '.')); // elimna extension
			$imagen_principal_ext = substr($imagen_principal_nombre, strripos($imagen_principal_nombre, '.')); // elimina nombre

			$id_aleatorio = substr( md5(uniqid()), 0, 2);

			$imagen_principal_nombre = $imagen_principal_nombrebase . '_' . $id_aleatorio . $imagen_principal_ext;
		}

		# Subir archivo
		$upload_correcto = $upload_imagen->UploadFile2( $imagen_principal_nombre );

		# Si se subió generar diferentes tamaños y guardar en base de datos
		if( $upload_correcto ){
			$imagen_principal_nombrebase = substr($imagen_principal_nombre , 0, strripos($imagen_principal_nombre, '.')); // elimna extension
			$imagen_principal_ext = substr($imagen_principal_nombre, strripos($imagen_principal_nombre, '.')); // elimina nombre

			$imagen = WideImage::load( IMAGES_DIR . $imagen_principal_nombre );
			# Tamaño -> GRANDE
			$imagen_resize = $imagen->resize( $imagen_tamanos['grande']['ancho'] , $imagen_tamanos['grande']['alto'], 'fill', 'any' );
			$imagen_resize->saveToFile( IMAGES_DIR . $imagen_principal_nombrebase . '_grande' . $imagen_principal_ext );
			
			# Tamaño -> MEDIANO
			$imagen_resize = $imagen->resize( $imagen_tamanos['mediano']['ancho'] , $imagen_tamanos['mediano']['alto'], 'fill', 'any' );
			$imagen_resize->saveToFile( IMAGES_DIR . $imagen_principal_nombrebase . '_mediano' . $imagen_principal_ext );
			
			# Tamaño -> CHICO
			$imagen_resize = $imagen->resize( $imagen_tamanos['chico']['ancho'] , null , 'fill', 'any' );
			$imagen_resize->saveToFile( IMAGES_DIR . $imagen_principal_nombrebase . '_chico' . $imagen_principal_ext );
			
			# Tamaño -> THUMB
			$imagen_resize = $imagen->resize( $imagen_tamanos['thumb']['ancho'] , $imagen_tamanos['thumb']['alto'] , 'fill', 'any' );
			$imagen_resize->saveToFile( IMAGES_DIR . $imagen_principal_nombrebase . '_thumb' . $imagen_principal_ext );
			
			//echo $imagen_principal_nombre;
			
			$imagen_principal_result = $db->Perform('imagen', array(
								'leyenda' => $leyenda,
								'descripcion' => $descr,
								'fecha' => 'now()',
								'guid' => $imagen_principal_nombre ),
								'insert', null
			);

			$imagen_principal_id = $db->InsertID();
		}
	}
} //end isset post save

$imagen_id = isset($_GET['imagen_id']) ? $_GET['imagen_id'] : null;
$accion = isset($_GET['action']) ? $_GET['action'] : null;

# Borrar registro
if( isset($imagen_id) && isset($accion) && $accion == 'delete' ){
	$query = 'DELETE FROM imagen WHERE imagen_id = ' . $imagen_id;
	$db->Query($query);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>.::Fundaci&oacute;n Taboada::.</title>
		<meta name="description" content="Fundaci&oacute;n Taboada">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/favicon.ico">
		<script src="../js/modernizr-2.6.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Encabezado -->
		<header>
			<div>
				<a href="Inicio" class="logo">Fundaci&oacute;n Taboada</a>
				<!-- <div class="social clear"><span>Síguenos</span><a href="#" class="fb" target="_blank">Facebook</a><a href="#" class="tw" target="_blank">Twitter</a></div> -->
				<!-- <nav class="mainNav clear fixMenuAdmin">< ?php include("left-nav.php"); ?></nav> -->
			</div>
		</header>

		<div class="container">
			<div class="content">
				<span class="pageLocation">M&oacute;dulo Administrativo / <span class="actualPage">Administrar&nbsp;&nbsp;im&aacute;genes</span></span><br>
				<span class="title">Subir imagen</span>
				<div class="cont">
					<p>Complete los campos para subir una Imagen</p>

					<!-- <p class="message success">Mensaje de error.</p> -->
					<p>Los campos marcados con un asterisco (<span class="asterisk">*</span>) son obligatorios.</p>

					<form name="add" id="add" action="<?php echo $_SERVER['PHP_SELF'] , isset($imagen_id) ? "?imagen_id=$imagen_id&action=edit" : '' ?>" method="POST" enctype="multipart/form-data">
						<?php if( isset($imagen_id) ){
							$imagen_sql = 'SELECT * FROM imagen WHERE imagen_id = ' . $imagen_id;
							$imagen_rs = $db->Query($imagen_sql);
							if ($db->NumRows($imagen_rs) > 0){
								$imagen = $db->FetchArray($imagen_rs);
							}
						?>
						<input type="hidden" name="imagen_id" value="<?php echo $imagen['imagen_id']; ?>">
						<?php } ?>
						<table class='tableFormat'>
							<tr>
								<td><label for="leyenda">Leyenda <span class="asterisk">*</span>:</label></td>
								<td>
									<!-- <input type="text" name="leyenda" id="leyenda" class="input" value="< ?php echo utf8_encode($imagen['leyenda']); ?>" size="255" tabindex="21"> -->
									<textarea name="leyenda" id="leyenda" tabindex="21"><?php echo utf8_encode($imagen['leyenda']); ?></textarea>
								</td>
							</tr>
							<tr>
								<td><label for="descripcion">Descripci&oacute;n <span class="asterisk">*</span>:</label></td>
								<td>
									<!-- <input type="text" name="descripcion" id="descripcion" class="input" value="< ?php echo utf8_encode($imagen['descripcion']); ?>" size="255" tabindex="22"> -->
									<textarea name="descripcion" id="descripcion" tabindex="22"><?php echo utf8_encode($imagen['descripcion']); ?></textarea>
								</td>
							</tr>
							<tr>
								<td><label for="imagen">Imagen:</label></td>
								<td>
									<input type="file" size="20" id="imagen" name="imagen" class=" ">
									<!-- <button class="button secondary" type="submit">Subir</button> -->
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<!-- <input type="submit" name="save" id="save" class="button primary" value="Guardar" tabindex="100"> -->
									<button type="submit" name="save" id="save" class="isButton saveImageButton" tabindex="100"><span></span><span>Guardar</span></button>
								</td>
							</tr>
						</table>
					</form>
				</div>

				<span class="title">Listado de im&aacute;genes recientes</span>
				<div class="content">
					<!--<p class="submit"><button class="button primary" type="submit">Crear Nuevo</button></p>-->
					<form id="items" action="">
						<table class='tableFormat' id="items-table">
							<thead>
								<tr>
									<!-- <th scope="col" abbr="checkbox" class="aligncenter width30px"><input type="checkbox" class=""></th> -->
									<th scope="col" abbr="Leyenda">Leyenda</th> <!-- class="width170px" -->
									<th scope="col" abbr="Descripción">Descripci&oacute;n</th> <!-- class="width170px" -->
									<th scope="col" abbr="Miniatura">Miniatura</th> <!-- class="width140px" -->
									<th scope="col" abbr="Fecha">Fecha</th> <!-- class="width140px" -->
									<th scope="col" abbr="Fecha">Acci&oacute;n</th> <!-- class="width140px" -->
								</tr>
							</thead>
							<tbody>
								<?php $imagenes_sql = 'SELECT * FROM imagen ORDER BY fecha DESC LIMIT 50';
								$imagenes_rs = $db->Query($imagenes_sql);

								if ($db->NumRows($imagenes_rs) > 0){
									while ($imagen = $db->FetchArray($imagenes_rs)){ ?>	
								<tr>
									<!-- <td><input type="checkbox" class="ui-helper-hidden-accessible"><span class="ui-checkbox"></span></td> -->
									<td><?php echo utf8_encode($imagen['leyenda']); ?></td>
									<td><?php echo utf8_encode($imagen['descripcion']); ?></td>
									<td>
										<?php $nombre = substr($imagen['guid'] , 0, strripos($imagen['guid'], '.')) . '_thumb' . substr($imagen['guid'], strripos($imagen['guid'], '.'));
										echo "<img class='thumbImage' src='", URL , 'imagenes/' , $nombre , "' alt='", $nombre ,"'>"; ?>
									</td>
									<td><?php echo utf8_encode($imagen['fecha']); ?></td>
									<td><a href="imagenes.php?imagen_id=<?php echo $imagen['imagen_id']; ?>&action=edit" class="isButton editButton"><span></span></a><a href="imagenes.php?imagen_id=<?php echo $imagen['imagen_id']; ?>&action=delete" class="isButton removeButton"><span></span></a></td>
									<!-- <a href="imagenes.php?imagen_id=< ?php echo $imagen['imagen_id']; ?>&action=edit" class="icon-1 info-tooltip"><img src="images/icons/edit-icon.png" alt="Editar" title="Editar"></a> -->
									<!-- <a href="imagenes.php?imagen_id=< ?php echo $imagen['imagen_id']; ?>&action=delete" class="icon-2 info-tooltip"><img src="images/icons/delete-icon.png" alt="Eliminar" title="Eliminar"></a> -->
								</tr>
								<?php }
								} ?>
							</tbody>
						</table>
						<!--  end product-table................................... --> 
					</form>
					<!-- <table border="0" cellpadding="0" cellspacing="0" id="paging-table">
						<tbody>
							<tr>
								<td>
									<a href="" class="page-far-left"></a>
									<a href="" class="page-left"></a>
									<div class="page-info">P&aacute;gina <strong>1</strong> / 15</div>
									<a href="" class="page-right"></a>
									<a href="" class="page-far-right"></a>
								</td>
							</tr>
						</tbody>
					</table> -->
				</div>
			</div>
		</div>
	</body>
</html>
<?php
$db->Close();
//include_once('inc/footer.php');
?>