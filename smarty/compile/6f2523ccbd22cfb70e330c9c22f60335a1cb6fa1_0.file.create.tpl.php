<?php
/* Smarty version 4.1.0, created on 2022-03-14 21:26:20
  from 'C:\xampp\htdocs\sandbox\niels\texas-scramble-nh\smarty\templates\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622fa4ec9ae442_56285829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f2523ccbd22cfb70e330c9c22f60335a1cb6fa1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sandbox\\niels\\texas-scramble-nh\\smarty\\templates\\create.tpl',
      1 => 1647289578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622fa4ec9ae442_56285829 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addgolferform">
	<h3><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? 'Texas Scramble' ?? null : $tmp);?>
</h3>
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
</div><?php }
}
