<?php /* Smarty version Smarty-3.1.16, created on 2014-02-15 22:47:06
         compiled from "./templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178085704052ffc6032d5351-17208932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243b1378187b2878c10cdd133ad5f270cdcebcd8' => 
    array (
      0 => './templates/menu.tpl',
      1 => 1392496788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178085704052ffc6032d5351-17208932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ffc6032feb47_71148597',
  'variables' => 
  array (
    'userid' => 0,
    'username' => 0,
    'userhasblog' => 0,
    'blogid' => 0,
    'blogownerid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ffc6032feb47_71148597')) {function content_52ffc6032feb47_71148597($_smarty_tpl) {?></head>
<body marginheight="0" marginwidth="0">

<center>
<div class="container">
<?php if (empty($_smarty_tpl->tpl_vars['userid']->value)) {?>
  <div class="login">
	<form action="login_check.php" method="post" name="form_login">
	  Username: <input name="username" type="text" class="login_username" maxlength="30" />
      Password: <input type="password" name="password" class="login_password" />
	  <input class="login_button" name="login" type="submit" value="Login" />
	</form>
  </div>
<?php } else { ?>
  <div class="logged">
    Logged in as: <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 | <a href="logout.php" class="logout">Logout</a>
  </div>
<?php }?>

  <div class="header"></div>
  
  <table cellspacing="0" class="middle">
    <tr>
	  <td class="menu">
	  <!-- MENU -->
        <br />

		- <a class="menu-link" href="index.php">View blogs</a><br />
	    - <a class="menu-link" href="doc.php">About Project</a><br />
<?php if (!empty($_smarty_tpl->tpl_vars['userid']->value)) {?>
		<br />
		User Menu<br />
		- <a class="menu-link" href="create_blog.php">Create blog</a><br />
  <?php if ($_smarty_tpl->tpl_vars['userhasblog']->value) {?>
		- <a class="menu-link" href="myblogs.php">My blogs</a><br />
  <?php }?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['blogid']->value)) {?>
		<br />
		Blog Menu<br />
        - <a class="menu-link" href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blogid']->value;?>
">View Articles</a><br />
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['userid']->value)&&!empty($_smarty_tpl->tpl_vars['blogid']->value)&&!empty($_smarty_tpl->tpl_vars['blogownerid']->value)&&$_smarty_tpl->tpl_vars['userid']->value==$_smarty_tpl->tpl_vars['blogownerid']->value) {?>
        - <a class="menu-link" href="add_article.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blogid']->value;?>
">Add Article</a><br />
<?php }?>
      </td>
      <td class="menu_separator"></td>
      <td class="content">
	  
    <?php }} ?>
