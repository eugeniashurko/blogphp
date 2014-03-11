<?php /* Smarty version Smarty-3.1.16, created on 2014-02-15 22:47:28
         compiled from "./templates/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36055835452ffc6d411a899-28772818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab1c901581f19a67adaa75a6b28823370bb4f33f' => 
    array (
      0 => './templates/blog.tpl',
      1 => 1392497245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36055835452ffc6d411a899-28772818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ffc6d41a8fb5_34669002',
  'variables' => 
  array (
    'userid' => 0,
    'username' => 0,
    'blog' => 0,
    'userhasblog' => 0,
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ffc6d41a8fb5_34669002')) {function content_52ffc6d41a8fb5_34669002($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('userid'=>$_smarty_tpl->tpl_vars['userid']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'blogid'=>$_smarty_tpl->tpl_vars['blog']->value['id'],'blogownerid'=>$_smarty_tpl->tpl_vars['blog']->value['userid'],'userhasblog'=>$_smarty_tpl->tpl_vars['userhasblog']->value), 0);?>

	<!-- CONTENT -->

	  

	  <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</h1>
	  <p>
	   <?php echo $_smarty_tpl->tpl_vars['blog']->value['summary'];?>

	  </p>
	  <div class="author"><em>by <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
</em></div>
	  <div class="art_date "><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['created'], ENT_QUOTES, 'UTF-8', true);?>
</div>
	  <h2 class="subtitle">Newest articles</h2>
	  <p>
	    <?php if (empty($_smarty_tpl->tpl_vars['articles']->value)) {?>No articles found<?php }?>
		<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
		- <a href="article.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['headline'];?>
</a> by <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
<br />
		<?php } ?>
	  </p>
	  
      
      
      <!-- END CONTENT -->
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
