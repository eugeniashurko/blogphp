<?php
    function get_broadcast() {
        $conn = open_db();

        $query = "SELECT SQL_CALC_FOUND_ROWS id, name_en, name_ua FROM projects WHERE active=1";
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
        if ($rows_found == 1) {
            $broadcast = new Project($list[0]["name_en"], $list[0]["name_ua"]);
        } else {
            $broadcast = NULL;
        }
        // select all notes of project ordered by date and time and calculate number of rows found
        $query = "SELECT SQL_CALC_FOUND_ROWS * FROM notes ORDER BY date_time DESC";
        $result = mysql_query($query);
        $list = array();
        if($result){
            while($row = mysql_fetch_assoc($result)){
                $list[] = $row;
            }
        }
        // Get total number of notes
        $result2 = mysql_query("SELECT FOUND_ROWS()");
        $row = mysql_fetch_array($result2);
        $rows_found = $row[0];
        close_db($conn);
        // convert result to VO
        $note_list = array();
        for($i = 0; $i < $rows_found; $i++) {
            $note_list[$i] = new Note(
                $list[$i]["date_time"],
                $list[$i]["body_en"], $list[$i]["body_ua"]);
        }
        return array($broadcast, $note_list);
    }

    function add_broadcast($br) {
        $conn = open_db();
        $query = "INSERT INTO projects (name_en, name_ua, active) VALUES ('" .
            $br->getNameEN(). "', '" .
            $br->getNameUA(). "', 1)";
        $result = mysql_query($query);
        $id = mysql_insert_id();

        close_db();
        return $id;
    }

    function clean_broadcast() {
        $conn = open_db();
        $query1 = "DELETE FROM notes";
        $query2 = "DELETE FROM projects";
        $result1 = mysql_query($query1);
        $result2 = mysql_query($query2);
        close_db();
    }

    function insert_note($note) {
        $conn = open_db();
        $query = "INSERT INTO notes (date_time, body_en, body_ua) VALUES ('" .
            $note->getDateTime() . "', '" .
            $note->getBodyEN(). "', '" .
            $note->getBodyUA(). "')";
        $result = mysql_query($query);
        $id = mysql_insert_id();

        close_db();
        return $id;
    }
?>