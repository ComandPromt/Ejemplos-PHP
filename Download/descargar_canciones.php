<?php
session_start();
print '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
 
	<script>
	function enviar(seleccion)
	{
		if(seleccion>0)
		{
			document.forms[0].submit();
		}
	}
	</script>
</head>
<body>';

$_POST['artista']="SFDK";

if(isset($_POST["album"])){
	$_SESSION['artista']=$_POST['artista'];
	$_SESSION['album']=$_POST["album"];
	print '<a href="download.php">Descargar</a>';
}

?>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
	<select id="txt" name="album" onchange="enviar(this.value)">
		<option value="ALBUMES">Selecciona</option>
		<option value="1">SIEMPRE FUERTES</option>
		<option value="2">2</option>
	</select>
</form>
</body>
</html>