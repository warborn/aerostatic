<style>
page {
  color: #393939;
}

table {
  width: 90%;
  margin: 0 auto;
}

th, td {
  border: 1px solid black;
  padding: 10px 5px;
  font-size: 15px;
}

h1 {
  text-align: center;
}

img {
  width: 400px;
}

p {
  font-size: 16px;
}

</style>

<page>
  <h1>No.Reservación: <?php echo $reservation->id ?></h1>
  <h2>Reservó:</h2>
  <p>Nombre: <?php echo $reservation->user->full_name(); ?></p>
  <p>Email: <?php echo $reservation->user->email; ?></p>
  <table>
    <thead>
      <tr>
          <th>Fecha de remisión</th>
          <th>Globo</th>
          <th>Fecha del viaje</th>
          <th>Hora</th>
          <th>Ruta</th>
          <th>Duración</th>
          <th>No. Vuelo</th>
      </tr>
    </thead>
    <tbody>
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
        <td><?php echo $reservation->flight->id; ?></td>
      </tr>
    </tbody>
  </table>
  <br><br>
  <h3>Caracteristicas del globo:</h3>
  <p>Tipo: <?php echo $reservation->flight->air_ballon->type->description ?>.</p>
  <p>Capacidad: <?php echo $reservation->flight->air_ballon->type->capacity ?> personas.</p>
  <img src="<?php echo $upload_path.DS.$reservation->flight->air_ballon->image; ?>" />
</page>
