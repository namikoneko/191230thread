{include file="header.tpl"}

<div class="container">
    <div class="form-group">
    <form action="title_ins_exe" method="post">
        <input type="text" class="form-control"name="title"><br>
	<input class="btn btn-primary" type='submit' value='send'>
    </div>
    </form>

    {foreach from=$rows item=row}
    	<a href="thread/{$row.id}">{$row.title}</a><br>
    	<!--<a href="thread?id={$row['id']}">{$row['title']}</a><br>-->
    {/foreach}
</div><!--container-->

{include file="footer.tpl"}
