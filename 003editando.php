<!-- Al pinchar en editar, el usuario será redirigido al archivo 003editando.php donde mostrará un 
formulario con los campos rellenos por los datos del campeón seleccionado. Al darle al botón 
de guardar los datos se guardarán en la base de datos y el usuario será redirigido a la lista de 
champs para poder ver los cambios. -->

<link rel="stylesheet" href="css/bootstrap.min.css">

<?php
  $id = $_GET['id'] ?? $_POST['id'];

  $conexion = mysqli_connect("localhost", "root", "", "lol");

  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  };

  if (isset($id)) {
    $consulta = "SELECT * FROM `champ` WHERE id = $id";
    $campeon = mysqli_query($conexion, $consulta);

    if ($campeon) {
      foreach ($campeon as $champs) {
      }
    } else {
      echo "No hay campeón seleccionado";
    }
  }

  if (isset($_POST['enviar'])) {
    $actualizar = "UPDATE champ 
    SET `name` = '$_POST[nombre]', 
    rol = '$_POST[rol]',
    difficulty = '$_POST[difficulty]',
    description = '$_POST[description]'
    WHERE id = $id";

    $updateCampeon = mysqli_query($conexion, $actualizar);
    header("Location:002campeones.php");
  }

?>

<div class="container-fluid !direction !spacing">
  <form class="row g-3 needs-validation" method="post" novalidate>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre del campeón</label>
      <input type="text" class="form-control" id="validationCustom01" name="nombre" value=<?php echo "$champs[name]" ?> required>
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Selecciona un rol</label>
      <select class="form-select" id="validationCustom04" name="rol" required>
        <option <?php if ($champs['rol'] == 'Asesino') {
                  echo "selected";
                }  ?> value="Asesino">Asesino</option>
        <option <?php if ($champs['rol'] == 'Luchador') {
                  echo "selected";
                }  ?> value="Luchador">Luchador</option>
        <option <?php if ($champs['rol'] == 'Mago') {
                  echo "selected";
                } ?> value="Mago">Mago</option>
        <option <?php if ($champs['rol'] == 'Tirador') {
                  echo "selected";
                } ?> value="Tirador">Tirador</option>
        <option <?php if ($champs['rol'] == 'Apoyo') {
                  echo "selected";
                } ?>value="Apoyo">Apoyo</option>
        <option <?php if ($champs['rol'] == 'Tanque') {
                  echo "selected";
                } ?>value="Tanque">Tanque</option>
      </select>
    </div>

    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Dificultad</label>
      <select class="form-select" id="validationCustom04" name="difficulty" required>
        <option <?php if ($champs['difficulty'] == 'Baja') {
                  echo "selected";
                } ?> value="Baja">Baja</option>
        <option <?php if ($champs['difficulty'] == 'Moderada') {
                  echo "selected";
                } ?> value="Moderada">Moderada</option>
        <option <?php if ($champs['difficulty'] == 'Alta') {
                  echo "selected";
                } ?> value="Alta">Alta</option>
      </select>
    </div>
    <div class="col-md-12 mb-3">
      <label for="" class="form-label">Descripción</label>
      <textarea class="form-control" name="description" rows="3"><?php echo "$champs[description]" ?></textarea>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit" name="enviar"> Enviar datos</button>
    </div>
  </form>
</div>