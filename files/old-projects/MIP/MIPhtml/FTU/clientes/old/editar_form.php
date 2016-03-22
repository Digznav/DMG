<table cellpadding="0" cellspacing="0">
	<form method="post">
	<input type="hidden" name="action" value="updCliente">
	<tr><th colspan="2">Cliente</th></tr>
	<tr><td>ID</td>
		<td><?php echo $cliente->id; ?></td>
	</tr>
	<tr><td>Nombre de cliente</td>
		<td><input type="text" name="nombre_cliente" value="<?php echo $cliente->nombre; ?>" size="100"/></td>
	</tr>
	<tr><td>Tipo</td>
		<td><select name="tipo_cliente" disabled="true">
				<option value="<?php echo Cliente::$INDIVIDUAL;?>" <?php if ($cliente->tipo==Cliente::$INDIVIDUAL) echo "Selected"; ?>>Individual</option>
				<option value="<?php echo Cliente::$GRUPO;?>" <?php if ($cliente->tipo==Cliente::$GRUPO) echo "Selected"; ?>>Grupo</option>
			</select>
		</td>
	</tr>
	<tr><td colspan="2"><input type="Submit" text="Actualizar" value="Actualizar"/></td>
	</tr>
	</form>	
</table>
<script>
function elimina( idAction, newActionValue ){
	var returnValue = confirm("¿Está seguro de eliminar este registro?");
	if ( returnValue )
	{
		$(idAction).attr("value", newActionValue);
	}
	
	return returnValue; 
}
</script>
<table cellpadding="0" cellspacing="0" border="0">
	<tr><th colspan="2">Empresas</th></tr>
<?php
for($i=0 ; $i < Count( $datosEmpresaArr ) ; $i++ )
{
	$datosEmpresa = $datosEmpresaArr[$i];
?>
<tr>
	<td colspan="2">
		<table cellpadding="0" cellspacing="0" border="0">
		<form method="post">
			<tr><td>Nombre</td>
				<td colspan="5">
					<input type="hidden" name="action" id="updEmpresaAction_<?php echo $datosEmpresa->id; ?>" value="updEmpresa"/>	
					<input type="hidden" name="idEmpresa" value="<?php echo $datosEmpresa->id ?>"/>
					<input type="text" size="50" name="nombre" value="<?php echo $datosEmpresa->nombre ?>"/></td>
			</tr>
			<tr><td>Direcci&oacute;n</td>
				<td colspan="5"><input type="text" size="50" name="direccion" value="<?php echo $datosEmpresa->direccion ?>"/></td>
			</tr>
			<tr><td align="right">Estado</td>
				<td>
					<select name="estado">
<?php
for ($e=0 ; $e < Count($catestados) ; $e++ )
{
	$datEstado = $catestados[$e];
	echo '<option value="'.$datEstado->id.'"'.($datosEmpresa->idEstado == $datEstado->id ? ' Selected="true" ': '').'>'.$datEstado->nombre.'</option>';
}
?>
					</select></td>
				<td align="right">Ciudad</td>
				<td><input type="text" name="ciudad" value="<?php echo $datosEmpresa->idCiudad ?>"/></td>
				<td align="right">Municipio</td>
				<td><input type="text" name="municipio" value="<?php echo $datosEmpresa->idMpio ?>"/></td>
			</tr>
			<tr><td colspan="2" valign="top" align="center">
				<input type="submit" value="Actualizar"/>
				<input type="submit" value="Eliminar" onclick="return elimina('#updEmpresaAction_<?php echo $datosEmpresa->id;?>', 'removeEmpresa' )"/>
				</form>
				</td>
				<td colspan="6">
					<table cellpadding="0" cellspacing="0">
						<tr><th colspan="6">Datos de contactos</th></tr>
						<tr>
							<td align="center">Nombre</td>
							<td align="center">Cargo</td>
							<td align="center">Email</td>
							<td align="center">Tel.</td>
							<td align="center">Ext.</td>
						</tr>
			<?php
			$contactos = $contactosArr[ $i ];
			for ( $j=0 ; $j < Count($contactos) ; $j++)
			{
				$contacto = $contactos[ $j ]; 
			?>
						<tr>
							<form method="post">
							<td><input type="hidden" name="action" value="updContacto" id="updContactoAction_<?php echo $contacto->id;?>" />
								<input type="hidden" name="idContacto" value="<?php echo $datosEmpresa->id ?>">
								<input type="hidden" name="idEmpresa" value="<?php echo $datosEmpresa->id ?>">
								<input type="text" size="30" name="nombre" value="<?php echo $contacto->nombre; ?>"/>
							</td>
							<td><input type="text" size="20" name="cargo" 		value="<?php echo $contacto->cargo; ?>"/></td>
							<td><input type="text" size="10" name="email" 		value="<?php echo $contacto->email; ?>"/></td>
							<td><input type="text" size="10" name="telefono" 	value="<?php echo $contacto->telefono; ?>"/></td>
							<td><input type="text" size="4"  name="ext" 		value="<?php echo $contacto->ext; ?>"/></td>
							<td><input type="submit" value="Actualizar"/>
								<input type="submit" value="Eliminar" onclick="return elimina('#updContactoAction_<?php echo $contacto->id;?>', 'removeContacto' )"/></td>
							</form>
						</tr>
			<?php
			}
			?>
						<tr>
							<form method="post">
							<td><input type="hidden" name="action" value="addContacto"/>
								<input type="hidden" name="idEmpresa" value="<?php echo $datosEmpresa->id ?>"/>
								<input type="text" size="30" name="nombre"/>
							</td>
							<td><input type="text" size="20" name="cargo"/></td>
							<td><input type="text" size="10" name="email"/></td>
							<td><input type="text" size="10" name="telefono"/></td>
							<td><input type="text" size="4"  name="ext"/></td>
							<td><input type="submit" value="Agregar"/></td>
							</form>
						</tr>
					</table>					
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td><hr/></td>
</tr>
<?php
}
if( $cliente->tipo == Cliente::$GRUPO || 
	( $cliente->tipo == Cliente::$INDIVIDUAL && Count( $datosEmpresaArr ) == 0	)
	)
{
?>
</table>

<form method="post">
<table cellpadding="0" cellspacing="0" border="0">
	<input type="hidden" name="action" value="addEmpresa">	
	<tr><td>Nombre</td>
		<td colspan="5"><input type="text" size="50" name="nombre"></td>
	</tr>
	<tr><td>Direcci&oacute;n</td>
		<td colspan="5"><input type="text" size="50" name="direccion"></td>
	</tr>
	<tr><td align="right">Estado</td>
		<td><input type="text" name="idEstado"></td>
		<td align="right">Ciudad</td>
		<td><input type="text" name="idCiudad"></td>
		<td align="right">Municipio</td>
		<td><input type="text" name="idMpio"></td>
	</tr>
	<tr><td colspan="2"><input type="submit" value="Agregar"></td>
	</tr>
</table>
</form>
<?php
}
?>
