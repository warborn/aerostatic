<?php

class RoutesController extends ApplicationController {
  public $before_action = ['confirm_logged_in'];
  public $layout = 'user';

  public function index() {
    $routes = Route::all();

    return ['routes' => $routes];
  }

  public function add() {
    $route = new Route();

    return ['route' => $route];
  }

  public function create() {
    $route = new Route($this->route_params());

    if($route->save()) {
      redirect_to('routes');
    }
  }

  public function edit() {
    $route = Route::find($this->params['id']);

    return ['route' => $route];
  }

  public function update() {
    $route = Route::find($this->params['id']);

    if($route->update_attributes($this->route_params())) {
      redirect_to('routes');
    }
  }

  public function destroy() {
    $route = Route::find($this->params['id']);

    if($route->destroy()) {
      redirect_to('routes');
    }
  }

  private function route_params() {
    return $this->need('route')->permit('departure_place', 'arrival_place', 'duration');
  }
}

?>
