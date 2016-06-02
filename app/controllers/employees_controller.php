<?php

class EmployeesController extends ApplicationController {
  public $before_action = ['confirm_logged_in'];
  protected $layout = 'user';

  public function index() {
    $employees = Employee::all();

    return ['employees' => $employees];
  }

  public function add() {
    $employee = new Employee();

    return ['employee' => $employee];
  }

  public function create() {
    $employee = new Employee($this->employee_params());

    if($employee->save()) {
      redirect_to('employees');
    }
  }

  public function edit() {
    $employee = Employee::find($this->params['id']);

    return ['employee' => $employee];
  }

  public function update() {
    $employee = Employee::find($this->params['id']);

    if($employee->update_attributes($this->employee_params())) {
      redirect_to('employees');
    }
  }

  public function destroy() {
    $employee = Employee::find($this->params['id']);

    if($employee->destroy()) {
      redirect_to('employees');
    }
  }

  private function employee_params() {
    return $this->need('employee')->permit('name', 'first_name', 'last_name', 'salary', 'hire_date');
  }
}

?>
