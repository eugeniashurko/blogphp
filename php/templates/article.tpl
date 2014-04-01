<!DOCTYPE html>
<html>
  {include file='header.tpl' title=$current_article->getTitleEN()}
  
  </head>

  <body>
    {include file='navbar.tpl' logged_in=$logged_in} 

    <div id="wrapper">

    {include file='sidebar.tpl' posts=$broadcast_notes broadcast=$broadcast}

      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
                {if !is_null($current_article) }
                  <div class="blog-post-full">
                  {if $smarty.session.lang == "uk"}
                    <h2 class="blog-post-title-full">{$current_article->getTitleUA()}</h2>
                    <p class="blog-post-meta">{$current_article->getDateTime()}</p>
                    <div class="control">
                      {if $logged_in}
                        <a href="edit_article.php?id={$current_article->getId()}">{$smarty.const.EDIT_TXT}</a>&nbsp;&nbsp;
                        <a href="delete_article.php?id={$current_article->getId()}">{$smarty.const.DELETE_TXT}</a>
                      {/if}
                    </div>
                      <p>
                       {if !is_null($current_article->getImageId())}
                            <div class="image-container-full">
                              <img src="{get_image($current_article->getImageId())}" align="left">
                            </div>
                          {/if}
                      {nl2br(htmlspecialchars($current_article->getBodyUA()))}</p>
                      <br>
                    </div>
                  {else}
                    <h2 class="blog-post-title-full">{$current_article->getTitleEN()}</h2>
                    <p class="blog-post-meta">{$current_article->getDateTime()}</p>
                    <div class="control">
                      {if $logged_in}
                        <a href="edit_article.php?id={$current_article->getId()}">{$smarty.const.EDIT_TXT}</a>&nbsp;&nbsp;
                        <a href="delete_article.php?id={$current_article->getId()}">{$smarty.const.DELETE_TXT}</a>
                      {/if}
                    </div>
                      <p>{nl2br(htmlspecialchars($current_article->getBodyEN()))}</p>
                      <br>
                    </div>
                  {/if}
                {else}
                  <h2 class="blog-post-title">Sorry, post was not found</h2>
                {/if}
                </div>
            </div>
            <div id="push"></div>
        </div>

        {include file='footer.tpl'}            
      </div>     
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>

</html>