<?php
date_default_timezone_set('Europe/Madrid');
function dia_es($dia_num) {
    switch ($dia_num) {
        case 1:
            $dia = "Lunes";
            break;
        case 2:
            $dia = "Lunes";
            break;
        case 3:
            $dia = "Lunes";
            break;
        case 4:
            $dia = "Lunes";
            break;
        case 5:
            $dia = "Lunes";
            break;
        case 6:
            $dia = "Lunes";
            break;
        case 7:
            $dia = "Lunes";
            break;
        default:
            $dia = "??";
            break;
    }
    return $dia;
}

function mes_es($mes_num) {
    switch ($mes_num) {
        case 1:
            $mes = "Enero";
            break;
        case 2:
            $mes = "Febrero";
            break;
        case 3:
            $mes = "Marzo";
            break;
        case 4:
            $mes = "Abril";
            break;
        case 5:
            $mes = "Mayo";
            break;
        case 6:
            $mes = "Junio";
            break;
        case 7:
            $mes = "Julio";
            break;
        case 8:
            $mes = "Agosto";
            break;
        case 9:
            $mes = "Septiembre";
            break;
        case 10:
            $mes = "Octubre";
            break;
        case 11:
            $mes = "Noviembre";
            break;
        case 12:
            $mes = "Diciembre";
            break;
        default:
            $mes = "??";
            break;
    }
    return $mes;
}
function fecha_es() {
    return dia_es(date('N')) . ", " . date('d'). ' de ' . mes_es(date('m')). ' de ' . date('Y');
}
echo fecha_es();
?>
