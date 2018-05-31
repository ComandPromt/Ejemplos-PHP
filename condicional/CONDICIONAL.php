<?php

$importe=$_REQUEST['imp'];

echo "<h2>Calculo de descuentos</h2>";
if ($importe >=500){ echo "<p>Tienes un descuento</p>"; }

else { echo "No tienes el descuento";}

echo "<p>Fin de calculo</p>";

?>