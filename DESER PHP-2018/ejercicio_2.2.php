<?php
require_once("users.inc.php");
// Si el usuario aún no se ha autentificado, pedimos las credenciales
if (!isset($_SERVER['PHP_AUTH_USER'])){
	header('WWW-Authenticate: Basic realm="Contenido restringido"');
	header("HTTP/1.0 401 Unauthorized");
	exit;
}

if (!array_key_exists($_SERVER['PHP_AUTH_USER'], $users) || $users[$_SERVER['PHP_AUTH_USER']]!= md5($_SERVER['PHP_AUTH_PW'])) {
  	header('WWW-Authenticate: Basic realm="Contenido restringido"');
	header("HTTP/1.0 401 Unauthorized");
	echo "Debes introducir un usuario y contraseña!";
	exit;
}
?>
<!DOCTYPE html >
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 4 : Desarrollo de aplicaciones web con PHP -->
<!-- Ejemplo: Cookies -->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>
Ejemplo Tema 3: Sesiones
</title>
</head>
<body>
<?php
		echo "Nombre de usuario: ".$_SERVER['PHP_AUTH_USER']."<br />";
		echo "Hash de la contraseña: ".md5($_SERVER['PHP_AUTH_PW'])."<br />";
		if (!isset($_COOKIE['ultimo_login']))
			echo "Bienvenido. Esta es su primera visita.";
		else {
			echo "Su última visita fue: " . $_COOKIE['ultimo_login'] ."<br />";
        }
        setcookie("ultimo_login",date("H:i:s d/m/Y"),time()+3600);
?>
</body>
</html>
