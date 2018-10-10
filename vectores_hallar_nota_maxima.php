<?php

$notas = array();

//Genero aleatoriamente las notas (entre 0 y 10)

echo "Notas obtenidas por 8 alumnos/as: ";
for($i=0;$i<=7;$i++){
	$notas[$i]=mt_rand(0, 10);
	echo $notas[$i] . " ";
}

$primero = true;	//Variable flag

for($i=0;$i<=7;$i++){
	if( $primero==true )
	{
		$max=$notas[$i];
		$primero=false;
	}
	
	elseif( $notas[$i] > $max )
		$max=$notas[$i];		
}

echo "<br><br>La nota m&aacute;xima obtenida es: " . $max;

//var_dump($notas);
?>
