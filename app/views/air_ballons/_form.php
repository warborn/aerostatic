<div class="row">
  <form class="form col s12 z-depth-1" action="<?php echo $action == 'add' ? 'air-ballons' : "air-ballons/{$ballon->id}"; ?>" method="post" enctype="multipart/form-data">
    <div class="row">
      <?php if($action == 'edit') { ?>
      <input type="hidden" name="_method" value="PATCH">
      <?php } ?>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Nombre del globo" type="text" class="validate" name="air_ballon[name]" value="<?php echo $ballon->name; ?>">
        <label>Nombre</label>
      </div>
    </div>
    <div class="row">
      <div class="file-field input-field col s12 m10 l8 offset-m1 offset-l2">
        <div class="btn">
        <span>Imagen</span>
        <input type="file" name="air_ballon[image]">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <select name="air_ballon[type_id]">
          <option value="" disabled selected>Elige un tipo</option>
          <?php foreach ($types as $type) { ?>
            <option value="<?php echo $type->id; ?>" <?php echo $type->id == $ballon->type_id ? 'selected' : '' ?>><?php echo $type->description ?></option>
          <?php } ?>
        </select>
        <label>Tipo de globo</label>
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
