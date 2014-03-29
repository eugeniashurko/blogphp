<?php /* Smarty version Smarty-3.1.16, created on 2014-03-29 21:12:04
         compiled from "./templates/add_note.tpl" */ ?>
<?php /*%%SmartyHeaderCode:518905713532afd22c97d91-24970437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f04b2005d70fe65f891edb527fafd384ab8389e9' => 
    array (
      0 => './templates/add_note.tpl',
      1 => 1396120319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '518905713532afd22c97d91-24970437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532afd22d103b9_71246167',
  'variables' => 
  array (
    'logged_in' => 0,
    'broadcast_notes' => 0,
    'broadcast' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532afd22d103b9_71246167')) {function content_532afd22d103b9_71246167($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>@constant('ADD_NOTE_TITLE_TXT')), 0);?>

  
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('logged_in'=>$_smarty_tpl->tpl_vars['logged_in']->value), 0);?>
 

    <div id="wrapper">

    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('posts'=>$_smarty_tpl->tpl_vars['broadcast_notes']->value,'broadcast'=>$_smarty_tpl->tpl_vars['broadcast']->value), 0);?>


      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
              <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
                <form class="form-horizontal">
                    <!-- Form Name -->
                    <legend><h2><?php echo @constant('ADD_NOTE_HEADER_TXT');?>
</h2></legend>
                    
                    <!-- Body input -->
                    <div class="control-group">
                      <label class="control-label" for="body_input"><?php echo @constant('NOTE_BODY_LABLE_EN_TXT');?>
</label>
                      <div class="controls">                     
                        <textarea id="note_body_input" name="body_input" placeholder="<?php echo @constant('NOTE_BODY_PLACEHOLDER_EN_TXT');?>
"></textarea>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="body_input"><?php echo @constant('NOTE_BODY_LABLE_UK_TXT');?>
</label>
                      <div class="controls">                     
                        <textarea id="note_body_input" name="body_input" placeholder="<?php echo @constant('NOTE_BODY_PLACEHOLDER_UK_TXT');?>
"></textarea>
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="control-group">
                      <label class="control-label" for="post_button"></label>
                      <div class="controls">
                        <button id="post_note_button" name="post_button" class="btn btn-default"><?php echo @constant('BUTTON_LABLE_TXT');?>
</button>
                      </div>
                    </div>
                </form>
                <?php } else { ?>
                  <?php echo @constant('PERMISSION_DENIED');?>

                <?php }?>
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
