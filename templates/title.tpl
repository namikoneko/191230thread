{include file="header.tpl"}

<!--<div class="container-fluid">-->
    <form action="title_ins_exe" method="post">
        <input type="text" class=""name="title"><br>
	<input class="" type='submit' value='send'>
    </form>
    <table>
    {foreach from=$rows item=row}
        <tr>
    	<td><a href="thread/{$row.id}">{$row.title}</a></td>
    	<td><a href="title_upd/{$row.id}">update</a></td>
    	<td><a href="title_del/{$row.id}">delete</a></td>
    	<!--<a href="thread?id={$row['id']}">{$row['title']}</a><br>-->
        </tr>
    {/foreach}
    </table>
<!--</div>container-->

{include file="footer.tpl"}
