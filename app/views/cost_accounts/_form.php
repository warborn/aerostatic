<div class="row">
  <form class="form col s12 z-depth-1" action="<?php echo $action == 'add' ? 'extras' : "extras/{$cost_account->id}"; ?>" method="post">
    <div class="row">
      <?php if($action == 'edit') { ?>
      <input type="hidden" name="_method" value="PATCH">
      <?php } ?>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Nombre" type="text" class="validate" name="extra[name]" value="<?php echo $cost_account->name; ?>">
        <label>Nombre</label>
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
