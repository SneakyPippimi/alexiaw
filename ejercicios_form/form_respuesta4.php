<?php
/**
 * Controles en formularios
 *
 * @author Escriba aquí su name
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Controles en formularios 
    Escriba aquí su name
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Ejercicio X</h1>

<?php

print_r($_POST);

$name=$_POST['name'];
$surname=$_POST['surname'];



if ($name !="" && $surname !=""){
  if(ctype_alpha($name) && ctype_alpha($surname)){

    print "<p>tu nombre es: $name y apellido es: $surname</p>";

  
  }else{

    print "<p>no has introducido un nombre o un apellido o has insertado
    numeros</p>";
  }
 
}else{

  print "<p>no has introducido un nombre o un apellido </p>";
}

?>

  <p><a href="formX.hrml">Volver al formulario.</a></p>

  <footer>
    <p>alexander arevalo</p>
  </footer>
</body>
</html>