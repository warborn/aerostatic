<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn red accent-2" href="flights/report"><i class="material-icons left">picture_as_pdf</i>Generar Reporte</a>
  </div>
</div>

<div class="row">
  <div class="row">
    <h4 class="center-align">Vuelos Pendientes</h4>
  </div>
  <div class="col s12 m12 l12">
    <table class="bordered highlight">
        <thead>
          <tr>
              <th>Usuario</th>
              <th>Nombre</th>
              <th>No. Vuelo</th>
              <th>Globo</th>
              <th>Fecha de reservación</th>
              <th>Fecha del viaje</th>
              <th>Hora</th>
              <th>Ruta</th>
              <th>Duración</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($planned_flights as $flight) { ?>
          <tr>
            <td><?php echo $flight->reservation->user->email; ?></td>
            <td><?php echo $flight->reservation->user->full_name(); ?></td>
            <td><?php echo $flight->id; ?></td>
            <td><?php echo $flight->air_ballon->name; ?></td>
            <td><?php echo $flight->reservation->date; ?></td>
            <td><?php echo $flight->reservation->itinerary->day; ?></td>
            <td><?php echo $flight->reservation->itinerary->hour; ?></td>
            <td>
              <?php echo $flight->reservation->itinerary->route->departure_place; ?> -
              <?php echo $flight->reservation->itinerary->route->arrival_place; ?>
            </td>
            <td><?php echo $flight->reservation->itinerary->route->duration; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>

<div class="row">
  <div class="row">
    <h4 class="center-align">Vuelos Realizados</h4>
  </div>
  <div class="col s12 m12 l12">
    <table class="bordered highlight">
        <thead>
          <tr>
              <th>Usuario</th>
              <th>Nombre</th>
              <th>No. Vuelo</th>
              <th>Globo</th>
              <th>Fecha de reservación</th>
              <th>Fecha del viaje</th>
              <th>Hora</th>
              <th>Ruta</th>
              <th>Duración</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($previous_flights as $flight) { ?>
          <tr>
            <td><?php echo $flight->reservation->user->email; ?></td>
            <td><?php echo $flight->reservation->user->full_name(); ?></td>
            <td><?php echo $flight->id; ?></td>
            <td><?php echo $flight->air_ballon->name; ?></td>
            <td><?php echo $flight->reservation->date; ?></td>
            <td><?php echo $flight->reservation->itinerary->day; ?></td>
            <td><?php echo $flight->reservation->itinerary->hour; ?></td>
            <td>
              <?php echo $flight->reservation->itinerary->route->departure_place; ?> -
              <?php echo $flight->reservation->itinerary->route->arrival_place; ?>
            </td>
            <td><?php echo $flight->reservation->itinerary->route->duration; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>
