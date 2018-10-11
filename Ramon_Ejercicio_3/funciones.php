<?php
function Calcular_Precio_Total_Producto(&$producto){
    $producto[]=$producto[1]*$producto[2];
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
?>