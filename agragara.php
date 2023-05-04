<?php
  require("./Funciones/proceso.php");
  $crud = new CRUD();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num_departamento = $_POST['apto'];
    $num_habitaciones = $_POST['habi'];
    $num_banos = $_POST['banos'];
	$num_pisos = $_POST["pisos"];
	$num_personas = $_POST["perso"];

	$crud->createapartamento($num_pisos, $num_departamento, $num_habitaciones, $num_banos,$num_personas);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="./estilos/dashboard.css">
    <title>Agregar Apartamento</title>
</head>

<body>
	<h2>Nuevo Apartamento</h2>
        <a href="CRUD.php">
            <button id="btnVO" class="btnVO">Volver</button>
        </a>
	<form method="post">
		<div class="col-md-6">
		    <label style="padding-top: 10px;">Pisos:</label>
		    <input type="number" name="pisos" id="pisos" class='form-control' maxlength="12" required >
		</div>
		<div class="col-md-6">
		    <label style="padding-top: 10px;">Numero De Apto:</label>
		    <input type="number" name="apto" id="apto" class='form-control' maxlength="15" required>
		</div>
		<div class="col-md-6">
		    <label style="padding-top: 10px;">Habitaciones:</label>
		    <input type="number" name="habi" id="habi" class='form-control' maxlength="100" required>
		</div>
		<div class="col-md-6" style="padding-bottom: 10px;">
		    <label style="padding-top: 10px;">Baños:</label>
		    <input type="number" name="banos" id="banos" class='form-control' maxlength="100" required>
		</div>
        <div class="col-md-6">
		    <label>Habitantes:</label>
		    <input type="number" name="perso" id="perso" class='form-control' maxlength="12" required>
		</div>
		<div class="col-md-6 " >
		<button type="submit" class="btnEn">Guardar datos</button>
    </form> 


</body>
</html>
