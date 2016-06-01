<?php

class Type extends ActiveRecord {
  protected static $has_many = [
    ['prices']
  ];
}

?>
