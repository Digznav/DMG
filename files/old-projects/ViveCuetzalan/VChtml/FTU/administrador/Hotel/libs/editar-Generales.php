<?php
$hotel = DAOFactory::getHotelDAO()->load( $idHotel );

if ( isset($_POST['guardar-generales']) ) {
	$fileNameLogo = array_pop($vc);

	$hotel->nombre = $_POST['nombre'];
	$hotel->descripcion = $_POST['descripcion'];
	$hotel->correoReserv = $_POST['correo'];
	$hotel->numeroHabitacion = $_POST['habitaciones'];
	
	if ($_FILES['logo']['name'] != "" ){
		$folderName = $imgFolder;
		$provName = explode('.',$fileNameLogo);
		$fileName = $provName[0];

		$ext = explode( '.', $_FILES['logo']['name'] );
		$extension = end($ext);
		
		//Image validation
		if ((($_FILES['logo']['type'] == 'image/gif') || ($_FILES['logo']['type'] == 'image/jpeg') || ($_FILES['logo']['type'] == 'image/png') || ($_FILES['logo']['type'] == 'image/pjpeg')) && in_array($extension, $allowedExts)) {
			if ( $_FILES['logo']['error'] == 0 ) {
				$dirURL = '../../imgs/dondehospedarse/'.$folderName.'/';
				$uploadFile = $dirURL.$fileName.'.'.$extension;

				$upload = move_uploaded_file( $_FILES['logo']['tmp_name'],$uploadFile);
				if ($upload) {
					$hotel->logo = 'imgs/dondehospedarse/'.$folderName.'/'.$fileName.'.'.$extension;
					//DAOFactory::getHotelDAO()->insert( $hotel );
					//DAOFactory::getHotelDAO()->update($hotel);
				}

			} else { echo 'Impossible to upload the image, try again'; return false; };
		} else { echo 'Invalid file, try again'; return false; };
	};

	DAOFactory::getHotelDAO()->update($hotel);

	//header('Refresh:1; url=editar.php?id='.$idHotel);
	echo '<script type="text/javascript">alert("Las modificiones se han guardado exitosamente."); window.location.replace("editar.php?id='.$idHotel.'");</script>';
}
?>
<h2 class="sectionTitle">Datos Generales</h2>
<form action="" method="POST" enctype="multipart/form-data">
	<table class="tableFormat">
		<tbody>
			<tr>
				<td><label for="nombre">Nombre</label></td>
				<td><input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $hotel->nombre; ?>" data-hotel-id="<?php echo $hotel->id; ?>"></td>
			</tr>
			<tr>
				<td><label for="descripcion">Descripción</label></td>
				<td>
					<?php include('libs/toolbar.php'); ?>
					<textarea name="descripcion" id="descripcion" placeholder="Introduzca el texto..."><?php echo $hotel->descripcion; ?></textarea>
					<small>powered by <a href="https://github.com/xing/wysihtml5" target="_blank">wysihtml5</a>.</small>
				</td>
			</tr>
			<tr>
				<td><label for="correo">Correo para reservación:</label></td>
				<td><input type="mail" name="correo" id="correo" placeholder="ejemplo@dominio.com" value="<?php echo $hotel->correoReserv; ?>"></td>
			</tr>
			<tr>
				<td><label for="habitaciones">No. de habitaciones</label></td>
				<td><input type="number" name="habitaciones" id="habitaciones" value="<?php echo $hotel->numeroHabitacion; ?>"></td>
			</tr>
			<tr>
				<td><label for="logo">Logo</label></td>
				<td>
					<div class="editLogo"><img src="../../<?php echo $hotel->logo; ?>" alt="logo"></div>
					<p>Seleccione otra imagen para sustituir el logo anterior</p>
					<input type="file" name="logo" id="logo" accept="image/*">
				</td>
			</tr>
			
		</tbody>
	</table>
	<a href="editar.php?id=<?php echo $idHotel; ?>" class="isButton symb-icon icoClosefill">Cancelar</a>
	<!-- <a href="editar.php?action=guardar" class="isButton symb-icon icoCloudup">Guardar y regresar</a> -->
	<button type="submit" name="guardar-generales" class="isButton symb-icon icoCloudup">Guardar y regresar</button>
</form>