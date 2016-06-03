<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn red accent-2" href="costs/report"><i class="material-icons left">picture_as_pdf</i>Generar Reporte</a>
  </div>
</div>

<div class="row">
  <div class="row">
    <h4 class="center-align">Gastos por vuelos</h4>
  </div>
  <div class="col s12 m12 l12">
    <table class="bordered highlight">
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
  </div>
</div>

<div class="row">
  <div class="row">
    <h4 class="center-align">Gastos de mantenimiento a globos</h4>
  </div>
  <div class="col s12 m12 l12">
    <table class="bordered highlight">
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
  </div>
</div>
