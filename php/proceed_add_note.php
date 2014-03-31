<?php
  session_start();

  require_once 'includes/smarty_dir.php';
  require_once SMARTY_INCL_DIR;
  require_once "includes/functions.php";

  defineStrings();
  $referer = $_SERVER['HTTP_REFERER'];
  // input validation
  if(!isset( $_SESSION['user_id'] ))
  {
    header("Location: login_page.php");
  } else {
    if (!isset($_POST["body_input_en"]) || !isset($_POST["body_input_ua"])) {
      header("Location: add_note.php?m=" . ADD_NOTE_ERROR);
    }
    elseif (!is_valid_note_body($_POST["body_input_en"])) {
      header("Location: add_note.php?m=" . ADD_NOTE_ERROR);
    }
    elseif (!is_valid_note_body($_POST["body_input_ua"])) {
      header("Location: add_note.php?m=" . ADD_NOTE_ERROR);
    }
    else {
      $date = date('Y-m-d H:i:s');
      $body_en = filter_var($_POST['body_input_en'], FILTER_SANITIZE_STRING);
      $body_ua = filter_var($_POST['body_input_ua'], FILTER_SANITIZE_STRING);
      $note = new Note($date, $body_en, $body_ua);
      $id = insert_note($note);
      if($id <= 0) {
        header("Location: add_note.php?m=" . ADD_NOTE_ERROR_UNKNOWN);
      } else {
        header("Location: index.php");
      }
    }
  }
?>