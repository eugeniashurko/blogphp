<!DOCTYPE html>
<html>

  {include file='header.tpl' title=$smarty.const.LOGIN_TITLE_TXT}

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
                    <legend><h2>{$smarty.const.LOGIN_HEADER_TXT}</h2></legend>

                    <!-- Here login error message -->
                    <div class="error-message">
                      {$smarty.const.ERROR_MESSAGE_TXT}
                    </div>
                    <br>
                    <div class="control-group">
                        <label class="control-label" for="title_input">{$smarty.const.USERNAME_LABLE_TXT}</label>&nbsp;&nbsp;<br>
                        <input name="username" placeholder="{$smarty.const.USERNAME_PLACEHOLDER_TXT}"  type="text">
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="title_input">{$smarty.const.PASSWORD_LABLE_TXT}</label>&nbsp;&nbsp;<br>
                        <input name="password" placeholder="{$smarty.const.PASSWORD_PLACEHOLDER_TXT}"  type="password">
                    </div>

                    <div class="control-group">
                      <div class="controls">
                        <label class="checkbox inline" for="checkboxes-0">
                          <input name="checkboxes" id="checkboxes-0" value="remember" type="checkbox">
                         {$smarty.const.REMEMBER_TXT}
                        </label>
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="control-group">
                      <label class="control-label" for="post_button"></label>
                      <div class="controls">
                        <button id="post_button" name="post_button" class="btn btn-default">
                          {$smarty.const.LOGIN_BUTTON_TXT}
                        </button>
                      </div>
                    </div>
                </form>
                <br><br>
            </div>
        </div>
        <div id="push"></div>
        </div>
      {include file='footer.tpl'}
      </div>       
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>

</html>
