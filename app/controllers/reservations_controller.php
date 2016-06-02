<?php
require_once(ROOT.DS.'public'.DS.'vendor'.DS.'html2pdf'.DS.'html2pdf.class.php');

class ReservationsController extends ApplicationController {
  public $before_action = [
    'confirm_user_logged_in' => []
  ];
  public $layout = 'user';

  public function index() {
    $reservations = current_user()->reservations;

    return ['reservations' => $reservations];
  }

  public function add() {
    $ballon = AirBallon::find($this->params['id']);

    return ['ballon' => $ballon];
  }

  public function create() {
    $itinerary = new Itinerary($this->itinerary_params());
    if($itinerary->save()) {
      $flight = new Flight($this->flight_params());
      if($flight->save()) {
        $reservation_params = array(
          'itinerary_id' => $itinerary->get_pk_value(),
          'date' => date('Y-m-d'),
          'email' => current_user()->email,
          'flight_id' => $flight->get_pk_value()
        );
        $reservation = new Reservation($reservation_params);
        if($reservation->save()) {
          redirect_to('reservations');
        }
      }
    }
  }

  public function show_report() {
    $reservation = Reservation::find($this->params['id']);
    $name = 'reservation_' . $reservation->id . '.pdf';

    header('Content-Type: application/pdf');
    header('Content-disposition: attachment; filename='.$name);
    header("Content-Transfer-Encoding: Binary");
    $file_path = report('reservations/all.php', $name, ['reservation' => $reservation]);
    readfile($file_path);
    unlink($file_path);
    exit();
  }

  private function itinerary_params() {
    return $this->need('itinerary')->permit('route_id', 'day', 'hour');
  }

  private function flight_params() {
    return $this->need('flight')->permit('air_ballon_id');
  }

}

?>
