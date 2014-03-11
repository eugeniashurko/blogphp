<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 14:56:39
         compiled from "./templates/add_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:420132275530001aa83ad86-37723166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d0925948d0aaede3d5e86c64fb367f9a6959624' => 
    array (
      0 => './templates/add_article.tpl',
      1 => 1394369783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '420132275530001aa83ad86-37723166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530001aa896ed5_70237565',
  'variables' => 
  array (
    'broadcast_notes' => 0,
    'broadcast' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530001aa896ed5_70237565')) {function content_530001aa896ed5_70237565($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>@constant('ADD_ARTICLE_TITLE_TXT')), 0);?>

  
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
                    <legend><h2><?php echo @constant('ADD_ARTICLE_HEADER_TXT');?>
</h2></legend>
                    <!-- Text input-->
                    <div class="control-group">
                      <label class="control-label" for="title_input"><?php echo @constant('TITLE_LABLE_TXT');?>
</label>
                      <div class="controls">
                        <input id="title_input" name="title_input" placeholder="<?php echo @constant('TITLE_PLACEHOLDER_TXT');?>
" class="input-xlarge" type="text">
                      </div>
                    </div>

                    <!-- Textarea -->
                    <div class="control-group">
                      <label class="control-label" for="desc_input"><?php echo @constant('DESC_LABLE_TXT');?>
</label>
                      <div class="controls">                     
                        <textarea id="desc_input" name="desc_input" placeholder="<?php echo @constant('DESC_PLACEHOLDER_TXT');?>
"></textarea>
                      </div>
                    </div>
                    <!-- Textarea -->
                    <div class="control-group">
                      <label class="control-label" for="body_input"><?php echo @constant('BODY_LABLE_TXT');?>
</label>
                      <div class="controls">                     
                        <textarea id="body_input" name="body_input" placeholder="<?php echo @constant('BODY_PLACEHOLDER_TXT');?>
"></textarea>
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
                        <button id="post_button" name="post_button" class="btn btn-default"><?php echo @constant('BUTTON_LABLE_TXT');?>
</button>
                      </div>
                    </div>
                </form>
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
