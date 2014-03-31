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
    $id = $_GET["id"];
    $title_en = $_POST["title_en"];
    $title_ua = $_POST["title_ua"];
    $desc_en = $_POST["desc_en"];
    $desc_ua = $_POST["desc_ua"];
    $body_en = $_POST["body_en"];
    $body_ua = $_POST["body_ua"];
    
    if (!is_valid_title($title_en) || !is_valid_title($title_ua)) {
      header("Location: edit_article.php?m=" . ADD_ATRICLE_TITLE_ERROR);
    }
    elseif (!is_valid_desc($desc_en) || !is_valid_desc($desc_ua)) {
      header("Location: edit_article.php?m=" . ADD_ATRICLE_DESC_ERROR);
    }
    elseif (!is_valid_body($body_en) || !is_valid_body($body_ua)) {
      header("Location: edit_article.php?m=" . ADD_ATRICLE_BODY_ERROR);
    }

    else {
      $date = date('Y-m-d H:i:s');
      $title_en = filter_var($_POST['title_en'], FILTER_SANITIZE_STRING);
      $title_ua = filter_var($_POST['title_ua'], FILTER_SANITIZE_STRING);
      $desc_en = filter_var($_POST['desc_en'], FILTER_SANITIZE_STRING);
      $desc_ua = filter_var($_POST['desc_ua'], FILTER_SANITIZE_STRING);
      $body_en = filter_var($_POST['body_en'], FILTER_SANITIZE_STRING);
      $body_ua = filter_var($_POST['body_ua'], FILTER_SANITIZE_STRING);
      $article = new Article($id, $date, $title_en, $title_ua,
                             $desc_en, $desc_ua, $body_en, $body_ua);
      $res = update_article($article);
      
      if($res <= 0) {
        header("Location: edit_article.php?m=" . ADD_ARTICLE_ERROR_UNKNOWN);
      } else {
        header("Location: article.php?id=$id");
      }
    }
  }
?>