<?php
/*
Escribe y ejecuta el siguiente código y responde a las siguientes preguntas:
*/

$equipo = array(portero=>'Oblak', defensa=>'Filipe Luis', medio=>'Koke', delantero=>'Griezmann');        

foreach($equipo as $posicion=>$jugador)
	echo "El " . $posicion . " es " . $jugador . "<br>";

/*
¿ $equipo es una variable normal, un array tradicional ó un array asociativo?
Respuesta: Es un array asociativo.

¿portero es un índice de un array, un contenido de un elemento de un array o un contenido de una variable simple?
Respuesta: Es un índice de un array.

¿Al ejecutar el código obtienes un resultado por pantalla u obtienes un error? ¿Qué es lo que hace el código?
Respuesta: No se obtienen errores, pero sí "notices" debido a que el intérprete advierte que los índices los considera
como cadenas de caracteres, pero el programador podría estar intentando considerarlos como constantes (que como recordamos
no llevan el símbolo $). Con entrecomillar cada uno de los índices desaparecerían la notificaciones.
*/
?>