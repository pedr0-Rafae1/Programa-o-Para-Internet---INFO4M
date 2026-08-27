<?php

class Produto
{
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($nome, $preco, $quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }
}

$produtos = [
    new Produto("Teclado", 120, 2),
    new Produto("Mouse", 60, 3),
    new Produto("Monitor", 900, 1),
    new Produto("Headset", 250, 2),
    new Produto("Cabo HDMI", 35, 4)
];

$total = 0;
$maiorGasto = 0;
$produtoMaiorGasto = "";

foreach ($produtos as $produto) {

    $subtotal = $produto->preco * $produto->quantidade;

    echo "Produto: {$produto->nome}\n";
    echo "Quantidade: {$produto->quantidade}\n";
    echo "Preço unitário: R$ " .
         number_format($produto->preco, 2, ",", ".") . "\n";
    echo "Subtotal: R$ " .
         number_format($subtotal, 2, ",", ".") . "\n\n";

    $total += $subtotal;

    if ($subtotal > $maiorGasto) {
        $maiorGasto = $subtotal;
        $produtoMaiorGasto = $produto->nome;
    }
}

if ($total <= 200) {
    $percentual = 0;
} elseif ($total <= 500) {
    $percentual = 0.05;
} elseif ($total <= 1000) {
    $percentual = 0.10;
} else {
    $percentual = 0.15;
}

$valorDesconto = $total * $percentual;
$valorFinal = $total - $valorDesconto;

echo "Compra sem desconto: R$ " .
     number_format($total, 2, ",", ".") . "\n";

echo "Percentual de desconto: " .
     ($percentual * 100) . "%\n";

echo "Valor economizado: R$ " .
     number_format($valorDesconto, 2, ",", ".") . "\n";

echo "Valor final: R$ " .
     number_format($valorFinal, 2, ",", ".") . "\n";

echo "Maior gasto: $produtoMaiorGasto - R$ " .
     number_format($maiorGasto, 2, ",", ".") . "\n";

?>