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
    $title_en = $_POST["title_en"];
    $title_ua = $_POST["title_ua"];
    $desc_en = $_POST["desc_en"];
    $desc_ua = $_POST["desc_ua"];
    $body_en = $_POST["body_en"];
    $body_ua = $_POST["body_ua"];
    
    if (!is_valid_title($title_en) || !is_valid_title($title_ua)) {
      header("Location: add_article.php?m=" . ADD_ATRICLE_TITLE_ERROR);
    }
    elseif (!is_valid_desc($desc_en) || !is_valid_desc($desc_ua)) {
      header("Location: add_article.php?m=" . ADD_ATRICLE_DESC_ERROR);
    }
    elseif (!is_valid_body($body_en) || !is_valid_body($body_ua)) {
      header("Location: add_article.php?m=" . ADD_ATRICLE_BODY_ERROR);
    }
    
    else {
      //if they DID upload a file...
      // file processing
      $file_name = NULL;
      if($_FILES["file"]['name'])
      {
        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);
        $new_file_name = strtolower($_FILES['file']['tmp_name']);
        //if no errors...
        if (($_FILES["file"]["error"] > 0) 
          || (($_FILES["file"]["type"] != "image/gif")
          && ($_FILES["file"]["type"] != "image/jpeg")
          && ($_FILES["file"]["type"] != "image/jpg")
          && ($_FILES["file"]["type"] != "image/pjpeg")
          && ($_FILES["file"]["type"] != "image/x-png")
          && ($_FILES["file"]["type"] != "image/png"))
          || ($_FILES["file"]["size"] > 2048000)
          || !in_array($extension, $allowedExts)) 
        {
          
          header("Location: add_article.php?m=" . ADD_FILE_ERROR);
        } else {
          $ext = findexts ($_FILES['file']['name']); 
          $ran = time();
          $file_name = "upload/" . $ran . "." . $ext;
          $type = $_FILES["file"]["type"];
          $size = $_FILES["file"]["size"];
          move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
          $image_id = insert_image($file_name, $type, $size); 
        }
      } else { $image_id = NULL; }
      $date = date('Y-m-d H:i:s');
      $title_en = filter_var($_POST['title_en'], FILTER_SANITIZE_STRING);
      $title_ua = filter_var($_POST['title_ua'], FILTER_SANITIZE_STRING);
      $desc_en = filter_var($_POST['desc_en'], FILTER_SANITIZE_STRING);
      $desc_ua = filter_var($_POST['desc_ua'], FILTER_SANITIZE_STRING);
      $body_en = filter_var($_POST['body_en'], FILTER_SANITIZE_STRING);
      $body_ua = filter_var($_POST['body_ua'], FILTER_SANITIZE_STRING);
      $article = new Article(NULL, $date, $title_en, $title_ua,
                             $desc_en, $desc_ua, $body_en, $body_ua, $image_id);
      $id = insert_article($article);
      if($id <= 0) {
        //header("Location: add_article.php?m=" . ADD_ARTICLE_ERROR_UNKNOWN);
      } else {
        header("Location: index.php");
      }
    }
  }
?>