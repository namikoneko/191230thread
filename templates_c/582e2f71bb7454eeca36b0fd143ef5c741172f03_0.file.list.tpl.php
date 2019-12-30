<?php
/* Smarty version 3.1.32-dev, created on 2019-12-22 21:12:30
  from "/Library/WebServer/Documents/php/xdomain/191215/templates/list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev',
  'unifunc' => 'content_5dff5dae5789c8_35103569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '582e2f71bb7454eeca36b0fd143ef5c741172f03' => 
    array (
      0 => '/Library/WebServer/Documents/php/xdomain/191215/templates/list.tpl',
      1 => 1577015324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dff5dae5789c8_35103569 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
    </head>
    <body>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
    	<a href="thread?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a><br>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </body>
</html>
<?php }
}
