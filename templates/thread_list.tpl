{include file="header.tpl"}
<div class="container">

    <a class="button button-primary" href='../title' class='button'>return To Title</a>
    <div class="threadTitle"> 
    {$title_row.title}<br>
    <a class="" href="../title_upd/{$title_row.id}">update</a>
    <a class="" href="../title_del/{$title_row.id}">delete</a>
    </div>

    <form action='../thread_ins_exe' method='post'>
	<input type='hidden' name='id' value='{$title_row.id}'>
	<textarea class="myTextarea" name='text'></textarea><br>
	<input class="button button-primary" type='submit' value='send'>
    </form>
    {foreach from=$rows item=row}
    <div class="threadItem"> 
    	{$row.text}<br>
        <a class="" href="../thread_upd/{$title_row.id}/{$row.id}">update</a>
        <a class="" href="../thread_del/{$title_row.id}/{$row.id}">delete</a>
        <a class="upLink" href="../thread_up/{$title_row.id}/{$row.id}">up</a>
    </div>
    {/foreach}
    <!--
    -->
</div><!--container-->
{include file="footer.tpl"}
