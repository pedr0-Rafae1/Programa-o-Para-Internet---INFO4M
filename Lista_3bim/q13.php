<?php

$numeros = [15, 8, 35, 42, 11, 27, 39];

$maior = $numeros[0];
$segundoMaior = null;

for ($i = 1; $i < count($numeros); $i++) {

    if ($numeros[$i] > $maior) {
        $segundoMaior = $maior;
        $maior = $numeros[$i];
    } elseif ($segundoMaior === null || $numeros[$i] > $segundoMaior) {
        $segundoMaior = $numeros[$i];
    }
}

echo "Maior número: $maior\n";
echo "Segundo maior: $segundoMaior\n";
?>