<?php

class User extends ActiveRecord {
  public function full_name() {
    return $this->name . ' ' . $this->first_name;
  }
}

?>
