<?php

class Rectangulo{
    var $x;
    var $y;

    function area(){
        return $this->x * $this->y;
    }
}

$rectangulo=new Rectangulo();
$rectangulo->x = 5;
$rectangulo->y = 8;

print "El area es: ".$rectangulo->area();
?>