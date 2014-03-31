<!DOCTYPE html>
<html>
  {include file='header.tpl' title=$smarty.const.HOME_TITLE_TXT}
  
  </head>

  <body>
    {include file='navbar.tpl' broadcast=$broadcast logged_in=$logged_in} 

    <div id="wrapper">
    {if $smarty.session.lang == "uk"}
      {include file='sidebar.tpl' broadcast=$broadcast posts=$broadcast_notes}

      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
                  {if count($posts) != 0}
                    {foreach from=$posts item=post}
                      <div class="blog-post">
                        <h2 class="blog-post-title"><a href="article.php?id={$post->getId()}">{$post->getTitleUA()}</a></h2>
                        <p class="blog-post-meta">{$post->getDateTime()}</p>
                        <p>{nl2br(htmlspecialchars($post->getDescUA()))}</p>
                        <a href="article.php?id={$post->getId()}">{$smarty.const.DETAILS_TXT}</a>
                        <br>
                        <hr>
                      </div>
                    {/foreach}
                  {else}
                    {$smarty.const.NO_ARTICLES_FOUND}
                  {/if}
                </div>
            </div>
            <div id="push"></div>
      </div>
      </div> 
    {else}
      {include file='sidebar.tpl' name=$broadcast posts=$broadcast_notes}
    
      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
                  {foreach from=$posts item=post}
                    <div class="blog-post">
                      <h2 class="blog-post-title"><a href="article.php?id={$post->getId()}">{$post->getTitleEN()}</a></h2>
                      <p class="blog-post-meta">{$post->getDateTime()}</p>
                      <p>{nl2br(htmlspecialchars($post->getDescEN()))}</p>
                      <a href="article.php?id={$post->getId()}">{$smarty.const.DETAILS_TXT}</a>
                      <br>
                      <hr>
                    </div>
                  {/foreach}
                </div>
            </div>
            <div id="push"></div>
        </div>
        </div> 
    {/if}
        {include file='footer.tpl'}            
      </div>  
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>    
  </body>

</html>