<?php

class Flight extends ActiveRecord {
  protected static $has_one = [
    ['reservation']
  ];
  protected static $belongs_to = [
    ['air_ballon']
  ];
}

?>
