<?php

class Itinerary extends ActiveRecord {
  protected static $belongs_to = [
    ['route']
  ];
}

?>
