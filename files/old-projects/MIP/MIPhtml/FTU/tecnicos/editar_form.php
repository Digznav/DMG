
<h2 class="titleCMS">T&eacute;cnico</h2>
<div class="contentCMS">
	<form method="POST">
		<input type="hidden" name="action" value="updTecnico">
		<table class="tableFormat">
			<tbody>
				<tr>
					<td><label>ID</label></td>
					<td><strong><?php echo $tecnico->id; ?></strong></td>
				</tr>
				<tr>
					<td><label for="nombre_tecnico">Nombre de t&eacute;cnico</label></td>
					<td><input type="text" name="nombre_tecnico" id="nombre_tecnico" value="<?php echo $tecnico->nombre; ?>" ></td>
				</tr>
				<tr>
					<td><label for="nombre_tecnico">E-Mail</label></td>
					<td><input type="text" name="email_tecnico" id="email_tecnico" value="<?php echo $tecnico->email; ?>" ></td>
				</tr>
				<tr>
					<td><label for="tipo_tecnico">Tel&eacute;fono</label></td>
					<td><input type="text" name="tel_tecnico" id="tel_tecnico" value="<?php echo $tecnico->tel; ?>" ></td>
				</tr>
				<tr>
					<td><label for="tipo_tecnico">Acceso</label></td>
					<td>
						<input type="radio" name="acceso_tecnico" value="S" <?php if ($tecnico->acceso == 'S') {?>checked<?php } ?> >Si</input>
						<input type="radio" name="acceso_tecnico" value="N" <?php if ($tecnico->acceso == 'N') {?>checked<?php } ?> >No</input>
					</td>
				</tr>
				<tr><td colspan="2"><button type="submit" class="isButton updateButton safeMargin"><span></span><span>Actualizar</span></button></td></tr>
			</tbody>
		</table>
	</form>

</div>