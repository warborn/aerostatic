<?php

class Reservation extends ActiveRecord {
  protected static $belongs_to = [
    ['flight'],
    ['itinerary']
  ];
}

?>
