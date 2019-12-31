{include file="header.tpl"}

<div class="container">
    <form class="myForm" action="title_ins_exe" method="post">
        <input type="text" class="inputText" name="title"><br>
	<input class="button button-primary" type='submit' value='send'>
    </form>
    <div class="grid">
    {foreach from=$rows item=row}
    	<div class="item"><a href="thread/{$row.id}">{$row.title}</a></div>
	<!--
    	<div class="item"><a href="title_upd/{$row.id}">update</a></div>
    	<div class="item"><a href="title_del/{$row.id}">delete</a></div>
	-->
    	<!--<a href="thread?id={$row['id']}">{$row['title']}</a><br>-->
    {/foreach}
    </div>
</div><!--container-->

{include file="footer.tpl"}
