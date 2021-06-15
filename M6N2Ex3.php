<?php
//Ejemplo con parámetro por defecto (10)
amagatall();

function amagatall($par=10){
    for ($c = 2; $c <= $par; $c=$c+2){
        echo $c;
        echo "<br />";
    }


}

?>