
<h2 class="titleCMS">Alta de t&eacute;cnico</h2>
<div class="contentCMS">
	<form method="POST" >
		<table class="tableFormat">
			<tbody>
				<tr>
					<td><label>ID</label></td>
					<td><strong><?php echo $tecnico->id; ?></strong></td>
				</tr>
				<tr>
					<td><label for="nombre_tecnico">Nombre de t&eacute;cnico</label></td>
					<td><input type="text" name="nombre_tecnico" id="nombre_tecnico" value="<?php echo $tecnico->nombre; ?>" placeholder="T&eacute;cnico"></td>
				</tr>
				<tr>
					<td><label for="nombre_tecnico">E-Mail</label></td>
					<td><input type="text" name="email_tecnico" id="email_tecnico" value="<?php echo $tecnico->email; ?>" placeholder="E-Mail"></td>
				</tr>
				<tr>
					<td><label for="tipo_tecnico">Tel&eacute;fono</label></td>
					<td><input type="text" name="tel_tecnico" id="tel_tecnico" value="<?php echo $tecnico->tel; ?>" placeholder="Tel&eacute;fono"></td>
				</tr>
				<tr>
					<td><label for="tipo_tecnico">Acceso</label></td>
					<td>
						<input type="radio" name="acceso_tecnico" value="S" checked >Si</input>
						<input type="radio" name="acceso_tecnico" value="N"  >No</input>
					</td>
				</tr>
				<tr><td colspan="2"><button type="submit" class="isButton continueButton safeMargin"><span></span><span>Continuar</span></button></td></tr>
			</tbody>
		</table>
	</form>
</div>