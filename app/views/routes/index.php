<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn green lighten-2" href="routes/add"><i class="material-icons left">add</i>Agregar</a>
  </div>
</div>

<div class="row">
  <div class="col s12 m12 l12">
    <table class="bordered highlight">
        <thead>
          <tr>
              <th data-field="departure-place">Lugar de salida</th>
              <th data-field="arrival-place">Lugar de llegada</th>
              <th data-field="duration">Duracion</th>
              <th>Acciones<th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($routes as $route) { ?>
          <tr>
            <td><?php echo $route->departure_place; ?></td>
            <td><?php echo $route->arrival_place; ?></td>
            <td><?php echo $route->duration; ?></td>
            <td>
              <!-- Dropdown Trigger -->
              <a class='dropdown-button btn light-blue lighten-2' href='#' data-activates='card-action-<?php echo $route->id; ?>'>Acciones</a>
              <!-- Dropdown Structure -->
              <ul id='card-action-<?php echo $route->id; ?>' class='dropdown-content'>
                <li><a href="routes/<?php echo $route->id?>/edit">Editar</a></li>
                <li><a href="routes/<?php echo $route->id?>" data-method="DELETE">Eliminar</a></li>
              </ul>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>
