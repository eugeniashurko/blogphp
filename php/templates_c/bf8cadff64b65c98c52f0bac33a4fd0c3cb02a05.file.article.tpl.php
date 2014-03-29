<?php /* Smarty version Smarty-3.1.16, created on 2014-03-29 20:50:38
         compiled from "./templates/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162627367752ffc6d62316a6-11789616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf8cadff64b65c98c52f0bac33a4fd0c3cb02a05' => 
    array (
      0 => './templates/article.tpl',
      1 => 1396119037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162627367752ffc6d62316a6-11789616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ffc6d62d9059_15416324',
  'variables' => 
  array (
    'current_article' => 0,
    'logged_in' => 0,
    'broadcast_notes' => 0,
    'broadcast' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ffc6d62d9059_15416324')) {function content_52ffc6d62d9059_15416324($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['current_article']->value->getTitleEN()), 0);?>

  
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('logged_in'=>$_smarty_tpl->tpl_vars['logged_in']->value), 0);?>
 

    <div id="wrapper">

    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('posts'=>$_smarty_tpl->tpl_vars['broadcast_notes']->value,'broadcast'=>$_smarty_tpl->tpl_vars['broadcast']->value), 0);?>


      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
                <?php if (!is_null($_smarty_tpl->tpl_vars['current_article']->value)) {?>
                  <div class="blog-post-full">
                  <?php if ($_SESSION['lang']=="uk") {?>
                    <h2 class="blog-post-title-full"><?php echo $_smarty_tpl->tpl_vars['current_article']->value->getTitleUA();?>
</h2>
                    <p class="blog-post-meta"><?php echo $_smarty_tpl->tpl_vars['current_article']->value->getDateTime();?>
</p>
                    <div class="control">
                      <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
                        <a href=""><?php echo @constant('EDIT_TXT');?>
</a>&nbsp;&nbsp;
                        <a href=""><?php echo @constant('DELETE_TXT');?>
</a>
                      <?php }?>
                    </div>
                      <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['current_article']->value->getBodyUA()));?>
</p>
                      <br>
                    </div>
                  <?php } else { ?>
                    <h2 class="blog-post-title-full"><?php echo $_smarty_tpl->tpl_vars['current_article']->value->getTitleEN();?>
</h2>
                    <p class="blog-post-meta"><?php echo $_smarty_tpl->tpl_vars['current_article']->value->getDateTime();?>
</p>
                    <div class="control">
                      <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
                        <a href=""><?php echo @constant('EDIT_TXT');?>
</a>&nbsp;&nbsp;
                        <a href=""><?php echo @constant('DELETE_TXT');?>
</a>
                      <?php }?>
                    </div>
                      <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['current_article']->value->getBodyEN()));?>
</p>
                      <br>
                    </div>
                  <?php }?>
                <?php } else { ?>
                  <h2 class="blog-post-title">Sorry, post was not found</h2>
                <?php }?>
                </div>
            </div>
            <div id="push"></div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            
      </div>     
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>

</html><?php }} ?>
