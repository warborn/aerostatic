<?php

class UsersController extends ApplicationController {
  public function create() {
    $user = new User($this->user_params());
    $user->admin = 0;
    $user->password = password_encrypt($user->password);

    if($user->save()) {
      redirect_to('air-ballons');
    }
  }

  private function user_params() {
    return $this->need('user')->permit('name', 'first_name', 'last_name', 'email', 'password');
  }
}

?>
