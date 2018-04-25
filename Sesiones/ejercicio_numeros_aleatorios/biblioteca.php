<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
    : "";
    return $tmp;
}


function sonMayores( $valores, $numero )
{
	$mayores=0;
	
	for( $i=0; $i<count($valores); $i++ ){
		if($valores[$i]>$numero)
			$mayores++;
	}
	return $mayores;
}

function listarMayores( $valores, $numero )
{
	print "<br><br>Los valores generados mayores que " . $numero . " son: ";

	$i=0;
	
	while( $i<count($valores) )
	{
		if($valores[$i]>$numero)
			print $valores[$i] . "&nbsp;&nbsp;"; 
		$i++;
	}
}

function buscarNumero( $valores, $numero )
{
	$encontrado=false;
	
	for( $i=0; $i<count($valores); $i++ ){
		if($valores[$i]==$numero)
			$encontrado=true;
	}
	return $encontrado;
}
?>