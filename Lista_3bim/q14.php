<?php

$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];

$frequencia = [];

foreach ($numeros as $numero) {

    if (isset($frequencia[$numero])) {
        $frequencia[$numero]++;
    } else {
        $frequencia[$numero] = 1;
    }
}

foreach ($frequencia as $numero => $quantidade) {
    echo "$numero aparece $quantidade vezes\n";
}
?>