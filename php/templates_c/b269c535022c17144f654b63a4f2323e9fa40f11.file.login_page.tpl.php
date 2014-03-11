<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 14:57:59
         compiled from "./templates/login_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1552798823530baf6f15cd97-57523537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b269c535022c17144f654b63a4f2323e9fa40f11' => 
    array (
      0 => './templates/login_page.tpl',
      1 => 1394369876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1552798823530baf6f15cd97-57523537',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530baf6f18dd28_80707441',
  'variables' => 
  array (
    'broadcast_notes' => 0,
    'broadcast' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530baf6f18dd28_80707441')) {function content_530baf6f18dd28_80707441($_smarty_tpl) {?><!DOCTYPE html>
<html>

  <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>@constant('LOGIN_TITLE_TXT')), 0);?>


  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

    <div id="wrapper">

    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('posts'=>$_smarty_tpl->tpl_vars['broadcast_notes']->value,'broadcast'=>$_smarty_tpl->tpl_vars['broadcast']->value), 0);?>


      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
      
                <form class="form-horizontal">
                    <!-- Form Name -->
                    <legend><h2><?php echo @constant('LOGIN_HEADER_TXT');?>
</h2></legend>

                    <!-- Here login error message -->
                    <div class="error-message">
                      <?php echo @constant('ERROR_MESSAGE_TXT');?>

                    </div>
                    <br>
                    <div class="control-group">
                        <label class="control-label" for="title_input"><?php echo @constant('USERNAME_LABLE_TXT');?>
</label>&nbsp;&nbsp;<br>
                        <input name="username" placeholder="<?php echo @constant('USERNAME_PLACEHOLDER_TXT');?>
"  type="text">
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="title_input"><?php echo @constant('PASSWORD_LABLE_TXT');?>
</label>&nbsp;&nbsp;<br>
                        <input name="password" placeholder="<?php echo @constant('PASSWORD_PLACEHOLDER_TXT');?>
"  type="password">
                    </div>

                    <div class="control-group">
                      <div class="controls">
                        <label class="checkbox inline" for="checkboxes-0">
                          <input name="checkboxes" id="checkboxes-0" value="remember" type="checkbox">
                         <?php echo @constant('REMEMBER_TXT');?>

                        </label>
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="control-group">
                      <label class="control-label" for="post_button"></label>
                      <div class="controls">
                        <button id="post_button" name="post_button" class="btn btn-default">
                          <?php echo @constant('LOGIN_BUTTON_TXT');?>

                        </button>
                      </div>
                    </div>
                </form>
                <br><br>
            </div>
        </div>
        <div id="push"></div>
        </div>
      <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>       
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>

</html>
<?php }} ?>
