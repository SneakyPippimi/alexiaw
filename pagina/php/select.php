<?php

// select

$sql_lectura ="SELECT * FROM admin_sistemas";//la sentencia sql que queremos

$sentencia_select = $gbd->prepare($sql_lectura);
//$gbd guarda la conexion creada en el archivo conexion.php
//$sentencia_selct sera usada para ejecutar la sentencia

$sentencia_select->execute();//para que se ejecute la sentencia que hemos preparado

$resultado =$sentencia_select->fetchAll();//fetchAll nos devuelce una array de la sentencia

?>