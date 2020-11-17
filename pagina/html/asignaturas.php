<!DOCTYPE html5>
<html>

<?php

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


<table>
<?php


include_once '../php/conexion.php';

include_once '../php/select.php';



foreach($resultado as $dato)//del array del resultado mete un dato
                            //una tuple

    {
        print "<div class=tabla_datos><tr>
                <th>nombre de asignatura</th>
                    <td>$dato[asignatura] </td>
                <th>profesor</th>
                    <td> $dato[profesor]</td>
                <th>horas impartidas</th>
                    <td>$dato[horas_impartidas]<a href='editar_datos.php?id=$dato[id]'>editar</a>
                    
                    <a href='../php/delete.php?id=$dato[id]'>eliminar</a></td>
               </tr></div>";
                
    }


    



?>

</table></br>



<br>
<br>


<footer>

    <p>este es el pie de pagina</p>
</footer>
</html>