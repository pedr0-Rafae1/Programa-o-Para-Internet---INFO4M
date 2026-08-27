<?php

$alunos = [
    ["nome" => "Ana", "nota1" => 8.0, "nota2" => 7.0],
    ["nome" => "Carlos", "nota1" => 5.0, "nota2" => 4.5],
    ["nome" => "Maria", "nota1" => 9.0, "nota2" => 9.5],
    ["nome" => "João", "nota1" => 6.0, "nota2" => 5.0],
    ["nome" => "Pedro", "nota1" => 3.0, "nota2" => 7.0]
];

$somaGeral = 0;
$maiorMedia = null;
$menorMedia = null;
$alunoMaior = "";
$alunoMenor = "";

foreach ($alunos as $aluno) {

    $media = ($aluno["nota1"] + $aluno["nota2"]) / 2;

    if ($media >= 6) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }

    echo "Nome: " . $aluno["nome"] . "\n";
    echo "Média: " . number_format($media, 2, ",", ".") . "\n";
    echo "Situação: $situacao\n";

    $somaGeral += $media;

    if ($maiorMedia === null || $media > $maiorMedia) {
        $maiorMedia = $media;
        $alunoMaior = $aluno["nome"];
    }

    if ($menorMedia === null || $media < $menorMedia) {
        $menorMedia = $media;
        $alunoMenor = $aluno["nome"];
    }
}

$mediaGeral = $somaGeral / count($alunos);

echo "Aluno com maior média: $alunoMaior ($maiorMedia)\n";
echo "Aluno com menor média: $alunoMenor ($menorMedia)\n";
echo "Média geral da turma: $mediaGeral\n";

?>