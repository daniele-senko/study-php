<?php
$coresPrimarias = ["vermelho", "azul", "amarelo"];

$novaCor = "azul";

if (in_array(strtolower($novaCor), $coresPrimarias)) {
    echo "<p>A cor <strong>$novaCor</strong> é uma cor primária.</p>";
} else {
    echo "<p>A cor <strong>$novaCor</strong> <u>não</u> é uma cor primaria.</p>";
}