<style>
page {
  color: #393939;
}

table {
  width: 90%;
  margin: 0 auto;
  border-collapse: collapse;
  margin-left: 220px;
}

th, td {
  border: 1px solid black;
  padding: 10px 5px;
  font-size: 15px;
}

h1 {
  text-align: center;
}
</style>

<page>
  <h1>Gastos por vuelos</h1>
  <table>
    <thead>
      <tr>
          <th>No. Vuelo</th>
          <th>Cantidad</th>
          <th>Fecha</th>
          <th>Concepto</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($flight_costs as $cost) { ?>
      <tr>
        <td><?php echo $cost->flight->id; ?></td>
        <td><?php echo $cost->amount; ?></td>
        <td><?php echo $cost->date; ?></td>
        <td><?php echo $cost->cost_account->name; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

  <h1>Gastos de mantenimiento a globos</h1>
  <table>
    <thead>
      <tr>
          <th>Globo</th>
          <th>Cantidad</th>
          <th>Fecha</th>
          <th>Concepto</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($maintenance_costs as $cost) { ?>
      <tr>
        <td><?php echo $cost->air_ballon->name; ?></td>
        <td><?php echo $cost->amount; ?></td>
        <td><?php echo $cost->date; ?></td>
        <td><?php echo $cost->cost_account->name; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</page>
