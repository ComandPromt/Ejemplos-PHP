<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// Launch http://localhost/formulario.php?product=3DSNG
error_reporting(0);
$_GET["product"];

$conexion = mysqli_connect("localhost", "dwes", "abc123", "dwes");
$result = mysqli_query($conexion, "SELECT nombre_corto,descripcion,T.nombre AS 'Tienda',S.unidades FROM producto P JOIN stock S ON P.cod=S.producto JOIN tienda T ON S.tienda=T.cod
 WHERE P.cod='" . $_GET["product"] . "'");

$tienda = array();
$x = 0;
if ($fila = mysqli_fetch_array($result)) {
    print "<table style=\"text-align:center;\" border=1><tr><th>Nombre</th><th>Descripcion</th></tr>";
    while ($fila = mysqli_fetch_array($result)) {
        if ($x == 0) {
            print "<tr><td>" . $fila[0] . "</td><td>" . $fila[1] . "</td></td></tr>";
            $x=1;
        }
        $tienda[] = $fila[2];
        $tienda[] = $fila[3];
    }
    print "<tr><th>Tienda</th><th>Unidades</th></tr>";
    for ($x = 0; $x < count($tienda); $x++) {
        print "<tr><td>" . $tienda[$x] . "</td><td>" . $tienda[$x + 1] . "</td></td></tr>";
        $x++;
    }
    print "</table>";
} else {
    print "<h1 style=\"color:red;\">No existe el producto con la id " . $_GET["product"] . "</h1>";

}

?>
</body>
</html>