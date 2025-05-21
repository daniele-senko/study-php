<?php 

$notas = [7.5, 8.0, 6.5, 9.0];

$soma = $notas[0] + $notas[1] + $notas[2] + $notas[3];

$media = $soma / 4;

echo "<h2>Média das Notas</h2>";
echo "<ul>";

for ($i = 0; $i < count($notas); $i++) {
    echo "<li> Nota " . ($i + 1) . ": " . number_format($notas[$i], 1, ',', '.') . "</li>";
}

echo "</ul>";

echo "<p><strong>Média: </strong>" . number_format($media, 1, ',', '.') . "</p>";
echo "<p><strong>Resultado: </strong>" . ($media >= 7 ? "Aprovado" : "Reprovado") . "</p>";