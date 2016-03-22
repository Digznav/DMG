<?php
require_once('../libs/consulta_hotel.php');
include('../libs/correo.php');
?>
<aside class="reservation clearfix">
	<form method="POST" action="" name="reservacionForm" id="reservacionForm">
		<h2>Reservation</h2>
		<fieldset>
			<label for="hotel">Hotel</label>
			<select name="hotel" id="hotel">
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
			<label for="dayIn">Check-in</label>
			<input type="hidden" name="dayIn" id="dayIn">
			<div id="calDayIn"></div>
			<label for="dayOut">Check-out</label>
			<input type="hidden" name="dayOut" id="dayOut">
			<div id="calDayOut"></div>
		</fieldset>
		<fieldset>
			<table class="tabPersons">
				<thead>
					<tr>
						<th><label for="habitaciones">Bedrooms</label></th>
						<th><label for="adultos">Adults</label></th>
						<th><label for="peques">Kids</label></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="number" id="habitaciones" name="habitaciones" value="1"></td>
						<td><input type="number" id="adultos" name="adultos" value="1"></td>
						<td><input type="number" id="peques" name="peques" value="0"></td>
					</tr>
				</tbody>
			</table>
		</fieldset>
		<fieldset>
			<label for="nombre">Name</label><input type="text" name="nombre" id="nombre">
			<label for="mail">e-m@il</label><input type="email" name="mail" id="mail" placeholder="example@domain.com">
			<label for="direccion">Address</label><input type="text" name="direccion" id="direccion">
			<label for="telNumero">Phone Number</label><input type="number" name="telLada" id="telLada" class="phoneLada" maxlength="3" size="3" placeholder="Lada"><input type="number" name="telNumero" id="telNumero" class="phoneNumber" placeholder="Phone Number">
		</fieldset>
		<fieldset>
			<label for="comentarios">Comments</label>
			<textarea name="comentarios" id="comentarios" rows="3"></textarea>
		</fieldset>
		<fieldset><button type="submit" name="submit" id="sendReservInfo" class="isButton sendButton symb-icon icoMail">Book</button></fieldset>
	</form>
</aside>