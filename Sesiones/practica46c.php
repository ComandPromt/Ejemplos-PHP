<?php
session_start();
if (!isset($_SESSION['user']))
{
echo "no deberia ester aqui";
echo "<br>";
echo "<a href=practica46a.php'>Debe ir a la pagina de registro</a>"; 
}
else
{
echo "bienvenido/a la piaacute;gina especial"; 
}
?> 