<?php
session_name("sesion1");
session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Ejercicio 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>
    <h1>Formulario</h1>

<?php


if(isset( $_SESSION["numero"]) && $_SESSION["numero"]>=1 && $_SESSION["numero"]<=25 ) {
    print "    <p>Último número válido (entre 1 y 25) que no confirmó: <strong>$_SESSION[numero]</strong></p>\n";
    print "\n";
}


?>
    <form action="confirmacion.php" method="get">
      <p>Escriba un número entero entre 1 y 25:<input type="text" name="numero" size="20" maxlength="20" />
		<?php
		
		if(isset($_SESSION["numero"]))
		{
			if( $_SESSION["numero"]<1 || $_SESSION["numero"]>25 )
				print "Debes introducir un número entre 1 y 25";
		}	
		
		?>
	</p>
    <p>
        <input type="submit" value="Siguiente" />
        <input type="reset" value="Borrar" />
    </p>
    </form>
  </body>
</html>
