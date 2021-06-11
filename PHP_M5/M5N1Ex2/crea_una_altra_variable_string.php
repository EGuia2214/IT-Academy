<?php

$string1 = "Estamos todos ";
$string2 = "locos";

$largoCadenas = strlen($string1) + strlen($string2);
echo "El tamaño de los dos strings es $largoCadenas<br><br>"; 

echo $string1.$string2; //concatenación de los dos strings
echo "<br><br>";

echo strrev($string2);
echo strrev($string1); //string reverse

?>