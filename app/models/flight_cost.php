<?php

class FlightCost extends ActiveRecord {
  protected static $belongs_to = [
    ['cost_account'],
    ['flight']
  ];
}

?>
