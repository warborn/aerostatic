<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn green lighten-2" href="employees/add"><i class="material-icons left">add</i>Agregar</a>
  </div>
</div>

<div class="row">
  <div class="col s12 m12 l12">
    <table class="bordered highlight">
        <thead>
          <tr>
              <th data-field="name">Nombre(s)</th>
              <th data-field="first-name">Apellido Paterno</th>
              <th data-field="last-name">Apellido Materno</th>
              <th data-field="salary">Salario</th>
              <th data-field="hire-date">Fecha de contratación</th>
              <th>Acciones<th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($employees as $employee) { ?>
          <tr>
            <td><?php echo $employee->name; ?></td>
            <td><?php echo $employee->first_name; ?></td>
            <td><?php echo $employee->last_name; ?></td>
            <td><?php echo $employee->salary; ?></td>
            <td><?php echo $employee->hire_date; ?></td>
            <td>
              <!-- Dropdown Trigger -->
              <a class='dropdown-button btn light-blue lighten-2' href='#' data-activates='card-action-<?php echo $employee->id; ?>'>Acciones</a>
              <!-- Dropdown Structure -->
              <ul id='card-action-<?php echo $employee->id; ?>' class='dropdown-content'>
                <li><a href="employees/<?php echo $employee->id?>/edit">Editar</a></li>
                <li><a href="employees/<?php echo $employee->id?>" data-method="DELETE">Eliminar</a></li>
              </ul>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>
