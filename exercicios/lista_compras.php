<?php 
$listaDeCompras = ["Arroz", "Feijão", "Macarrão", "Açúcar", "Sal"];

$tamanho = count($listaDeCompras);

echo "<h2>Lista de Compras</h2>";
echo "<ul>";

for ($i = 0; $i < $tamanho; $i++) {
    echo "<li>" . $listaDeCompras[$i] . "</li>";
}

echo "</ul>";
