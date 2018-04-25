<?php 
/**
 * Aleatorios hasta encontrar el primer múltiplo de 11
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

<?php
print "<h1>Generar aleatorios entre 1 y 200 hasta encontrar el primer múltiplo de 11</h1>";


$seguir=true;
$contador_generados=0;

do{
	$numero = mt_rand(1,200);
	$contador_generados++;
	
	print "<p>N&uacute;mero generado: $numero </p>";
	
	if($numero%11==0){
		print "<p>¡¡M&uacuteltiplo encontrado!!</p>";
		print "<p>Ha sido necesario generar " . $contador_generados++ . " n&uacute;meros aleatorios.</p>";	
		print "<p>Fin del programa.</p>";	
		$seguir=false;
	}
}while($seguir)

?>

<p align="center">Actualice la p&aacute;gina para generar nuevos resultados.</p>


</body>
</html>