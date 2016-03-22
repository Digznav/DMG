<form method="post">
<table>
	<tr>
		<td>ID</td>
		<td><?php echo $cliente->id; ?></td>
	</tr>
	<tr>
		<td>Nombre de cliente</td>
		<td><input type="text" name="nombre_cliente" value="<?php echo $cliente->nombre; ?>"/></td>
	</tr>
	<tr>
		<td>Tipo</td>
		<td><select name="tipo_cliente">
				<option value="<?php echo Cliente::$INDIVIDUAL;?>" <?php if ($cliente->tipo==Cliente::$INDIVIDUAL) echo "Selected"; ?>>Individual</option>
				<option value="<?php echo Cliente::$GRUPO;?>" <?php if ($cliente->tipo==Cliente::$GRUPO) echo "Selected"; ?>>Grupo</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="continuar"/>
		</td>
	</tr>
</table>
</form>