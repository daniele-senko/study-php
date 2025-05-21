<?php
$produtos = [
    "nome" => "Café",
    "preco" => 10.50,
    "quantidade" => 15
];

$desconto = 0.10;

$preco_original = $produtos["preco"];
$preco_com_desconto = $preco_original - ($preco_original * $desconto);

echo "<h2>Informações do Produto</h2>";
echo "<p><strong>Nome do Produto:</strong> " . $produtos["nome"] . "</p>";
echo "<p><strong>Preço Original:</strong> R$ " . number_format($preco_original, 2, ',', '.') . "</p>";
echo "<p><strong>Preço com Desconto:</strong> R$ " . number_format($preco_com_desconto, 2, ',', '.') . "</p>";
echo "<p><strong>Quantidade:</strong> " . $produtos["quantidade"] . "</p>";
echo "<p><strong>Total:</strong> R$ " . number_format($preco_com_desconto * $produtos["quantidade"], 2, ',', '.') . "</p>";