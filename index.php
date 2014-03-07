<?php
    //session_start();
    require_once 'includes/smarty_dir.php';
    require_once SMARTY_INCL_DIR;
    require_once "includes/functions.php";

    $smarty = new Smarty;
    $result = get_all_articles();
    $articles = $result[0];
    $length = $result[1];

    $smarty -> assign('posts', $articles);

    $smarty->display("index.tpl");
?>