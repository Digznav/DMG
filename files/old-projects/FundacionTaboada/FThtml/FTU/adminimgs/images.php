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

if( isset($accion) && $accion == 'edit' ){
	$tipos_aceptados = array('image/jpeg','image/gif','image/png','image/pjpeg');

	# Subir imagen principal
	if( isset($_FILES["imagen"]['name']) && $_FILES["imagen"]['name'] != '' && in_array( $_FILES["imagen"]['type'] , $tipos_aceptados )  ){
		$upload_imagen = new Upload( $_FILES["imagen"] , IMAGES_DIR );
		$imagen_principal_nombre = $_FILES["imagen"]['name'];

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
			$params = 'imagen_id = ' . $imagen_id;	
			
			$imagen_principal_result = $db->Perform('imagen', array(
								'leyenda' => $imagen_principal_nombre,
								'descripcion' => $imagen_principal_nombre,
								'fecha' => 'now()',
								'guid' => $imagen_principal_nombre ),
								'update', $params
			);

			$imagen_principal_id = $db->InsertID();
		}
	}
}

if( isset($_POST['save']) ){
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
								'leyenda' => $imagen_principal_nombre ,
								'descripcion' => $imagen_principal_nombre , 
								'fecha' => 'now()' , 
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

<div class="bg add">
	<div class="bg top"></div>
	<div class="bg middle">
		<div class="content">
			<h2>Subir Imagen</h2>
			<h3>Complete los campos para subir una Imagen</h3>
			<br />
			<!-- <p class="message success">Mensaje de error.</p> -->
			<p>Los campos marcados con un asterisco (<span class="asterisk">*</span>) son obligatorios.</p>
			<form name="add" id="add" action="<?php echo $_SERVER['PHP_SELF'] , isset($imagen_id) ? "?imagen_id=$imagen_id&action=edit" : '' ?>" method="POST" enctype="multipart/form-data">
				<?php
					if( isset($imagen_id) ){
					
				      $imagen_sql = 'SELECT * FROM imagen WHERE imagen_id = ' . $imagen_id;
				      $imagen_rs = $db->Query($imagen_sql);
				      if ($db->NumRows($imagen_rs) > 0){
				        $imagen = $db->FetchArray($imagen_rs);
				      }  
				?>
					<input type="hidden" name="imagen_id" value="<?php echo $imagen['imagen_id']; ?>">
				<?php	
					}
				?>
				<label>Leyenda <span class="asterisk">*</span>:<br /> 
				<input type="text" name="leyenda" id="leyenda" class="input" value="<?php echo utf8_encode($imagen['leyenda']); ?>" size="255" tabindex="21" /></label>
				
				<label>Descripci&oacute;n <span class="asterisk">*</span>:<br /> 
				<input type="text" name="descripcion" id="descripcion" class="input" value="<?php echo utf8_encode($imagen['descripcion']); ?>" size="255" tabindex="22" /></label>
				
				<label>Imagen:</label>
				<br />
				<input type="file" size="20" id="imagen" name="imagen" class=" ">
				<!-- <button class="button secondary" type="submit">Subir</button> -->
					
				<br /><br />
				<input type="submit" name="save" id="save" class="button primary" value="Guardar" tabindex="100" /> 
			</form>
			<br />
			<br />
		</div>
	</div>
	<div class="bg bottom"></div>
</div>

<div class="bg table">
	<div class="bg top"></div>
	<div class="bg middle">
		<div class="content">
			<h2>Im&aacute;genes</h2>
			<h3>Listado de im&aacute;genes recientes</h3>
			<br />
			<!--<p class="submit"><button class="button primary" type="submit">Crear Nuevo</button></p>-->
			<br />
			<form id="items" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="items-table">
				<thead>
				<tr>
				    <!--
					<th scope="col" abbr="checkbox" class="aligncenter width30px"><input type="checkbox" class=""></th>
					-->
					<th scope="col" abbr="Leyenda" class="width170px">Leyenda</th>
					<th scope="col" abbr="Descripción" class="width170px">Descripci&oacute;n</th>
					<th scope="col" abbr="Miniatura" class="width140px">Miniatura</th>
					<th scope="col" abbr="Fecha" class="width140px">Fecha</th>
					<th scope="col" abbr="Fecha" class="width140px">Acci&oacute;n</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$imagenes_sql = 'SELECT * FROM imagen ORDER BY fecha DESC LIMIT 50';
				$imagenes_rs = $db->Query($imagenes_sql);
				
				if ($db->NumRows($imagenes_rs) > 0){
				  while ($imagen = $db->FetchArray($imagenes_rs)){
				?>	
				<tr>
					<!-- <td><input type="checkbox" class="ui-helper-hidden-accessible"><span class="ui-checkbox"></span></td> -->
					<td><?php echo utf8_encode($imagen['leyenda']); ?></td>
					<td><?php echo utf8_encode($imagen['descripcion']); ?></td>
					<td>
					<?php
					$nombre = substr($imagen['guid'] , 0, strripos($imagen['guid'], '.')) . 
					'_thumb' . substr($imagen['guid'], strripos($imagen['guid'], '.')); 
					
					echo "<img width='100' height='100' src='", URL , 'imagenes/' , $nombre , "' />";
					
					?>
					</td>
					<td class="word-wrap"><?php echo utf8_encode($imagen['fecha']); ?></td>
					<td class="options-width">
					<a href="imagenes.php?imagen_id=<?php echo $imagen['imagen_id']; ?>&action=edit" class="icon-1 info-tooltip"><img src="images/icons/edit-icon.png" alt="Editar" title="Editar" /></a>
					<a href="imagenes.php?imagen_id=<?php echo $imagen['imagen_id']; ?>&action=delete" class="icon-2 info-tooltip"><img src="images/icons/delete-icon.png" alt="Eliminar" title="Eliminar" /></a>
					</td>
				</tr>
				<?php  
				  }
				}
				?>
				</tbody></table>
				<!--  end product-table................................... --> 
			</form>
			<!--
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tbody><tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div class="page-info">Página <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			</tr>
			</tbody></table>
			-->
		</div>	
	</div>
	<div class="bg bottom"></div>
</div> 

<?php
$db->Close();
//include_once('inc/footer.php');
?>