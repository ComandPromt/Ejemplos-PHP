<?php

session_name("sesion1");
session_start();

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Ejercicios PHP - Sesiones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>
    <h1>Confirmación de datos del usuario</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
    : "";
    return $tmp;
}

$nombre   = recoge("nombre");
$nombreOk = false;

if ($nombre == "") {
    print "<p class=\"aviso\">No ha escrito su nombre.</p>\n";
} else {
    $nombreOk = true;
}

if ($nombreOk) {
    $_SESSION["nombre"] = $nombre;
    print "    <p>Su nombre es: <strong>$nombre</strong>.</p>\n";
}

?>

    <p><a href="formulario.php">Volver a la primera página.</a></p>
  </body>
</html>