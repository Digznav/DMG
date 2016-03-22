<?php
$count = 1;
$habitaciones = DAOFactory::getHabitacionesDAO()->queryByIdHotel( $idHotel );
if ( isset($_POST['guardar-Habitaciones']) ) {
	DAOFactory::getHabitacionesDAO()->deleteByIdHotel($idHotel);

	foreach ($_POST['habitaciones'] as $value) {
		if ( !ctype_space($value['tipo']) ) {
			if ( $value['tipo'] != '' ) {
				$hab_Hotel = new Habitacione();
				$hab_Hotel->idHotel = $idHotel;
				$hab_Hotel->tipoHabitacion = $value['tipo'];
				if ( !ctype_space($value['tarifa']) || $value['tarifa'] != '' ) {
					$hab_Hotel->tarifa = $value['tarifa'];
				} else {
					$hab_Hotel->tarifa = 0;
				}
				DAOFactory::getHabitacionesDAO()->insert( $hab_Hotel );
			}
		}
	}
	//header('Refresh:1; url=editar.php?id='.$idHotel);
	echo '<script type="text/javascript">alert("Las modificiones se han guardado exitosamente."); window.location.replace("editar.php?id='.$idHotel.'");</script>';
	//echo '<script type="text/javascript">alert("Las modificiones se han guardado exitosamente."); window.location.reload();</script>';
}
?>
<h2 class="sectionTitle">Habitaciones</h2>
<form action="" method="POST" enctype="multipart/form-data">
	<p>Los cambios que realice se guardarán hasta que oprima el botón "Guardar y regresar".</p>
	<table class="tableFormat">
		<thead>
			<tr><th>&nbsp;</th><th>Tipo de habitación</th><th>Tarifa</th></tr>
		</thead>
		<tbody id="ObjectsList">
			<?php foreach ($habitaciones as $value) { ?>
			<tr class="obj-li" data-num-obj="<?php echo $count; ?>">
				<td>
					<a href="#" class="deleteRow symb-icon icoCloseoutline"></a>
					<input type="hidden" name="habitaciones[hab<?php echo $count; ?>][id]" value="<?php echo $value->id; ?>">
					<input type="hidden" name="habitaciones[hab<?php echo $count; ?>][idHotel]" value="<?php echo $value->idHotel; ?>">
				</td>
				<td><input type="text" name="habitaciones[hab<?php echo $count; ?>][tipo]" placeholder="Habitación" value="<?php echo $value->tipoHabitacion; ?>"></td>
				<td>$<input type="text" name="habitaciones[hab<?php echo $count; ?>][tarifa]" placeholder="00.00 (Opcional)" value="<?php echo $value->tarifa; ?>"></td>
			</tr>	
			<?php $count++;
			} ?>
		</tbody>
		<tfoot><tr><td colspan="3"><button type="button" id="addHab" class="isButton symb-icon icoZoominfill">Añadir campo</button></td></tr></tfoot>
	</table>
	<a href="editar.php?id=<?php echo $idHotel; ?>" class="isButton symb-icon icoClosefill">Cancelar</a>
	<button type="submit" name="guardar-Habitaciones" class="isButton symb-icon icoCloudup">Guardar y regresar</button>
</form>
<script type="text/javascript">
	jQuery(function($){
		$('#addHab').click(function() {
			var lstNm = $('#ObjectsList .obj-li').last().data('num-obj') + 1;
			var htmlInput = '<tr class="obj-li" data-num-obj="'+lstNm+'"><td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td><td><input type="text" name="habitaciones[hab'+lstNm+'][tipo]" placeholder="Habitación"></td><td>$<input type="text" name="habitaciones[hab'+lstNm+'][tarifa]" placeholder="00.00"></td></tr>';
			$('#ObjectsList').append(htmlInput);
		});
	});
</script>