<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn green lighten-2" href="types/add"><i class="material-icons left">add</i>Agregar</a>
  </div>
</div>

<div class="row">
  <div class="col s12 m12 l12">
    <table class="bordered highlight">
        <thead>
          <tr>
              <th data-field="description">Descripción</th>
              <th data-field="capacity">Capacidad</th>
              <th>Acciones<th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($types as $type) { ?>
          <tr>
            <td><?php echo $type->description; ?></td>
            <td><?php echo $type->capacity; ?></td>
            <td>
              <!-- Dropdown Trigger -->
              <a class='dropdown-button btn light-blue lighten-2' href='#' data-activates='card-action-<?php echo $type->id; ?>'>Acciones</a>
              <!-- Dropdown Structure -->
              <ul id='card-action-<?php echo $type->id; ?>' class='dropdown-content'>
                <li><a href="types/<?php echo $type->id?>/edit">Editar</a></li>
                <li><a href="types/<?php echo $type->id?>" data-method="DELETE">Eliminar</a></li>
              </ul>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>
