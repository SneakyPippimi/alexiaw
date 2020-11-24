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

<form action="form_respuesta10.php" method="post">
    
<p>
<label for="jugadores">Jugadores:</label><select name="jugadores" size="1">  
            <option></option>
<?php

for($contador =3; $contador <=10; $contador++){

  print "<option value='$contador'>$contador</option>";
}
?>
        </select>
</p>

<p>
  <input type="submit" value="Enviar">
  <input type="reset" value="Borrar">
</p>

</form>




  <footer>
    <p>Alexander arevalo</p>
  </footer>
</body>
</html>
