<?php
$miEdad = 51;
$duda = parell_o_imparell ($miEdad);
echo $duda;

function parell_o_imparell($v){
    if ($v%2==0){
        $rta = "Mi edad es par";
       }else{
        $rta = "Mi edad es impar";
       }

    return $rta;
}


?>