<?php
$num1 = 10;
$num2 = 5;

$resultadoFuncion = resta($num1, $num2);
echo "probando función <i>resta</i>: 10 - 5 = ".$resultadoFuncion;

function resta($var1, $var2){
    $resultado = $var1 - $var2;
    return $resultado;

}
?>
