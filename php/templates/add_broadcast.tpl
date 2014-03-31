<!DOCTYPE html>
<html>
  {include file='header.tpl' title=$smarty.const.ADD_BROADCAST_TITLE_TXT}
  
  </head>

  <body>
    {include file='navbar.tpl' logged_in=$logged_in} 

    <div id="wrapper">

    {include file='sidebar.tpl' posts=$broadcast_notes broadcast=$broadcast}

      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
              {if $logged_in}    
                <form action="proceed_add_br.php" method="post"  class="form-horizontal">
                      <!-- Form Name -->
                      <legend><h2>{$smarty.const.ADD_BROADCAST_HEADER_TXT}</h2></legend>
                      
                      {if ($message)}
                        <div class="error-message">
                          {$message}
                        </div>
                      {/if}

                      <!-- Title input-->
                      
                      <div class="control-group">
                        <label class="control-label" for="title_input">{$smarty.const.BTITLE_LABLE_EN_TXT}</label>
                        <div class="controls">
                          <input id="title_input" name="title_input_en" placeholder="{$smarty.const.BTITLE_PLACEHOLDER_EN_TXT}" class="input-xlarge" type="text">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="title_input">{$smarty.const.BTITLE_LABLE_UK_TXT}</label>
                        <div class="controls">
                          <input id="title_input" name="title_input_ua" placeholder="{$smarty.const.BTITLE_PLACEHOLDER_UK_TXT}" class="input-xlarge" type="text">
                        </div>
                      </div>
                      <br><br>
                      <!-- Button -->
                      <div class="control-group">
                        <label class="control-label" for="post_button"></label>
                        <div class="controls">
                          <button type="submit" id="post_button" name="post_button" class="btn btn-default">{$smarty.const.BBUTTON_LABLE_TXT}</button>
                        </div>
                      </div>
                  </form>
                  {else}
                    {$smarty.const.PERMISSION_DENIED}
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
