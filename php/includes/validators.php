<?php
    function is_valid_username($username) {  
        $res = true;
        $message = "";
        // check the username is the correct length
        if (strlen($username) > 20 || strlen($username) < 4 || (ctype_alnum($username) != true))
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
        if (strlen($password) > 20 || strlen($password) < 4 || (ctype_alnum($password) != true))
        {
            $res = false;
            $message = LOGIN_PASSWORD_ERROR;
        }
        return array($res, $message);
    }

    function is_valid_note_body($body) {
        $res = true;
        if (mb_strlen($body, 'UTF-8') < 1 || mb_strlen($body, 'UTF-8') > 150 ) {
            $res = false;
        }
        return $res;
    }

    function is_valid_title($title) {
        $res = true;
        if (mb_strlen($title, 'UTF-8') < 1 || mb_strlen($title, 'UTF-8') > 80 ) {
            $res = false;
        }
        return $res;
    }
    
    function is_valid_desc($desc) {
        $res = true;
        if (mb_strlen($desc, 'UTF-8') < 1 || mb_strlen($desc, 'UTF-8') > 300 ) {
            $res = false;
        }
        return $res;
    }

    function is_valid_body($body) {
        $res = true;
        if (mb_strlen($body, 'UTF-8') < 1) {
            $res = false;
        }
        return $res;
    }
    
    function is_valid_file($file) {
        $res = false;
        return $res;
    }
?>