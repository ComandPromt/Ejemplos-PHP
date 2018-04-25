<?php
require("biblioteca1.php");


print "<h2>Llamada a sumaConMensaje()</h2>";
sumaConMensaje(3, 9, 12, 7, 15);

print "<h2>Llamada a suma()</h2>";
$resultado=suma( 3, 9, 12, 7, 15 );
print "El resultado de la suma es: " . $resultado;


$valores=array(3, 9, 12, 7, 15);
print "<h2>Llamada a sumaArray()</h2>";
$resultado=sumaArray( $valores );
print "El resultado de la suma es: " . $resultado;


print "<h2>Llamada a volumen()</h2>";
$resultado=volumen( 13, 42 );
print "El resultado de la suma es: " . round($resultado, 2);

?>