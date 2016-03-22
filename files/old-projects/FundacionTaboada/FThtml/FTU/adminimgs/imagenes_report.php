<?php 
// echo "Si esta logeado se queda aquí sino se manda a login.php";
//session_start();

//if ( !isset( $_SESSION['Ok'] ) )
//{
//	echo '[' . $_SESSION['Ok'] . ']';
//	Header('location: login.php');

//}

include_once('config.php');
include_once(FS_SIMPL . 'simpl.php');

$db = new DB;
$db->Connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

define('PAGE_TITLE', 'Im&aacute;genes - Tu informaci&oacute;n');

//include_once('inc/header_report.php');
define('MENU_OPTION','imagenes');
//include_once('inc/menu_report.php');

if( isset($_POST['save']) ){
	echo "entro a salvar";
	if( isset($_FILES["imagen"]['name']) && $_FILES["imagen"]['name'] != '' ){
		$upload_1 = new Upload($_FILES["imagen"], IMAGES_DIR );
		
		$imagen = $upload_1->UploadFile() ? $_FILES["imagen"]['name'] : '';
		
		$imagen_result = $db->Perform('imagen', 
		             array( 
		                 'leyenda' => $_FILES["imagen"]['name'] ,
		                 'descripcion' => $_FILES["imagen"]['name'] , 
		                 'fecha' => 'now()' , 
		                 'guid' => $imagen ), 
		              'insert', null);
		              
		print_r($imagen_result);              
	}
	
	//$db->Perform('imagen', $data_array, 'insert', $parameters, DB_NAME)
}


$imagen_id = isset($_GET['imagen_id']) ? $_GET['imagen_id'] : null;
$accion = isset($_GET['accion']) ? $_GET['accion'] : null;

# Borrar registro
if( isset($imagen_id) && isset($accion) && $accion == 'delete' ){ 

	$query = 'DELETE FROM imagen WHERE imagen_id = ' . $imagen_id;
	$db->Query($query);

}

?>

<br />
<div class="bg add">
	<div class="bg top"></div>
	<div class="bg middle">
		<div class="content">
			<h2>Subir Imagen</h2>
			<h3>Complete los campos para subir una Imagen</h3>
			<br />
			<!-- <p class="message success">Mensaje de error.</p> -->
			<p>Los campos marcados con un asterisco (<span class="asterisk">*</span>) son obligatorios.</p>
			<form name="add" id="add" action="<?php echo $_SERVER['PHP_SELF'] , isset($imagen_id) ? "?imagen_id=$imagen_id&action=edit&user_id={$_GET['user_id']}" : "?user_id={$_GET['user_id']}" ?>" method="POST" enctype="multipart/form-data">
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
				$imagenes_sql = 'SELECT * FROM imagen ORDER BY fecha DESC';
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
					<a href="imagenes_report.php?user_id=<?php echo $_GET['user_id'];?>&imagen_id=<?php echo $imagen['imagen_id']; ?>&action=edit" class="icon-1 info-tooltip"><img src="images/icons/edit-icon.png" alt="Editar" title="Editar" /></a>
					<a href="imagenes_report.php?user_id=<?php echo $_GET['user_id'];?>&imagen_id=<?php echo $imagen['imagen_id']; ?>&action=delete" class="icon-2 info-tooltip"><img src="images/icons/delete-icon.png" alt="Eliminar" title="Eliminar" /></a>
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