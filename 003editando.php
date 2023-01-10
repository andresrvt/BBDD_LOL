<!-- Al pinchar en editar, el usuario será redirigido al archivo 003editando.php donde mostrará un 
formulario con los campos rellenos por los datos del campeón seleccionado. Al darle al botón 
de guardar los datos se guardarán en la base de datos y el usuario será redirigido a la lista de 
champs para poder ver los cambios. -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<?php
$id = $_GET['id'] ?? $_POST['id'];
$conexion = mysqli_connect("localhost","root","","lol");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
};

if (isset($id)) {
  $consulta = "SELECT * FROM `champ` WHERE id = $id";
  $listaChamp = mysqli_query($conexion, $consulta);

  if ($listaChamp) {
    foreach ($listaChamp as $champs) {
    }
  } else {
    echo "No hay campeón seleccionado";
  }

}
if (isset($id)) {
  $update = "UPDATE * FROM `champ` WHERE id = $id";

}

?>

<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre del campeón</label>
    <input type="text" class="form-control" id="validationCustom01" value=<?php echo "$champs[name]" ?> name="" required>
    
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Selecciona un rol</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled>Rol</option>
      <option value="Asesino">Asesino</option>
      <option value=<?php echo "$champs[rol]" ?>>Luchador</option>
      <option value=<?php echo "$champs[rol]" ?>>Mago</option>
      <option value=<?php echo "$champs[rol]" ?>>Tirador</option>
      <option value=<?php echo "$champs[rol]" ?>>Apoyo</option>
      <option value=<?php echo "$champs[rol]" ?>>Tanque</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Dificultad</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled >Nivel de Dificultad</option>
      <option value=<?php echo "$champs[difficulty]" ?>>Baja</option>
      <option value=<?php echo "$champs[difficulty]" ?>>Moderada</option>
      <option value=<?php echo "$champs[difficulty]" ?>>Alta</option>
    </select>
  </div>
  <div class="col-md-12 mb-3">
    <label for="" class="form-label">Descripción</label>
    <textarea class="form-control" name="description" id="" rows="3"><?php echo "$champs[description]" ?></textarea>
  </div>
  <div class="col-12">
    <a href="002campeones.php?<?php $id=$champs['id'] ?>"><button class="btn btn-primary" type="submit"> Enviar datos</button></a>
  </div>
</form>

