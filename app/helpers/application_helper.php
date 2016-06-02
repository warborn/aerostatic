<?php

function is_logged_in() {
  return isset($_SESSION['user_email']);
}

function current_user() {
  static $user = null;
  if($user_email = $_SESSION['user_email']) {
    if(is_null($user)) {
      $user = User::find_by_email($user_email);
      return $user;
    } else {
      return $user;
    }
  } else {
    return null;
  }
}

?>
