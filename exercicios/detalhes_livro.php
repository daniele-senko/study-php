<?php

$livro = [
    "titulo" => "O Senhor dos Anéis",
    "autor" => "J.R.R. Tolkien",
    "ano" => 1954,
    "genero" => "Fantasia",
    "sinopse" => "Um hobbit chamado Frodo Bolseiro herda um anel mágico que deve ser destruído para salvar a Terra Média.",
];

echo "<h2>Detalhes do Livro</h2>";
echo "<p><strong>Título:</strong> {$livro['titulo']}</p>";
echo "<p><strong>Autor:</strong> {$livro['autor']}</p>";
echo "<p><strong>Ano:</strong> {$livro['ano']}</p>";
echo "<p><strong>Gênero:</strong> {$livro['genero']}</p>";
echo "<p><strong>Sinopse:</strong> {$livro['sinopse']}</p>";
echo "<hr>";