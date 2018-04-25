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
    <h1>Formulario</h1>

<?php
if (isset($_SESSION["nombre"])) {
    print "    <p>Su nombre es: <strong>$_SESSION[nombre]</strong>.</p>\n";
    print "\n";
}
?>
    <form action="recibe.php" method="get">
      <p>Escriba su nombre:</p>

      <p><strong>Nombre:</strong> <input type="text" name="nombre" size="20" maxlength="20" /></p>

      <p>
        <input type="submit" value="Siguiente" />
        <input type="reset" value="Borrar" />
      </p>
    </form>
  </body>
</html>
