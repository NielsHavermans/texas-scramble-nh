{* Smarty *}
<h3>{$title|default:'Texas Scramble'}</h3>
<div class="createflightform">
	<p>Genereer de meest optimale flight indeling:</p>
	<form id="createflight" method="POST">
		<div class="formrow">
			<label for="flightcount">Golfers per flight</label>
			<select id="flightcount" name="flightcount">
				<option value="">Kies</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>
		<div class="formrow">
			<input type="submit" value="Genereer Flights" />
		</div>
	</form>
	<div class="error"></div>
</div>
<div class="createflightformsuccess">
	&nbsp;
</div>