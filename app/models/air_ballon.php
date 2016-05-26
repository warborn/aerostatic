<?php

class AirBallon extends ActiveRecord {
  protected static $has_atached_file = 'image';
  protected static $belongs_to = [
    ['type']
  ];
}

?>
