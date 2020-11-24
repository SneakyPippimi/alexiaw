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

print_r($_POST);



if(isset($_POST['forma'])){
  $forma=$_POST['forma'];
  print "<p> se ha seleccionado un $forma";


if ($forma == 'cuadrado'){
  if ($tamano !="" ){
    if(is_numeric($tamano)){
  
      print "<p> has introducido un tamaño </p>";
  
      print "<svg width='300' heigh='300'>";
  
      print "<rect width='$tamano' height='$tamano'>";
  
    print "</svg>";
    
    }
   
  }
  }else{

    print "<svg height='300' width='300'>
    <circle cx='$tamano' cy='$tamano' r='$tamano'/>
    </svg>";
  }
  

}else{
  
    print "<p> no has introducido los datos</p>";
  
  }








?>

  <p><a href="formX.hrml">Volver al formulario.</a></p>

  <footer>
    <p>alexander arevalo</p>
  </footer>
</body>
</html>
