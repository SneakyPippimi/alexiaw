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
  <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>

<body>
<table>
<?php

$repeticiones = $_REQUEST['repeticiones'];
$multiplicar = 0;
$valor = 0;


if ($repeticiones<= 100 && $repeticiones >=0) {
    for ($contador =1; $contador <=$repeticiones; $contador++) {
        print "<tr>";
        for ($contador2=1; $contador2 <=$repeticiones; $contador2++) {
            $valor= $contador*$contador2;
            print "<td>$valor</td>";
        }
        print "</tr>";
    }
}else{
  print "<p>No has introducido un numero valido</p>";
}
?>
</table>
  <p><a href="form9.php">Volver al formulario.</a></p>

  <footer>
    <p>Alexander arevalo</p>
  </footer>
</body>
</html>
