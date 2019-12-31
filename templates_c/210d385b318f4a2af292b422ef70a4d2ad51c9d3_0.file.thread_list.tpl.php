<?php
/* Smarty version 3.1.32-dev, created on 2019-12-31 10:10:09
  from "/Library/WebServer/Documents/php/xdomain/191215/templates/thread_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev',
  'unifunc' => 'content_5e0a9ff1e4a283_77579957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210d385b318f4a2af292b422ef70a4d2ad51c9d3' => 
    array (
      0 => '/Library/WebServer/Documents/php/xdomain/191215/templates/thread_list.tpl',
      1 => 1577754466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e0a9ff1e4a283_77579957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <a class="button button-primary" href='../title' class='button'>return To Title</a>
    <div class="threadTitle"> 
    <?php echo $_smarty_tpl->tpl_vars['title_row']->value['title'];?>
<br>
    <a class="" href="../title_upd/<?php echo $_smarty_tpl->tpl_vars['title_row']->value['id'];?>
">update</a>
    <a class="" href="../title_del/<?php echo $_smarty_tpl->tpl_vars['title_row']->value['id'];?>
">delete</a>
    </div>

    <form action='../thread_ins_exe' method='post'>
	<input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['title_row']->value['id'];?>
'>
	<textarea class="myTextarea" name='text'></textarea><br>
	<input class="button button-primary" type='submit' value='send'>
    </form>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
    <div class="threadItem"> 
    	<?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
<br>
        <a class="" href="../thread_upd/<?php echo $_smarty_tpl->tpl_vars['title_row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">update</a>
        <a class="" href="../thread_del/<?php echo $_smarty_tpl->tpl_vars['title_row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">delete</a>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <!--
    -->
</div><!--container-->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
