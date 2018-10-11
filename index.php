<!DOCTYPE  html>
<html>
	<head>
		<title>Mi tienda</title>
	</head>
	<body>
      <div id='login'>
        <?php
    session_start();
    include "usuarios.inc.php";
    include_once "funciones.php";

    if (isset($_POST['enviar']) && !empty($_POST['usuario']) && !empty($_POST['password'])) {

        $_POST['usuario'] = formatear_cadena($_POST['usuario']);
        $_POST['password'] = formatear_cadena($_POST['password']);

        if (comprobar_usuario($_POST['usuario'], $_POST['password'], $users)) {

            $_SESSION['usuario'] = $_POST['usuario'];

            if (isset($_POST['recordar']) && formatear_cadena($_SESSION['usuario']) != "") {
                print 'Implementar con cookies';
            }
            print '<h2>Bienvenido a la tienda ' . $_SESSION['usuario'] . '</h2>
                    <a href="tienda.php">Acceder a la tienda</a>';
        } else {
            ver_formulario();
        }
    } 
    else {
        ver_formulario();
    }
?>
        </div>
	</body>
</html>