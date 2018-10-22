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
//error_reporting(0);
$_GET["product"];

$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'dwes', 'abc123');
$sentencia = $dwes->prepare("SELECT nombre_corto,descripcion,T.nombre AS 'Tienda',S.unidades FROM producto P JOIN stock S ON P.cod=S.producto JOIN tienda T ON S.tienda=T.cod
WHERE P.cod=?");

$sentencia->bindParam(1, $_GET["product"]);


$sentencia->execute();


$tienda = array();

$x=0;
    print "<table style=\"text-align:center;\" border=1><tr><th>Nombre</th><th>Descripcion</th></tr>";
    while ($producto = $sentencia->fetch()) {
        if ($x == 0) {
            print "<tr><td>" . $producto[0] . "</td><td>" . $producto[1] . "</td></td></tr>";
            $x=1;
        }
        $tienda[] = $producto[2];
        $tienda[] = $producto[3];
    }
    print "<tr><th>Tienda</th><th>Unidades</th></tr>";
    for ($x = 0; $x < count($tienda); $x++) {
        print "<tr><td>" . $tienda[$x] . "</td><td>" . $tienda[$x + 1] . "</td></td></tr>";
        $x++;
    }
    print "</table>";


?>
</body>
</html>