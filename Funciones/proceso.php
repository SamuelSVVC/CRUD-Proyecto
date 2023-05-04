<?php 
require("./conexion/BDconexion.php");
class CRUD extends conexion{


public function createhabitantes($nombre, $apellido, $telefono, $id_apartamento){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telef"];
    $id_apartamento = $_POST["id_apto"];

    $query = "INSERT INTO persona (id, nombre, apellido, telefono, id_apartamento) VALUES
    ('','$nombre', '$apellido', '$telefono', '$id_apartamento')";


    $pdo = $this->con();
    $pdo->query($query); 
    $pdo = null;      
}

public function createapartamento($num_pisos, $num_departamento, $num_habitaciones, $num_banos,$num_personas){
        $num_pisos = $_POST["pisos"];
        $num_departamento = $_POST["apto"];
        $num_habitaciones = $_POST["habi"];
        $num_banos = $_POST["banos"];
        $num_personas = $_POST["perso"];
    
        $query = "INSERT INTO apartamento (id, num_pisos, num_departamento, num_habitaciones, num_banos,num_personas) VALUES
        ('','$num_pisos', '$num_departamento', '$num_habitaciones', '$num_banos','$num_personas')";
    
        $pdo2 = $this->con();
        $pdo2->query($query);
        $pdo2= null;      
    }
    

public function readapartamento(){
    $pdo = $this->con();
    $consulta = $pdo->query("SELECT * FROM apartamento");

    return $consulta;
}
    
public function readpersona(){
    $pdo = $this->con();
    $consulta = $pdo->query("SELECT * FROM persona");
    
    return $consulta;
}

public function modificarp($nombre, $apellido, $telefono, $id_apartamento,){
    if(isset($_GET['id'])){
        $id=intval($_GET['id']);
    }else{
        header("location:CRUD.php");
    }

    // Declaracion de variables que llegan del formulario
    $id_apartamento = $_POST["id_apartamento"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
 
    $query = "UPDATE persona SET nombre='$nombre', apellido='$apellido', telefono='$telefono', id_apartamento='$id_apartamento' WHERE id = $id";
    $pdo = $this->con();
    $pdo->query($query);
    $pdo = null;
}
public function modificara($num_pisos, $num_departamento, $num_habitaciones, $num_banos,$num_personas){
    if(isset($_GET['id'])){
        $id=intval($_GET['id']);
    }else{
        header("location:CRUD.php");
    }

    $num_pisos = $_POST["pisos"];
    $num_departamento= $_POST["apto"];
    $num_habitaciones = $_POST["habi"];
    $num_banos = $_POST["banos"];
    $num_personas = $_POST["perso"];
 

    $query = "UPDATE apartamento SET num_pisos ='$num_pisos', num_departamento='$num_departamento', num_habitaciones='$num_habitaciones', num_banos='$num_banos', num_personas='$num_personas' WHERE id = $id";
    $pdo = $this->con();
    $pdo->query($query);

    $pdo = null;
}

public function borrarpersona($id){
    $query = "DELETE FROM persona WHERE id = $id";

    $pdo = $this->con();
    $pdo->query($query);

    $pdo = null;
}
public function borrarapto($id){
    $query = "DELETE FROM apartamento WHERE id = $id";

    $pdo = $this->con();
    $pdo->query($query);

    $pdo = null;
}




}
?>