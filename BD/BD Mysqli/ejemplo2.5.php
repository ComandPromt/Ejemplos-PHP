<?php
@$dwes = new mysqli('localhost', 'dwes', 'abc123', 'dwes');
$error = $dwes->connect_errno;
if ($error == null) {
	$resultado = $dwes->query('DELETE FROM stock WHERE unidades=0');
	if ($resultado) {
		print "<p>Se han borrado $dwes->affected_rows registros.</p>";
	}
	$dwes->close();
}
?>
