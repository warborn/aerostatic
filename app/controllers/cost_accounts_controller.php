<?php

class CostAccountsController extends ApplicationController {
  public $before_action = ['confirm_logged_in'];
  public $layout = 'user';

  public function index() {
    $cost_accounts = CostAccount::all();

    return ['cost_accounts' => $cost_accounts];
  }

  public function add() {
    $cost_account = new CostAccount();

    return ['cost_account' => $cost_account];
  }

  public function create() {
    $cost_account = new CostAccount($this->cost_account_params());

    if($cost_account->save()) {
      redirect_to('cost-accounts');
    }
  }

  public function edit() {
    $cost_account = CostAccount::find($this->params['id']);

    return ['cost_account' => $cost_account];
  }

  public function update() {
    $cost_account = CostAccount::find($this->params['id']);

    if($cost_account->update_attributes($this->cost_account_params())) {
      redirect_to('cost-accounts');
    }
  }

  public function destroy() {
    $cost_account = CostAccount::find($this->params['id']);

    if($cost_account->destroy()) {
      redirect_to('cost-accounts');
    }
  }

  private function cost_account_params() {
    return $this->need('cost_account')->permit('name');
  }
}

?>
