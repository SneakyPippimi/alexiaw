<!DOCTYPE html5>
<html>

<?php

include_once '../php/conexion.php';


if($_GET){
  $id = $_GET['id'];
  $sql_lectura_id = "SELECT * FROM admin_sistemas WHERE id=?"; //Sentencia SQL que queremos ejecutar
  $sentencia_select_id = $gbd->prepare($sql_lectura_id);
  $sentencia_select_id->execute(array($id));
  $resultado_id = $sentencia_select_id->fetch(); //fetch porque viene sólo un resultado

}//hace un select



?>
    <head><title>ejercicio1</title>
   
     
        <link rel="stylesheet" type="text/css" href="..\css\css.css"><!-- link a css -->
        <header>
    </head>
      
        <div class="logo">
            <img src="../imagens/logo.png" alt="logo" width= "150px" height= "100px";><!-- imagen logo -->
        </div>
            <div class="texto_cab">
                <p>administracion de sistemas informaticos en red</p>
            </div>
        
        </header>
   <link rel="stylesheet" type="text/css" href="..\css\css_navigation.css">
        <div class="topnav">
            <a href="index.html">Inicio</a>
            <a href="asignaturas.php">ver asignaturas</a>
            <a href="insertar_datos.php">insertar</a>
           

          </div>          
         
   


</body>

<br><br>
<br>
<script type="text/javascript" src="../js/js_tau.js"></script>

<img id="pic" src="../imagens/tau.jfif" onclick="changeImage()" width= "150px" height= "100px"; style="cursor:pointer"><!--style="curssor:pointer" para cambiar 
                                                                                                                        a la "mano" -->




<form action="../php/edit.php" method="POST">

<br><br><br>

<p><label for="asignatura">asignatura</label>
    <input type="text" name="asignatura" value="<?php print $resultado_id['asignatura']?>"> <!--for e name tienen que ser lo mismo-->
    <input type="hidden" name="id" value="<?php print $resultado_id['id']?>"><!--añade al formulario el id hidden-->
  </p>

  <p><label for="profesor">profesor</label>
    <input type="text" name="profesor"value="<?php print $resultado_id['profesor']?>"><!--for e name tienen que ser lo mismo-->
  </p>

  <p><label for="horas_impartidas">horas impartidas</label>
    <input type="text" name="horas_impartidas"value="<?php print $resultado_id['horas_impartidas']?>"><!--for e name tienen que ser lo mismo-->
  </p>
  <br><br>
<input type="submit" name="enviar" value="enviar"><!--el type submit es para enviar-->






<br>
<br>


<footer>

    <p>este es el pie de pagina</p>
</footer>
</html>