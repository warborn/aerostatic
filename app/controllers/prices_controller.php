<?php

class PricesController extends ApplicationController {
  public $layout = 'user';

  public function index() {
    $prices = Price::all();

    return ['prices' => $prices];
  }

  public function add() {
    $price = new Price();
    $types = Type::all();

    return ['price' => $price, 'types' => $types];
  }

  public function create() {
    $price = new Price($this->price_params());

    if($price->save()) {
      redirect_to('prices');
    }
  }

  public function edit() {
    $price = Price::find($this->params['id']);
    $types = Type::all();

    return ['price' => $price, 'types' => $types];
  }

  public function update() {
    $price = Price::find($this->params['id']);

    if($price->update_attributes($this->price_params())) {
      redirect_to('prices');
    }
  }

  public function destroy() {
    $price = Price::find($this->params['id']);

    if($price->destroy()) {
      redirect_to('prices');
    }
  }

  private function price_params() {
    return $this->need('price')->permit('price', 'category', 'type_id');
  }
}

?>
