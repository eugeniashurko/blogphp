<?php
    //session_start();
    require_once 'includes/smarty_dir.php';
    require_once SMARTY_INCL_DIR;
    require_once "includes/functions.php";

    $smarty = new Smarty;
    // // delete when AJAX added
    // $smarty -> assign('posts', get_all_articles());

    $smarty->display("about.tpl");
?>
