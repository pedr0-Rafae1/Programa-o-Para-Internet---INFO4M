<?php

$candidatos = [
    ["numero" => 10, "nome" => "Ana", "votos" => 0],
    ["numero" => 20, "nome" => "Carlos", "votos" => 0],
    ["numero" => 30, "nome" => "Maria", "votos" => 0]
];

$votos = [10, 20, 10, 30, 30, 30, 20, 10, 50, 30, 20, 30, 50, 10];

$votosNulos = 0;
$votosValidos = 0;

foreach ($votos as $voto) {

    $encontrado = false;
    foreach ($candidatos as $indice => $candidato) {

        if ($voto == $candidato["numero"]) {

            $candidatos[$indice]["votos"]++;
            $votosValidos++;
            $encontrado = true;

            break;
        }
    }

    if (!$encontrado) {
        $votosNulos++;
    }
}

foreach ($candidatos as $candidato) {

    echo "Candidato: " . $candidato["nome"] . "\n";
    echo "Votos: " . $candidato["votos"] . "\n";

    $percentual = ($candidato["votos"] / $votosValidos) * 100;

    echo "Percentual: " .
         number_format($percentual, 2, ",", ".") . "%\n\n";
}

$maiorVotos = -1;
$vencedor = "";

foreach ($candidatos as $candidato) {

    if ($candidato["votos"] > $maiorVotos) {
        $maiorVotos = $candidato["votos"];
        $vencedor = $candidato["nome"];
    }
}

$totalGeral = count($votos);

echo "Votos nulos: $votosNulos\n";
echo "Votos válidos: $votosValidos\n";
echo "Total geral de votos: $totalGeral\n";
echo "Vencedor: $vencedor\n";

?>