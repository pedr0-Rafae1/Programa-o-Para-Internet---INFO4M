<?php

$numero = 1;
$resultado = 0;

while ($numero <= 100){
    $resultado += $numero;
    $numero++;
}      
echo "soma total: " . $resultado;