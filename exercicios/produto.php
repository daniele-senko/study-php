<?php 

$produto = "Café";
$preco = 10.50;
$quantidade = 3;

$total = $preco * $quantidade;

echo "<h2>Produto</h2>";
echo "<p><strong>Nome do Produto:</strong> $produto</p>";
echo "<p><strong>Preço Unitário:</strong> R$ " . number_format($preco, 2, ',', '.') . "</p>";
echo "<p><strong>Quantidade:</strong> $quantidade</p>";
echo "<p><strong>Total:</strong> R$ " . number_format($total, 2, ',', '.') . "</p>";