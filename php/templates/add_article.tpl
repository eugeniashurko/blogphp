<!DOCTYPE html>
<html>
  {include file='header.tpl' title=$smarty.const.ADD_ARTICLE_TITLE_TXT}
  
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
                      <legend><h2>{$smarty.const.ADD_ARTICLE_HEADER_TXT}</h2></legend>
                      <!-- Title input-->
                      <div class="control-group">
                        <label class="control-label" for="title_input">{$smarty.const.TITLE_LABLE_EN_TXT}</label>
                        <div class="controls">
                          <input id="title_input" name="title_input" placeholder="{$smarty.const.TITLE_PLACEHOLDER_EN_TXT}" class="input-xlarge" type="text">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="title_input">{$smarty.const.TITLE_LABLE_UK_TXT}</label>
                        <div class="controls">
                          <input id="title_input" name="title_input" placeholder="{$smarty.const.TITLE_PLACEHOLDER_UK_TXT}" class="input-xlarge" type="text">
                        </div>
                      </div>

                      <!-- Description input -->
                      <div class="control-group">
                        <label class="control-label" for="desc_input">{$smarty.const.DESC_LABLE_EN_TXT}</label>
                        <div class="controls">                     
                          <textarea id="desc_input" name="desc_input" placeholder="{$smarty.const.DESC_PLACEHOLDER_EN_TXT}"></textarea>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="desc_input">{$smarty.const.DESC_LABLE_UK_TXT}</label>
                        <div class="controls">                     
                          <textarea id="desc_input" name="desc_input" placeholder="{$smarty.const.DESC_PLACEHOLDER_UK_TXT}"></textarea>
                        </div>
                      </div>
                      
                      <!-- Body input -->
                      <div class="control-group">
                        <label class="control-label" for="body_input">{$smarty.const.BODY_LABLE_EN_TXT}</label>
                        <div class="controls">                     
                          <textarea id="body_input" name="body_input" placeholder="{$smarty.const.BODY_PLACEHOLDER_EN_TXT}"></textarea>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="body_input">{$smarty.const.BODY_LABLE_UK_TXT}</label>
                        <div class="controls">                     
                          <textarea id="body_input" name="body_input" placeholder="{$smarty.const.BODY_PLACEHOLDER_UK_TXT}"></textarea>
                        </div>
                      </div>

                      <!-- File input -->
                      <div class="control-group">
                        <label class="control-label" for="checkboxes"></label>
                        <div class="controls">
                            <input type="file" name="datafile" size="40">
                        </div>
                      </div>

                      <!-- Button -->
                      <div class="control-group">
                        <label class="control-label" for="post_button"></label>
                        <div class="controls">
                          <button id="post_button" name="post_button" class="btn btn-default">{$smarty.const.BUTTON_LABLE_TXT}</button>
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
