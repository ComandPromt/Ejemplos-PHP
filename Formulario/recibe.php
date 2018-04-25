<?php

function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$nombre   = recoge("nombre");

$chckbox=recoge("chckbox");
$sexo=recoge("sexo");

$direccion=recoge("direccion");
$codpost=recoge("codpost");
$envio=recoge("fenvio");


if ($nombre == "" || $sexo == "" || $direccion == ""||$codpost == "" ||$envio == "") {
    header("location:formulario.php");
    exit(); //Se puede quitar, pero se recomienda ponerlo
} 


strip_tags($nombre,$direccion);
	
str_replace('C','Calle',$direccion);
trim($nombre);
trim($direccion);

if ($chckbox=="on")
{
$recibefactura="Recibiste la factura";

}
else
{
		$recibefactura="No recibiste la factura";
}

print " <!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>$recibefactura</h1>

<table style='width:100%' border='3'>
  <tr>
    <th>Nombre</th>
	<th>Sexo</th>
    <th>Direccion</th> 
    <th>Codigo Postal</th>
	<th>Forma de envio</th>
  </tr>
  
  <tr>
    <td>$nombre</td>
	<th>$sexo</th>
    <td>$direccion</td>
    <td>$codpost</td>
	<td>$envio</td>
  </tr>
  
</table>";

print '
    <p><a href="formulario.php">Volver al formulario.</a></p>
  </body>
</html>';

?>