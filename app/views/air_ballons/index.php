<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn green lighten-2" href="air-ballons/add"><i class="material-icons left">add</i>Agregar</a>
  </div>
</div>
<div class="row">
  <?php foreach ($ballons as $ballon) { ?>
  <div class="col s12 m6 l4">
    <div class="card">
      <div class="card-image">
        <img class="responsive-img" src="uploads/<?php echo $ballon->image; ?>">
        <span class="card-title"><?php echo $ballon->name; ?></span>
      </div>
      <div class="card-content">
        <p>Descripción: <?php  echo $ballon->type->description; ?></p>
        <p>Capacidad: <?php echo $ballon->type->capacity; ?> personas.</p>
      </div>
      <div class="card-action">
        <!-- Dropdown Trigger -->
        <a class='dropdown-button btn light-blue lighten-2' href='#' data-activates='card-action-<?php echo $ballon->id; ?>'>Acciones</a>
        <!-- Dropdown Structure -->
        <ul id='card-action-<?php echo $ballon->id; ?>' class='dropdown-content'>
          <li><a href="air-ballons/<?php echo $ballon->id?>/edit">Editar</a></li>
          <li><a href="air-ballons/<?php echo $ballon->id?>" data-method="DELETE">Eliminar</a></li>
        </ul>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
