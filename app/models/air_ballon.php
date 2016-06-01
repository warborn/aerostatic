<?php

class AirBallon extends ActiveRecord {
  protected static $has_atached_file = 'image';
  protected static $belongs_to = [
    ['type']
  ];
  protected static $has_many_through = [
    ['routes']
  ];
}

?>
