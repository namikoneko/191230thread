<?php
/* Smarty version 3.1.32-dev, created on 2019-12-30 21:42:49
  from "/Library/WebServer/Documents/php/xdomain/191215/templates/title_upd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev',
  'unifunc' => 'content_5e09f0c9c8f9f7_09877076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25392f282e9f412ebb32972b0132737e82e47f57' => 
    array (
      0 => '/Library/WebServer/Documents/php/xdomain/191215/templates/title_upd.tpl',
      1 => 1577709552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e09f0c9c8f9f7_09877076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">

<form class="myForm" action='../title_upd_exe' method='post'>
    <input type='hidden' name='id' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
    <input class="inputText" type='text' name='title' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"><br>
    <input class="button button-primary" type='submit' value='send'>
</form>
    <!--
    -->
</div><!--container-->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
