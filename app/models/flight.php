<?php

class Flight extends ActiveRecord {
  protected static $belongs_to = [
    ['air_ballon']
  ];
}

?>
