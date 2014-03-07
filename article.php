<?php
    //session_start();
    require_once 'includes/smarty_dir.php';
    require_once SMARTY_INCL_DIR;    
    require_once "includes/functions.php";

    $id = $_GET['id'];
    $smarty = new Smarty;

    $a = get_article($id);
    $smarty -> assign('current_article', $a);
    $smarty -> display("article.tpl");
?>
