<?php
  session_start();

  require_once 'includes/smarty_dir.php';
  require_once SMARTY_INCL_DIR;
  require_once "includes/functions.php";

  defineStrings();

  $referer = $_SERVER['HTTP_REFERER'];
  // input validation
  echo  $_SESSION['user_id'];
  if(isset( $_SESSION['user_id'] ))
  {
    $message = LOGGED_USER_LOG_ATTEMPT;
    header("Location: login_page.php?m=".$message);
  } else {
    // check the username or password is not empty
    if(!isset( $_POST['username'], $_POST['password']))
    {
      $message = LOGIN_ERROR;
      header("Location: login_page.php?m=".$message);
    }
    elseif(!is_valid_username($_POST['username'])[0]) {
      $message = is_valid_username($_POST['username'])[1];
      header("Location: login_page.php?m=".$message);
    }
    elseif(!is_valid_password($_POST['password'])[0]) {
      $message = is_valid_password($_POST['password'])[1];
      header("Location: login_page.php?m=".$message);
    }
    else
    {
      // login functionality after input is validated
      $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

      $user = get_user($username, $password);
      if (!is_null($user)) {
        $_SESSION['user_id'] = $user->getUsername();
        header("Location: index.php");
      } else {
        $message = LOGIN_USER_DOES_NOT_EXIST;
        header("Location: login_page.php?m=".$message);
      }
    }
  }
?>