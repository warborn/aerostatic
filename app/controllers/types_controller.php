<?php

class TypesController extends ApplicationController {
  public $before_action = [
    'confirm_admin_logged_in' => []
  ];
  public $layout = 'user';

  public function index() {
    $types = Type::all();

    return ['types' => $types];
  }

  public function add() {
    $type = new Type();

    return ['type' => $type];
  }

  public function create() {
    $type = new Type($this->type_params());

    if($type->save()) {
      redirect_to('types');
    }
  }

  public function edit() {
    $type = Type::find($this->params['id']);

    return ['type' => $type];
  }

  public function update() {
    $type = Type::find($this->params['id']);

    if($type->update_attributes($this->type_params())) {
      redirect_to('types');
    }
  }

  public function destroy() {
    $type = Type::find($this->params['id']);

    if($type->destroy()) {
      redirect_to('types');
    }
  }

  private function type_params() {
    return $this->need('type')->permit('description', 'capacity');
  }
}

?>
