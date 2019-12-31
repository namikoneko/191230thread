<?php
/* Smarty version 3.1.32-dev, created on 2019-12-31 11:35:32
  from "/Library/WebServer/Documents/php/xdomain/191215/templates/title_search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev',
  'unifunc' => 'content_5e0ab3f4a35088_12689085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c4fe4ad827093695c0317a2bc36ac78d3d29d03' => 
    array (
      0 => '/Library/WebServer/Documents/php/xdomain/191215/templates/title_search.tpl',
      1 => 1577759729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0ab3f4a35088_12689085 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  
<div class="one-third column">
<form class="myForm" action="title_ins_exe" method="post">
    <input type="text" class="inputText" name="title"><br>
    <input class="button button-primary" type='submit' value='send'>
</form>
</div>

<div class="one-third column">
<form class="myForm" action="title_search" method="post">
    <input type="text" class="inputText" name="title_search"><br>
    <input class="button button-primary" type='submit' value='send'>
</form>
</div>

<div class="one-third column">
<form class="myForm" action="thread_search" method="post">
    <input type="text" class="inputText" name="thread_search"><br>
    <input class="button button-primary" type='submit' value='send'>
</form>
</div>

</div>
<?php }
}
