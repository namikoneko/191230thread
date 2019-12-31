{include file="header.tpl"}

<div class="container">

{include file="title_search.tpl"}

{if $topLink == 1}
    <a class="button button-primary" href='title' class='button'>return To Title</a>
{/if}

<div class="row">

    <div class="one-half column">
    {foreach from=$titles item=title}
        {$title}<br>
    {/foreach}
    </div>

    <div class="one-half column">
    {foreach from=$thread_texts item=thread_text}
        {$thread_text}<br>
    {/foreach}
    </div>

</div>
	<!--
	-->
    </div>
</div><!--container-->

{include file="footer.tpl"}
