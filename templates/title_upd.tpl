{include file="header.tpl"}

<form action='../title_upd_exe' method='post'>
    <input type='hidden' name='id' value="{$row.id}"><br>
    <input type='text' name='title' value="{$row.title}">
    <input type='submit' value='send'>
</form>
    <!--
    -->

{include file="footer.tpl"}
