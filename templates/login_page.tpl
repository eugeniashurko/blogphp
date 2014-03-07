<!DOCTYPE html>
<html>
  {include file='header.tpl' title="Login page"}
  
  </head>

  <body>
    {include file='navbar.tpl'} 

    <div id="wrapper">

    {include file='sidebar.tpl' posts=$posts}

      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
      
                <form class="form-horizontal">
                    <!-- Form Name -->
                    <legend><h2>Please, log in</h2></legend>

                    <!-- Here login error message -->
                    <div class="error-message">
                      Log in failed, please check your username or password 
                    </div>
                    <br>
                    <div class="control-group">
                        <label class="control-label" for="title_input">Username:</label>&nbsp;&nbsp;<br>
                        <input name="username" placeholder="Enter password"  type="text">
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="title_input">Password:</label>&nbsp;&nbsp;<br>
                        <input name="password" placeholder="Enter password"  type="password">
                    </div>

                    <div class="control-group">
                      <div class="controls">
                        <label class="checkbox inline" for="checkboxes-0">
                          <input name="checkboxes" id="checkboxes-0" value="remember" type="checkbox">
                          Remember me
                        </label>
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="control-group">
                      <label class="control-label" for="post_button"></label>
                      <div class="controls">
                        <button id="post_button" name="post_button" class="btn btn-default">Log In</button>
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
