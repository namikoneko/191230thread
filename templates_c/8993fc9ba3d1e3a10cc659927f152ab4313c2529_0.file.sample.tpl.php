<?php
/* Smarty version 3.1.32-dev, created on 2019-12-22 17:08:46
  from "/Library/WebServer/Documents/php/xdomain/191215/templates/sample.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev',
  'unifunc' => 'content_5dff248e4e2761_76165165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8993fc9ba3d1e3a10cc659927f152ab4313c2529' => 
    array (
      0 => '/Library/WebServer/Documents/php/xdomain/191215/templates/sample.tpl',
      1 => 1577002124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dff248e4e2761_76165165 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/Library/WebServer/Documents/php/xdomain/libs/plugins/modifier.date_format.php';
?>
<html>
    <head>
    </head>
    <body>
	present time is <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['now']->value,"%H:%M:%S");?>

    </body>
</html>
<?php }
}
