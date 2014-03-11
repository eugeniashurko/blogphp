<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 14:55:26
         compiled from "./templates/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12379523452ffd15da51bc2-87829298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a8bf3dcf0d9fbcbe009e3384a5482d8181bddfc' => 
    array (
      0 => './templates/sidebar.tpl',
      1 => 1394369723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12379523452ffd15da51bc2-87829298',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ffd15da53532_44441517',
  'variables' => 
  array (
    'posts' => 0,
    'broadcast' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ffd15da53532_44441517')) {function content_52ffd15da53532_44441517($_smarty_tpl) {?><div id="float-container">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <?php if (count($_smarty_tpl->tpl_vars['posts']->value)==0) {?> 
                <li class="sidebar-brand">
                    <?php echo @constant('NO_BROADCAST_TXT');?>

                </li>
                <li class="noposts"><?php echo @constant('NO_BROADCAST_DESC_TXT');?>
</li>
            <?php } else { ?>
            <?php if ($_SESSION['lang']=="uk") {?>
                <li class="sidebar-brand">
                    <?php echo $_smarty_tpl->tpl_vars['broadcast']->value->getNameUA();?>

                </li>
                    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                        <li>
                            <?php echo $_smarty_tpl->tpl_vars['post']->value->getBodyUA();?>

                        </li>
                        <hr>
                    <?php } ?>
            <?php } else { ?>
                <li class="sidebar-brand">
                    <?php echo $_smarty_tpl->tpl_vars['broadcast']->value->getNameEN();?>

                </li>
                    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                        <li>
                            <?php echo $_smarty_tpl->tpl_vars['post']->value->getBodyEN();?>

                        </li>
                        <hr>
                    <?php } ?>
            <?php }?>
        <?php }?>
        </ul>
    </div>
</div><?php }} ?>
