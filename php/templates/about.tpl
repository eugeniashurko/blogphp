<!DOCTYPE html>
<html>
  {include file='header.tpl' title=$smarty.const.ABOUT_TITLE_TXT}
  
  </head>

  <body>
    {include file='navbar.tpl' logged_in=$logged_in} 

    <div id="wrapper">

    {include file='sidebar.tpl' posts=$broadcast_notes broadcast=$broadcast}

      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
                
                  <h2>{$smarty.const.ABOUT_HEADER_TXT}</h2>
                  <p>{nl2br(htmlspecialchars($smarty.const.ABOUT_BODY_TXT))}</p>
                  <br><br>
                  <h3>{$smarty.const.CONTACTS_ACCOUNTS_TXT}</h3>
                  <br>
                  e-mail: yarutoua(at)gmail.com
                  <br>
                  <a href="https://www.facebook.com/eugenia.oshurko">facebook</a>
                  <br>
                  <a href="https://github.com/eugeniashurko/blogphp">github</a>
                  <br>       
                </div>
            </div>
            <div id="push"></div>
        </div>

        {include file='footer.tpl'}            
      </div>       
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>

</html>