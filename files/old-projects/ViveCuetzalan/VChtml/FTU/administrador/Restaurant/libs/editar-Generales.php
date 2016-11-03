<?php
$restaurant = DAOFactory::getRestaurantesDAO()->load( $idRestaurant );

if ( isset($_POST['guardar-generales']) ) {
	$fileNameLogo = array_pop($vc);

	$restaurant->nombre = $_POST['nombre'];
	$restaurant->descripcion = $_POST['descripcion'];
	$restaurant->correo = $_POST['correo'];
	
	if ($_FILES['logo']['name'] != "" ){
		$folderName = $imgFolder;
		$provName = explode('.',$fileNameLogo);
		$fileName = $provName[0];

		$ext = explode( '.', $_FILES['logo']['name'] );
		$extension = end($ext);
		
		//Image validation
		if ((($_FILES['logo']['type'] == 'image/gif') || ($_FILES['logo']['type'] == 'image/jpeg') || ($_FILES['logo']['type'] == 'image/png') || ($_FILES['logo']['type'] == 'image/pjpeg')) && in_array($extension, $allowedExts)) {
			if ( $_FILES['logo']['error'] == 0 ) {
				$dirURL = '../../imgs/dondecomer/'.$folderName.'/';
				$uploadFile = $dirURL.$fileName.'.'.$extension;

				$upload = move_uploaded_file( $_FILES['logo']['tmp_name'],$uploadFile);
				if ($upload) {
					$restaurant->logo = 'imgs/dondecomer/'.$folderName.'/'.$fileName.'.'.$extension;
					//DAOFactory::getRestaurantesDAO()->insert( $restaurant );
					//DAOFactory::getRestaurantesDAO()->update($restaurant);
				}

			} else { echo 'Impossible to upload the image, try again'; return false; };
		} else { echo 'Invalid file, try again'; return false; };
	};

	DAOFactory::getRestaurantesDAO()->update($restaurant);

	//header('Refresh:1; url=editar.php?id='.$idRestaurant);
	echo '<script type="text/javascript">alert("Las modificiones se han guardado exitosamente."); window.location.replace("editar.php?id='.$idRestaurant.'");</script>';
	//echo '<script type="text/javascript">alert("Las modificiones se han guardado exitosamente."); window.location.reload();</script>';
}
?>
<h2 class="sectionTitle">Datos Generales</h2>
<form action="" method="POST" enctype="multipart/form-data">
	<table class="tableFormat">
		<tbody>
			<tr>
				<td><label for="nombre">Nombre</label></td>
				<td><input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $restaurant->nombre; ?>" data-restaurant-id="<?php echo $restaurant->id; ?>"></td>
			</tr>
			<tr>
				<td><label for="descripcion">Descripción</label></td>
				<td>
					<?php include('libs/toolbar.php'); ?>
					<textarea name="descripcion" id="descripcion" placeholder="Introduzca el texto..."><?php echo $restaurant->descripcion; ?></textarea>
					<small>powered by <a href="https://github.com/xing/wysihtml5" target="_blank">wysihtml5</a>.</small>
				</td>
			</tr>
			<tr>
				<td><label for="correo">Correo:</label></td>
				<td><input type="mail" name="correo" id="correo" placeholder="ejemplo@dominio.com" value="<?php echo $restaurant->correo; ?>"></td>
			</tr>
			<tr>
				<td><label for="logo">Logo</label></td>
				<td>
					<div class="editLogo"><img src="../../<?php echo $restaurant->logo; ?>" alt="logo"></div>
					<p>Seleccione otra imagen para sustituir el logo anterior</p>
					<input type="file" name="logo" id="logo" accept="image/*">
				</td>
			</tr>
			
		</tbody>
	</table>
	<a href="editar.php?id=<?php echo $idRestaurant; ?>" class="isButton symb-icon icoClosefill">Cancelar</a>
	<!-- <a href="editar.php?action=guardar" class="isButton symb-icon icoCloudup">Guardar y regresar</a> -->
	<button type="submit" name="guardar-generales" class="isButton symb-icon icoCloudup">Guardar y regresar</button>
</form>