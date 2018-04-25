<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Ejercicio 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>

<?php
session_name("sesion1");
session_start();

include("biblioteca.php");


if(!isset($_SESSION["numero"])) //Se creó bien la sesión o ya estaba creada
{
	print "<h1>No ha iniciado sesión</h1>";
	print "<p class=\"aviso\">Introduzca el número primero.</p>\n";
}
else
{
	print "<h1>Resultado de las operaciones</h1>";
	
	//Supongamos que el usuario ha introducido el número:
	$numUsuario=$_SESSION["numero"];

	//Generar sin función
	$num_generados=0;

	do{
		$numero = rand(1, 25); 
	
		if($numero%2 != 0){
			$impares[] = $numero;
			$num_generados++;
		}
	}while($num_generados<10);


	print "Valores impares generados:<br>";
	for($i=0; $i<10; $i++){
		print $impares[$i] . "&nbsp;&nbsp;"; 
	}

	$contadorMayores = sonMayores( $impares, $numUsuario );	
	
	if( $contadorMayores > 0 ){
		print "<br><br>De los valores impares generados, hay " . $contadorMayores . " que son mayores que el número introducido (" . $numUsuario . ")";
		listarMayores( $impares, $numUsuario );
	}
	else
		print "<br><br>No hay ningún valor generado mayor que " . $numUsuario;
	
	
	$encontrado=buscarNumero( $impares, $numUsuario );
	
	$impar=$numUsuario%2;
	
	if( $encontrado==true )
		print "<br><br>El n&uacute;mero " . $numUsuario . " se encuentra al menos una vez en los valores generados";
	else if( $encontrado==false && $impar==1 )
		print "<br><br>El n&uacute;mero " . $numUsuario . " NO se encuentra en los valores generados";
	else if( $encontrado==false && $impar==0 )
		print "<br><br>El n&uacute;mero " . $numUsuario . " NO se encuentra en los valores generados por ser PAR";
	
	session_destroy();
	print "<p>Sesi&oacute;n cerrada.</p>\n";
}


?>
<p><a href="formulario.php">Volver a la primera página.</a></p>
</body>
</html>