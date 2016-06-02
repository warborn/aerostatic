<div class="row">
  <?php foreach ($ballons as $ballon) { ?>
  <div class="col s12 ">
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
        <a href="travels/<?php echo $ballon->id?>/reservations/add">Reservar</a>
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
