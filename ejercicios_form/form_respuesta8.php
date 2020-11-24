<?php
/**
 * Controles en formularios
 *
 * @author Alexander arevalo
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Controles en formularios 
    Alexander arevalo
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>

<?php

$tipo =$_REQUEST['tipo'];
$numero = $_REQUEST['numero'];


if($tipo=='Celsius' && $numero>=-273.15){
  $resultado= (($numero*9/5)+32);
print "$resultado";
}elseif ($tipo=='Fahrenheit' && $numero>=-459.67){
$resultado= (($numero-32)*5/9);
print "$resultado";
}
?>

  <p><a href="form8.php">Volver al formulario.</a></p>

  <footer>
    <p>Alexander arevalo</p>
  </footer>
</body>
</html>
