<?php

$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];

$soma = 0;
$aprovados = 0;
$reprovados = 0;

$maior = $notas[0];
$menor = $notas[0];

for ($i = 0; $i < count($notas); $i++) {
    $soma += $notas[$i];

    if ($notas[$i] >= 6) {
        $aprovados++;
    } else {
        $reprovados++;
    }

    if ($notas[$i] > $maior) {
        $maior = $notas[$i];
    }

    if ($notas[$i] < $menor) {
        $menor = $notas[$i];
    }
}

$media = $soma / count($notas);

echo "Média da turma: $media\n";
echo "Alunos com nota maior ou igual a 6: $aprovados\n";
echo "Alunos com nota menor que 6: $reprovados\n";
echo "Maior nota: $maior\n";
echo "Menor nota: $menor\n";
?>