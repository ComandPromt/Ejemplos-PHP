<?php

/*
Queremos almacenar en una matriz el número de alumnos con el que cuenta una academia, ordenados en función del nivel y del idioma que se estudia.
Tendremos 3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4 columnas en las que figurarán los idiomas (0 = Inglés,
1 = Francés, 2 = Alemán y 3 = Ruso). Se pide realizar la declaración de la matriz y asignarle los valores indicados en la siguiente imagen a cada
elemento con una sintaxis que que utilice únicamente índices que sean cadenas de caracteres (arrays asociativos), y mostrar por pantalla los alumnos
que existen en cada nivel e idioma.

Nota: por ejemplo, debe mostrarse por pantalla que en el nivel básico, idioma inglés, hay 1 alumno; en el nivel básico, idioma francés, hay 14 alumnos, etc.
*/

$academia["Básico"]["Inglés"] = 1;
$academia["Básico"]["Francés"] = 14;
$academia["Básico"]["Alemán"] = 8;
$academia["Básico"]["Ruso"] = 3;
$academia["Medio"]["Inglés"] = 6;
$academia["Medio"]["Francés"] = 19;
$academia["Medio"]["Alemán"] = 7;
$academia["Medio"]["Ruso"] = 2;
$academia["Perfeccionamiento"]["Inglés"] = 3;
$academia["Perfeccionamiento"]["Francés"] = 13;
$academia["Perfeccionamiento"]["Alemán"] = 4;
$academia["Perfeccionamiento"]["Ruso"] = 1;

foreach($academia as $nivel=>$idioma)
{	
	foreach($academia[$nivel] as $idioma => $valor)
	{
		echo "En el nivel " . $nivel . ", idioma " . $idioma . ", hay " . $valor . " alumno/s.<br /><br />";
	}
	
	echo "<br>"; //Introduzco un salto de línea más para diferenciar mejor los niveles al ser mostrados	
}
?>