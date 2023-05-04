<?php
class conexion{ 
  private $pdo;
        
  public function __construct(){
      // Establecer los parámetros de conexión a la base de datos
      $dsn = 'mysql:host=localhost;dbname=edificio';
      $username = 'root';
      $password = '';
  
      // Crear una instancia de la clase PDO y pasarle los parámetros de conexión como argumentos
      try{
          $this->pdo = new PDO($dsn, $username, $password);
      }catch(PDOException $e){
          echo 'Conexion fallida. '.$e->getMessage();
          
      }
  }

  public function con(){
      return $this->pdo;
}
}

?>
