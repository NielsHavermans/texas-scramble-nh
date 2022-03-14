{* Smarty *}
<div class="addgolferform">
	<h3>{$title|default:'Texas Scramble'}</h3>
	<form id="creategolfer" method="POST">
		<div class="formrow">
			<label for="name">Naam</label>
			<input type="text" id="name" name="name" placeholder="Vul voornaam in" />
		</div>
		<div class="formrow">
			<label for="gender">Geslacht</label>
			<select id="gender" name="gender">
				<option value="">Kies</option>
				<option value="man">Man</option>
				<option value="vrouw">Vrouw</option>
			</select>
		</div>
		<div class="formrow">
			<label for="handicap">Handicap</label>
			<input type="number" id="handicap" name="handicap" step=".1" min="0" max="54" placeholder="10" />
		</div>
		<div class="formrow">
			<input type="submit" value="Aanmaken" />
		</div>
	</form>
	<div class="error"></div>
</div>
<div class="addgolferformsuccess">
	<p>Golfer succesvol opgeslagen.</p>
	<button id="backbtn"><a href="?refresh=1">Golfer toevoegen</a></button>
</div>