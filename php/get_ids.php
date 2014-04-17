<?php
    session_start();
    
    require_once 'includes/smarty_dir.php';
    require_once SMARTY_INCL_DIR;    
    require_once "includes/functions.php";

    defineStrings();

    $id = $_GET['last_id'];
    $r = get_notes_from($id);
    $res = $r["notes"];
    $ids = $r["ids"];
    $last_id = 0;
    $updates = array();
    if (!is_null($res)) {
        for ($i=0; $i < count($res); $i++) {
            if($_SESSION['lang'] == "en") {
                array_push($updates, array("title" => $res[$i]->getBodyEN()));
            } else {
                array_push($updates, array("title" => $res[$i]->getBodyUA()));
            }
            if ($ids[$i] > $last_id) {
                $last_id = $ids[$i];
            }
        }
    } 
    $resp = array("lastId" => $last_id, "updates" => $updates );
    header('Content-Type: application/json');
    echo json_encode($resp);
?>
