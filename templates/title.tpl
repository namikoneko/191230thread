{include file="header.tpl"}

<div class="container">

{include file="title_search.tpl"}

{if $topLink == 1}
    <a class="button button-primary" href='title' class='button'>return To Title</a>
{/if}

    <div class="grid">
    {foreach from=$rows item=row}
    	<div class="item">
		<a href="thread/{$row.id}">{$row.title}</a>
    		<a class="upLink" href="title_up/{$row.id}">up</a>
    		<!--<a class="button" href="title_up/{$row.id}">up</a>-->
	</div>
	<!--
    	<div class="item"><a href="title_upd/{$row.id}">update</a></div>
    	<div class="item"><a href="title_del/{$row.id}">delete</a></div>
	-->
    {/foreach}
    </div>
</div><!--container-->

{include file="footer.tpl"}
