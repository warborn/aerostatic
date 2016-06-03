<?php

class MaintenanceCost extends ActiveRecord {
  protected static $belongs_to = [
    ['cost_account'],
    ['air_ballon']
  ];
}

?>
