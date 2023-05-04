<?php
    require('./conexion/BDconexion.php');

    // Obtener los datos del formulario
    $user = $_POST["usuario"];
    $password = $_POST["pass"];

    // Llamar a la función validarUsuario()
    validarUsuario($user, $password);

    // función para validar un usuario
    function validarUsuario($user, $password){
        $conexion = new Conexion();
        $pdo = $conexion->con();

        $user = $pdo->quote($user); // Escapar los caracteres especiales en el nombre de usuario
        $password = $pdo->quote($password); // Escapar los caracteres especiales en la contraseña

        $query = "SELECT * FROM admin WHERE usuario = $user AND clave = $password";
        $resultado = $pdo->query($query);

        if($resultado->rowCount() == 1) {
            header("location: CRUD.php");
        } else{
            echo "<script>
                alert('Error: Usuario o contraseña no válidos.');
                window.location.href = 'login.php';
              </script>";
        exit();
        }
    }

?>