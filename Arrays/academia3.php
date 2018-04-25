<?php

/*
Queremos almacenar en una matriz el número de alumnos con el que cuenta una academia, ordenados en función del nivel y del idioma que se estudia.
Tendremos 3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4 columnas en las que figurarán los idiomas (0 = Inglés,
1 = Francés, 2 = Alemán y 3 = Ruso). Se pide realizar la declaración de la matriz y asignarle los valores indicados en la siguiente imagen a cada
elemento con una sintaxis que combine el uso de la palabra array y el uso de índices, y mostrar por pantalla los alumnos que existen en cada nivel e idioma.

Nota: por ejemplo, debe mostrarse por pantalla que en el nivel básico, idioma inglés, hay 1 alumno; en el nivel básico, idioma francés, hay 14 alumnos, etc.
*/

$academia = array(
				array(0=>1, 1=>14, 2=>8, 3=>3),
				array(0=>6, 1=>19, 2=>7, 3=>2),
				array(0=>3, 1=>13, 2=>4, 3=>1)
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