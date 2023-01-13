<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
 
<body>
    <table class='table table-primary'>
        <thead>
            <tr>
                <th scope='col'><a href='003campeones.php?categoria=id&&orden=asc'><i class='bi bi-chevron-up'></i></a> ID <a href='003campeones.php?categoria=id&&orden=desc'><i class='bi bi-chevron-down'></i></a></th>
                <th scope='col'><a href='003campeones.php?categoria=name&&orden=asc'><i class='bi bi-chevron-up'></i></a> Nombre <a href='003campeones.php?categoria=name&&orden=desc'><i class='bi bi-chevron-down'></i></a></th>
                <th scope='col'><a href='003campeones.php?categoria=rol&&orden=asc'><i class='bi bi-chevron-up'></i></a> Rol <a href='003campeones.php?categoria=rol&&orden=desc'><i class='bi bi-chevron-down'></i></th>
                <th scope='col'><a href='003campeones.php?categoria=difficulty&&orden=asc'><i class='bi bi-chevron-up'></i></a> Dificultad <a href='003campeones.php?&categoria=difficulty&&orden=desc'><i class='bi bi-chevron-down'></i></th>
                <th scope='col'><a href='003campeones.php?categoria=description&&orden=asc'><i class='bi bi-chevron-up'></i></a> Descripción <a href='003campeones.php?&categoria=description&&orden=desc'><i class='bi bi-chevron-down'></i></a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $categoria = $_GET['categoria'] ?? "";
            $orden = $_GET['orden'] ?? "";
            $conexion = mysqli_connect("localhost", "root", "", "lol");
             
            if (mysqli_connect_errno()) {
                echo "conexión con la base de datos fallida: " . mysqli_connect_error();
                exit();
            }

            if($categoria != "" && $orden != ""){
                $mostrar = "SELECT * FROM `champ` ORDER BY $categoria $orden";
                $listaChamp = mysqli_query($conexion, $mostrar);
            } else {
                $consulta = "SELECT * FROM `champ`";
                $listaChamp = mysqli_query($conexion, $consulta);
            }

            if ($listaChamp) {
                foreach ($listaChamp as $champs) {
                echo "<tr>
                    <th scope='row'>$champs[id]</th>
                        <td>$champs[name]</td>
                        <td>$champs[rol]</td>
                        <td>$champs[difficulty]</td>
                    <td class='col-5' >$champs[description]</td>
                </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>

