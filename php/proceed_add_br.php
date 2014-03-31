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
    if (!isset($_POST["title_input_en"]) || !isset($_POST["title_input_ua"])) {
      header("Location: add_broadcast.php?m=" . ADD_BROADCAST_ERROR);
    }
    elseif (!is_valid_title($_POST["title_input_en"])) {
      header("Location: add_broadcast.php?m=" . ADD_BROADCAST_ERROR);
    }
    elseif (!is_valid_title($_POST["title_input_ua"])) {
      header("Location: add_broadcast.php?m=" . ADD_BROADCAST_ERROR);
    }
    else {
      $title_en = filter_var($_POST['title_input_en'], FILTER_SANITIZE_STRING);
      $title_ua = filter_var($_POST['title_input_ua'], FILTER_SANITIZE_STRING);
      $br = new Project($title_en, $title_ua);
      $id = add_broadcast($br);
      if($id <= 0) {
        header("Location: add_broadcast.php?m=" . ADD_NOTE_ERROR_UNKNOWN);
      } else {
        header("Location: index.php");
      }
    }
  }
?>