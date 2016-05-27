<div class="row">
  <form class="form col s12 z-depth-1" action="<?php echo $action == 'add' ? 'employees' : "employees/{$employee->id}"; ?>" method="post" enctype="multipart/form-data">
    <div class="row">
      <?php if($action == 'edit') { ?>
      <input type="hidden" name="_method" value="PATCH">
      <?php } ?>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Nombre(s)" type="text" class="validate" name="employee[name]" value="<?php echo $employee->name; ?>">
        <label>Nombre(s)</label>
      </div>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Apellido Paterno" type="text" class="validate" name="employee[first_name]" value="<?php echo $employee->first_name; ?>">
        <label>Apellido Paterno</label>
      </div>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Apellido Materno" type="text" class="validate" name="employee[last_name]" value="<?php echo $employee->last_name; ?>">
        <label>Apellido Materno</label>
      </div>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Salario" type="text" class="validate" name="employee[salary]" value="<?php echo $employee->salary; ?>">
        <label>Salario</label>
      </div>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input type="hidden" id="initialize-picker" value="<?php echo $employee->hire_date; ?>">
        <input type="date" class="datepicker" name="employee[hire_date]">
        <label>Fecha de contratacion</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <button class="btn waves-effect waves-light green lighten-2" type="submit" name="action"><?php echo $action == 'add' ? 'Agregar' : 'Editar' ?>
          <i class="material-icons left">done</i>
        </button>
      </div>
    </div>
  </form>
</div>
