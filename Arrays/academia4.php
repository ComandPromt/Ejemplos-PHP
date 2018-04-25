<?php

/*
Queremos almacenar en una matriz el número de alumnos con el que cuenta una academia, ordenados en función del nivel y del idioma que se estudia.
Tendremos 3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4 columnas en las que figurarán los idiomas (0 = Inglés,
1 = Francés, 2 = Alemán y 3 = Ruso). Se pide realizar la declaración de la matriz y asignarle los valores indicados en la siguiente imagen a cada
elemento con una sintaxis que combine de la palabra array y el uso de índices que sean cadenas de caracteres (arrays asociativos), y mostrar por
pantalla los alumnos que existen en cada nivel e idioma.

Nota: por ejemplo, debe mostrarse por pantalla que en el nivel básico, idioma inglés, hay 1 alumno; en el nivel básico, idioma francés, hay 14 alumnos, etc.
*/

$academia = array(
				array("Inglés"=>1, "Francés"=>14, "Alemán"=>8, "Ruso"=>3),
				array("Inglés"=>6, "Francés"=>19, "Alemán"=>7, "Ruso"=>2),
				array("Inglés"=>3, "Francés"=>13, "Alemán"=>4, "Ruso"=>1)
);


for($i=0; $i<count($academia); $i++)
{
	if($i==0)
		$nivel = "B&aacute;sico";
	else if($i==1)
		$nivel = "Medio";
	
	else if($i==2)
		$nivel = "Perfeccionamiento";
	
	
	foreach($academia[$i] as $idioma => $valor)
	{
		echo "En el nivel " . $nivel . ", idioma " . $idioma . ", hay " . $valor . " alumno/s.<br /><br />";
	}
	
	echo "<br>"; //Introduzco un salto de línea más para diferenciar mejor los niveles al ser mostrados
}
?>