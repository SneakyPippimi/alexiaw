<?php

//insert

if($_POST){//SI LLEGAN DATOS DE UN FORMULARIO
    $asignatura = $_POST["asignatura"];
    $profesor = $_POST["profesor"];
    $horas_impartidas = $_POST["horas_impartidas"];

    if(($asignatura !="" and $profesor !="")and $horas_impartidas !=""){

        $sql_escritura = "INSERT INTO admin_sistemas(asignatura,profesor,horas_impartidas)
                        VALUES (?,?,?)";//(?) UNO POR VALOR EVITAS EL SQL INJECTION
                        $sentencia_insert = $gbd->prepare($sql_escritura);
                        $sentencia_insert->execute(array($asignatura,$profesor,$horas_impartidas));//un valor por (?)

                        header("location:../html/asignaturas.php");//redirige a pagina


       
    }
}
?>