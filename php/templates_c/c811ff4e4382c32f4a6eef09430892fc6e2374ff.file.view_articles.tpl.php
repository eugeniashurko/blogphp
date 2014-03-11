<?php /* Smarty version Smarty-3.1.16, created on 2014-02-15 21:58:17
         compiled from "./templates/view_articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78256870952ffc6da003106-83163992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c811ff4e4382c32f4a6eef09430892fc6e2374ff' => 
    array (
      0 => './templates/view_articles.tpl',
      1 => 1392493043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78256870952ffc6da003106-83163992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userid' => 0,
    'username' => 0,
    'blog' => 0,
    'userhasblog' => 0,
    'articles' => 0,
    'article' => 0,
    'prev_offset' => 0,
    'num_articles' => 0,
    'items_per_page' => 0,
    'offset' => 0,
    'next_offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ffc6da0849b7_05738775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ffc6da0849b7_05738775')) {function content_52ffc6da0849b7_05738775($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('userid'=>$_smarty_tpl->tpl_vars['userid']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'blogid'=>$_smarty_tpl->tpl_vars['blog']->value['id'],'blogownerid'=>$_smarty_tpl->tpl_vars['blog']->value['userid'],'userhasblog'=>$_smarty_tpl->tpl_vars['userhasblog']->value), 0);?>

	<!-- CONTENT -->
      <?php echo $_smarty_tpl->getSubTemplate ('search_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	  

	  <h1 class="title">Article list</h1>
      <center>
	    <?php if (empty($_smarty_tpl->tpl_vars['articles']->value)) {?>
		No articles found
		<?php } else { ?>
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
		    <td class="article_list_row1"><a href="article.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['headline'];?>
</a></td>
			<td class="article_list_row2"><?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
</td>
		  </tr>
		  <?php } ?>
		</table>

<p>
<?php if ($_smarty_tpl->tpl_vars['prev_offset']->value<0) {?>
  First | Previous
<?php } else { ?>
  <a href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&offset=0">First</a> | <a href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&offset=<?php echo $_smarty_tpl->tpl_vars['prev_offset']->value;?>
">Previous</a>
<?php }?> |

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['num_articles']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] = ((int) $_smarty_tpl->tpl_vars['items_per_page']->value) == 0 ? 1 : (int) $_smarty_tpl->tpl_vars['items_per_page']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total']);
?>
  <?php if ($_smarty_tpl->tpl_vars['offset']->value==$_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']) {?>
    <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['iteration'];?>
 | 
  <?php } else { ?>
    <a href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&offset=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['iteration'];?>
</a> |
  <?php }?>
  
<?php endfor; endif; ?>

<?php if ($_smarty_tpl->tpl_vars['next_offset']->value>=$_smarty_tpl->tpl_vars['num_articles']->value) {?>
  Next | Last
<?php } else { ?>
  <a href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&offset=<?php echo $_smarty_tpl->tpl_vars['next_offset']->value;?>
">Next</a> | <a href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&offset=<?php echo $_smarty_tpl->tpl_vars['num_articles']->value-1;?>
">Last</a>
<?php }?>
		<?php }?>
	  </center>
      
      
      <!-- END CONTENT -->
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
