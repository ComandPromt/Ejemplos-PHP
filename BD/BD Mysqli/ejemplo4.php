<?php
@$dwes = new mysqli('localhost', 'dwes', 'abc123', 'dwes');
$error = $dwes->connect_errno;
if ($error != null) {
     echo "<p>Error $error conectando a la base de datos: $dwes->connect_error</p>";
     exit();
}
print "<h2>2 unidades como array</h2>";
$resultado = $dwes->query('SELECT producto, unidades FROM stock WHERE unidades<2');
$stock = $resultado->fetch_array();  // Obtenemos el primer registro
$producto = $stock['producto'];  // O también $stock[0];
$unidades = $stock['unidades'];  // O también $stock[1];
print "<p>Producto $producto: $unidades unidades.</p>";
print "<h2>2 unidades como objeto</h2>";
$resultado->free();

$resultado = $dwes->query('SELECT producto, unidades FROM stock WHERE unidades<2');
$stock = $resultado->fetch_object();
while ($stock != null) {
        print "<p>Producto $stock->producto: $stock->unidades unidades.</p>";
        $stock = $resultado->fetch_object();
}
$resultado->free();
$dwes->close();
?>