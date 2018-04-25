<?php

function sumaConMensaje( $a, $b, $c, $d, $e )
{
	$suma = $a + $b + $c + $d + $e;
	print "El resultado de la suma de los valores introducidos es: " . $suma;
}


function suma( $a, $b, $c, $d, $e )
{
	$suma = $a + $b + $c + $d + $e;
	return $suma;
}


function sumaArray( $numeros )
{
	$suma=0;
	
	for($i=0; $i<5; $i++)	// O bien: for($i=0; $i<(count($numeros)); $i++)
		$suma += $numeros[$i];
	
	return $suma;
}


function volumen( $radio, $altura )
{
	$resultado = pi() * pow($radio, 2) * $altura;
	return $resultado;
}
?>