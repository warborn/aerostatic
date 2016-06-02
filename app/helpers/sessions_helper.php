<?php

require_once('users_helper.php');

function authenticate($user, $password) {
  if(password_check($password, $user->password)) {
    return $user;
  } else {
    return false;
  }
}

function login($user) {
  $_SESSION['user_email'] = $user->email;
}

function logout() {
  unset($_SESSION['user_email']);
}

?>
