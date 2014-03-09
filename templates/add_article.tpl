<!DOCTYPE html>
<html>
  {include file='header.tpl' title=$smarty.const.ADD_ARTICLE_TITLE_TXT}
  
  </head>

  <body>
    {include file='navbar.tpl'} 

    <div id="wrapper">

    {include file='sidebar.tpl' posts=$broadcast_notes broadcast=$broadcast}

      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
      
            	<form class="form-horizontal">
                    <!-- Form Name -->
                    <legend><h2>{$smarty.const.ADD_ARTICLE_HEADER_TXT}</h2></legend>
                    <!-- Text input-->
                    <div class="control-group">
                      <label class="control-label" for="title_input">{$smarty.const.TITLE_LABLE_TXT}</label>
                      <div class="controls">
                        <input id="title_input" name="title_input" placeholder="{$smarty.const.TITLE_PLACEHOLDER_TXT}" class="input-xlarge" type="text">
                      </div>
                    </div>

                    <!-- Textarea -->
                    <div class="control-group">
                      <label class="control-label" for="desc_input">{$smarty.const.DESC_LABLE_TXT}</label>
                      <div class="controls">                     
                        <textarea id="desc_input" name="desc_input" placeholder="{$smarty.const.DESC_PLACEHOLDER_TXT}"></textarea>
                      </div>
                    </div>
                    <!-- Textarea -->
                    <div class="control-group">
                      <label class="control-label" for="body_input">{$smarty.const.BODY_LABLE_TXT}</label>
                      <div class="controls">                     
                        <textarea id="body_input" name="body_input" placeholder="{$smarty.const.BODY_PLACEHOLDER_TXT}"></textarea>
                      </div>
                    </div>
                    <!-- Multiple Checkboxes (inline) -->
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
            </div>
        </div>
        <div id="push"></div>
        </div>
      {include file='footer.tpl'}
      </div>       
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>

</html>
