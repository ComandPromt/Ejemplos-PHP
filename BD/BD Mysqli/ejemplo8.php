<?php
$dwes = new PDO("mysql:host=localhost;dbname=dwes", "dwes", "abc123");
?> <h2>Fetch</h2> <?php
$resultado = $dwes->query("SELECT producto, unidades FROM stock");
while ($registro = $resultado->fetch()) {
    echo "Producto ".$registro['producto'].": ".$registro['unidades']."<br />";
}
?> <h2>Fetch OBJ</h2> <?php
$resultado = $dwes->query("SELECT producto, unidades FROM stock");
while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
    echo "Producto ".$registro->producto.": ".$registro->unidades."<br />";
}
?>
 <h2>Fetch</h2> <?php
$resultado = $dwes->query("SELECT producto, unidades FROM stock");
while ($registro = $resultado->fetch()) {
    echo "Producto ".$registro['producto'].": ".$registro['unidades']."<br />";
}
?>

