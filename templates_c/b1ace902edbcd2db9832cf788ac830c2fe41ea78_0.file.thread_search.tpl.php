<?php
/* Smarty version 3.1.32-dev, created on 2019-12-31 12:50:07
  from "/Library/WebServer/Documents/php/xdomain/191215/templates/thread_search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev',
  'unifunc' => 'content_5e0ac56f182974_50926186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1ace902edbcd2db9832cf788ac830c2fe41ea78' => 
    array (
      0 => '/Library/WebServer/Documents/php/xdomain/191215/templates/thread_search.tpl',
      1 => 1577764201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:title_search.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e0ac56f182974_50926186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">

<?php $_smarty_tpl->_subTemplateRender("file:title_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['topLink']->value == 1) {?>
    <a class="button button-primary" href='title' class='button'>return To Title</a>
<?php }?>

<div class="row">

    <div class="one-half column">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['titles']->value, 'title');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['title']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<br>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>

    <div class="one-half column">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thread_texts']->value, 'thread_text');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thread_text']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['thread_text']->value;?>
<br>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>

</div>
	<!--
	-->
    </div>
</div><!--container-->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
