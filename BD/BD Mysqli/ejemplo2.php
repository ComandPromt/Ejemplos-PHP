<?php
@$dwes = new mysqli('localhost', 'dwes', 'abc123.', 'dwes'); // Quitar el punto
$error = $dwes->connect_errno;
if ($error != null) {
     echo "<p>Error $error conectando a la base de datos: $dwes->connect_error</p>";
     exit();
}
$dwes->close();