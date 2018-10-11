<?php
require_once "productos.inc.php";
require_once "funciones.php";

// Comprobar si el usuario ha iniciado sesión, sino mandarlo a inicio.php

?>
<!DOCTYPE  html>
<html>
	<head>
		<title>Mi tienda</title>
	</head>
	<body>
		<?php
session_start();

if (isset($_POST['salir'])) {
    session_destroy();
    header("Location: index.php");
} else {
    if (!isset($_SESSION['usuario'])) {
        header("Location: index.php");
    } else {

		if(isset($_POST['comprar']) && !empty(formatear_cadena($_POST['cantidad']))){

			if(!isset($_SESSION['compra'])){
				$_SESSION['compra']=array();

			}
			else{
				
				$_SESSION['compra'][]=$_POST['cantidad'];
				$_SESSION['compra'][]=$productos[$_POST['hid_producto']]['nombre'];
				$_SESSION['compra'][]=$productos[$_POST['hid_producto']]['precio']*$_POST['cantidad'];

			}
		}

        print '
			<h1>Bienvenido a la tienda</h1>
			<p>Bienvenido,' . $_SESSION['usuario'] . '</p>

			<div id="productos">';

        foreach ($productos as $producto) {
            bloqueProducto($producto);
        }
        print '
			</div>
			<div id="carrito">
			<!-- Listado de lo que lleva comprado -->
			<!-- Boton para borrar carrito -->
			</div>
			<div>
			<p>Ha iniciado sesión como: ' . $_SESSION['usuario'] . '</p>
			<form method="post" action="index.php"><input type="submit" name="salir" value="Salir" /></form>
			</div>';
	}

		if(isset($_SESSION['compra']) && count($_SESSION['compra'])>0){
			print '<table style="text-align:center;margin:auto;" border="1">
			<tr><th>Cantidad</th> <th>Articulo</th> <th>Precio</th></tr><tr>';



			for($x=0;$x<count($_SESSION['compra']);$x++){
				print '<td>'.$_SESSION['compra'][$x].'</td>';
				if ($x == 2 || $x > 2 && ($x+1) % 3 == 0) {
					echo '</tr><tr>';
				}
			}
		}
		print '</tr></table>';

}
?>
	</body>
</html>