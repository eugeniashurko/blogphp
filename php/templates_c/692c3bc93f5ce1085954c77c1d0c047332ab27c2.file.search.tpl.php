<?php /* Smarty version Smarty-3.1.16, created on 2014-02-15 21:58:08
         compiled from "./templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208522708552ffc6d0858e69-06284165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692c3bc93f5ce1085954c77c1d0c047332ab27c2' => 
    array (
      0 => './templates/search.tpl',
      1 => 1392493043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208522708552ffc6d0858e69-06284165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userid' => 0,
    'username' => 0,
    'blog' => 0,
    'userhasblog' => 0,
    'searchmethod' => 0,
    'searchquery' => 0,
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ffc6d08c47a0_99156436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ffc6d08c47a0_99156436')) {function content_52ffc6d08c47a0_99156436($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('userid'=>$_smarty_tpl->tpl_vars['userid']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'blogid'=>$_smarty_tpl->tpl_vars['blog']->value['id'],'blogownerid'=>$_smarty_tpl->tpl_vars['blog']->value['userid'],'userhasblog'=>$_smarty_tpl->tpl_vars['userhasblog']->value), 0);?>

	<!-- CONTENT -->
      <?php echo $_smarty_tpl->getSubTemplate ('search_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('searchmethod'=>$_smarty_tpl->tpl_vars['searchmethod']->value,'searchquery'=>$_smarty_tpl->tpl_vars['searchquery']->value), 0);?>


	  <h1 class="title">Search</h1>
      <center>
	  <?php if (empty($_smarty_tpl->tpl_vars['articles']->value)) {?> No articles found
	  <?php } elseif ($_smarty_tpl->tpl_vars['searchmethod']->value=="tag"||$_smarty_tpl->tpl_vars['searchmethod']->value=="article") {?>
	    <table class="article_list">
		  <tr>
		    <th class="article_list_th">Headline</th>
			<th class="article_list_th">Author</th>
		  </tr>
		  <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
		  <tr>
		    <td class="article_list_row1"><a href="article.php?blogid=<?php echo $_smarty_tpl->tpl_vars['article']->value['blogid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['headline'];?>
</a></td>
			<td class="article_list_row2"><?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
</td>
		  </tr>
		  <?php } ?>
		</table>
	  <?php } elseif ($_smarty_tpl->tpl_vars['searchmethod']->value=="blog") {?>
	    <table class="article_list">
		  <tr>
		    <th class="article_list_th">Title</th>
			<th class="article_list_th">Owner</th>
		  </tr>
		  <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
		  <tr>
		    <td class="article_list_row1"><a href="blog.php?id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</a></td>
			<td class="article_list_row2"><?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
</td>
		  </tr>
		  <?php } ?>
		</table>
	  <?php }?>
	  </center>
      
      
      <!-- END CONTENT -->
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
