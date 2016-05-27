<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn green lighten-2" href="extras/add"><i class="material-icons left">add</i>Agregar</a>
  </div>
</div>

<div class="row">
  <div class="col s12 m12 l12">
    <table class="bordered highlight">
        <thead>
          <tr>
              <th data-field="name">Nombre</th>
              <th>Acciones<th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($extras as $extra) { ?>
          <tr>
            <td><?php echo $extra->name; ?></td>
            <td>
              <!-- Dropdown Trigger -->
              <a class='dropdown-button btn light-blue lighten-2' href='#' data-activates='card-action-<?php echo $extra->id; ?>'>Acciones</a>
              <!-- Dropdown Structure -->
              <ul id='card-action-<?php echo $extra->id; ?>' class='dropdown-content'>
                <li><a href="extras/<?php echo $extra->id?>/edit">Editar</a></li>
                <li><a href="extras/<?php echo $extra->id?>" data-method="DELETE">Eliminar</a></li>
              </ul>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>
