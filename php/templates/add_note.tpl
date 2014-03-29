<!DOCTYPE html>
<html>
  {include file='header.tpl' title=$smarty.const.ADD_NOTE_TITLE_TXT}
  
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
                <form class="form-horizontal">
                    <!-- Form Name -->
                    <legend><h2>{$smarty.const.ADD_NOTE_HEADER_TXT}</h2></legend>
                    
                    <!-- Body input -->
                    <div class="control-group">
                      <label class="control-label" for="body_input">{$smarty.const.NOTE_BODY_LABLE_EN_TXT}</label>
                      <div class="controls">                     
                        <textarea id="note_body_input" name="body_input" placeholder="{$smarty.const.NOTE_BODY_PLACEHOLDER_EN_TXT}"></textarea>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="body_input">{$smarty.const.NOTE_BODY_LABLE_UK_TXT}</label>
                      <div class="controls">                     
                        <textarea id="note_body_input" name="body_input" placeholder="{$smarty.const.NOTE_BODY_PLACEHOLDER_UK_TXT}"></textarea>
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="control-group">
                      <label class="control-label" for="post_button"></label>
                      <div class="controls">
                        <button id="post_note_button" name="post_button" class="btn btn-default">{$smarty.const.BUTTON_LABLE_TXT}</button>
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
