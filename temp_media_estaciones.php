<?php

$temperatura["Primavera"] = 21;
$temperatura["Verano"] = 37;
$temperatura["Otonyo"] = 12;
$temperatura["Invierno"] = 7;

$acumulador = 0;

foreach($temperatura as $estacion => $valor) {
  print "La temperatura media en " . $estacion . " es " . $valor."<br/>";
  $acumulador += $valor;
}

$temp_media= $acumulador / count($temperatura);

print "<br>Temperatura media del a&ntilde;o: " . $temp_media;

?>
