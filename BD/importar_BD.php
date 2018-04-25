<?php 

$usuario="root";
$passwd="rootroot";
$host="localhost";
$bd="prueba";
$nombre="backup.sql"; 

$conecta = mysql_connect($host, $usuario, $passwd); 

if (!$conecta) { 
die('Error : ' . mysql_error()); 
} 

$db_selected = mysql_select_db($bd, $conecta); 

if (!$db_selected) { 
echo 'Fallo en la base de datos indicada',$db_selected,'<br/>'; 
die (mysql_error()); 

}
 
else { 

$texto = file_get_contents($nombre);
$sentencia = explode(";", $texto);

for($i = 0; $i < (count($sentencia)-1); $i++){
$db_selected = mysql_query ("$sentencia[$i];");
 
}

print "La importación a tenido exito!";

} 

?>
