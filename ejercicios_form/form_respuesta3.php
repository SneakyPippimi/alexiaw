<?php
/**
 * Controles en formularios
 *
 * @author Escriba aquí su nombre
 *
 */
?>
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
  <h1>Ejercicio X</h1>

<?php

print_r($_POST);

$text=$_POST['text'];
$background=$_POST['background'];


print "<main style='background-color:$background'>";

print"<p style='color:$text'>hola</p>";

print "</main>";



?>

  <p><a href="form3.html">Volver al formulario.</a></p>

  <footer>
    <p>alexander arevalo</p>
  </footer>
</body>
</html>
