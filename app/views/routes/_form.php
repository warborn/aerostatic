<div class="row">
  <form class="form col s12 z-depth-1" action="<?php echo $action == 'add' ? 'routes' : "routes/{$route->id}"; ?>" method="post">
    <div class="row">
      <?php if($action == 'edit') { ?>
      <input type="hidden" name="_method" value="PATCH">
      <?php } ?>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Lugar de salida" type="text" class="validate" name="route[departure_place]" value="<?php echo $route->departure_place; ?>">
        <label>Lugar de salida</label>
      </div>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Lugar de llegada" type="text" class="validate" name="route[arrival_place]" value="<?php echo $route->arrival_place; ?>">
        <label>Lugar de llegada</label>
      </div>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Duración" type="text" class="validate" name="route[duration]" value="<?php echo $route->duration; ?>">
        <label>Duración</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <button class="btn waves-effect waves-light green lighten-2" type="submit" name="action"><?php echo $action == 'add' ? 'Agregar' : 'Editar' ?>
          <i class="material-icons left">done</i>
        </button>
      </div>
    </div>
  </form>
</div>
