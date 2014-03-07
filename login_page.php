<?php
    //session_start();
    require_once 'includes/smarty_dir.php';
    require_once SMARTY_INCL_DIR;
    require_once "includes/models.php";
    require_once 'includes/articles.php';

    $smarty = new Smarty;

    $smarty -> assign('posts', get_all_articles());

    $smarty->display("login_page.tpl");

?>
