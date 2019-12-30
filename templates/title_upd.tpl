{include file="header.tpl"}

<form action='title_upd_exe' method='post'>";
    <input type='hidden' name='id' value="{$id}">
    <textarea name='text'>{$row['text']}</textarea><br>
    <input type='submit' value='send'>
</form>
    <!--
    -->

{include file="footer.tpl"}
