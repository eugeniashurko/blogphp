<?php
    function is_valid_username($username) {  
        $res = true;
        $message = "";
        // check the username is the correct length
        if (strlen( $_POST['username']) > 20 || strlen($_POST['username']) < 4 || (ctype_alnum($_POST['username']) != true))
        {
          $res = false;
          $message = LOGIN_USERNAME_ERROR;
        }
        return array($res, $message);
    }

    function is_valid_password($password) {
        $res = true;
        $message = "";
        // check the password is the correct length
        if (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 4 || (ctype_alnum($_POST['password']) != true))
        {
            $res = false;
            $message = LOGIN_PASSWORD_ERROR;
        }
        return array($res, $message);
    }

    function is_valid_title($title) {
        $res = false;
        return $res;
    }
    
    function is_valid_desc($desc) {
        $res = false;
        return $res;
    }

    function is_valid_body($body) {
        $res = false;
        return $res;
    }
    
    function is_valid_file($file) {
        $res = false;
        return $res;
    }
?>