<?php


function xocolatas($cantidadXoco){
    $subtotalXocolata = $cantidadXoco * 1;
    return $subtotalXocolata;
}

function xiclets($cantidadXiclets){
    $subtotalXiclets = $cantidadXiclets * 0.5;
    return $subtotalXiclets;
}

function carmels($cantidadCarmels){
    $subtotalCarmels = $cantidadCarmels * 1.5;
    return $subtotalCarmels;
}

$totalCompra = xocolatas(5) + xiclets(10) + carmels(10);

echo $totalCompra;

?>