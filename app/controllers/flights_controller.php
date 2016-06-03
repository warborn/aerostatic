<?php
require_once(ROOT.DS.'public'.DS.'vendor'.DS.'html2pdf'.DS.'html2pdf.class.php');

class FlightsController extends ApplicationController {
  public $before_action = [
    'confirm_admin_logged_in' => []
  ];
  public $layout = 'user';

  public function index() {
    $planned_flights = Flight::find_by_sql(flights_query('>'));
    $previous_flights = Flight::find_by_sql(flights_query('<'));

    return [
      'planned_flights'  => $planned_flights,
      'previous_flights' => $previous_flights
    ];
  }

  public function index_report() {
    $flights = Flight::all();
    $name = 'vuelos_' . date('Y_m_d') . '.pdf';

    $file_path = report('flights/index.php', $name, ['flights' => $flights]);
    readfile($file_path);
    unlink($file_path);
    exit();
  }
}

?>
