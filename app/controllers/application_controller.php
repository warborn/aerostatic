<?php

class ApplicationController extends ActionController {
  public function confirm_logged_in() {
    if(!is_logged_in()) {
      redirect_to('');
    }
  }

  public function confirm_admin_logged_in() {
    if(!is_admin_logged_in()) {
      redirect_to('');
    }
  }
}

?>
