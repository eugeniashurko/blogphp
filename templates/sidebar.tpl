<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            No Broadcast
        </li>
        {if count($posts)==0} 
            <li class="noposts">Broadcast is currently closed</li>
        {else}
            {foreach from=$posts item=post}
            {if $post->actual==1}
            <li>
                <a href="article.php?id={$post->id}">
                    {$post->title}
                </a>
            </li>
            {/if}
            {/foreach}
        {/if}
    </ul>
</div>