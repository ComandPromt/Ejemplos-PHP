<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Ejercicios PHP</title>
</head>

<body>

<h1>Números primos entre 1 y 20</h1>

<?php
print "<p>Se generarán los números primos entre 1 y 20.</p>\n\n"; 


//Generar los números primos entre 1 y 20

for($i=1; $i<=20; $i++) // $i es el dividendo
{
	$divisible_por_otro = false;
	
	for( $divisor=1; $divisor<=20; $divisor++)
	{		
		if( $divisible_por_otro==false && $i%$divisor==0 && $i!=$divisor && $divisor!=1) //$divisible_por_otro==false es opcional, para que no entre a comprobar cuando ya se sepa que es divisible por otro
			$divisible_por_otro = true;
	}
	
	if( $divisible_por_otro == false )
			echo "<br>El n&uacute;mero " . $i . " es primo.<br>\n";	
}
?>

</body>
</html>