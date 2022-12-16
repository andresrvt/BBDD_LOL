<!-- Al pinchar en editar, el usuario será redirigido al archivo 003editando.php donde mostrará un 
formulario con los campos rellenos por los datos del campeón seleccionado. Al darle al botón 
de guardar los datos se guardarán en la base de datos y el usuario será redirigido a la lista de 
champs para poder ver los cambios. -->

<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre del campeón</label>
    <input type="text" class="form-control" id="validationCustom01" value="<?php echo "$champ[name]" ?>" required>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Selecciona un rol</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="<?php echo "$champ[rol]" ?>">Rol</option>
      <option>Asesino</option>
      <option>Luchador</option>
      <option>Mago</option>
      <option>Tirador</option>
      <option>Apoyo</option>
      <option>Tanque</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Dificultad</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="<?php echo "$champ[difficulty]" ?>">Nivel de Dificultad</option>
      <option>Baja</option>
      <option>Moderada</option>
      <option>Alta</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <textarea class="form-control" name="" id="" rows="3" value="<?php echo "$champ[description]" ?>"></textarea>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar datos</button>
  </div>
</form>

