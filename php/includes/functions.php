<?php
    // DEFINITIONS
    include_once 'includes/mysql.php';
    include_once 'models.php';
    //include_once 'includes/users.php';
    include_once 'includes/articles.php';
    include_once 'includes/broadcast.php';
    include_once 'includes/lang.php'; 
    include_once 'includes/txt.php';
    include_once 'includes/validators.php';
    include_once 'includes/login_utils.php';
    //include_once 'includes/images.php';

    //This function separates the extension from the rest of the file name and returns it 
    function findexts ($filename) { 
        $filename = strtolower($filename) ; 
        $exts = split("[/\\.]", $filename) ; 
        $n = count($exts)-1; 
        $exts = $exts[$n]; 
        return $exts; 
    } 
?>