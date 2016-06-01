<?php

class ExtrasController extends ApplicationController {
  public $layout = 'user';

  public function index() {
    $extras = Extra::all();

    return ['extras' => $extras];
  }

  public function add() {
    $extra = new Extra();

    return ['extra' => $extra];
  }

  public function create() {
    $extra = new Extra($this->extra_params());

    if($extra->save()) {
      redirect_to('extras');
    }
  }

  public function edit() {
    $extra = Extra::find($this->params['id']);

    return ['extra' => $extra];
  }

  public function update() {
    $extra = Extra::find($this->params['id']);

    if($extra->update_attributes($this->extra_params())) {
      redirect_to('extras');
    }
  }

  public function destroy() {
    $extra = Extra::find($this->params['id']);

    if($extra->destroy()) {
      redirect_to('extras');
    }
  }

  private function extra_params() {
    return $this->need('extra')->permit('name');
  }
}

?>
