<?php
try{
    $datos="mysql:host=localhost;dbname=registro";
    $usuario="root";
    $password="";
    $conexion = new PDO($datos, $usuario, $password);
  


}catch(PDOException $e){
    print "Error ".$e->getMessage();
    die();
}

?>