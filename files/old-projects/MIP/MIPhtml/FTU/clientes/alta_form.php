<!-- <form method="post">
<table>
	<tr>
		<td>ID</td>
		<td>< ?php echo $cliente->id; ?></td>
	</tr>
	<tr>
		<td>Nombre de cliente</td>
		<td><input type="text" name="nombre_cliente" value="< ?php echo $cliente->nombre; ?>"/></td>
	</tr>
	<tr>
		<td>Tipo</td>
		<td><select name="tipo_cliente">
				<option value="< ?php echo Cliente::$INDIVIDUAL;?>" < ?php if ($cliente->tipo==Cliente::$INDIVIDUAL) echo "Selected"; ?>>Individual</option>
				<option value="< ?php echo Cliente::$GRUPO;?>" < ?php if ($cliente->tipo==Cliente::$GRUPO) echo "Selected"; ?>>Grupo</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="continuar"/>
		</td>
	</tr>
</table>
</form> -->
<h2 class="titleCMS">Alta de clientes</h2>
<div class="contentCMS">
	<form method="POST">
		<table class="tableFormat">
			<tbody>
				<tr>
					<td><label>ID</label></td>
					<td><strong><?php echo $cliente->id; ?></strong></td>
				</tr>
				<tr>
					<td><label for="nombre_cliente">Nombre de cliente</label></td>
					<td><input type="text" name="nombre_cliente" id="nombre_cliente" value="<?php echo $cliente->nombre; ?>" placeholder="Cliente"></td>
				</tr>
				<tr>
					<td><label for="tipo_cliente">Tipo</label></td>
					<td>
						<select name="tipo_cliente" id="tipo_cliente">
							<option value="<?php echo Cliente::$INDIVIDUAL;?>" <?php if ($cliente->tipo==Cliente::$INDIVIDUAL) echo "Selected"; ?>>Individual&nbsp;&nbsp;</option>
							<option value="<?php echo Cliente::$GRUPO;?>" <?php if ($cliente->tipo==Cliente::$GRUPO) echo "Selected"; ?>>Grupo&nbsp;&nbsp;</option>
						</select>
					</td>
				</tr>
				<tr><td colspan="2"><button type="submit" class="isButton continueButton safeMargin"><span></span><span>Continuar</span></button></td></tr>
			</tbody>
		</table>
	</form>
</div>