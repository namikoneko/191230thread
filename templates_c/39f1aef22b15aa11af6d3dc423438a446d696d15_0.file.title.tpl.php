<?php
/* Smarty version 3.1.32-dev, created on 2019-12-30 22:26:13
  from "/Library/WebServer/Documents/php/xdomain/191215/templates/title.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev',
  'unifunc' => 'content_5e09faf53af158_16870007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39f1aef22b15aa11af6d3dc423438a446d696d15' => 
    array (
      0 => '/Library/WebServer/Documents/php/xdomain/191215/templates/title.tpl',
      1 => 1577712362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e09faf53af158_16870007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <form class="myForm" action="title_ins_exe" method="post">
        <input type="text" class="inputText" name="title"><br>
	<input class="button button-primary" type='submit' value='send'>
    </form>
    <div class="grid">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
    	<div class="item"><a href="thread/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></div>
	<!--
    	<div class="item"><a href="title_upd/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">update</a></div>
    	<div class="item"><a href="title_del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">delete</a></div>
	-->
    	<!--<a href="thread?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a><br>-->
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>
</div><!--container-->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
