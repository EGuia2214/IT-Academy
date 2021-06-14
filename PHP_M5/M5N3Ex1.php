<?php
$numerosPares = array (2, 4, 6, 8, 10); //array 5 elemntos integer
$numerosImpares = array (1, 3, 5, 7);//un elemento nuevo en 2do array

$paresImpares = array_merge ($numerosPares, $numerosImpares);


echo "Valores array \$paresImpares: <br>";
foreach ($paresImpares as $valor){
    echo $valor;
    echo "<br />";
}

?>