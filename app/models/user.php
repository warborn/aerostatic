<?php

class User extends ActiveRecord {
  protected static $primary_key = 'email';
  protected static $has_many = [
    ['reservations']
  ];

  public function username() {
    return $this->name . ' ' . $this->first_name;
  }

  public function full_name() {
    return $this->first_name . ' ' . $this->last_name . ' ' . $this->name;
  }

  public function is_admin() {
    return $this->admin == 1 ? true : false;
  }
}

?>
