<?php 
date_default_timezone_set('Europe/Madrid');
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
	die (mysqli_error()); 
}
 
else { 
	if(file_exists($nombre)){
		$texto = file_get_contents($nombre);
		$sentencia = explode(";", $texto);
				
		for ($i = 0; $i < (count($sentencia) - 1); $i++) {
			$sentencia[$i] .= ";";
		
			mysqli_query($conexion, $sentencia[$i]);
			}
			
			mysqli_close($conexion);
			
		print '<h1>La importaci&oacute;n a tenido exito!</h1>';
	}
	else{
		print '<h1>El fichero '.$nombre.' no existe</h1>';
	}
}

?>