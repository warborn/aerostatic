<div class="row">
  <div class="col s12 m12 l12">
    <table class="bordered highlight">
        <thead>
          <tr>
              <th>Fecha de remisión</th>
              <th>Globo</th>
              <th>Fecha del viaje</th>
              <th>Hora</th>
              <th>Ruta</th>
              <th>Duración</th>
              <th>Reportes</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($reservations as $reservation) { ?>
          <tr>
            <td><?php echo $reservation->date; ?></td>
            <td><?php echo $reservation->flight->air_ballon->name; ?></td>
            <td><?php echo $reservation->itinerary->day; ?></td>
            <td><?php echo $reservation->itinerary->hour; ?></td>
            <td>
              <?php echo $reservation->itinerary->route->departure_place; ?> -
              <?php echo $reservation->itinerary->route->arrival_place; ?>
            </td>
            <td><?php echo $reservation->itinerary->route->duration; ?></td>
            <td><a target="_blank" href="reservations/<?php echo $reservation->id; ?>/report"><i class="small material-icons left red-text text-darken-3">picture_as_pdf</i></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>
