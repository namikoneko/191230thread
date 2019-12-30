<?php
/* Smarty version 3.1.32-dev, created on 2019-12-30 18:52:55
  from "/Library/WebServer/Documents/php/xdomain/191215/templates/thread_upd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev',
  'unifunc' => 'content_5e09c8f77042b1_14507846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333f53d758f0c8040508c1d2bc541eeb03813c4f' => 
    array (
      0 => '/Library/WebServer/Documents/php/xdomain/191215/templates/thread_upd.tpl',
      1 => 1577699564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e09c8f77042b1_14507846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <form action='../../thread_upd_exe' method='post'>

	<input type='hidden' name='id' value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
><br>
	<input type='hidden' name='thread_id' value=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
><br>
	<textarea class="form-control" name='text'><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</textarea><br>
	<input type='submit' class="form-control" value='send'>

    </form>
    <!--
    -->
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
