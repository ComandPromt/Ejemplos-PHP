<?php 
/**
 * Números primos entre 1 y 20
 * 
 * @author    Juan Bosco Lara
 * @copyright Juan Bosco Lara
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2016-02-08
 * @link      http://ciclos.iesluisvelez.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
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