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

$mail1=$_POST['mail1'];
$mail2=$_POST['mail2'];

if(filter_var($mail1, FILTER_VALIDATE_EMAIL)){/*filter_validate_email, hace que
  si el email no es un example@example.com*/

  if($mail1 == $mail2){

  print "<p>el email es correcto</p>";
  }else{
    print "<p>el mail no es correcto</p>";
  }
  
}else{

  
    print "<p>uno de los emails no es igual";
  
}

if (isset($_POST['yes'])){

  print "<p>te llegaran correos</p>";

}else{

  print "<p> no te llegaran correos </p>";
}




?>

  <p><a href="formX.hrml">Volver al formulario.</a></p>

  <footer>
    <p>alexander arevalo</p>
  </footer>
</body>
</html>