<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Controles en formularios
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Ejercicio con formularios X</h1>

  <form action="form_respuesta7.php" method="POST">
    
    <p></p>
   <p><label for="nombre">nombre</label>
    <input type="text" name="nombre"><!--for e name tienen que ser lo mismo-->
  </p>
  <p></p>
    <label for="apellido">apellido</label>
    <input type="text" name="apellido"><!--for e name tienen que ser lo mismo-->
  <br>
  <p></p>
  <label for="peso">peso</label>
  <input type="text" name="peso"><!--for e name tienen que ser lo mismo-->

  
  <br>
  <br>

    <p>edad</p>
    <select name="edad">
        <?php
          for($edad=1;$edad<=100;$edad++){

            print "<option>$edad</option>";
            
          }
        ?>
    </select>

    <br>
    <p>genero</p>
    <input type="radio" id="hombre" name="genero" value="hombre">
    <label for="hombre">hombre</label><br>

    <input type="radio" id="mujer" name="genero" value="mujer">
    <label for="mujer">mujer</label><br>

    <br>
    <p>estado civil</p>
    <input type="radio" id="casado" name="estado_civil" value="casado">
    <label for="casado">casado</label><br>

    <input type="radio" id="soltero" name="estado_civil" value="soltero">
    <label for="soltero">soltero</label><br>
    <input type="radio" id="otro" name="estado_civil" value="otro">
    <label for="otro">otro</label><br>


    <br>
    <p>aficiones</p>
    <input type="radio" id="cine" name="cine" value="cine">
    <label for="cine">cine</label><br>

    <input type="radio" id="literatura" name="literatura" value="literatura">
    <label for="literatura">literatura</label><br>

    <input type="radio" id="tebeos" name="tebeos" value="tebeos">
    <label for="tebeos">tebeos</label><br>

    <input type="radio" id="deporte" name="deporte" value="deporte">
    <label for="deporte">deporte</label><br>

    <input type="radio" id="musica" name="musica" value="musica">
    <label for="musica">musica</label><br>

    <input type="radio" id="television" name="television" value="television">
    <label for="television">television</label><br>

    <br><br><br>
  <input type="submit" name="enviar" value="enviar"><!--el type submit es para enviar-->
  <input type="reset" value="Borrar">
    </p>


  
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
