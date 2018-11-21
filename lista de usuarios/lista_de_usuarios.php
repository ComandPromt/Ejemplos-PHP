<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<h1>Lista de usuarios</h1>
<ul>

<?php
$conexion = mysqli_connect('localhost', 'dwes', 'abc123', "dwes");
mysqli_set_charset($conexion,"utf8");
$consulta = mysqli_query($conexion, "SELECT nombre,apellidos FROM usuarios");
     
     while ($fila = mysqli_fetch_row($consulta)) {
    print '<li>'.$fila[0]." ".$fila[1].'</li>'; 
    }
?>

</ul>

<h2>Añadir</h2>
<?php
if(isset($_POST['btnAnadir'])){
    $nombre=trim($_POST['txtNombre']);
    $apellidos=trim($_POST['txtApellidos']);
    $consulta=mysqli_query($conexion, "SELECT MAX(id)+1 FROM usuarios");
    $fila = mysqli_fetch_row($consulta);

    mysqli_query($conexion, 'INSERT INTO usuarios VALUES('.$fila[0].",'".$_POST['txtNombre']."','".
    $_POST['txtApellidos']."')");
    header('Location:'. $_SERVER['PHP_SELF']);  
}

if (isset($_POST['btnBorrar'])) {
    mysqli_query($conexion, "DELETE FROM usuarios WHERE nombre='".$_POST['selPersona']."'");
    header('Location:'. $_SERVER['PHP_SELF']);  
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  Nombre:<br>
  <input type="text" name="txtNombre">
  <br>
  Apellidos:<br>
  <input type="text" name="txtApellidos">
  <br><br>
  <input type="submit" value="Añadir" name="btnAnadir">
</form> 

<h2>Borrar</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  Seleccione:<br>
  <select name="selPersona">
      <?php
  $consulta = mysqli_query($conexion, "SELECT nombre FROM usuarios");
     
     while ($fila = mysqli_fetch_row($consulta)) {
    print '<option>'.$fila[0]." ".$fila[1].'</option>'; 
    }
    ?>
  </select>
  <input type="submit" value="Borrar" name="btnBorrar">
</form>
</body>
</html>