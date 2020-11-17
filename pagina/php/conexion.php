<?php

$link = 'mysql:host=localhost;dbname=admin_sistemas';
$usuario="root";
$pwd ="";


try { 

    $gbd = new PDO($link, $usuario, $pwd);
    print "Estas conectado a la base de datos<br></br>";


}catch (PDOException $e){

    print "Error: " .$e->getMessage() . "<br/>";
    die();

}


?>