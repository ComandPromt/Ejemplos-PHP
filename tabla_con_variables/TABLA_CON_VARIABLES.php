<?php

$nombre = "Ramon Jesus";
$apellido1 = "Gomez";
$apellido2 = "Carmona";
$space =" ";
$apellidos = $apellido1 . $space . $apellido2;
$alumno =$nombre . $space . $apellido1 . $space .  $apellido2;

print "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\" />
  <title>Página HTML 5 válida</title>
</head>
<body>
  <table border=1>
  <tr>
    <td>Variable</td>
    <td>Valor</td>
    </tr>
  <tr>
    <td>\$apellido1</td>
    <td bgcolor= #00FFFF>$apellido1</td>
  </tr>
  
   <tr>
    <td>\$apellido2</td>
    <td bgcolor=#F00FFF>$apellido2</td>
    </tr>
  <tr>
    <td>\$apellidos</td>
    <td bgcolor=#F02CDF>$apellidos</td>
  </tr>
  
   <tr>
    <td>\$nombre</td>
    <td bgcolor=#F023bc>$nombre</td>
    </tr>
  <tr>
    <td>\$alumno</td>
    <td bgcolor=#12cab0>$alumno</td>
  </tr>
  
</table> 
</body>
</html>";

?>