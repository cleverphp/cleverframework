<?php
/* Smarty version 3.1.30, created on 2018-02-03 09:38:34
  from "D:\_social\App\View\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a75831ad23731_83021095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb2af26992dae40cc793a3743a5c828039745140' => 
    array (
      0 => 'D:\\_social\\App\\View\\index.tpl',
      1 => 1517646913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a75831ad23731_83021095 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head></head>
	<body>
		<?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
<br />

		<!---
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
			<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-----<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<br />
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		--->
	</body>
</html><?php }
}
