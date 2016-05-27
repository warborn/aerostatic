<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn green lighten-2" href="cost-accounts/add"><i class="material-icons left">add</i>Agregar</a>
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
          <?php foreach ($cost_accounts as $cost_account) { ?>
          <tr>
            <td><?php echo $cost_account->name; ?></td>
            <td>
              <!-- Dropdown Trigger -->
              <a class='dropdown-button btn light-blue lighten-2' href='#' data-activates='card-action-<?php echo $cost_account->id; ?>'>Acciones</a>
              <!-- Dropdown Structure -->
              <ul id='card-action-<?php echo $cost_account->id; ?>' class='dropdown-content'>
                <li><a href="cost-accounts/<?php echo $cost_account->id?>/edit">Editar</a></li>
                <li><a href="cost-accounts/<?php echo $cost_account->id?>" data-method="DELETE">Eliminar</a></li>
              </ul>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>
