<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 13:51:29
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79970161952ffc60331e9d9-85808059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1394365839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79970161952ffc60331e9d9-85808059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ffc60331f714_35230355',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ffc60331f714_35230355')) {function content_52ffc60331f714_35230355($_smarty_tpl) {?><div class="footer" id="footer">
        <div class="container">
                <a href="#"><?php echo @constant('GO_UP_TXT');?>
</a>
                <hr>&copy; <?php echo @constant('AUTHOR_TXT');?>
, 2014
                <?php if ($_SESSION['lang']=="en") {?>
                &nbsp;<a href="switch_lang.php?lang=uk">Українська версія</a>
                <?php } else { ?>
                &nbsp;<a href="switch_lang.php?lang=en">English version</a>
                <?php }?> 
        </div>
</div>    

<?php }} ?>
