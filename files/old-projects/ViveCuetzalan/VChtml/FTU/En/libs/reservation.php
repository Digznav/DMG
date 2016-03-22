<?php
require_once('libs/consulta_hotel.php');
$backs = array();
foreach ($resulthotel as $key) {
	$img = '{src:"../'.$key[5].'",fade:1000}';
	array_push($backs, $img);
};
$last = count($backs); $ct = 1;
include('correo.php');
?>

<script type="text/javascript">
	var hotelsBackgrounds = [
		<?php
		foreach ($backs as $key) {
			echo $key;
			if ($ct != $last) { echo ','; $ct++; };
		}
		?>
	];
</script>
<a href="#" id="openHoteLash" <?php if (isset($no_trans) && $no_trans) { echo 'class="no-hotel"'; } ?> ><span class="symb-icon icoCalendar"></span><span class="verticalText">Reservation</span></a>
<!-- Calendario -->
<div id="calRange" class="dates">
	<p>Select your check-in and check-out dates:</p>
	<input type="hidden" id="changeIn"><input type="hidden" id="changeOut">
	<div></div>
	<button type="button" id="saveFechaClic" class="isButton saveButton symb-icon icoCalendar disabledButton" disabled>Save</button><button type="button" id="cancelFechaClic" class="isButton cancelButton symb-icon icoClosefill">Cancel</button>
</div>
<!-- Personas -->
<form id="perQuantity">
	<p>Enter the amount needed:</p>
	<div>
		<label for="changeHab">Bedrooms</label><input type="number" id="changeHab" name="changeHab">
		<label for="changeAdult">Adults</label><input type="number" id="changeAdult" name="changeAdult">
		<label for="changeChild">Kids</label><input type="number" id="changeChild" name="changeChild">
	</div>
	<button type="button" id="savePersonClic" class="isButton saveButton symb-icon icoGroup disabledButton" disabled>Save</button><button type="button" id="cancelPersonClic" class="isButton cancelButton symb-icon icoClosefill">Cancel</button>
</form>
<!-- Formulario de reservación -->
<aside class="reservation">
	<div id="tempDisabled"></div>
	<form method="POST" action="" name="reservacionForm" id="reservacionForm">
		<h2>Reservation</h2>
		<fieldset class="normalFormat">
			<label for="hotel">HOTEL</label><select name="hotel" id="hotel">
				<option value="">Select a hotel</option>
				<?php
				$k = 0;
				foreach ($resulthotel as $key) {
				echo '<option value="'.$k.' || '.$key[0].'">'.$key[1].'</option>'; $k++;
				}
				?>
			</select>
		</fieldset>
		<fieldset>
			<div class="fechaReserv">
				<h3>Check-in</h3><h3>Check-out</h3>
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
						<td rowspan="2"><div><label>Bd.</label><span id="txtHab" class="perFormat1">1</span><input type="hidden" id="habitaciones" name="habitaciones" value="1"></div></td>
						<td><div><label>Adults</label><span id="txtAdults" class="perFormat2">1</span><input type="hidden" id="adultos" name="adultos" value="1"></div></td>
					</tr>
					<tr><td><div><label>Kids</label><span id="txtChild" class="perFormat2">0</span><input type="hidden" id="peques" name="peques" value="0"></div></td></tr>
				</table>
			</div>
		</fieldset>
		<fieldset class="normalFormat">
			<label for="nombre">Name</label><input type="text" name="nombre" id="nombre" placeholder="Name">
			<label for="mail">e-m@il</label><input type="email" name="mail" id="mail" placeholder="example@domain.com">
			<label for="direccion">Address</label><input type="text" name="direccion" id="direccion" placeholder="Address">
			<label for="telNumero">Phone Number</label><input type="number" name="telLada" id="telLada" class="phoneLada" maxlength="3" size="3" placeholder="Lada"><input type="number" name="telNumero" id="telNumero" class="phoneNumber" placeholder="Phone Number">
		</fieldset>
		<fieldset class="fullFormat">
			<label for="comentarios">Comments</label>
			<textarea name="comentarios" id="comentarios" placeholder="Comments" rows="2"></textarea>
		</fieldset>
		<fieldset><button type="submit" name="submit" id="sendReservInfo" class="isButton sendButton symb-icon icoMail">Book</button><button type="button" id="closeHoteLash" class="isButton cancelButton symb-icon icoClosefill">Cancel</button></fieldset>
	</form>
</aside>