<?php /* Smarty version Smarty-3.1.16, created on 2014-03-29 20:58:12
         compiled from "./templates/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57605642052ffcf5d40e0f9-06076052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf88da39002887dcd3ce29c16569ab30c732e2f' => 
    array (
      0 => './templates/navbar.tpl',
      1 => 1396119436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57605642052ffcf5d40e0f9-06076052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ffcf5d40fad1_99061086',
  'variables' => 
  array (
    'logged_in' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ffcf5d40fad1_99061086')) {function content_52ffcf5d40fad1_99061086($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><?php echo @constant('BLOG_LOGO_TXT');?>
</a>
        </div>

        <ul class="nav navbar-links">
            <li class="active"><a href="index.php"><?php echo @constant('HOME_TXT');?>
</a></li>
            <li><a href="about.php"><?php echo @constant('ABOUT_TXT');?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
                <li><a href="add_article.php"><?php echo @constant('ADD_ENTRY_TXT');?>
</a></li>
                <li><a href="add_note.php"><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;<?php echo @constant('ADD_NOTE_TXT');?>
</a></li>
            <?php }?>
        </ul>
        <ul class="nav navbar-center">
            <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
            <li><a class="important"><i class="fa fa-times"></i>&nbsp;&nbsp;<?php echo @constant('CLOSE_B_TXT');?>
</a></li>
            
            <!--<li><a class="important"><i class="fa fa-bullhorn"></i>&nbsp;&nbsp;Broadcast</a></li> -->
            <?php }?>
        </ul>
        <ul class="nav navbar-right">
            <?php if (!$_smarty_tpl->tpl_vars['logged_in']->value) {?>
                <li>
                    <a href="login_page.php"><?php echo @constant('LOGIN_TXT');?>
</a>
                </li>
            <?php } else { ?>
                <div class="greet"><i><?php echo @constant('GREETING');?>
, <?php echo $_SESSION['user_id'];?>
 &nbsp; &nbsp;</i></div>
                <li>
                    <a href="logout.php"><?php echo @constant('LOGOUT_TXT');?>
</a>
                </li>
            <?php }?>
        </ul>
    </div>
</div>
<?php }} ?>
