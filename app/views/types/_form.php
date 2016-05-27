<div class="row">
  <form class="form col s12 z-depth-1" action="<?php echo $action == 'add' ? 'types' : "types/{$type->id}"; ?>" method="post">
    <div class="row">
      <?php if($action == 'edit') { ?>
      <input type="hidden" name="_method" value="PATCH">
      <?php } ?>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input id="textarea-content" type="hidden" value="<?php echo $type->description; ?>">
        <textarea id="textarea" class="materialize-textarea validate" name="type[description]"></textarea>
        <label>Descripción</label>
      </div>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Capacidad" type="text" class="validate" name="type[capacity]" value="<?php echo $type->capacity; ?>">
        <label>Capacidad</label>
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
