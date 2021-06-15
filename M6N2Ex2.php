<?php
//Ejemplo con parámetro (en este caso 50)
amagatall(50);

function amagatall($par){
    for ($c = 2; $c <= $par; $c=$c+2){
        echo $c;
        echo "<br />";
    }


}

?>