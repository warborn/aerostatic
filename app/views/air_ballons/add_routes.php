<div class="row">
  <ul class="collection">
    <?php foreach ($ballon->routes as $route) { ?>
    <li class="collection-item"><?php echo $route->departure_place . ' - ' . $route->arrival_place; ?></li>
    <?php }?>
  </ul>
</div>

<div class="row">
  <h4 class="center-align"><?php echo $ballon->name; ?></h4>
  <form class="form col s12 z-depth-1" action="air-ballons/<?php echo $ballon->id; ?>/add-routes" method="post">
    <input type="hidden" name="_method" value="PATCH">
    <div class="row">
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <select name="route_id">
          <option value="" disabled selected>Elige una ruta</option>
          <?php foreach ($routes as $route) { ?>
            <option value="<?php echo $route->id; ?>"><?php echo $route->departure_place . ' - ' . $route->arrival_place; ?></option>
          <?php } ?>
        </select>
        <label>Agregar Ruta</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <button class="btn waves-effect waves-light green lighten-2" type="submit" name="action">
          <i class="material-icons left">done</i>Agregar
        </button>
      </div>
    </div>
  </form>
</div>
