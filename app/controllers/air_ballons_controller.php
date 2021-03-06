<?php

class AirBallonsController extends ApplicationController {
  public $before_action = [
    'confirm_admin_logged_in' => ['except' => ['travels']],
    'confirm_client_logged_in'  => ['only'   => ['travels']]
  ];
  public $layout = 'user';

  public function index() {
    $ballons = AirBallon::all();

    return ['ballons' => $ballons];
  }

  public function add() {
    $ballon = new AirBallon();

    return ['ballon' => $ballon, 'types' => Type::all()];
  }

  public function create() {
    $ballon = new AirBallon($this->air_ballon_params());

    if($ballon->save()) {
      redirect_to('air-ballons');
    }
  }

  public function edit() {
    $ballon = AirBallon::find($this->params['id']);

    return ['ballon' => $ballon, 'types' => Type::all()];
  }

  public function update() {
    $ballon = AirBallon::find($this->params['id']);

    if($ballon->update_attributes($this->air_ballon_params())) {
      redirect_to('air-ballons');
    }
  }

  public function destroy() {
    $ballon = AirBallon::find($this->params['id']);

    if($ballon->destroy()) {
      redirect_to('air-ballons');
    }
  }

  public function travels() {
    $ballons = AirBallon::all();

    return ['ballons' => $ballons];
  }

  public function add_routes() {
    $ballon = AirBallon::find($this->params['id']);
    $routes = Route::all();

    return ['ballon' => $ballon, 'routes' => $routes];
  }

  public function create_routes() {
    $params = array(
      'route_id' => $this->params['route_id'],
      'air_ballon_id' => $this->params['id']
    );
    $air_ballon_route = new AirBallonRoute($params);
    if($air_ballon_route->save()) {
      redirect_to('air-ballons/'. $this->params['id'] .'/add-routes');
    }
  }

  private function air_ballon_params() {
    return $this->need('air_ballon')->permit('name', 'image', 'type_id');
  }
}

?>
