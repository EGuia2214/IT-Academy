<?php
$numeroNatural =20;

cribadEratostenes($numeroNatural);

function cribadEratostenes($num){
    $criba = array();
//    $criba[0] = false;
//    $criba[1] = false;
    for ($n=2; $n<=$num; $n++){
        $criba[$n] = true;
    }
   for ($i=2; $i<=$num; $i++){
            if($criba[$i]){
                for($n= $i * $i; $n<=$num; $n += $i){
                    $criba[$n]=false;
                }
            }
    }

    foreach ($criba as $index => $valor){
        if ($criba[$index]){
            echo $index."<br>";
        }
    }
     

}

//Entrada: Un número natural n
//Salida: El conjunto de números primos anteriores a n (incluyendo n)

//Escriba todos los números naturales desde 2 hasta n
//Para i desde 2 hasta -SQRT n- haga lo siguiente:
//Si i no ha sido marcado entonces:
//Para j desde i hasta n/i haga lo siguiente:
//Ponga una marca en i x j
//El resultado es: Todos los números sin marcar

?>
