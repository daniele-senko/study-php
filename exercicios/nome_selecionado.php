<?php

$nomes = ["João", "Maria", "Pedro", "Ana", "Lucas", "Fernanda", "Carlos"];

$indiceAleatorio = array_rand($nomes);
$nomeSelecionado = $nomes[$indiceAleatorio];

echo "<h2>Nome Selecionado</h2>";
echo "<ul>";

for ($i = 0; $i < count($nomes); $i++) {
    echo "<li>$nomes[$i]</li>";
}
echo "</ul>";

echo "<p><strong>Nome Selecionado: </strong>" . $nomeSelecionado . "</p>";