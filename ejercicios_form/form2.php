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

  <form action="form_respuesta2.php" method="POST">
    
  <?php

      $frutas= ["cerezas","fresa","limon","manzana","naranja","pera"];

        for($contador=0;$contador<5;$contador++){

        print "<p><input type='radio' id='0' name='fruta' value='$frutas[$contador]'>";
        print "<label for='fruta'>$frutas[$contador]</label></p>";/*para los radio button*/
      
      
        }

  ?>
  <input type="submit" name="enviar" value="enviar">
  </form>

  <footer>
    <p>alexander arevalo</p>
  </footer>
</body>
</html>
