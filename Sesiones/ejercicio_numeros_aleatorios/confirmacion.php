<?php
session_name("sesion1");
session_start();

include("biblioteca.php");

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Ejercicio 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>

<?php
	print "<h1>Confirmaci&oacute;n de n&uacute;mero</h1>\n";

	$numero   = recoge("numero");
	$numeroOK = false;

	if ($numero == "") {
		print "    <p>No ha introducido un número.</p>\n";
	} else {
		$numeroOK = true;
	}

	if ($numeroOK) {
		$_SESSION["numero"] = $numero;
		
		if($numero<1 || $numero>25 )
			header("Location: formulario.php");
		else
		{
			print "<p>¿Confirma el número?</p>\n";
			print "<p>El número introducido es: <strong>$numero</strong></p>\n";
			print "<p><a href='operaciones.php'>Confirmar y ejecutar programa (se cerrará la sesi&oacute;n)</a></p>";
		}
	}
?>
	<p><a href="formulario.php">Volver a la primera página.</a></p>
  </body>
</html>