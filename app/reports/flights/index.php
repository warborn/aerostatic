<style>
page {
  color: #393939;
}

table {
  width: 90%;
  margin: 0 auto;
  border-collapse: collapse;
}

th, td {
  border: 1px solid black;
  font-size: 11px;
}

h1 {
  text-align: center;
}
</style>

<page>
  <h1>Registro de vuelos</h1>
  <table>
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
      <?php foreach ($flights as $flight) { ?>
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
</page>
