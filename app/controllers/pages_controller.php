<?php

class PagesController extends ApplicationController {
  public $before_action = ['redirect_if_logged_in'];
  protected $layout = 'public';

  public function index() {

  }

  public function redirect_if_logged_in() {
    if(is_logged_in()){
      if(is_admin_logged_in()) {
        redirect_to('air-ballons');
      } else {
        redirect_to('travels');
      }
    }
  }
}

?>
