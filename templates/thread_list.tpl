{include file="header.tpl"}
<div class="container">

    <a class="btn btn-primary" href='../title' class='button'>return To Title</a><br>
    {$title_row.title}<br>

    <form action='thread_ins_exe' method='post'>
    <div class="form-group">
	<input type='hidden' name='id' value='{$title_row.id}'>
	<textarea class="form-control" name='text'></textarea><br>
	<input class="btn btn-primary" type='submit' value='send'>
    </div>
    </form>
    {foreach from=$rows item=row}
    	{$row.text}<br>
        <a class="btn btn-primary" href="../thread_upd/{$title_row.id}/{$row.id}">update</a>
        <a class="btn btn-secondary" href="../thread_del/{$title_row.id}/{$row.id}">delete</a><br>
    {/foreach}
    <!--
    -->
</div><!--container-->
{include file="footer.tpl"}
