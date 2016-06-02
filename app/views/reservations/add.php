<div class="row">
  <div class="col s12 m12 l4">
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
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Info<i class="material-icons right">close</i></span>
        <ul>
          Precios:
          <?php foreach ($ballon->type->prices as $price) { ?>
            <li>$<?php echo $price->price; ?> - <?php echo $price->category; ?></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <form class="form col s12 m12 l6" action="reservations" method="post">
      <div class="row">
        <input type="hidden" name="flight[air_ballon_id]" value="<?php echo $ballon->id; ?>">
        <div class="input-field col s12 m10 l10 offset-m1 offset-l2">
          <select name="itinerary[route_id]">
            <option value="" disabled selected>Elige una ruta</option>
            <?php foreach ($ballon->routes as $route) { ?>
              <option value="<?php echo $route->id; ?>"><?php echo $route->departure_place . ' - ' . $route->arrival_place; ?></option>
            <?php } ?>
          </select>
          <label>Ruta</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m10 l10 offset-m1 offset-l2">
          <input type="date" class="datepicker" name="itinerary[day]">
          <label>Fecha del viaje</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m10 l10 offset-m1 offset-l2">
          <select name="itinerary[hour]">
            <option value="" disabled selected>Elige un horario</option>
            <option value="07:00">07:00 Hrs.</option>
            <option value="09:00">09:00 Hrs.</option>
            <option value="11:00">11:00 Hrs.</option>
            <option value="13:00">13:00 Hrs.</option>
            <option value="15:00">15:00 Hrs.</option>
            <option value="17:00">17:00 Hrs.</option>
            <option value="19:00">19:00 Hrs.</option>
          </select>
          <label>Hora</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m10 l10 offset-m1 offset-l2">
          <button class="btn waves-effect waves-light green lighten-2" type="submit" name="action">
            Reservar
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
