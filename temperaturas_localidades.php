<?php

$temp = array();

$temp["Osuna"] = 10;
$temp["La Luisiana"] = 18;
$temp["Ecija"] = 16;
$temp["Lantejuela"] = 22;
$temp["Fuentes"] = 16;

$acumulador=0;
$contador=0;
$n = 20;

foreach($temp as $localidad => $valor) {
	print "La temperatura media en " . $localidad . " es " . $valor."<br/>";
	
	$acumulador += $valor; //$acumulador = $acumulador + $valor

	if( $valor > $n  )
		$contador++;
}

$temp_media = $acumulador / count($temp);

print "<br>Temperatura media del a&ntilde;o: " . $temp_media;
print "<br>Número de localidad con temperatura mayor a $n grados: " . $contador;

unset($temp);

//Propuesta: Mostrar el número de localidades con temperatura mayor a una dada.
//echo "<br><pre>" . print_r($temp) . "</pre>";
//var_dump($temp);

?>
