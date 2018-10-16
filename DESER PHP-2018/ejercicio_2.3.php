<?php
require_once("users.inc.php");
// Si el usuario aún no se ha autentificado, pedimos las credenciales
if (!isset($_SERVER['PHP_AUTH_USER'])){
	header('WWW-Authenticate: Basic realm="Contenido restringido"');
	header("HTTP/1.0 401 Unauthorized");
	exit;
}
// Vamos a guardar el usuario en una variable de sesión
// si no existe, aún no se ha autentificado
session_start();
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario']=null;
}
	
if ($_SESSION['usuario']==null){
    if (array_key_exists($_SERVER['PHP_AUTH_USER'], $users) && $users[$_SERVER['PHP_AUTH_USER']]== md5($_SERVER['PHP_AUTH_PW'])) {
        $_SESSION['usuario']=$_SERVER['PHP_AUTH_USER'];
    } else {
    	header('WWW-Authenticate: Basic realm="Contenido restringido"');
		header("HTTP/1.0 401 Unauthorized");
		echo "Debes introducir un usuario y contraseña!";
		exit;
	}
}
// Si ya está autentificado
else
{
// Comprobamos si se ha enviado el formulario de limpiar el registro
if(isset($_POST['limpiar']))
	$_SESSION['visita'] = array();
else
	$_SESSION['visita'][]=date('H:i:s d/m/Y');
}
?>
<!DOCTYPE html >
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 4 : Desarrollo de aplicaciones web con PHP -->
<!-- Ejemplo: Sesiones -->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>
Ejemplo Tema 3: Sesiones
</title>
</head>
<body>
<?php
		echo"Nombre de usuario: ".$_SERVER['PHP_AUTH_USER']."<br />";
		echo "Hash de la contraseña: ".md5($_SERVER['PHP_AUTH_PW'])."<br />";
		if (!isset($_SESSION['visita']))
			echo "Bienvenido. Esta es su primera visita.";
		else {
			date_default_timezone_set('Europe/Madrid');
			foreach ($_SESSION['visita'] as $v)
				echo "Su última visita fue: " . $v ."<br />";
?>
		<form id='vaciar'action='<?php echo $_SERVER['PHP_SELF'];?>' method='post'>
			<input type='submit' name='limpiar' value='Limpiar registro' />
		</form>
<?php
		}
?>
</body>
</html>
