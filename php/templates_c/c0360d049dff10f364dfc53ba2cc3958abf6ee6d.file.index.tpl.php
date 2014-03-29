<?php /* Smarty version Smarty-3.1.16, created on 2014-03-29 20:33:31
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46491417652ffc603255d72-01025290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1396118003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46491417652ffc603255d72-01025290',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ffc6032ce913_01781614',
  'variables' => 
  array (
    'logged_in' => 0,
    'broadcast' => 0,
    'broadcast_notes' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ffc6032ce913_01781614')) {function content_52ffc6032ce913_01781614($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>@constant('HOME_TITLE_TXT')), 0);?>

  
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('logged_in'=>$_smarty_tpl->tpl_vars['logged_in']->value), 0);?>
 

    <div id="wrapper">
    <?php if ($_SESSION['lang']=="uk") {?>
      <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('broadcast'=>$_smarty_tpl->tpl_vars['broadcast']->value,'posts'=>$_smarty_tpl->tpl_vars['broadcast_notes']->value), 0);?>


      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
                  <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <div class="blog-post">
                      <h2 class="blog-post-title"><a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitleUA();?>
</a></h2>
                      <p class="blog-post-meta"><?php echo $_smarty_tpl->tpl_vars['post']->value->getDateTime();?>
</p>
                      <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->getDescUA()));?>
</p>
                      <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value->getId();?>
"><?php echo @constant('DETAILS_TXT');?>
</a>
                      <br>
                      <hr>
                    </div>
                  <?php } ?>
                </div>
            </div>
            <div id="push"></div>
      </div>
      </div> 
    <?php } else { ?>
      <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->tpl_vars['broadcast']->value,'posts'=>$_smarty_tpl->tpl_vars['broadcast_notes']->value), 0);?>

    
      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
                  <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <div class="blog-post">
                      <h2 class="blog-post-title"><a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitleEN();?>
</a></h2>
                      <p class="blog-post-meta"><?php echo $_smarty_tpl->tpl_vars['post']->value->getDateTime();?>
</p>
                      <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->getDescEN()));?>
</p>
                      <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value->getId();?>
"><?php echo @constant('DETAILS_TXT');?>
</a>
                      <br>
                      <hr>
                    </div>
                  <?php } ?>
                </div>
            </div>
            <div id="push"></div>
        </div>
        </div> 
    <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            
      </div>  
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>    
  </body>

</html><?php }} ?>
