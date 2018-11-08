<?php 

$usuario="root";
$passwd="rootroot";
$host="localhost";
$bd="prueba";
$nombre="backup.sql"; 

$conecta = mysqli_connect($host, $usuario, $passwd,$bd) or die("Error de conexion"); 

if (!$conecta) { 
die('Error : ' . mysqli_error()); 
} 

$db_selected = mysqli_select_db($conecta,$bd); 

if (!$db_selected) { 
echo 'Fallo en la base de datos indicada',$db_selected,'<br/>'; 
die (mysql_error()); 

}
 
else { 

$texto = file_get_contents($nombre);
$sentencia = explode(";", $texto);
			
            for ($i = 0; $i < (count($sentencia) - 1); $i++) {
                $sentencia[$i] .= ";";
                mysqli_query($conexion, $sentencia[$i]);
  
                //    mysqli_query ($conexion,"INSERT INTO JUGADORES VALUES(0," . $_POST['adminuser'] . " " . $_POST['passuser'] . " );";
            }

            mysqli_close($conexion);
 
print "La importación a tenido exito!";

} 

?>
