<?php

if(!getenv('OPENSHIFT_APP_UUID')) {

    define("HOST", "localhost"); // The database server's host
    define("USER", "blog"); // The database owner's name
    define("PASSWORD", "blog"); // The database owner's password
    define("DATABASE", "BLOG"); // The database's name

} else {
    
    define("HOST", "localhost"); // The database server's host
    define("USER", "adminVKhiNgA"); // The database owner's name
    define("PASSWORD", "rhCEA2eZNwKk"); // The database owner's password
    define("DATABASE", "blog"); // The database's name

}

?>