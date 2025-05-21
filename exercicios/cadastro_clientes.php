<?php

$clientes = [
    [
        "nome" => "João",
        "email" => "joao@email.com"
    ],
    [
        "nome" => "Maria Elizia",
        "email" => "maria.eli@gmail.com"
    ],
    [
        "nome" => "Pedro",
        "email" => "pedro@email.com"
    ],
];

echo "<h2>Cadastro de Clientes</h2>";
echo "<hr>";

foreach ($clientes as $cliente) {
    echo "<p><strong>Nome:</strong> " . $cliente["nome"] . "</p>";
    echo "<p><strong>Email:</strong> " . $cliente["email"] . "</p>";
    echo "<hr>";
}