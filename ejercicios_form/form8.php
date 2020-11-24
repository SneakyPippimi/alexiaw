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

<form action="form_respuesta8.php" method="post">
    
<p>
<label for="nombre">Temperatura:</label><input type="number" name="numero" step="any" >
</p>

<p>
    <p><input type="radio" name="tipo" value="Celsius"><label for="tipo"></label>Celsius</p>
    <p><input type="radio" name="tipo" value="Fahrenheit"><label for="tipo">Fahrenheit</label></p>
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
