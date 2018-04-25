<?php
session_start();
if (!(isset($_SESSION['user'])))
{
if (!(isset($_POST['user'])))
{
echo "<a href='practica46a.php'>Debe ir a la pagina de registro</a>";
}

else
{
$user=$_POST['user'];
$password=$_POST['password'];
print $user;

if ($user=='usuario' and $password=='usuario')
{
$_SESSION['user']=$user;
header("Location:practica46b.php");
}
else
{
echo '<a href="practica46a.php">Usuario y/o contrase&ntilde;a incorrectos</a>';
}
}
}
else
{
echo '<a href="practica46c.php">Haqa clic aqui para ir a la zona especial</a>'; 
echo "<br>";
echo "<a href='practica46d.php'>Haga clic para cerrar la sesion</a>";
}
?> 
