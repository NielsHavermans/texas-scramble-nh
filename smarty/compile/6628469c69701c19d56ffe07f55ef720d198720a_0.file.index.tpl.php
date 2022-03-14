<?php
/* Smarty version 4.1.0, created on 2022-03-14 21:07:54
  from 'C:\xampp\htdocs\sandbox\niels\texas-scramble-nh\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622fa09aa04a92_31739214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6628469c69701c19d56ffe07f55ef720d198720a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sandbox\\niels\\texas-scramble-nh\\smarty\\templates\\index.tpl',
      1 => 1647288405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:flight.tpl' => 1,
    'file:list-golfers.tpl' => 1,
    'file:create.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_622fa09aa04a92_31739214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Texas Scramble'), 0, false);
?>

<div class="dashboard">
	<div class="content">
		<div class="full">
			<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? 'Texas Scramble' ?? null : $tmp);?>
</h1>
		</div>
		<div class="half">
			<?php $_smarty_tpl->_subTemplateRender('file:flight.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Flight indeling'), 0, false);
?>
		</div>
		<div class="half">
			<?php $_smarty_tpl->_subTemplateRender('file:list-golfers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php $_smarty_tpl->_subTemplateRender('file:create.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Golfer toevoegen'), 0, false);
?>
		</div>
	</div>
	<br class="clear" />
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
