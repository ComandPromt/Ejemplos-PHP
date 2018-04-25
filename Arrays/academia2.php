<?php

/*
Queremos almacenar en una matriz el número de alumnos con el que cuenta una academia, ordenados en función del nivel y del idioma que se estudia.
Tendremos 3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4 columnas en las que figurarán los idiomas (0 = Inglés,
1 = Francés, 2 = Alemán y 3 = Ruso). Se pide realizar la declaración de la matriz y asignarle los valores indicados en la siguiente imagen a cada
elemento con una sintaxis basada en el uso anidado de la palabra array, y mostrar por pantalla los alumnos que existen en cada nivel e idioma.

Nota: por ejemplo, debe mostrarse por pantalla que en el nivel básico, idioma inglés, hay 1 alumno; en el nivel básico, idioma francés, hay 14 alumnos, etc.
*/

$academia = array(
				array(1, 14, 8, 3),
				array(6, 19, 7, 2),
				array(3, 13, 14, 1)
);


for($i=0; $i<count($academia); $i++)
{
	if($i==0)
		$nivel = "B&aacute;sico";
	else if($i==1)
		$nivel = "Medio";
	
	else if($i==2)
		$nivel = "Perfeccionamiento";
	
	
	for($j=0; $j<count($academia[$i]); $j++)
	{
		if($j==0)
			$idioma = "Ingl&eacute;s";
		else if($j==1)
			$idioma = "Franc&eacute;s";
		
		else if($j==2)
			$idioma = "Alem&aacute;n";
		
		else if($j==3)
			$idioma = "Ruso";
			
		
		echo "En el nivel " . $nivel . ", idioma " . $idioma . ", hay " . $academia[$i][$j] . " alumno/s.<br /><br />";
	}
	echo "<br>"; //Introduzco un salto de línea más para diferenciar mejor los niveles al ser mostrados
}
?>