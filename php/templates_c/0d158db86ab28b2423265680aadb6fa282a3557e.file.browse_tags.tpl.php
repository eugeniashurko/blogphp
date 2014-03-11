<?php /* Smarty version Smarty-3.1.16, created on 2014-02-15 21:58:19
         compiled from "./templates/browse_tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197949433752ffc6db0fbd06-98672910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d158db86ab28b2423265680aadb6fa282a3557e' => 
    array (
      0 => './templates/browse_tags.tpl',
      1 => 1392493043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197949433752ffc6db0fbd06-98672910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userid' => 0,
    'username' => 0,
    'blog' => 0,
    'userhasblog' => 0,
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ffc6db178fb0_85012732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ffc6db178fb0_85012732')) {function content_52ffc6db178fb0_85012732($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('userid'=>$_smarty_tpl->tpl_vars['userid']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'blogid'=>$_smarty_tpl->tpl_vars['blog']->value['id'],'blogownerid'=>$_smarty_tpl->tpl_vars['blog']->value['userid'],'userhasblog'=>$_smarty_tpl->tpl_vars['userhasblog']->value), 0);?>

<!-- CONTENT -->
      <?php echo $_smarty_tpl->getSubTemplate ('search_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	  <h1 class="title">Browse Tags</h1>
      <center>
	  <?php if (empty($_smarty_tpl->tpl_vars['tags']->value)) {?> No tags found
	  <?php } else { ?>
	    <table class="tags_list">
		  <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['list']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
		  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['list']['iteration']%3==1) {?>
		  <tr>
		  <?php }?>
		    <td class="tags_list_row"><a href="search.php?s=tag&id=<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a></td>
		  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['list']['iteration']%3==0) {?>
		  </tr>
		  <?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['list']['last']&&$_smarty_tpl->getVariable('smarty')->value['foreach']['list']['iteration']%3!=0) {?>
		  </tr>
		  <?php }?>
		  <?php } ?>
		</table>
	  <?php }?>
	  </center>
      
      
      <!-- END CONTENT -->
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
