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

$nombre=$_POST['nombre'];

$apellido=$_POST['apellido'];

$peso=$_POST['peso'];

$edad=$_POST['edad'];






if ($nombre !="" && $apellido !=""){
  if(ctype_alpha($nombre) && ctype_alpha($apellido)){

    print "<p>tu nombre es: $nombre y apellido es: $apellido</p>";

  
  }else{

    print "<p>no has introducido un nombre o un apellido o has insertado
    numeros</p>";
  }
 
}else{

  print "<p>no has introducido un nombre o un apellido </p>";
}


print $edad;


if(isset($_POST['genero'])){
  $genero=$_POST['genero'];
    if($genero =='hombre'){

      print "<p>has elegido hombre como tu genero</p>";

    }else{

      print "<p>has elegido mujer</p>";

    }
}


if(isset($_POST['estado_civil'])){

  $estado_civil=$_POST['estado_civil'];
    if($estado_civil=='soltero'){

      print "<p>has elegido soltero";

    }elseif($estado_civil =='casado'){

      print "<p>has elegido casado</p>";

    }else{

      print "<p>has elegido otro</p>";

    }

}





$aficiones=['cine','literatura','tebeos',
        'deporte','musica','television'];


foreach($aficiones as $aficion){

  if(isset($_POST[$aficion])){

    print "<p>has escogido $aficion</p>";
  }else{

    print "<p>no has escogino una aficion</p>";

  break;
  }

}






?>

  <p><a href="formX.hrml">Volver al formulario.</a></p>

  <footer>
    <p>alexander arevalo</p>
  </footer>
</body>
</html>
