<?php
    function get_broadcast() {
        $conn = open_db();

        $query = "SELECT id, name_en, name_ua FROM projects WHERE active=1";
        $result = mysql_query($query);
        $list = array();
        if($result){
            while($row = mysql_fetch_assoc($result)){
                $list[] = $row;
            }
        }

        $broadcast_id = $list[0]["id"];
        $broadcast_name = new Project($list[0]["name_en"], $list[0]["name_ua"]);

        // select all notes of project ordered by date and time and calculate number of rows found
        $query = "SELECT SQL_CALC_FOUND_ROWS * FROM notes WHERE project_id=". $broadcast_id ." ORDER BY date_time DESC";
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
        $note_list=array();
        for($i=0; $i < $rows_found; $i++) {
            $note_list[$i] = new Note(
                $list[$i]["id"], $list[$i]["date_time"],
                $list[$i]["body_en"], $list[$i]["body_ua"]);
        }
        return array($broadcast_name, $note_list);
    }
?>