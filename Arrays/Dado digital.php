<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Dado digital.
    Ejercicios. Programacion web en PHP. </title>
  </head>

<body>
<h1>Dado digital</h1>

<?php 
$aleatorio1=mt_rand(1,6);

print "<p>El valor del dado del primer jugador es: </p>";
print "<p><span style=\"border: black 2px solid; padding: 10px; font-size: 300%\">" 
     . $aleatorio1 . "</span></p>\n";
     
 $aleatorio2=mt_rand(1,6);

print "<p>El valor del dado del segundo jugador es: </p>";
print "<p><span style=\"border: black 2px solid; padding: 10px; font-size: 300%\">" 
     . $aleatorio2 . "</span></p>\n";
 
   
$ganador="EMPATE";

if($aleatorio1>$aleatorio2){
	$ganador="Jugador1";
}
if($aleatorio1<$aleatorio2){
	$ganador="Jugador2";
}

print "<p>El ganador es: ".$ganador."</p>"; 
?>


<p>Actualice la pagina para jugar de nuevo.</p>
</body>
</html>

