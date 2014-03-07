<!DOCTYPE html>
<html>
  {include file='header.tpl' title="Home page"}
  
  </head>

  <body>
    {include file='navbar.tpl'} 

    <div id="wrapper">

    {include file='sidebar.tpl' posts=NULL}

      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
                  {foreach from=$posts item=post}
                    <div class="blog-post">
                      <h2 class="blog-post-title"><a href="article.php?id={$post->getId()}">{$post->getTitleEN()}</a></h2>
                      <p class="blog-post-meta">{$post->getDateTime()}</p>
                      <p>{nl2br(htmlspecialchars($post->getDescEN()))}</p>
                      <a href="article.php?id={$post->getId()}">Details</a>
                      <br>
                      <hr>
                    </div>
                  {/foreach}
                </div>
            </div>
            <div id="push"></div>
        </div>

        {include file='footer.tpl'}            
      </div>  
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>    
  </body>

</html>