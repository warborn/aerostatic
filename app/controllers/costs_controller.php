<?php
require_once(ROOT.DS.'public'.DS.'vendor'.DS.'html2pdf'.DS.'html2pdf.class.php');

class CostsController extends ApplicationController {
  public $before_action = [
    'confirm_admin_logged_in' => []
  ];
  public $layout = 'user';

  public function index() {
    $flight_costs = FlightCost::all();
    $maintenance_costs = MaintenanceCost::all();

    return [
      'flight_costs'  => $flight_costs,
      'maintenance_costs' => $maintenance_costs
    ];
  }

  public function index_report() {
    $flight_costs = FlightCost::all();
    $maintenance_costs = MaintenanceCost::all();
    $name = 'gastos_' . date('Y_m_d') . '.pdf';

    $file_path = report('costs/index.php', $name, [
      'flight_costs'  => $flight_costs,
      'maintenance_costs' => $maintenance_costs
    ]);
    readfile($file_path);
    unlink($file_path);
    exit();
  }
}

?>
