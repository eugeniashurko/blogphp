<div id="float-container">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            {if count($posts)==0} 
                <li class="sidebar-brand">
                    {$smarty.const.NO_BROADCAST_TXT}
                </li>
                <li class="noposts">{$smarty.const.NO_BROADCAST_DESC_TXT}</li>
            {else}
            {if $smarty.session.lang == "uk"}
                <li class="sidebar-brand">
                    {$broadcast->getNameUA()}
                </li>
                    {foreach from=$posts item=post}
                        <li>
                            {$post->getBodyUA()}
                        </li>
                        <hr>
                    {/foreach}
            {else}
                <li class="sidebar-brand">
                    {$broadcast->getNameEN()}
                </li>
                    {foreach from=$posts item=post}
                        <li>
                            {$post->getBodyEN()}
                        </li>
                        <hr>
                    {/foreach}
            {/if}
        {/if}
        </ul>
    </div>
</div>