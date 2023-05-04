<?php 
if (isset($_GET['id'])){
    require("./Funciones/proceso.php");
    $crud = new CRUD();
    $id=intval($_GET['id']);
    $respuesta = $crud->borrarapto($id);
    if($respuesta){
        echo "Error al eliminar el registro";
    }else{
        header('location: CRUD.php');
    }
}
?>