<div class="row">
  <div class="col s12 m12 l12">
    <table class="bordered highlight">
        <thead>
          <tr>
              <th data-field="name">Fecha de remisión</th>
              <th data-field="first-name">Globo</th>
              <th data-field="last-name">Fecha del viaje</th>
              <th data-field="salary">Hora</th>
              <th data-field="hire-date">Ruta</th>
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
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>
