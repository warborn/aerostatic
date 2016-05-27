<div class="row">
  <form class="form col s12 z-depth-1" action="<?php echo $action == 'add' ? 'prices' : "prices/{$price->id}"; ?>" method="post">
    <div class="row">
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <select name="price[type_id]">
          <option value="" disabled selected>Elige un tipo</option>
          <?php foreach ($types as $type) { ?>
            <option value="<?php echo $type->id; ?>" <?php echo $type->id == $price->type_id ? 'selected' : '' ?>><?php echo $type->description ?></option>
          <?php } ?>
        </select>
        <label>Tipo</label>
      </div>
    </div>
    <div class="row">
      <?php if($action == 'edit') { ?>
      <input type="hidden" name="_method" value="PATCH">
      <?php } ?>
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Precio" type="text" class="validate" name="price[price]" value="<?php echo $price->price; ?>">
        <label>Precio</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m10 l8 offset-m1 offset-l2">
        <input placeholder="Categoría" type="text" class="validate" name="price[category]" value="<?php echo $price->category; ?>">
        <label>Categoría</label>
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
