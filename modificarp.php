<?php
	require("./Funciones/proceso.php");
  	$crud = new CRUD();

	if(isset($_GET['id'])){
		$id=intval($_GET['id']);
	}else{
		header("location:CRUD.php");
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$telefono = $_POST['telefono'];
		$id_apartamento = $_POST["id_apartamento"];
	
		$crud->modificarp($nombre, $apellido, $telefono, $id_apartamento);
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
    <title>Modificar Habitante</title>
</head>

<body>
	<h2>Modificar Habitante</h2>
        <a href="CRUD.php">
            <button id="btnVO" class="btnVO"  >Volver</button>
        </a>
	<form method="post">
	<div class="col-md-6">
		    <label style="padding-top: 10px;">Nombre:</label>
		    <input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required>
		</div>
		<div class="col-md-6" style="padding-bottom: 40px;">
		    <label style="padding-top: 10px;">Apellido:</label>
		    <input type="text" name="apellido" id="apellido" class='form-control' maxlength="100" required>
		</div>
		<div class="col-md-6">
		    <label style="padding-top: 10px;">Telefono:</label>
		    <input type="text" name="telefono" id="telefono" class='form-control' maxlength="12" required >
		</div>
		<div class="col-md-6">
		    <label style="padding-top: 10px;">ID Apartamento:</label>
		    <input type="number" name="id_apartamento" id="id_apartamento" class='form-control' maxlength="15" required>
		</div>
		<div class="">
                    <button type="submit" class="btnEn">Guardar datos</button>
		</div>
    </form> 

</body>
</html>