<?php

$nome = 'alessandro'; // Alessandro
$sobrenome = 'FEITOSA'; // Feitoza

$nome2 = 'chiquim da silva'; // Chiquim Da Silva

echo "Nome: " . ucfirst($nome) . PHP_EOL; // ucfirst=> upperCaseFirst (caixa alta ou maiusculo - apenas a primeira letra para Maiusculo)

echo "Sobrenome: " . ucfirst(strtolower($sobrenome)) . PHP_EOL; // strtolower=> string to LOWER CASE, string para minusculo

echo "Nome2: " . ucwords($nome2) . PHP_EOL; // Pega a letra de cada palavra e coloca em maiusculo