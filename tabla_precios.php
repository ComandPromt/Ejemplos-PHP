<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
print '<h2 style="text-align:center;">LISTA DE LA COMPRA PARA EL '.date('d')."/".date('m')."/".date('Y').'</h2>';
?>
<br/>
<table style="text-align:center;margin:auto;" border="1"><tr>
<th>Nombre</th>
<th>Cantidad</th>
<th>Precio</th>
<th>Total</th>
</tr>
<?php
	
function Calcular_Precio_Total_Producto($precio,$cantidad){
    return $precio*$cantidad;
}

function Calcular_Precio_Total_Compra(array $nombres){
    $precios=array();
    for($x=0;$x<count($nombres);$x++){
        if($x==3 || $x>3 && ($x+1)%4==0){
            $precios[]=$nombres[$x];
        }
    }
    
    return array_sum($precios);
}

$nombres = array();

    if (isset($_POST['enviar'])) {
        if (isset($_POST['nombre'])&& isset($_POST['cantidad'])&& isset($_POST['precio'])&& isset($_POST['nombres'])) {
           $nombres = $_POST['nombres'];
        }
		$_POST['nombre']=trim($_POST['nombre']);
        if(!empty($_POST['nombre'])&& !empty($_POST['precio'])&&
        !empty($_POST['cantidad']) && $_POST['cantidad']>0
        && $_POST['precio']>0 && !is_integer($_POST['nombre'])){
            $nombres[] = $_POST['nombre'];
            $nombres[] = $_POST['cantidad'];
            $nombres[] = $_POST['precio'];
            $nombres[] =Calcular_Precio_Total_Producto($_POST['precio'],$_POST['cantidad']);
        }
    }

    if (!empty($nombres)) {

        echo '<tr>';
	    
	foreach($nombres as $indice=>$valor){
            echo '<td>'.$valor.'</td>';
            if($indice==3 || $indice>3 && ($indice+1)%4==0 ){
		echo '</tr><tr>';
	    }
        }
           /* Otra solucion
	   	for($x=0;$x<count($nombres);$x++){
                	echo '<td>' . $nombres[$x] . '</td>';
            		if($x==3 || $x>3 && ($x+1)%4==0 )
            		{echo '</tr><tr>';}
            	}*/
 
        echo '</tr>';
    }
echo '</table>';

if(Calcular_Precio_Total_Compra($nombres)>0)
{
    print '<h2 style="text-align:center;">Total: '.Calcular_Precio_Total_Compra($nombres).'€</h2>';
}
?>
<br/>
<form style="margin:auto;text-align:center;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Nombre <input type="text" name="nombre" /><br/><br/>
Cantidad <input type="number" name="cantidad" /><br/><br/>
Precio <input type="number" name="precio" />
<?php
    if (!empty($nombres)) {
        foreach($nombres as $n) {
            echo '<input type="hidden" name="nombres[]" value="' . $n . '" />';
        }
    }
?>
<br/><br/><input type="submit" name="enviar" value="enviar" />
</form>
</body>
</html>
