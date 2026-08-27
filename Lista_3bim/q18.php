<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $cargo;

    public function __construct($nome, $salario, $cargo)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }
}

$funcionarios = [
    new Funcionario("Ana", 1800, "Assistente"),
    new Funcionario("Carlos", 2500, "Vendedor"),
    new Funcionario("Maria", 4500, "Analista"),
    new Funcionario("João", 6000, "Gerente"),
    new Funcionario("Pedro", 7500, "Diretor")
];

$soma = 0;
$maiorSalario = null;
$menorSalario = null;

foreach ($funcionarios as $funcionario) {

    echo "Nome: {$funcionario->nome}\n";
    echo "Cargo: {$funcionario->cargo}\n";
    echo "Salário: R$ " .
         number_format($funcionario->salario, 2, ",", ".") .
         "\n\n";

    $soma += $funcionario->salario;

    if ($maiorSalario === null || $funcionario->salario > $maiorSalario) {
        $maiorSalario = $funcionario->salario;
    }

    if ($menorSalario === null || $funcionario->salario < $menorSalario) {
        $menorSalario = $funcionario->salario;
    }
}

$media = $soma / count($funcionarios);

echo "Média salarial: R$ " .
     number_format($media, 2, ",", ".") . "\n";

echo "Maior salário: R$ " .
     number_format($maiorSalario, 2, ",", ".") . "\n";

echo "Menor salário: R$ " .
     number_format($menorSalario, 2, ",", ".") . "\n\n";

$acimaMedia = 0;

foreach ($funcionarios as $funcionario) {
    if ($funcionario->salario > $media) {
        $acimaMedia++;
    }
}

echo "Funcionários acima da média: $acimaMedia\n\n";

foreach ($funcionarios as $funcionario) {

    $salarioAntigo = $funcionario->salario;

    if ($salarioAntigo < 2000) {
        $percentual = 0.15;
    } elseif ($salarioAntigo <= 5000) {
        $percentual = 0.10;
    } else {
        $percentual = 0.05;
    }

    $novoSalario = $salarioAntigo + ($salarioAntigo * $percentual);

    echo "{$funcionario->nome}:\n";
    echo "Salário antigo: R$ " .
         number_format($salarioAntigo, 2, ",", ".") . "\n";

    echo "Novo salário: R$ " .
         number_format($novoSalario, 2, ",", ".") . "\n\n";
}

?>