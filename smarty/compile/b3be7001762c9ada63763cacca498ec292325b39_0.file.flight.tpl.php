<?php
/* Smarty version 4.1.0, created on 2022-03-14 20:37:47
  from 'C:\xampp\htdocs\sandbox\niels\texas-scramble-nh\smarty\templates\flight.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622f998b143210_89498050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3be7001762c9ada63763cacca498ec292325b39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sandbox\\niels\\texas-scramble-nh\\smarty\\templates\\flight.tpl',
      1 => 1647286660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622f998b143210_89498050 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? 'Texas Scramble' ?? null : $tmp);?>
</h3>
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
</div><?php }
}
