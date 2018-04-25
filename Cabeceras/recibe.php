<?php

function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$nombre   = recoge("nombre");

// Este programa podría no utilizar la variable $nombreOk
$nombreOk = false;

// Si no se utilizara la variable $nombreOk, se eliminaría el else
if ($nombre == "") {
    header("location:formulario.php");
    exit(); //Se puede quitar, pero se recomienda ponerlo
} else {
    $nombreOk = true;
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Ejercicios PHP - Cabeceras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>
    <h1>Resultado</h1>

<?php
// Si no se utilizara la variable $nombreOk, se eliminaría el if dejando las instrucciones print
if ($nombreOk) {
    print "<p>Su nombre es <strong>$nombre</strong>.</p>\n";
    print "\n";
}

?>
    <p><a href="formulario.php">Volver al formulario.</a></p>
  </body>
</html>
