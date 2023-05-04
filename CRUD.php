<?php
require("./Funciones/proceso.php");
$conexion = new CRUD();



?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="generator" content="Hugo 0.111.3">
    <link href="./estilos/dashboard.css" rel="stylesheet">
    <title>CRUD</title>
  </head>
  
<body>
  <h2>Apartamentos</h2>
    <a href="agragara.php">
      <button  id="btnAP" class="btnAP">Agregar Apartamento</button>
    </a>
    <div class="table">
      <table class="table table-striped ">
        <thead class="head">
          <tr class="tr">
            <th scope="col">ID</th>
            <th scope="col">Apartamento</th>
            <th scope="col">Baños</th>
            <th scope="col">Habitaciones</th>
            <th scope="col">Pisos</th>
            <th scope="col">Habitantes</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($conexion -> readapartamento() as $apartamento): ?>
            <tr class="tr">
            <td><?= $apartamento['id'] ?></td>
              <td><?= $apartamento['num_departamento'] ?></td>
              <td><?= $apartamento['num_banos'] ?></td>
              <td><?= $apartamento['num_habitaciones'] ?></td>
              <td><?= $apartamento['num_pisos'] ?></td>
              <td><?= $apartamento['num_personas'] ?></td>
              <td>                
                <a href="modificara.php?id=<?php echo $apartamento['id']; ?>">
                  <button id="btnEdi" class="btnEdi">Editar</button>
                </a>
              <a href="elimiapto.php?id=<?php echo $apartamento['id']; ?>">
                  <button id="btnEli" class="btnEli">Eliminar</button>
                </a>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  <h2>Habitantes</h2>
    <a href="Agregarp.php">
      <button id="btnAH" class="btnAP">Agregar Habitante</button>
    </a>
    <div class="table">
      <table class="table table-striped">
        <thead class="head">
          <tr class="tr">
            <th scope="col">ID Apartamento</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($conexion -> readpersona() as $persona): ?>
            <tr class="tr">
              <td><?= $persona['id_apartamento'] ?></td>
              <td><?= $persona['nombre'] ?></td>
              <td><?= $persona['apellido'] ?></td>
              <td><?= $persona['telefono'] ?></td>
              <td>
                <a href="modificarp.php?id=<?php echo $persona['id']; ?>">
                  <button id="btnEdi" class="btnEdi">Editar</button>
                </a>
                <a href="elimiperso.php?id=<?php echo $persona['id']; ?>">
                  <button id="btnEli" class="btnEli">Eliminar</button>
                </a>
              </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
