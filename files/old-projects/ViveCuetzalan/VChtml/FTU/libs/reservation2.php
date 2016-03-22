<?php
include('correo.php');
$sqlhoteles = mysql_query("SELECT * FROM hotel WHERE id=$idHotel")or die(mysql_error());
while ($reshotel = mysql_fetch_array($sqlhoteles)) { $resulthotel = $reshotel; }
?>
<script type="text/javascript">
	<?php echo 'var hotelsBackgrounds = [{ src: "'.$resulthotel[5].'", fade: 1000 }];'; ?>
</script>
<a href="#" id="openHoteLash" class="no-back-transition"><span class="symb-icon icoCalendar"></span><span class="verticalText">Reservación</span></a>
<!-- Calendario -->
<div id="calRange" class="dates">
	<p>Seleccione las fechas de entrada y salida para su hospedaje:</p>
	<input type="hidden" id="changeIn"><input type="hidden" id="changeOut">
	<div></div>
	<button type="button" id="saveFechaClic" class="isButton saveButton symb-icon icoCalendar disabledButton" disabled>Guardar</button><button type="button" id="cancelFechaClic" class="isButton cancelButton symb-icon icoClosefill">Cancelar</button>
</div>
<!-- Personas -->
<form id="perQuantity">
	<p>Ingrese las cantidades que usted requiera:</p>
	<div>
		<label for="changeHab">Habitaciones</label><input type="number" id="changeHab" name="changeHab">
		<label for="changeAdult">Adultos</label><input type="number" id="changeAdult" name="changeAdult">
		<label for="changeChild">Niños</label><input type="number" id="changeChild" name="changeChild">
	</div>
	<button type="button" id="savePersonClic" class="isButton saveButton symb-icon icoGroup disabledButton" disabled>Guardar</button><button type="button" id="cancelPersonClic" class="isButton cancelButton symb-icon icoClosefill">Cancelar</button>
</form>
<!-- Formulario de reservación -->
<aside class="reservation">
	<div id="tempDisabled"></div>
	<form method="POST" action="" name="reservacionForm" id="reservacionForm">
		<h2>Reservación</h2>
		<fieldset class="normalFormat">
			<label for="hotel">HOTEL</label><select name="hotel" id="hotel">
				<?php echo '<option value="0 || '.$resulthotel[0].'" selected>'.$resulthotel[1].'</option>'; ?>
			</select>
		</fieldset>
		<fieldset>
			<div class="fechaReserv">
				<h3>Entrada</h3><h3>Salida</h3>
				<input type="hidden" name="dayIn" id="dayIn"><input type="hidden" name="dayOut" id="dayOut">
				<table id="openFechaClic">
					<tr>
						<td class="dayIn"><span class="dayFormat1" id="dayInMonth"></span><span class="dayFormat2" id="dayInDate"></span><span class="dayFormat1" id="dayInDay"></span></td>
						<td class="dayOut"><span class="dayFormat1" id="dayOutMonth"></span><span class="dayFormat2" id="dayOutDate"></span><span class="dayFormat1" id="dayOutDay"></span></td>
					</tr>
				</table>
			</div>
			<div class="personasReserv">
				<table id="openPersonaClic">
					<tr>
						<td rowspan="2"><div><label>Hab.</label><span id="txtHab" class="perFormat1">1</span><input type="hidden" id="habitaciones" name="habitaciones" value="1"></div></td>
						<td><div><label>Adultos</label><span id="txtAdults" class="perFormat2">1</span><input type="hidden" id="adultos" name="adultos" value="1"></div></td>
					</tr>
					<tr><td><div><label>Niños</label><span id="txtChild" class="perFormat2">0</span><input type="hidden" id="peques" name="peques" value="0"></div></td></tr>
				</table>
			</div>
		</fieldset>
		<fieldset class="normalFormat">
			<label for="nombre">Nombre</label><input type="text" name="nombre" id="nombre" placeholder="Nombre">
			<label for="mail">e-m@il</label><input type="email" name="mail" id="mail" placeholder="ejemplo@domino.com">
			<label for="direccion">Dirección</label><input type="text" name="direccion" id="direccion" placeholder="Dirección">
			<label for="telNumero">Teléfono</label><input type="number" name="telLada" id="telLada" class="phoneLada" maxlength="3" size="3" placeholder="Lada"><input type="number" name="telNumero" id="telNumero" class="phoneNumber" placeholder="Número">
		</fieldset>
		<fieldset class="fullFormat">
			<label for="comentarios">Comentarios</label>
			<textarea name="comentarios" id="comentarios" placeholder="Comentarios" rows="2"></textarea>
		</fieldset>
		<fieldset><button type="submit" name="submit" id="sendReservInfo" class="isButton sendButton symb-icon icoMail">Reservar</button><button type="button" id="closeHoteLash" class="isButton cancelButton symb-icon icoClosefill">Cancelar</button></fieldset>
	</form>
</aside>