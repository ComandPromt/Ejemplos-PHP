<?php 
/**
 * Operaciones con Aleatorios. Arrays
 * 
 * @author    Juan Bosco Lara
 * @copyright 2017 Juan Bosco Lara
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
  <title>Operaciones con Aleatorios. Arrays.  
    Programacion web en PHP. </title>
</head>

<body>
<h1>Operaciones con Aleatorios. Arrays.</h1>

<?php
print "<p>Se generar&aacute;n 8 numeros al azar entre 1 y 250.</p>\n\n"; 


for($i=0; $i<8; $i++){
	$numero = mt_rand(1,250);
	print "<p>El numero generado es: $numero </p>";
	$array[$i]=$numero;
}

$suma=$pares=$impares=0;

for($i=0; $i<8; $i++){
	print "<p>El numero recuperado del array en la posicion $i es: $array[$i] </p>";
	$suma+=$array[$i];	

	if( $i==0 ) //En la primera iteración el mínimo y el máximo son iguales al primer elemento que se encuentre
		$min=$max=$array[$i]; 
	
	if($array[$i]<$min)
		$min=$array[$i];
	
	else if($array[$i]>$max)
		$max=$array[$i];
	
	if( $array[$i]%2==0 )
		$pares++;
	else	
		$impares++;
}
print "<p>La suma total es: $suma</p>\n\n";
$media=$suma/count($array);
print "<p>La media es: " . round($media, 2) . "</p>\n\n";

print "<p>Máximo: " . $max . "</p>\n\n";
print "<p>Mínimo: " . $min . "</p>\n\n";

print "<p>Máximo obtenido con funci&oacute;n max(): " . max($array) . "</p>\n\n";
print "<p>Mínimo obtenido con funci&oacute;n min(): " . min($array) . "</p>\n\n";

print "<p>Se han contabilizado " . $pares . " n&uacute;meros pares.</p>\n\n";
print "<p>Se han contabilizado " . $impares . " n&uacute;meros impares.</p>\n\n";

?>

<p>Actualice la p&aacute;gina para generar nuevos resultados.</p>

</body>
</html>