<?php

    session_start();
    require_once 'includes/smarty_dir.php';
    require_once SMARTY_INCL_DIR;
    require_once "includes/functions.php";
    
    defineStrings();
    

    if (isset($_SESSION["user_id"])) {
        header("Location: login_page.php");   
    } 

    clean_broadcast();
    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: $referer")
?>
