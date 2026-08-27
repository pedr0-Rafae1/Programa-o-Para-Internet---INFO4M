<?php

$times = [
    ["nome" => "Time A", "vitorias" => 5, "empates" => 2, "derrotas" => 1],
    ["nome" => "Time B", "vitorias" => 4, "empates" => 4, "derrotas" => 0],
    ["nome" => "Time C", "vitorias" => 6, "empates" => 0, "derrotas" => 2],
    ["nome" => "Time D", "vitorias" => 3, "empates" => 3, "derrotas" => 2]
];

$maiorPontos = null;
$menorPontos = null;
$timeMaisPontos = "";
$timeMenosPontos = "";

$maisVitorias = -1;
$timeMaisVitorias = "";

$totalPontos = 0;

foreach ($times as $time) {

    $pontos = ($time["vitorias"] * 3) + $time["empates"];

    echo $time["nome"] . " - $pontos pontos\n";

    $totalPontos += $pontos;

    if (
        $maiorPontos === null ||
        $pontos > $maiorPontos ||
        ($pontos == $maiorPontos && $time["vitorias"] > $maisVitorias)
    ) {
        $maiorPontos = $pontos;
        $timeMaisPontos = $time["nome"];
        $maisVitorias = $time["vitorias"];
    }

    if ($menorPontos === null || $pontos < $menorPontos) {
        $menorPontos = $pontos;
        $timeMenosPontos = $time["nome"];
    }

    if ($time["vitorias"] > $maisVitorias) {
        $maisVitorias = $time["vitorias"];
        $timeMaisVitorias = $time["nome"];
    }
}

echo "\n";
echo "Time com mais pontos: $timeMaisPontos ($maiorPontos)\n";
echo "Time com menos pontos: $timeMenosPontos ($menorPontos)\n";
echo "Time com mais vitórias: $timeMaisVitorias ($maisVitorias vitórias)\n";
echo "Total de pontos: $totalPontos\n";

?>