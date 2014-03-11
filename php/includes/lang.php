<?php 
    $currLang = NULL;
    if ($_SESSION["lang"] == "") { 
        $_SESSION["lang"] = "uk"; 
        $currLang = "uk"; 
    } 
    define("CHARSET","utf-8"); 
    switch($currLang) { 
        case "en": 
            define("LANGCODE", "en"); 
        break; 
        case "uk": 
            define("LANGCODE", "uk"); 
        break; 
        default: 
        define("LANGCODE", "uk"); 
        break; 
    } 
    header("Content-Type: text/html;charset=".CHARSET); 
    header("Content-Language: ".LANGCODE); 
?> 