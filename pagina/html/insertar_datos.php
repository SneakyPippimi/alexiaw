<!DOCTYPE html5>
<html>

<?php

include_once '../php/conexion.php';


include_once '../php/insert.php';




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




<form action="" method="POST">

<br><br><br>

<p><label for="asignatura">asignatura</label>
    <input type="text" name="asignatura"><!--for e name tienen que ser lo mismo-->
  </p>

  <p><label for="profesor">profesor</label>
    <input type="text" name="profesor"><!--for e name tienen que ser lo mismo-->
  </p>

  <p><label for="horas_impartidas">horas impartidas</label>
    <input type="text" name="horas_impartidas"><!--for e name tienen que ser lo mismo-->
  </p>
  <br><br>
<input type="submit" name="enviar" value="enviar"><!--el type submit es para enviar-->
  <input type="reset" value="Borrar">





<br>
<br>


<footer>

    <p>este es el pie de pagina</p>
</footer>
</html>