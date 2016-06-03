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
        <img class="activator responsive-img" src="uploads/<?php echo $ballon->image; ?>">
        <span class="card-title"><?php echo $ballon->name; ?></span>
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Info<i class="material-icons right">more_vert</i></span>
        <p>Descripción: <?php  echo $ballon->type->description; ?></p>
        <p>Capacidad: <?php echo $ballon->type->capacity; ?> personas.</p>
      </div>
      <div class="card-action">
        <a href="air-ballons/<?php echo $ballon->id?>/add-routes">+ Rutas</a>
        <a href="air-ballons/<?php echo $ballon->id?>/edit">Editar</a>
        <a href="air-ballons/<?php echo $ballon->id?>" data-method="DELETE">Eliminar</a>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Info<i class="material-icons right">close</i></span>
        <ul>
          Precios:
          <?php foreach ($ballon->type->prices as $price) { ?>
            <li>$<?php echo $price->price; ?> - <?php echo $price->category; ?></li>
          <?php } ?>
        </ul>
        <ul>
          Rutas:
          <?php foreach ($ballon->routes as $route) { ?>
            <li>
              <p>
                <?php echo $route->departure_place . ' - ' . $route->arrival_place; ?>
              </p>
              duración: <?php echo $route->duration ?>
            </li>
          <?php } ?>
        </ul>
      </div>

    </div>
  </div>
  <?php } ?>
</div>
