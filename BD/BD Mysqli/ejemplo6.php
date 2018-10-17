<?php
$dwes = new mysqli('localhost', 'dwes', 'abc123', 'dwes');
$consulta = $dwes->stmt_init();
$consulta->prepare('SELECT producto, unidades FROM stock WHERE unidades<2');
$consulta->execute();
$consulta->bind_result($producto, $unidades);
while($consulta->fetch()) {
        print "<p>Producto $producto: $unidades unidades.</p>";
}
$consulta->close();
$dwes->close();
?>