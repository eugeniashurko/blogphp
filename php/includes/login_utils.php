<?php
    function get_user($username, $password) {
        $conn = open_db();
        // select all users with username passed
        $query = "SELECT SQL_CALC_FOUND_ROWS * FROM users WHERE username='" . $username . "' AND password='" . $password . "'";
        $result = mysql_query($query);
        $list = array();
        if($result){
            while($row = mysql_fetch_assoc($result)){
                $list[] = $row;
            }
        }
        $result2 = mysql_query("SELECT FOUND_ROWS()");
        $row = mysql_fetch_array($result2);
        $rows_found = $row[0];
        close_db($conn);
        // convert result to VO
        if ($rows_found == 1) {
            $user = new User(
                    $list[0]["username"],
                    $list[0]["password"]);
        } else {
            $user = NULL;
        }
        return $user;
    }
?>