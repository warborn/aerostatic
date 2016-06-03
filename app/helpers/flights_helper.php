<?php

function flights_query($operator) {
  $query =  "SELECT * FROM flight ";
  $query .= "JOIN reservation USING(flight_id) ";
  $query .= "JOIN itinerary USING(itinerary_id) ";
  $query .= "WHERE itinerary.day {$operator} NOW() ";
  $query .= "ORDER BY itinerary.day DESC";
  return $query;
}

?>
