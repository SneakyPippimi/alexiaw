<?php   
    // Leer lo que nos llega
    if($_POST){
    $id = $_POST["id"];
    $asignatura = $_POST["asignatura"];
    $profesor = $_POST["profesor"];
    $horas_impartidas = $_POST["horas_impartidas"];


    include_once 'conexion.php'; //Para usar la base de datos

    // Sentencia Update
    $sql_update = "UPDATE admin_sistemas SET asignatura=?, profesor=?, horas_impartidas=? WHERE id=?"; 
    $sentencia_sql = $gbd -> prepare($sql_update);
    $sentencia_sql -> execute(array($asignatura,$profesor,$horas_impartidas,$id));

    header("../html/asignaturas.php");
    }
?>
