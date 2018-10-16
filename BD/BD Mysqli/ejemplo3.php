<?php
@$dwes = new mysqli('localhost', 'dwes', 'abc123', 'dwes'); // Quitar el punto
$error = $dwes->connect_errno;
if ($error != null) {
     echo "<p>Error $error conectando a la base de datos: $dwes->connect_error</p>";
     exit();
}
$dwes->autocommit(false);   // deshabilitamos el modo transaccional automático
$dwes->query('DELETE FROM stock WHERE unidades=0');  // Inicia una transacción
$dwes->query('UPDATE stock SET unidades=3 WHERE producto="STYLUSSX515W"');
$dwes->commit();  // Confirma los cambios
$dwes->close();