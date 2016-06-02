<?php

class SessionsController extends ApplicationController {

  public function create() {
    $user = User::find_by_email($this->params['user']['email']);
    if($user && authenticate($user, $this->params['user']['password'])) {
      login($user);
      redirect_to('air-ballons');
    } else {
      redirect_to('');
    }
  }

  public function destroy() {
    if(is_logged_in()) {
      logout();
    }
    redirect_to('');
  }

}

?>
