<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 14:56:01
         compiled from "./templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89878388952fffd8a258962-98930101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45d8ababa5d6f5c301aa6e6fbb98df40da92477' => 
    array (
      0 => './templates/about.tpl',
      1 => 1394369759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89878388952fffd8a258962-98930101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fffd8a2a95a3_38588240',
  'variables' => 
  array (
    'broadcast_notes' => 0,
    'broadcast' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fffd8a2a95a3_38588240')) {function content_52fffd8a2a95a3_38588240($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>@constant('ABOUT_TITLE_TXT')), 0);?>

  
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

    <div id="wrapper">

    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('posts'=>$_smarty_tpl->tpl_vars['broadcast_notes']->value,'broadcast'=>$_smarty_tpl->tpl_vars['broadcast']->value), 0);?>


      <div id="page-content-wrapper">
        <div class="wrapper">
            <div class="page-content inset">
                <div class="row">
                
                  <h2><?php echo @constant('ABOUT_HEADER_TXT');?>
</h2>
                  <p><?php echo nl2br(htmlspecialchars(@constant('ABOUT_BODY_TXT')));?>
</p>
                  <br><br>
                  <h3><?php echo @constant('CONTACTS_ACCOUNTS_TXT');?>
</h3>
                  <br>
                  e-mail: yarutoua(at)gmail.com
                  <br>
                  <a href="https://www.facebook.com/eugenia.oshurko">facebook</a>
                  <br>
                  <a href="https://github.com/eugeniashurko/blogphp">github</a>
                  <br>       
                </div>
            </div>
            <div id="push"></div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            
      </div>       
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>

</html><?php }} ?>
