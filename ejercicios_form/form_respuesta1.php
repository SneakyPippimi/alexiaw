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






$tamano=$_POST['tamano'];

$grosor=$_POST['grosor'];


print "$tamano y  $grosor";

$color =$_POST['intereses'];

if ($tamano !="" && $grosor !=""){
  if(is_numeric($tamano) && is_numeric($grosor)){

    print "<p> has introducido un tamaño y un grosor</p>";

    print "<svg width='300' heigh='300'>";

    print "<rect width='$tamano' height='$tamano' style='fill:$color;stroke-width:$grosor;stroke:rgb(0,0,0)'/>";

  print "</svg>";
  
  }else{

    print "<p>no has introducido un tamaño o un grosor o no has metido numeros</p>";
  }
 
}






?>

  <p><a href="formX.hrml">Volver al formulario.</a></p>

  <footer>
    <p>alexander arevalo</p>
  </footer>
</body>
</html>
