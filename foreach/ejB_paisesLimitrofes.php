<?php
/*
Crea un array con nombre paisLimitrofe donde los elementos del array serán cadenas de texto con los
países limítrofes (con frontera) con el tuyo. Por ejemplo si vivimos en Perú tenemos como países limítrofes
Ecuador, Colombia, Brasil, Bolivia y Chile.
   
    - Utilizando un bucle for, muestra por pantalla los países limítrofes.
    - Utilizando un bucle foreach, muestra por pantalla los países limítrofes.
*/

//Bucle 'for'
$paisLimitrofe = array("Ecuador", "Colombia", "Brasil", "Bolivia", "Chile");        

echo "<h4>Con 'for':</h4>";

echo "Existen " . count($paisLimitrofe) . " pa&iacute;s/es lim&iacute;trofe/s con Per&uacute;:";

echo "<ul>";

for($i=0; $i<count($paisLimitrofe); $i++) //Se comienza siempre por el elemento 0
	echo "<li>" . $paisLimitrofe[$i] . "</li>";

echo "</ul>";



//Bucle 'foreach'
$paisLimitrofe = array("Ecuador", "Colombia", "Brasil", "Bolivia", "Chile");        

echo "<h4>Con 'foreach':</h4>";

echo "Existen " . count($paisLimitrofe) . " pa&iacute;s/es lim&iacute;trofe/s con Per&uacute;:";

echo "<ul>";

foreach($paisLimitrofe as $pais)
	echo "<li>" . $pais . "</li>";

echo "</ul>";
?>