<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn green lighten-2" href="prices/add"><i class="material-icons left">add</i>Agregar</a>
  </div>
</div>

<div class="row">
  <div class="col s12 m12 l12">
    <table class="bordered highlight">
        <thead>
          <tr>
              <th data-field="description">Tipo</th>
              <th data-field="price">$</th>
              <th data-field="category">Categoría</th>
              <th>Acciones<th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($prices as $price) { ?>
          <tr>
            <td><?php echo $price->type->description; ?></td>
            <td><?php echo $price->price; ?></td>
            <td><?php echo $price->category; ?></td>
            <td>
              <!-- Dropdown Trigger -->
              <a class='dropdown-button btn light-blue lighten-2' href='#' data-activates='card-action-<?php echo $price->id; ?>'>Acciones</a>
              <!-- Dropdown Structure -->
              <ul id='card-action-<?php echo $price->id; ?>' class='dropdown-content'>
                <li><a href="prices/<?php echo $price->id?>/edit">Editar</a></li>
                <li><a href="prices/<?php echo $price->id?>" data-method="DELETE">Eliminar</a></li>
              </ul>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>
