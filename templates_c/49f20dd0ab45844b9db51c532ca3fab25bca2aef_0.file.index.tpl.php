<?php
/* Smarty version 3.1.30, created on 2016-08-26 15:06:56
  from "F:\public\App\View\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57bfea907eef82_05069729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49f20dd0ab45844b9db51c532ca3fab25bca2aef' => 
    array (
      0 => 'F:\\public\\App\\View\\index.tpl',
      1 => 1472195201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bfea907eef82_05069729 (Smarty_Internal_Template $_smarty_tpl) {
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
