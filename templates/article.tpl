<!DOCTYPE html>
<html>
  {include file='header.tpl' title=$current_article->getTitleEN()}
  
  </head>

  <body>
    {include file='navbar.tpl'} 

    <div id="wrapper">

    {include file='sidebar.tpl' posts=NULL}

      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
                {if !is_null($current_article) }
                  <div class="blog-post-full">
                    <h2 class="blog-post-title">{$current_article->getTitleEN()}</h2>
                    <div class="control">
                      <a href="">Edit</a>&nbsp;&nbsp;<a href="">Delete</a>
                    </div>
                    <p class="blog-post-meta">{$current_article->getDateTime()}</p>
                    <p>{nl2br(htmlspecialchars($current_article->getBodyEN()))}</p>
                    <br>
                  </div>
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