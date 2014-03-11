<?php

if(!getenv('OPENSHIFT_APP_UUID')) {

    define("HOST", "localhost");
    define("PORT", "3306");
    define("USER", "blog");
    define("PASSWORD", "blog");
    define("DATABASE", "BLOG");

} else {
    
    define('HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
    define('PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
    define('USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
    define('PASSWORD',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
    define('DATABASE',getenv('OPENSHIFT_GEAR_NAME'));

}

?>